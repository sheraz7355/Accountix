<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The form now sends 'short_name', so we check for it.
    if (isset($_POST['product_name']) && isset($_POST['short_name']) && !empty($_POST['product_name']) && !empty($_POST['short_name'])) {
        
        $query = "INSERT INTO products (product_name, short_name, description) VALUES (:product_name, :short_name, :description)";
        
        $params = [
            ':product_name' => $_POST['product_name'],
            ':short_name' => $_POST['short_name'],
            ':description' => $_POST['description'] ?? null,
        ];

        $db->query($query, $params);

        header('Location: /Inventory');
        exit();
    }
}

// Fetch all units from the units table to populate the dropdown
$units = $db->query("SELECT short_name FROM units")->fetchAll();

require "views/Inventory.view.php";
