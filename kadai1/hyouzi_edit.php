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

    個人情報修正<br />
    <br />
    idコード<br />
    <?php print$hyouzi_id;?>
    <br />
    <br />
    <form method="post" action="hyouzi_edit_check.php">
        <input type="hidden" name="id" value="<?php print $hyouzi_id;?>">
        氏名<br />
        <input type="text" name="simei" style="width: 200px" value="<?php print $hyouzi_simei;?>"><br />
        ふりがなを入力してください。<br />
        <input type="text" name="hurigana" style="width:200px"><br />
        郵便番号を入力してください。<br />
        <input type="text" name="yubinbango" style="width:200px"><br />
        住所を入力してください。<br />
        <input type="text" name="zyusyo" style="width:200px"><br />
        電話番号を入力してください。<br />
        <input type="text" name="denwabango" style="width:200px"><br />
        Ｅメールアドレスを入力してください。<br />
        <input type="text" name="email" style="width:200px"><br />
        <br />
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="ＯＫ">
    </form>
    </body>
</html>