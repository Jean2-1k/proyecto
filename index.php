<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./src/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512" crossorigin="anonymous" />

    <title>Login</title>
</head>

 <body>
    <div class="bg"></div>
    <div class="contenedor">
        <div class="img">
            <img src="./src/img/logo.png" alt="logo.png">
        </div>

        <div class="content">
            <div class="titulo">
                <h1>INICIAR SESIÓN</h1>
                <p>UGEL CHANCHAMAYO</p>
            </div>

            <form action="" method="post">
                <div class="form form-user">
                    <div class="content-form">
                        <i class="fas fa-user"></i>
                        <input type="text" name="usuario" placeholder="Usuario" required>
                    </div>
                </div> 
                <div class="form form-password">
                    <div class="content-form">
                        <i class="fas fa-lock"></i>
                        <div style="width: auto; position: relative; height: auto;">
                            <input type="password" name="contraseña" placeholder="Contraseña" id="contraseña" required>
                        </div>

                    </div>

                </div>
                <input type="submit" value="Ingresar" class="btn-principal">
                <?php
                include('./src/php/login.php')
                ?>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512" crossorigin="anonymous"></script>
    <div class="bg2"></div>
    
</body>

</html>