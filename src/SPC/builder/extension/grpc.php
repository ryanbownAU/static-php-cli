<?php

declare(strict_types=1);

namespace SPC\builder\extension;

use SPC\builder\Extension;
use SPC\util\CustomExt;

#[CustomExt('grpc')]
class grpc extends Extension
{
    public function patchBeforeMake(): bool
    {
        return false;
    }

    public function getUnixConfigureArg(): string
    {
        return '';
    }
}
