<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>課題１</title>
    </head>
    <body>
        <?php

        try{
            $hyouzi_simei=$_POST["simei"];
            $hyouzi_hurigana=$_POST["hurigana"];
            $hyouzi_yubinbango=$_POST["yubinbango"];
            $hyouzi_zyusyo=$_POST["zyusyo"];
            $hyouzi_denwabango=$_POST["denwabango"];
            $hyouzi_email=$_POST["email"];
    
            $hyouzi_simei=htmlspecialchars($hyouzi_simei,ENT_QUOTES,'UTF-8');
            $hyouzi_hurigana=htmlspecialchars($hyouzi_hurigana,ENT_QUOTES,'UTF-8');
            $hyouzi_yubinbango=htmlspecialchars($hyouzi_yubinbango,ENT_QUOTES,'UTF-8');
            $hyouzi_zyusyo=htmlspecialchars($hyouzi_zyusyo,ENT_QUOTES,'UTF-8');
            $hyouzi_denwabango=htmlspecialchars($hyouzi_denwabango,ENT_QUOTES,'UTF-8');
            $hyouzi_email=htmlspecialchars( $hyouzi_email,ENT_QUOTES,'UTF-8');

            $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
            $user='root';
            $password='';
            $dbh=new PDO($dsn,$user,$password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
            $sql='INSERT INTO kojin(simei,hurigana,yubinbango,zyusyo,denwabango,email) VALUES (?,?,?,?,?,?)';
            $stmt=$dbh->prepare($sql);
            $data[]=$hyouzi_simei;
            $data[]=$hyouzi_hurigana;
            $data[]=$hyouzi_yubinbango;
            $data[]=$hyouzi_zyusyo;
            $data[]=$hyouzi_denwabango;
            $data[]=$hyouzi_email;
            $stmt->execute($data);
    
            $dbh=null;
            
            print$hyouzi_simei;
            print'さんを追加しました。 <br />';
    
        }
        catch (Exception $e) {
            print'ただいま障害により大変ご迷惑をお掛けしております。';
            exit();
        }

        ?>
        <a href="hyouzi_list.php">戻る</a>

    </body>
</html>