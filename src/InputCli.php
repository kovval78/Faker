<?php


namespace App;


class InputCli
{
    public array $argv;
    public function __construct(array $argv) {
        $this->argv = $argv;
    }

    public function inputNumber() {
        $this->argv[1];
    }
}