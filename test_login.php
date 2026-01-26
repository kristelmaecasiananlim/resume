<?php
require 'vendor/autoload.php';
require 'preload.php';

$db = \Config\Database::connect();
$result = $db->table('admins')->where('username', 'admin')->first();

if ($result) {
    echo "Admin found in database<br>";
    echo "Password Hash: " . $result->password . "<br>";
    echo "Hash Length: " . strlen($result->password) . "<br>";
    
    // Test password verification
    $test_password = 'admin123';
    $verify = password_verify($test_password, $result->password);
    echo "Password Verify Result: " . ($verify ? 'TRUE' : 'FALSE') . "<br>";
    
    // Also show the hashed password from seeder for comparison
    $hashed = password_hash('admin123', PASSWORD_DEFAULT);
    echo "New Hash of 'admin123': " . $hashed . "<br>";
} else {
    echo "Admin user not found in database<br>";
}
?>
