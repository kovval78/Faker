<?php


namespace App;


class GenerateData
{

    public array $fakeData = [];
    public function createTableName(array $fakeData) {

    }

    public function generateFakeData(array $fakeData) {
        foreach ($fakeData as $row) {
            $this->createTableName($row);
        }
    }
}

//$numberOfEntries = abs((int) $argv[1]);

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