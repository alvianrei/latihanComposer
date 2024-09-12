<?php
require 'vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create();
$name = $faker->name;

// Kirim hasil sebagai JSON
header('Content-Type: application/json');
echo json_encode(['name' => $name]);
?>
