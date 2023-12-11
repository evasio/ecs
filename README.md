# ECS

Easy Coding Standard config for [Evasio](https://github.com/evasio).

## Install

```sh
composer require evasio/ecs --dev
```

## Usage

```diff
<?php

declare(strict_types=1);

+use Evasio\ECS\SetList;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return function (ECSConfig $ecsConfig): void {
	$ecsConfig->sets([
+		SetList::EVASIO,
	]);
};
```
