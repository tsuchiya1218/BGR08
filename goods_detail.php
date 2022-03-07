<?php
    $sql = "SELECT * FROM goods WHERE g_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($g_id));
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>