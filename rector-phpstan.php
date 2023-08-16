<?php

declare(strict_types=1);

$additionalConfigFiles = [];
$additionalConfigFiles[] = 'phar://phpstan.phar/conf/bleedingEdge.neon';

return ['includes' => $additionalConfigFiles];
