<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualitzacio Dades Usuari</title>
    <link rel="stylesheet" type="text/css" href="css/estilsVisualitzacioDadesUsuari.php"> 
</head>
<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        <hr>
    </div>
    <div class="dadesUsuari1">
        Usuari:<input id="UsuariObert" value="<?php echo $_SESSION['nom'];?>">
        <br><br>
        Vosté és:<input id="funcio" value="<?php echo ""?>">
        <br><br>
        Codi Sessió:<input id="funcio" value="<?php echo session_id();?>">
        <input id="tancaSessio" type="submit" value="Log Out" onclick="location='../inicio/logout.php'"/>
    </div>
    <table>
        <tr>
            <td>Nom i Cognoms:</td>
            <td> <?php echo "" ?> </td>
        </tr>
        <tr>
            <td>Adreça física:</td>
            <td> <?php echo "" ?> </td>
        </tr>
        <tr>
            <td>Correu Electrònic:</td>
            <td> <?php echo "" ?> </td>
        </tr>
        <tr>
            <td>Tèlefon:</td>
            <td> <?php echo "" ?> </td>
        </tr>
        <tr>
            <td>ID:</td>
            <td> <?php echo "" ?> </td>
        </tr>
        <tr>
            <td>Contrassenya:</td>
            <td> <?php echo "" ?> </td>
        </tr>
        <tr>
            <td>Llibre en prèstec:</td>
            <td> <?php echo "" ?> </td>
        </tr>
        <tr>
            <td>Inici del prèstec:</td>
            <td> <?php echo "" ?> </td>
        </tr>
        <tr>
            <td>ISBN del llibre en prèstec:</td>
            <td> <?php echo "" ?> </td>
        </tr>
    </table>
</body>
</html>