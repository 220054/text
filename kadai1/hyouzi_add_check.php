<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>課題１</title>
    </head>
    <body>
        <?php
        
        $hyouzi_simei=$_POST["simei"];
        $hyouzi_hurigana=$_POST["hurigana"];
        $hyouzi_yubinbango=$_POST["yubinbango"];
        $hyouzi_zyusyo=$_POST["zyusyo"];
        $hyouzi_denwabango=$_POST["denwabango"];
        $hyouzi_email=$_POST["email"];

        if ($hyouzi_simei=='') {
            print'氏名が入力されていません。 <br />';
        } else {
            print'氏名：';
            print$hyouzi_simei;
            print'<br />';
        }

        if ($hyouzi_hurigana=='') {
            print'ふりがなが入力されていません。 <br />';
        } else {
            print'ふりがな：';
            print$hyouzi_hurigana;
            print'<br />';
        }

        if ($hyouzi_yubinbango=='') {
            print'郵便番号が入力されていません。 <br />';
        } else {
            print'郵便番号：';
            print$hyouzi_yubinbango;
            print'<br />';
        }

        if ($hyouzi_zyusyo=='') {
            print'住所が入力されていません。 <br />';
        } else {
            print'住所：';
            print$hyouzi_zyusyo;
            print'<br />';
        }

        if ($hyouzi_denwabango=='') {
            print'電話番号が入力されていません。 <br />';
        } else {
            print'電話番号：';
            print$hyouzi_denwabango;
            print'<br />';
        }

        if ($hyouzi_email=='') {
            print'Ｅメールアドレスが入力されていません。 <br />';
        } else {
            print'Ｅメールアドレス：';
            print$hyouzi_email;
            print'<br />';
        }

        if ($hyouzi_simei==''||$hyouzi_hurigana==''||$hyouzi_yubinbango==''||$hyouzi_zyusyo==''
        ||$hyouzi_denwabango==''||$hyouzi_email=='') {
            print'<form>';
            print'<input type="button"onclick="history.back()" value="戻る">';
            print'</form>';
        } else {
            print'<form method="post" action="hyouzi_add_done.php">';
            print'<input type="hidden" name="simei"value="'.$hyouzi_simei.'">';
            print'<input type="hidden" name="hurigana"value="'.$hyouzi_hurigana.'">';
            print'<input type="hidden" name="yubinbango"value="'.$hyouzi_yubinbango.'">';
            print'<input type="hidden" name="zyusyo"value="'.$hyouzi_zyusyo.'">';
            print'<input type="hidden" name="denwabango"value="'.$hyouzi_denwabango.'">';
            print'<input type="hidden" name="email"value="'.$hyouzi_email.'">';
            print"<br />";
            print'<input type="button"onclick="history.back()" value="戻る">';
            print'<input type="submit" value="ＯＫ">';
            print'</form>';
        }

        ?>
    </body>
</html>