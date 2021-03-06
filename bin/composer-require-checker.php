<?php

if (PHP_MAJOR_VERSION < 7) {
    fwrite(STDERR, "PHP7 is required\n");
    exit(1);
}

require __DIR__ . '/../vendor/autoload.php';

use ComposerRequireChecker\Cli\Application;

$application = new Application();
$application->run();
