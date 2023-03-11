<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\CodeQuality\Rector\ClassMethod\ReturnTypeFromStrictScalarReturnExprRector;
use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\DeadCode\Rector\Assign\RemoveUnusedVariableAssignRector;
use Rector\Php80\Rector\Class_\AnnotationToAttributeRector;
use Rector\Php80\Rector\Class_\ClassPropertyAssignToConstructorPromotionRector;
use Rector\Php80\Rector\FunctionLike\MixedTypeRector;
use Rector\Php80\Rector\FunctionLike\UnionTypesRector;
use Rector\Php81\Rector\ClassMethod\NewInInitializerRector;
use Rector\Php81\Rector\FunctionLike\IntersectionTypesRector;
use Rector\Php81\Rector\Property\ReadOnlyPropertyRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\Symfony\Set\SymfonyLevelSetList;
use Rector\Symfony\Set\SymfonySetList;
use Rector\Transform\Rector\New_\NewToConstructorInjectionRector;
use Rector\TypeDeclaration\Rector\ClassMethod\AddParamTypeFromPropertyTypeRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictNativeCallRector;
use Rector\TypeDeclaration\Rector\FunctionLike\AddParamTypeSplFixedArrayRector;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__.'/src',
        __DIR__.'/tests',
    ]);

    // register a single rule
//    $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);
//    $rectorConfig->rule(TypedPropertyFromStrictConstructorRector::class);
//    $rectorConfig->rule(RemoveUnusedVariableAssignRector::class);
//    $rectorConfig->rule(ReturnTypeFromStrictScalarReturnExprRector::class);
//    $rectorConfig->rule(ReturnTypeFromStrictNativeCallRector::class);
//    $rectorConfig->rule(MixedTypeRector::class);
//    $rectorConfig->rule(UnionTypesRector::class);
//    $rectorConfig->rule(IntersectionTypesRector::class);
//    $rectorConfig->rule(NewInInitializerRector::class);
//    $rectorConfig->rule(ReadOnlyPropertyRector::class);
//    $rectorConfig->rule(AddParamTypeFromPropertyTypeRector::class);
//    $rectorConfig->rule(AddParamTypeSplFixedArrayRector::class);
//
//    $rectorConfig->ruleWithConfiguration(ClassPropertyAssignToConstructorPromotionRector::class, [
//        ClassPropertyAssignToConstructorPromotionRector::INLINE_PUBLIC => false,
//    ]);

    // define sets of rules
    $rectorConfig->sets([
        SetList::DEAD_CODE,
        LevelSetList::UP_TO_PHP_81,
        SetList::PHP_81,
//        SetList::CODE_QUALITY,
//        SetList::CODING_STYLE,
//        SymfonyLevelSetList::UP_TO_SYMFONY_60,
        SymfonySetList::SYMFONY_CODE_QUALITY,
        SymfonySetList::SYMFONY_CONSTRUCTOR_INJECTION,
    ]);


//    $containerConfigurator->import();
//    $containerConfigurator->import();
//    $containerConfigurator->import();

    $rectorConfig->phpVersion(PhpVersion::PHP_81);
};
