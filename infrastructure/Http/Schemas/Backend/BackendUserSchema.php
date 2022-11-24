<?php

namespace Infrastructure\Http\Schemas\Backend;

use Infrastructure\Http\Schemas\AbstractSchema;

/**
 * @OA\Schema(schema="BackendUserSchema", type="object")
 */
final class BackendUserSchema extends AbstractSchema
{
    public function __construct(
        /** @OA\Property() */
        public int $id,
        /** @OA\Property() */
        public string $email,
        /** @OA\Property() */
        public string $full_name,
        /** @OA\Property(type="array", @OA\Items(ref="#/components/schemas/BackendPostSchema")) */
        public ?array $posts,
        /** @OA\Property(type="array", @OA\Items(ref="#/components/schemas/BackendCommentSchema")) */
        public ?array $comments,
        /** @OA\Property() */
        public ?string $created_at,
    ) {
        //
    }
}
