<?php
$basePath = dirname(__DIR__);
require $basePath . '/vendor/autoload.php';

// Load CodeIgniter config
require $basePath . '/app/Config/Database.php';

try {
    $db = new \mysqli('localhost', 'root', '', 'kristel_portfolio');
    
    if ($db->connect_error) {
        die('Connection failed: ' . $db->connect_error);
    }
    
    // Create fresh password hash
    $password = 'admin123';
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    // Delete existing admin user
    $db->query("DELETE FROM admins WHERE username = 'admin'");
    
    // Insert new admin with fresh hash
    $stmt = $db->prepare("INSERT INTO admins (username, password, created_at, updated_at) VALUES (?, ?, ?, ?)");
    $now = date('Y-m-d H:i:s');
    $stmt->bind_param("ssss", $username, $hashval, $created_at, $updated_at);
    $username = 'admin';
    $hashval = $hash;
    $created_at = $now;
    $updated_at = $now;
    
    if ($stmt->execute()) {
        echo 'Admin user reset successfully!<br>';
        echo 'Username: <strong>admin</strong><br>';
        echo 'Password: <strong>admin123</strong><br>';
        echo 'You can now login at <a href="/admin/login">/admin/login</a><br>';
    } else {
        echo 'Error inserting admin: ' . $stmt->error;
    }
    
    $stmt->close();
    $db->close();
    
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>

