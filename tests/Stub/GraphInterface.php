<?php

declare(strict_types=1);

namespace Yiisoft\Proxy\Tests\Stub;

interface GraphInterface
{
    public function nodesCount(int $previousNodesCount): int;

    public function getGraphInstance(): self;

    public function makeNewGraph(): self;
}
