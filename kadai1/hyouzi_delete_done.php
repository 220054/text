<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>課題１</title>
    </head>
    <body>
        
    <?php

    try{
        $hyouzi_id=$_POST['id'];
        
        $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
        $user='root';
        $password='';
        $dbh=new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql='DELETE FROM kojin WHERE code=?';
        $stmt=$dbh->prepare($sql);
        $data[]=$hyouzi_id;
        $stmt->execute($data);

        $dbh=null;
        
    }
    catch (Exception $e) {
        print'ただいま障害により大変ご迷惑をお掛けしております。';
        exit();
    }

    ?>
    削除しました。<br />
    <br />
    <a href="hyouzi_list.php">戻る</a>

    </body>
</html>