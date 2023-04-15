<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GET BOOSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <!-- FILE CSS -->
    <link rel="stylesheet" href="styles/styles.css">
    <title>Examen1</title>
</head>
<body>


<?php 

if(isset($_POST['nombres']) 
&& isset($_POST['direccion']) 
&& isset($_POST['email']) 
&& isset($_POST['edad'])
){
    $nombres=$_POST['nombres'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
}
?>

    <div class="container mt-5">
        <div class="card" style="font-size: 1.1rem;">
            <div class="card-header">
                <h1 class="text-center">Bienvenido</h1>
            </div>
            <div class="card-body">
                
            <?php
            if (isset($nombres) && isset($direccion) && isset($email) && isset($edad)) {
                echo "<p>¡Hola $nombres!</p>";
                echo "<p>Tu dirección es Av. $direccion</p>";
                echo "<p>Tienes $edad años y tu correo es $email</p>"; 
            } 
            ?>
            </div>
        </div>
    </div>

    <!-- GET BOOSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>