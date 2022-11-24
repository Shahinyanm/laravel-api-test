<?php

namespace Modules\Backend\Comment\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Infrastructure\Eloquent\Models\Comment;
use Modules\Backend\Comment\Dto\CreateBackendCommentDto;
use Modules\Backend\Comment\Dto\DeleteBackendCommentDto;
use Modules\Backend\Comment\Dto\UpdateBackendCommentDto;

final class BackendCommentCommandService
{
    public function create(CreateBackendCommentDto $request): int
    {
        return DB::transaction(static function () use ($request): int {
            $comment = Comment::create([
                'user_id' => $request->user_id,
                'post_id' => $request->post_id,
                'comment' => $request->comment,
            ]);

            return $comment->id;
        });
    }

    public function update(UpdateBackendCommentDto $request): void
    {
        DB::transaction(static function () use ($request): void {
            $comment = Comment::findOrFail($request->id);

            $comment->update([
                'comment' => $request->comment,
            ]);
        });
    }

    public function delete(DeleteBackendCommentDto $request): void
    {
        DB::transaction(static function () use ($request): void {
            $comment = Comment::findOrFail($request->id);

            $comment->delete();
        });
    }
}
