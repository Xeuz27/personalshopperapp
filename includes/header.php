<?php 
require_once("includes/config.php");
require_once("includes/classes/Entity.php");
require_once("includes/classes/EntityProvider.php");
require_once("includes/classes/ErrorMessage.php");
require_once("includes/classes/User.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PorTuCompraUSA | Personal Shopper in the United States</title>
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/styles/mobile.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d25b5653db.js" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    
    <script src="https://kit.fontawesome.com/d25b5653db.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class='wrapper'>

<?php
if(!isset($hideNav)){
    include_once("./includes/navBar.php");
}
?>