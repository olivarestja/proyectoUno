<html>
    <head>
<title>Registrar usuario</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">

    </head>
    
    <body>
        <form method="post">
            <h1> ¡ Suscribete</h1>
            <input type="text" name="ci" placeholder="CI">
            <input type="text" name="nombre" placeholder="Nombre completo">
            <input type="text" name="ap" placeholder="Apellido paterno">
            <input type="text" name="am" placeholder="Apellido materno">
            <input type="text" name="cel" placeholder="Celular">
            <input type="submit" name="registrer">

        </form>
        <?php 
        include("registrar.php");
        ?>
    </body>
</html>