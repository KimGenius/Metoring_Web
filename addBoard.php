<?php
/**
 * Created by PhpStorm.
 * User: young
 * Date: 2017-07-16
 * Time: 오전 9:44
 */
require './DB.php';
session_start();
$db->exe("INSERT INTO `board`(`udx`,`title`,`content`) VALUES (?,?,?)", array($_SESSION['idx'], $_GET['title'], $_GET['content']));
echo "<script>alert('성공적으로 게시글이 등록되었습니다!'); location.href = './success_login.php';</script>";