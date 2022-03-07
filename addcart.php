<?php
    $sql = "SELECT * FROM cart";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $count = 0;
    foreach($array as $value){
        $count++;
	}
    if(empty($count)){
        $sql = "SELECT MAX(or_id) AS maxid FROM order_history";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $or_id = $array[0]['maxid']+1;
    }else {
        $sql = "SELECT MAX(or_id) AS maxid FROM cart";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $or_id = $array[0]['maxid'];
    }
    $sql = "INSERT INTO cart(c_code,g_id,or_id,ca_qty) VALUES(?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($c_code,$g_id,$or_id,$qty));
    $stmt = null;
    $pdo = null;
?>