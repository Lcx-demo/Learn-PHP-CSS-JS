<?php
$content = $_POST['content'];
$username = $_POST['username'];

if (trim($content) == '' || trim($username) == '') {
    echo "用户名和留言内容不能为空";
    exit;
}
if ($username == "admin" || $username == "root" || $username == "领导人") {
    echo "用户名不能包含敏感字";
    exit;
}

include("db.php");

$sql = "insert into msg (username,content) values ('{$username}','{$content}')";

write($pdo, $sql);

header('location:bootstrap.php');
?>