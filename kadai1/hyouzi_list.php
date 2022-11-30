<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>課題１</title>
    </head>
    <body>
        <?php

        try {
            $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
            $user='root';
            $password='';
            $dbh=new PDO($dsn,$user,$password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql='SELECT id,simei,hurigana FROM kojin WHERE 1';
            $stmt=$dbh->prepare($sql);
            $stmt->execute();

            $dbh=null;

            print'個人情報一覧<br /><br />'."\n";

            print'<form method="post" action="hyouzi_branch.php">';
            while(true) {
                $rec=$stmt->fetch(PDO::FETCH_ASSOC);
                if ($rec==false) {
                    break;
                }
                print'<input type="radio" name="hyouziid"value="'.$rec['id'].'">';
                print'id='.$rec['id'];
                print' 氏名:'.$rec['simei'];
                print' ふりがな:'.$rec['hurigana'];
                print'<br />'."\n";
            }
            print'<button type="submit" name="disp">参照</button>';
            print'<button type="submit" name="add">追加</button>';
            print'<button type="submit" name="edit">修正</button>';
            print'<button type="submit" name="delete">削除</button>';
            print'</form>';
        }
        catch (Exception $e) {
                print'ただいま障害により大変ご迷惑をお掛けしております。';
                print $e->getMessage();
                exit();
        }

        ?>
    </body>
</html>