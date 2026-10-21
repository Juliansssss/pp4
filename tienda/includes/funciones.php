
<?php

function generarTablaProductos($productos)
{
    echo '<table class="table table-bordered table-striped">';
    echo '<thead class="table-success">';
    echo '<tr>';
    echo '<th>Producto</th>';
    echo '<th>Precio</th>';
    echo '<th>Disponibilidad</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($productos as $producto) {

        $nombreProducto = ucfirst($producto["nombre"]);
        $precio = number_format($producto["precio"], 2, ",", ".") . " €";

        $disponibilidad = $producto["disponible"] ? "En stock" : "Agotado";

        $clase = $producto["disponible"] ? "" : "table-danger";

        echo '<tr class="' . $clase . '">';
        echo '<td>' . htmlspecialchars($nombreProducto) . '</td>';
        echo '<td>' . $precio . '</td>';
        echo '<td>' . $disponibilidad . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}


function muestraInfoContacto($nombre, $telefono, $foto)
{
    echo '<div class="card mt-4 mb-4">';
    echo '<div class="card-header bg-success text-white">';
    echo '<h4>Información de contacto</h4>';
    echo '</div>';

    echo '<div class="card-body">';

    echo '<p><strong>Nombre:</strong> ' . htmlspecialchars($nombre) . '</p>';
    echo '<p><strong>Teléfono:</strong> ' . htmlspecialchars($telefono) . '</p>';

    if ($foto != "") {
        echo '<img src="' . htmlspecialchars($foto) . '" 
              alt="Foto de perfil" 
              class="rounded-circle mb-3" 
              style="width: 100px; height: 100px; object-fit: cover;">';
    }

    echo '</div>';
    echo '</div>';
}

?>
