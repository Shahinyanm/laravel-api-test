<?php

namespace Modules\Backend\Post\Dto;

final class DeleteBackendPostDto
{
    public function __construct(
        public readonly int $id,
    ) {
        //
    }
}
