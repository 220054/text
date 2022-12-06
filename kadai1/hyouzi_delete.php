<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>課題１</title>
    </head>
    <body>
        
    <?php

    try {
        $hyouzi_id=$_GET['hyouziid'];
        
        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $password='';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql='SELECT simei FROM kojin WHERE id=?';
        $stmt=$dbh->prepare($sql);
        $data[]=$hyouzi_id;
        $stmt->execute($data);

        $rec=$stmt->fetch(PDO::FETCH_ASSOC);
        $hyouzi_simei=$rec['simei'];

        $dbh=null;
        
    }
    catch (Exception $e) {
        print'ただいま障害により大変ご迷惑をお掛けしております。';
        print $e->getMessage();
        exit();
        
    }

    ?>
    <link href="./hyouzi_add.css" rel="stylesheet">
    <div class="delete">

    個人情報削除<br />
    <br />
    idコード<br />
    <?php print$hyouzi_id;?>
    <br />
    氏名<br />
    <?php print$hyouzi_simei;?>
    <br />
    この個人情報を削除してもよろしいですか？<br />
    <br />
    <form method="post" action="hyouzi_delete_done.php">
        <input type="hidden" name="id" value="<?php print $hyouzi_id;?>">
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="ＯＫ">
    </form>
    </div>
    </body>
</html>