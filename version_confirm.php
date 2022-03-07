<?php
    $version=$_POST['version'];
    $g_id=$_POST['g_id'];
    if($version=="package"){
        $g_id = "1".$g_id;
    }else{
        $g_id = "2".$g_id;
    }
    if(substr($g_id,0,1)=="2"){
        header('Location: payment.php?g_id='.$g_id.'');
    }else{
        header('Location: addcart_qty.php?g_id='.$g_id.'');
    }
?>