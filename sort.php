<?php
    require_once("DB.php");
    if(empty($_POST['searched'])){
        $sql = "SELECT * FROM goods";
        $stmt = $pdo->prepare($sql);        
		$stmt->execute();
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }else{
        $fw;
        $sql = "SELECT * FROM goods";
        $sn;
        if(!(empty($_POST['softname']))){
            $softname = $_POST['softname'];
            $sql = $sql." WHERE g_name like '%?%'";
            $sn = 1;
        }
        if(!(empty($_POST['searchrate']))){
            if(!(empty($fw))){
                $sql = $sql.",g_rating < 18";
            }else{
                $sql = $sql." WHERE g_rating < 18";
            }
        }
        if(!(empty($_POST['searchJtendo']))){
            if(!(empty($fw))){
                $sql = $sql.",com_id = '002'";
            }else{
                $sql = $sql." WHERE com_id = '002'";
            }
        }
        if(!(empty($_POST['searchJtendo']))){
            if(!(empty($fw))){
                $sql = $sql.",g_Onlinesuport = 'possible'";
            }else{
                $sql = $sql." WHERE g_Onlinesuport = 'possible'";
            }
        }
        if(!(empty($_POST['sort']))){
            $sort = $_POST['sort'];
            if($sort="hprice"){
                $sql = $sql." ORDER BY g_price DESC";
            }elseif($sort="rprice"){
                $sql = $sql." ORDER BY g_price ASC";
            }elseif($sort="newsoft"){
                $sql = $sql." ORDER BY g_releasedate DESC";
            }elseif($sort="oldsoft"){
                $sql = $sql." ORDER BY g_releasedate DESC";
            }
        }

        if(empty($sn)){
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        }else{
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array($softname));
        }
        $array = $stmt->fetchAll(PDO::FETCH_ASSOC);




    }

    $stmt = null;
    $pdo = null;
?>