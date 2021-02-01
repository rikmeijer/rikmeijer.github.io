<?php declare(strict_types=1);

use rikmeijer\Bootstrap\Bootstrap;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;


return static function (Bootstrap $bootstrap, array $configuration): Environment {
    $loader = new FilesystemLoader($configuration['templates']);

    $options = [];
    if (is_null($configuration['cache']) === false) {
        $options['cache'] = $configuration['cache'];
    }

    return new Environment($loader, $options);
};