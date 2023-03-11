<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\CodeQuality\Rector\ClassMethod\ReturnTypeFromStrictScalarReturnExprRector;
use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\DeadCode\Rector\Assign\RemoveUnusedVariableAssignRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictNativeCallRector;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__.'/src'
    ]);

    // register a single rule
    $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);
    $rectorConfig->rule(TypedPropertyFromStrictConstructorRector::class);
    $rectorConfig->rule(RemoveUnusedVariableAssignRector::class);
    $rectorConfig->rule(ReturnTypeFromStrictScalarReturnExprRector::class);
    $rectorConfig->rule(ReturnTypeFromStrictNativeCallRector::class);

    // define sets of rules
    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_80,
        SetList::DEAD_CODE,
        SetList::CODE_QUALITY,
        SetList::CODING_STYLE,
    ]);

    $rectorConfig->phpVersion(PhpVersion::PHP_80);
};
