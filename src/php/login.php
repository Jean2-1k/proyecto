<?php
require_once 'conexion.php';

if (
    isset($_POST['usuario'])
    or
    isset($_POST['contraseña'])
) {
    $user = $_POST['usuario'];
    $pass = $_POST['contraseña'];
    if (empty($user) or empty($pass)) {
?>
        <div>
            <p>Usuario/Contraseña no pueden estar vacios</p>
        </div>
        <?php
    } else {
        try {
            $sql = "SELECT * FROM usuario WHERE usuario = :user AND contraseña = :pass";
            $query = $conexion->prepare($sql);
            $query->bindValue(':user', $user);
            $query->bindValue(':pass', $pass);
            $query->execute();
            $resul = $query->fetch(PDO::FETCH_ASSOC);


            if ($resul) {
                $rol = $resul['rol'];
                session_start();
                $_SESSION['rol'] = $rol;

                switch ($_SESSION['rol']) {
                    case 1:
                        header('location: src/administrador/index.php');
                        break;
                    case 2:
                        header('location: src/usuario/index.php');
                        break;
                }
            } else {
        ?>
                <div>
                    <p>Usuario/Contraseña incorrecta</p>
                </div>
<?php
            }
        } catch (Exception $error) {
            echo 'ERROR EN EL INTENTO DE LOGEO ' . $error->getMessage();
            die('ERROR EN LA LINEA: ' . $error->getLine());
        }
    }
}
