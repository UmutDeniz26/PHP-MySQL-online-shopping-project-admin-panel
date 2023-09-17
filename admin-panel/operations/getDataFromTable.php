<?php
function getDataFromTable($table_name, $id_name, $id)
{
    include('connectdb.php');
    $query = "SELECT * FROM $table_name WHERE $id_name = $id";
    $setup = $db->query($query);
    $result = $setup->fetch(PDO::FETCH_ASSOC);
    return $result;
}
?>