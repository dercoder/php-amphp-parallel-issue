<?php

require_once 'vendor/autoload.php';

use Amp\Loop;
use Amp\Parallel\Worker\DefaultPool;

use function Amp\ParallelFunctions\parallelMap;

Loop::run(
    function () {
        $pool = new DefaultPool(3);
        $names = ['Alex', 'Mike', 'John', 'Harry', 'Felix', 'Nina', 'Marie', 'Steven'];

        parallelMap(
            $names,
            function ($name) {
                sleep(rand(1, 3));
                $date = new DateTime();
                echo "{$date->format('H:i:s')} => {$name}\r\n";
            },
            $pool
        );
    }
);
