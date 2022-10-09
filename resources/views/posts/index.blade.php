<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ログイン画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ログイン画面</h1>
        <form action="" method="POST">
            ユーザー名<input type="text" name="username" value=""><br>
            パスワード<input type="password" name="passwprd" value=""><br>
            <input type="submit" name="login" value="ログイン">
        </form>
        <a href="/posts/signin.blade.php">新規登録</a>
    </body>
</html>