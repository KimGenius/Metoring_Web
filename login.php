<?php
/**
 * Created by PhpStorm.
 * User: young
 * Date: 2017-07-16
 * Time: 오전 9:25
 */
require './db.php';
session_start();
$result = $db->exe("SELECT * FROM `user` WHERE `id` = ? AND `pw` = ?", array($_POST['id'], $_POST['pw']))->fetch();
if (is_array($result)) {
    echo "<script>alert('로그인에 성공했습니다!');location.href='/success_login.php';</script>";
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['idx'] = $result['idx'];
} else {
    echo "<script>alert('로그인에 실패했습니다!');location.href='/';</script>";
}