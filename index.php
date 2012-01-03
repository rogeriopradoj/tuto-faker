<?php
require 'vendor/.composer/autoload.php';

$faker = Faker\Factory::create('pt_BR');

// generate data by accessing properties
echo '<pre>';
echo $faker->name; 
  // 'Lucy Cechtelar';
echo $faker->address;
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"
for ($i=0; $i < 10; $i++) { 
  echo $faker->name, "\n";
}