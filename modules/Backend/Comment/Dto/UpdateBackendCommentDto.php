<?php

namespace Modules\Backend\Comment\Dto;

final class UpdateBackendCommentDto
{
    public function __construct(
        public readonly int $id,
        public readonly string $comment,
    ) {
        //
    }
}
