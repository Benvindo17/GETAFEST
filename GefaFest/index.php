<!DOCTYPE html>
<html lang="es">
<header>
    <meta charset="UTF-8">
    <title> GETAFEST </title>
    <link rel="stylesheet" href="estilos.css">
</header>
<body>
    <div class="card">
        <h2> COMPRA TUS ENTRADAS </h2>
        <form method="post" enctype="multipart/form-data" action="procesar.php">
            <h3> Datos personales </h3>
            <div class="form-group">
                <label for="nombre"> Nombre: </label>
                <input type="text" name="nombre" required placeholder="EJ: Pedro">
            </div>
            <div class="form-group">
                <label for="correo"> Correo electronico: </label>
                <input type="email" name="correo" required placeholder="nombre@correo.cosa">
            </div>
            <div class="form-group">
                <label for="edad"> Edad: </label>
                <input type="number" name="edad" required placeholder="18">
            </div>
            <h3> Tipo de entrada </h3>
            <div class="form-group">
                <label for="entradas"> Elige la entrada: </label>
                <label><input type="radio" name="entradas" value="General"> General </label>
                <label><input type="radio" name="entradas" value="VIP"> VIP con acceso a Backstage </label>
                <label><input type="radio" name="entradas" value="SuperVIP"> Super VIP + Camping </label>
            </div>
            <div class="form-group">
                <label for="entradas"> Dias de asistencia: </label>
                <label><input type="checkbox" name="dias[]" value="viernes"> Viernes (+10€) </label>
                <label><input type="checkbox" name="dias[]" value="sabado"> Sábado (+10€) </label>
                <label><input type="checkbox" name="dias[]" value="domingo"> Domingo (+10€) </label>
            </div>
            <div class="form-group">
                <label for="pago"> Elige el método de pago</label>
                <select name="pago" id="pago">
                    <option value="tarjetaCredito"> Tarjeta de crédito </option>
                    <option value="bizum"> Bizum </option>
                    <option value="paypal"> PayPal </option>
                </select>
            </div>
            <div class="form-group">
                <label for="foto"> Selecciona una foto: </label>
                <input type="file" name="foto" id="foto" />
            </div>
            <div class="form-group">
                <label for="comentarios"> Comentarios: </label>
                <textarea id="comentarios" name="comentarios" rows="6"></textarea>
            </div>
            <input type="submit" name="confirmar" class="btn" value="Confirmar">
        </form>
    </div>
</body>
</html>
