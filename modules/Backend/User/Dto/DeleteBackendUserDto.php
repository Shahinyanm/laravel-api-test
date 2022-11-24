<?php

namespace Modules\Backend\User\Dto;

final class DeleteBackendUserDto
{
    public function __construct(
        public readonly int $id,
    ) {
        //
    }
}
