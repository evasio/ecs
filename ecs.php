<?php

declare(strict_types=1);

use Evasio\ECS\SetList;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
	->withPaths([
		__DIR__ . '/config',
		__DIR__ . '/src',
		__FILE__,
	])
	->withSets([
		SetList::EVASIO,
	]);
