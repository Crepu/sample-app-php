<?php
    include '../config/db.php';

    mysql_connect($hostname_DB,$username_DB,$password_DB);
    mysql_select_db($database_DB) or die( "Unable to select database");
    $query="INSERT INTO app_test (name, value) VALUES ('$_POST[name]', '$_POST[value]')";
    $result=mysql_query($query);
    if($result === TRUE){
        header('Location: index.php');
    } else {
        echo "Error".mysql_error();
    }
    mysql_close();
?>
