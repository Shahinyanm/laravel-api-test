<?php

namespace Modules\Backend\Post\Dto;

final class CreateBackendPostDto
{
    public function __construct(
        public readonly int $user_id,
        public readonly string $title,
        public readonly string $description,
    ) {
        //
    }
}
