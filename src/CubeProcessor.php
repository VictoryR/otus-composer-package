<?php

declare(strict_types=1);

namespace Vkomar\OtusComposerPackage;

class CubeProcessor
{
    public function getCube(int $i): int
    {
        return pow($i, 3);
    }
}
