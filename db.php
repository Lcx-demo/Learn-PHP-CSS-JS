<?php

$dsn = 'mysql:dbname=php10-7;host=127.0.0.1';
$pdo = new PDO($dsn, 'root', '');

function read($pdo, $sql)
{
    $sth = $pdo->prepare($sql);
    $sth->execute();
    $data = $sth->fetchAll();

    return $data;
}

function write($pdo, $sql)
{
    $sth = $pdo->prepare($sql);
    return $sth->execute();
}
