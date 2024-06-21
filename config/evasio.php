<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Basic\BracesFixer;
use PhpCsFixer\Fixer\Basic\BracesPositionFixer;
use PhpCsFixer\Fixer\Basic\CurlyBracesPositionFixer;
use PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer;
use PhpCsFixer\Fixer\Operator\NewWithBracesFixer;
use PhpCsFixer\Fixer\Operator\NewWithParenthesesFixer;
use PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer;
use SlevomatCodingStandard\Sniffs\Classes\EmptyLinesAroundClassBracesSniff;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return function (ECSConfig $ecsConfig): void {
	$ecsConfig->indentation('tab');
	$ecsConfig->lineEnding("\n");

	$ecsConfig->sets([
		SetList::ARRAY,
		SetList::NAMESPACES,
		SetList::COMMENTS,
		SetList::STRICT,
		SetList::PHPUNIT,
		SetList::PSR_12,
	]);

	$ecsConfig->rules([
		NewWithParenthesesFixer::class,
		EmptyLinesAroundClassBracesSniff::class,
	]);

	$ecsConfig->skip([
		BracesFixer::class,
		NoBlankLinesAfterClassOpeningFixer::class,
		NoExtraBlankLinesFixer::class,
		NewWithBracesFixer::class,
		CurlyBracesPositionFixer::class,
		BracesPositionFixer::class,
	]);
};
