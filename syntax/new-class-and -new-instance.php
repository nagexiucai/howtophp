<?php
// https://github.com/nagexiucai/howtophp

class PHP {
    public $version;
    protected $release;
    private $bugs;
    public function fun () {
        print "i am fun.\n";
    }
}

$phpClass = new PHP;
$phpInstance = new PHP();

print "php class\n";
$phpClass->fun();
print "php instance\n";
$phpInstance->fun();

if ($phpClass == $phpInstance) {
    print "EQ\n";
}

echo $phpInstance->version;

$array = [
    "stupid" => [
        "huawen" => 2,
        "huawu" => 8,
    ],
];

print_r($array);

$array["stupid"][] = "beautiful";
$array["stupid"][] = "ugly";
$array["stupid"]["who"] = null;

print_r($array);

foreach ($array as $k => $v) {
    echo $k, " => ", var_dump($v);
}