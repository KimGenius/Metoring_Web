<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: young-->
<!-- * Date: 2017-07-16-->
<!-- * Time: 오전 4:56-->
<!-- */-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebForMetoring</title>
</head>
<style>
    * {
        margin: 0 auto;
        padding: 0;
        box-sizing: border-box;
    }

    .wrap {
        position: relative;
        display: block;
        margin-top: 200px;
        width: 400px;
        height: 600px;
    }

    input {
        width: 300px;
        height: 50px;
        margin-bottom: 40px;
    }

    button {
        width: 400px;
        height: 50px;
        background-color: green;
        color: #fff;
        -webkit-transition: .3s;
        -moz-transition: .3s;
        -ms-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
    }

    button:hover {
        background-color: #ffffff;
        color: green;
    }
</style>
<body>
<div class="wrap">
    <form action="./login.php" method="post">
        <input type="text" placeholder="ID를 입력해주세요" name="id">
        <input type="password" placeholder="PW를 입력해주세요" name="pw">
        <button>로그인</button>
    </form>
</div>
</body>
</html>