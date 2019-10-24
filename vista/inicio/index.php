<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- LINKS-->
    <link rel="stylesheet" href="CSS/propio.css">
    <link href="https://fonts.googleapis.com/css?family=Passion+One&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="CSS/ihover.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="CSS/ihover.min.css"> -->
    <title>HV-UFPS</title>
</head>
<body>
    <div class="contenedor">

        <div class="inicio">            
            <div class="formu">
                <div class="icono" >
                    <!-- <img src="https://img.icons8.com/wired/64/000000/id-not-verified.png"> -->
                    
                    <img src="IMG/logo.png" alt="" class="logo" >
                    <!-- <h1>PS4S - UFPS</h1> -->
                    <P>Complete los campos con los datos corretos para iniciar sesion.</P>
                </div>
                <form method="get" action="<?php echo constant('URL');?>login">
                    <div class="conIcon">
                        <input type="text" name="user" id="sesionUser" placeholder="CEDULA">
                        <img src="https://img.icons8.com/color/48/000000/login-as-user.png">
                    </div>
                    <!-- <div class="conIcon">
                        <input type="text" name="contrasena" id="sesionCaontrasena" placeholder="CONTRASEÑA">
                        <img src="https://img.icons8.com/officexs/16/000000/show-password.png">
                    </div> -->
                    <!-- <div class="ini">
                        
                       <a href="#" > 
                            <img src="https://img.icons8.com/wired/64/000000/login-rounded-right.png" >
                            
                            <img src="https://img.icons8.com/dusk/64/000000/login-rounded-right.png" class="escon">
                       </a>                       
                    </div> -->
                    <input type="submit" value="CONSULTAR">
                </form>
            </div>
        </div>

    </div>
</body>
</html>
