<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>課題１</title>
    </head>
    <body>
    <link href="./hyouzi_add.css" rel="stylesheet">
    <div class="add">
    個人情報を追加<br />
        <br />
        <form method="post" action="hyouzi_add_check.php">
            氏名を入力してください。<br />
            <input class="text" type="text" name="simei" style="width:200px"><br />
            ふりがなを入力してください。<br />
            <input class="text" type="text" name="hurigana" style="width:200px"><br />
            郵便番号を入力してください。<br />
            <input class="text" type="text" name="yubinbango" style="width:200px"><br />
            住所を入力してください。<br />
            <input class="text" type="text" name="zyusyo" style="width:200px"><br />
            電話番号を入力してください。<br />
            <input class="text" type="text" name="denwabango" style="width:200px"><br />
            Ｅメールアドレスを入力してください。<br />
            <input class="text" type="text" name="email" style="width:200px"><br />
            <br />
            <button type="button" onclick="history.back()">戻る</button>
            <button type="submit">ＯＫ</button>
        </form>
        </div>
    </body>
</html>