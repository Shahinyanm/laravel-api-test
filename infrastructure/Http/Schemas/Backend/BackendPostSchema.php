<?php

namespace Infrastructure\Http\Schemas\Backend;

use Infrastructure\Http\Schemas\AbstractSchema;

/**
 * @OA\Schema(schema="BackendPostSchema", type="object")
 */
final class BackendPostSchema extends AbstractSchema
{
    public function __construct(
        /** @OA\Property() */
        public int $id,
        /** @OA\Property() */
        public int $user_id,
        /** @OA\Property() */
        public string $title,
        /** @OA\Property() */
        public string $description,
        /** @OA\Property(type="array", @OA\Items(ref="#/components/schemas/BackendCommentSchema")) */
        public ?array $comments,
        /** @OA\Property() */
        public ?string $created_at,
    ) {
        //
    }
}
