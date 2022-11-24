<?php

namespace Modules\Backend\Comment\Services;

use Infrastructure\Eloquent\Models\Comment;
use Illuminate\Database\Eloquent\Collection;
use Modules\Backend\Comment\Dto\ViewBackendCommentDto;
use Modules\Backend\Comment\Dto\QueryBackendCommentDto;

final class BackendCommentQueryService
{
    public function query(QueryBackendCommentDto $request): Collection
    {
        return Comment::query()->orderBy('id')->get();
    }

    public function view(ViewBackendCommentDto $request): Comment
    {
        return Comment::findOrFail($request->id);
    }
}
