<?php

declare(strict_types=1);

namespace Vkomar\OtusComposerPackage;

class CubeProcessor
{
    /**
     * @param int $i
     * @return int
     */
    public function getCube(int $i): int
    {
        return pow($i, 3);
    }
}
