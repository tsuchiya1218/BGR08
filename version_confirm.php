<?php
    $version=$_POST["version"];
    if($version=="download"){
        header('Location: payment.php');
    }else{
        header('Location: addcart_complete.php');
    }
?>