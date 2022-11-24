<?php

namespace Modules\Backend\Comment\Dto;

final class CreateBackendCommentDto
{
    public function __construct(
        public readonly int $user_id,
        public readonly int $post_id,
        public readonly string $comment,
    ) {
        //
    }
}
