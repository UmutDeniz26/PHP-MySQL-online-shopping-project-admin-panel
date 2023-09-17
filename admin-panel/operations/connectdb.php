<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=e-ticaret-project;charset=utf8", "root", "root12345");
} catch (PDOException $e) {
    echo "Connection failed:<br><hr> " . $e->getMessage();
}
?>