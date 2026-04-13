<?php
require_once '/var/www/wp-panel/config.php';
$token = jwtEncode([
    'id' => 'admin',
    'email' => 'admin@panel.local',
    'name' => 'Admin',
    'role' => 'admin',
]);
echo $token;