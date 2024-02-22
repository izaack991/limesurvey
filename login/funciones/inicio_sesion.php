<?php
// Establece la conexión con la base de datos
$servername = "localhost"; // Puede ser "localhost" si la base de datos está en el mismo servidor
$username = "root";
$password = "";
$database = "prueba";

$conn = new mysqli($servername, $username, $password);

// Verifica la conexión
$query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$database'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    
    $conn->close();

    $conn = new mysqli($servername, $username, $password, $database);

    // Login
    if (isset($_POST['matricula'])) {

        $_usuario = $_POST['matricula'];
        //$_password = $_POST['password'];

        $sql = "SELECT * FROM alumno WHERE matricula='$_usuario'";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0)
        {
            header("location:../../juan_diego/php/Pagina_Alumno.php");
        }
        else
        {
            echo '"<script language="javascript">alert("Matricula no encontrada");window.location.href="../../login/login2.php"</script>"';
        }
    } else {
        echo '"<script language="javascript">alert("Solo puedes ingresar con un correo institucional UAIM");window.location.href="../../login/login2.php"</script>"';
    }

// Cierra la conexión
$conn->close();

} else {
    echo '"<script language="javascript">alert("Error en la base de datos. Base de datos no encontrada");window.location.href="../../login/login2.php"</script>"';
}


?>







<!--
class login {
    public function login_users($_correo,$_password,$_tipo)
        {
            
            try {
                
                $sql = "SELECT * from tbl_usuario WHERE correo = :us_mail AND password = :us_pass AND rol = :us_tipo";
                $query = $this->dbh->prepare($sql);
                $query->bindParam(":us_mail",$_correo);
                $query->bindParam(":us_pass",$_password);
                $query->bindParam(":us_tipo",$_tipo);
                $query->execute();
                
                //si existe el usuario
                if($query->rowCount() == 1)
                {
                     $fila  = $query->fetch();
                     $_SESSION['iusuario'] = $fila['id_usuario'];
                     $_SESSION['nomusuario'] = $fila['nombre'];
                     $_SESSION['irol']= $fila['rol'];                                      
                     return TRUE;
                }
            }
            catch(PDOException $e){
                
                print "Error!: " . $e->getMessage();
                
            }        
            
        }
} -->
