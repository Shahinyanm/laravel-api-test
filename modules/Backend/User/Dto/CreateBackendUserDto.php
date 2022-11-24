<?php

namespace Modules\Backend\User\Dto;

final class CreateBackendUserDto
{
    public function __construct(
        public readonly string $email,
        public readonly string $password,
        public readonly string $full_name,
    ) {
        //
    }
}
