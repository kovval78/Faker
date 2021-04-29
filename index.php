<?php

require_once 'vendor/autoload.php';

use App\File;
use App\Test\Test;
use App\Argv;


//$argv = new Argv($argv);

$faker = Faker\Factory::create('pl_PL');

//$file = new File('file.csv');
//
//$file->insertArray($fakeData);



//echo "\e[91m ATTENTION!!!\e[39m In order to delete entries in csv file enter number 0 - 'EXAMPLE: php index.php 0'. " . PHP_EOL;
//sleep(1);
//
//$numberOfEntries = abs((int) $argv[1]);
//
//if ($numberOfEntries === 0) {
//    echo "\e[91m You just deleted all entries from the csv file. Well done!\e[32m " . PHP_EOL;
//} elseif ($numberOfEntries >= 1001)  {
//    echo "\e[91m ERROR!\e[39m You have to enter a number less than 1000 and greater than 0. " . PHP_EOL;
//    return;
//} else {
//    echo "\e[32m CONGRATULATIONS! You just generated and saved \e[93m$numberOfEntries\e[32m entries to csv file. " . PHP_EOL;
//}
//



//$fakeData [] = [
//    'title',
//    'first_name',
//    'last_name',
//    'age',
//    'email',
//    'phone_number',
//    'city',
//    'post_code',
//    'street_name',
//    'building_number'
//];
//
//for ($i = 0; $i < $numberOfEntries; $i++) {
//    $fakeData [] = [
//        $faker->title,
//        $faker->firstName,
//        $faker->lastName,
//        $faker->numberBetween($min = 18, $max = 80),
//        $faker->email,
//        $faker->phoneNumber,
//        $faker->city,
//        $faker->postcode,
//        $faker->streetName,
//        $faker->buildingNumber,
//    ];
// }
//





//$openCsvFile = fopen('file.csv', 'w');
//
//foreach ($fakeData as $row) {
//    fputcsv($openCsvFile, $row);
//}
//
//fclose($openCsvFile);