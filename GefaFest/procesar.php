<?php
echo "<link rel='stylesheet' href='estilos.css'>";

$activo = false;
if (isset($_POST["confirmar"])) {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $edad = $_POST["edad"];
    $entradas = $_POST["entradas"];
    $dias = $_POST["dias"];
    $pago = $_POST["pago"];
    $comentarios = $_POST["comentarios"];
    $activo = true;
}

$foto = "";
if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] === 0) {
    $nombreFoto = $_FILES["foto"]["name"];
    $temporal   = $_FILES["foto"]["tmp_name"];
    $foto = "images/" . $nombreFoto;
    move_uploaded_file($temporal, $foto);
}

if ($activo) {
    if ($entradas == "General") {
        $precio = 50;
    } elseif ($entradas == "VIP") {
        $precio = 100;
    } else {
        $precio = 150;
    }
    $extraDias = count($dias) * 10;
    $precioTotal = $precio + $extraDias;
}

?>

<?php if ($activo) { ?>

<?php if ($edad < 18) { ?>
    <div class="card profile-card">
        <?php echo "Eres menor de edad, no puedes comprar entrada" ?>
    </div>
    <?php } else { ?>
    <div class="card profile-card">
        <h1><strong> TU ENTRADA </strong></h1>
        <?php if ($foto != "") { ?>
            <img src="<?php echo $foto ?>" alt="foto" width="150">
        <?php } ?>
        <h3> <?php echo $nombre ?> </h3>
        <h3> Edad: <?php echo $edad ?></h3>
        <h3> Correo: <?php echo $correo ?> </h3>
        <h3> Tu entrada es <?php echo $entradas ?> </h3>
        <p> Días de asistencia: </p>
        <?php if ($dias = $_POST["dias"]) {
            echo "<ul>";
            foreach ($dias as $dia) {
                echo "<li> $dia </li>";
            }
            echo "</ul>";
        } ?>
        <h3> Precio total: <?php echo $precioTotal ?> €</h3>
        <h3> Método de pago: <?php echo $pago ?> </h3>
        <h3> Comentario: </h3>
        <p> <?php echo $comentarios ?> </p>
        </div>
    <?php } ?>
<?php } ?>
