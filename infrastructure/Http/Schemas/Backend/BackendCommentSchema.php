<?php

namespace Infrastructure\Http\Schemas\Backend;

use Infrastructure\Http\Schemas\AbstractSchema;

/**
 * @OA\Schema(schema="BackendCommentSchema", type="object")
 */
final class BackendCommentSchema extends AbstractSchema
{
    public function __construct(
        /** @OA\Property() */
        public int $id,
        /** @OA\Property() */
        public int $user_id,
        /** @OA\Property() */
        public int $post_id,
        /** @OA\Property() */
        public string $comment,
        /** @OA\Property() */
        public ?string $created_at,
    ) {
        //
    }
}
