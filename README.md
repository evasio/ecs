# ECS

[Easy Coding Standard](https://github.com/easy-coding-standard/easy-coding-standard) config for [Evasio](https://github.com/evasio). Set of rules for [PHP_CodeSniffer](https://github.com/phpcsstandards/PHP_CodeSniffer) and [PHP CS Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer).

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

return ECSConfig::configure()
	->withSets([
+		SetList::EVASIO,
	]);
```
