<?php

declare(strict_types=1);

namespace LaminasTest\ServiceManager\TestAsset;

final class FactoryObject
{
    /**
     * @param mixed $dependency
     */
    public function __construct(public $dependency)
    {
    }
}
