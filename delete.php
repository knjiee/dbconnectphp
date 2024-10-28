<?php
require 'db_con.php';

$sql = "DELETE FROM branch WHERE branch_id = :id";
$stmt = $pdo->prepare($sql);

$data = [
    'id' => 5
];

try{
    $stmt->execute($data);
    echo "Record deleted successfully!";
}catch(PDOException $e) {
   echo "Error: " . $e->getMessage();
}

?>