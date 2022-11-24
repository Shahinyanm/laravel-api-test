<?php

namespace Modules\Backend\Comment\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Backend\Comment\Dto\CreateBackendCommentDto;

final class CreateBackendCommentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => [
                'required',
                'int',
                'exists:users,id',
            ],
            'post_id' => [
                'required',
                'int',
                'exists:posts,id',
            ],
            'comment' => [
                'required',
                'string',
            ],
        ];
    }

    public function toDto(): CreateBackendCommentDto
    {
        return new CreateBackendCommentDto(
            $this->input('user_id'),
            $this->input('post_id'),
            $this->input('comment'),
        );
    }
}
