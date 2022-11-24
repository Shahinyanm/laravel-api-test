<?php

namespace Modules\Backend\Post\Services;

use Infrastructure\Eloquent\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Modules\Backend\Post\Dto\ViewBackendPostDto;
use Modules\Backend\Post\Dto\QueryBackendPostDto;

final class BackendPostQueryService
{
    public function query(QueryBackendPostDto $request): Collection
    {
        return Post::query()->orderBy('id')->get();
    }

    public function view(ViewBackendPostDto $request): Post
    {
        return Post::findOrFail($request->id);
    }
}
