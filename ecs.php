<?php

declare(strict_types=1);

use Evasio\ECS\SetList;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return function (ECSConfig $ecsConfig): void {
	$ecsConfig->paths([
		__DIR__ . '/config',
		__DIR__ . '/src',
		__FILE__,
	]);

	$ecsConfig->sets([
		SetList::EVASIO,
	]);
};
