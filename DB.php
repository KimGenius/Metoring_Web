<?php
/**
 * Created by PhpStorm.
 * User: young
 * Date: 2017-07-16
 * Time: 오전 9:28
 */

class DB extends PDO
{
    public function exe($sql, array $bind = null)
    {
        $stmt = $this->prepare($sql);
        $stmt->execute($bind);
        return $stmt;
    }
}

$db = new DB('mysql:host=localhost; dbname=mentoring_web; charset=utf8', 'root', '', array(
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));