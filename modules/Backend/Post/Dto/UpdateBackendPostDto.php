<?php

namespace Modules\Backend\Post\Dto;

final class UpdateBackendPostDto
{
    public function __construct(
        public readonly int $id,
        public readonly string $title,
        public readonly string $description,
    ) {
        //
    }
}
