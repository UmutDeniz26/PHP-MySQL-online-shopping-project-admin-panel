<?php
include_once('connectdb.php');
$setup = $db->prepare("SELECT * FROM config WHERE config_id=:id");
$setup->execute(array('id' => 1));
$result = $setup->fetch(PDO::FETCH_ASSOC);
?>