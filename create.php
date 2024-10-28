<?php
    require 'db_con.php';

    $sql = "INSERT INTO branch (branch_name, manger_id, location, zipcode) VALUES (:branch_name,:manger_id,:location,:zipcode)";
    $stmt = $pdo->prepare($sql);

    $data = [
        'branch_name' => 'Calapan branch',
        'manger_id' => 4,
        'location' => 'Calapan City',
        'zipcode' => '5200'
    ];

    try{
        $stmt->execute($data);
        echo "New record created successfully!";
    }catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>