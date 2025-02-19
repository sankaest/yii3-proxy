<?php

declare(strict_types=1);

namespace Yiisoft\Proxy\Config;

final class ClassConfig
{
    public function __construct(
        public bool $isInterface,
        public string $namespace,
        /**
         * @var string[]
         */
        public array $modifiers,
        public string $name,
        public string $shortName,
        public string $parent,
        /**
         * @var string[]
         */
        public array $interfaces,
        /**
         * @var MethodConfig[]
         */
        public array $methods,
    ) {
    }
}
