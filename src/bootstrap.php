<?php
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    // Called from local git clone.
    require __DIR__ . '/../vendor/autoload.php';
} elseif (file_exists(__DIR__ . '/../../../autoload.php')) {
    // Called from your project's vendor dir.
    require __DIR__ . '/../../../autoload.php';
} else {
    echo 'You need to set up the project dependencies using the following commands:' . PHP_EOL .
        'curl -s http://getcomposer.org/installer | php' . PHP_EOL .
        'php composer.phar install' . PHP_EOL;
    exit(-1);
}
