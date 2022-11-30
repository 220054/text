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
        print'ただいま障害により大変ご迷惑をおかけしております。';
        print $e->getMessage();
        exit();

    }

    ?>

    スタッフ情報参照<br />
    <br />
    スタッフコード<br />
    <?php print$hyouzi_id;?>
    <br />
    スタッフ名<br />
    <?php print$hyouzi_simei;?>
    <br />
    <br />
    <form>
        <input type="button" onclick="history.back()" value="戻る">
    </form>
    </body>
</html>