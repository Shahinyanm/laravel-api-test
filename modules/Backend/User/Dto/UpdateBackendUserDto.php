<?php

namespace Modules\Backend\User\Dto;

final class UpdateBackendUserDto
{
    public function __construct(
        public readonly int $id,
        public readonly string $password,
        public readonly string $full_name,
    ) {
        //
    }
}
