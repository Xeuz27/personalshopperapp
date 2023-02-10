<?php
require_once("includes/header.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");
require_once("includes/classes/Package.php");

$account = new Package($con);
     if(isset($_POST["submitButton"])) {
        $id = FormSanitizer::sanitizeFormString($_POST["cedula"]);
        $order = FormSanitizer::sanitizeFormString($_POST["id-order"]);
        

        // $success = $account->login($username, $password);
        
        if($success) {

            // $_SESSION["userLoggedIn"] = $username;
            // header("Location: index.php");
        }
    }

    function getInputValue($name){
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }
    
    // $preview = new PreviewProvider($con, $userLoggedIn);
    // echo $preview->createTvShowsPreviewVideo();
    
    // $containers = new CategoryContainers($con, $userLoggedIn);
    // echo $containers->showTvShowCategories();
?>

<div class='signInContainer'>
        <div class="column">
            <div>
                <h3>Ingresa el numero de tu Pedido</h3>
                <span>para ver su estado</span>
            </div>
            <form method="POST">
                <input type="text" placeholder="Cedula de identidad" name="cedula" required>
                <input type="text" placeholder="numero de pedido" name="id-order" required>
                <input type="submit" value="SUBMIT" name="submitButton" >
            </form>

            <a href="register.php" class="signInMessage">Todavia no tienes un Pedido? Compra Aqui</a>
        </div>
    </div>