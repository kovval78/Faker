<?php


namespace App;


class File
{
    private $handle;

    public function __construct(string $name) {
        $this->handle = fopen($name, 'w');
    }

    public function addRow($row) {
        fputcsv($this->handle, $row);
    }

    public function insertArray(array $data) {
        foreach ($data as $row) {
            $this->addRow($row);
        }
    }

    public function fileClose() {
        fclose($this->handle);
    }
}

//$openCsvFile = fopen('file.csv', 'w');

//foreach ($fakeData as $row) {
//    fputcsv($openCsvFile, $row);
//}
//
//fclose($openCsvFile);