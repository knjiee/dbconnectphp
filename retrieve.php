<?php 
require 'db_con.php';

$sql = "SELECT * FROM branch";
$stmt = $pdo->query($sql);

foreach($stmt as $data){
    echo $data['branch_name'].' '.$data['location']. ' ' .$data['zipcode'].'<br>';
}

?>