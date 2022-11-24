<?php

namespace Infrastructure\Http\Resources\Backend;

use Infrastructure\Eloquent\Models\User;
use Infrastructure\Http\Resources\JsonResource;
use Infrastructure\Http\Resources\Traits\ConvertsSchemaToArray;
use Infrastructure\Http\Schemas\Backend\BackendUserSchema;

/**
 * @property User $resource
 */
final class BackendUserResource extends JsonResource
{
    use ConvertsSchemaToArray;

    public function toSchema($request): BackendUserSchema
    {
        return new BackendUserSchema(
            $this->resource->id,
            $this->resource->email,
            $this->resource->full_name,
            BackendPostResource::schemas($this->resource->posts),
            BackendCommentResource::schemas($this->resource->comments),
            $this->resource->created_at,
        );
    }
}
