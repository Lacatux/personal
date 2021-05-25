<?php
    $hostname = '127.0.0.1';
    $username = 'jaime';
    $password = '123';
    $dbname = 'xavleg';

    try 
    {
        $dbh = new PDO("mysql:host=$hostname;dbname=mysql", $username, $password);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }   

    $stmt = $dbh->prepare("SELECT * FROM users where user = ?");
    $stmt->execute(array($_POST['user']));
    echo $stmt->rowCount();
?>
