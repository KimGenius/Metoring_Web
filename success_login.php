<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: young-->
<!-- * Date: 2017-07-16-->
<!-- * Time: 오전 9:38-->
<!-- */-->

<?php
session_start();
if ($_SESSION['id'] != null) { ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <?php
    echo $_SESSION['id']; ?>님 환영합니다!
    <form action="./addBoard.php" method="get">
        <span>title : </span><input type="text" name="title">
        <span>content : </span><textarea name="content"></textarea>
        <button>게시글 작성</button>
    </form>

    <?php
    require './DB.php';
    $result = $db->exe("SELECT * FROM `board`", array())->fetchAll();
    foreach ($result as $item) {
        echo "title : " . $item['title'];
        echo "content: " . $item['content'] . "<br/>";
    }
    ?>
    </body>
    </html>
<?php } else { ?>
    <script>
        alert("정상적인 접근이 아닙니다");
        location.href = "/";
    </script>
<?php } ?>