<?php
try{
    $access=new pdo("mysql:host=localhost;dhname=monoshop;charset=utf8", "root", "");

    $access->setAttrebute(PDO::ATTR_ERRMODDE, PDO::ERRMODE_WARNING);
} catch (Exeption $e)
{
    $e->getMessage();
}



?>