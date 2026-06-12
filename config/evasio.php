<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Basic\BracesPositionFixer;
use PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitSetUpTearDownVisibilityFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use PhpCsFixer\Fixer\Strict\StrictComparisonFixer;
use PhpCsFixer\Fixer\Strict\StrictParamFixer;
use PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer;
use SlevomatCodingStandard\Sniffs\Classes\EmptyLinesAroundClassBracesSniff;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return ECSConfig::configure()
	->withSpacing(indentation: 'tab', lineEnding: "\n")
	->withSets([
		SetList::ARRAY,
		SetList::NAMESPACES,
		SetList::COMMENTS,
		SetList::PSR_12,
	])
	->withRules([
		// rules from the deprecated SetList::STRICT set
		DeclareStrictTypesFixer::class,
		StrictComparisonFixer::class,
		StrictParamFixer::class,
		// rules from the deprecated SetList::PHPUNIT set
		PhpUnitTestAnnotationFixer::class,
		PhpUnitSetUpTearDownVisibilityFixer::class,
		EmptyLinesAroundClassBracesSniff::class,
	])
	->withSkip([
		NoBlankLinesAfterClassOpeningFixer::class,
		NoExtraBlankLinesFixer::class,
		BracesPositionFixer::class,
	]);
