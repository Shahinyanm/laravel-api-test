<?php

namespace Modules\Backend\Comment\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Backend\Comment\Dto\UpdateBackendCommentDto;

final class UpdateBackendCommentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'comment' => [
                'required',
                'string',
            ],
        ];
    }

    public function toDto(): UpdateBackendCommentDto
    {
        return new UpdateBackendCommentDto(
            $this->route('id'),
            $this->input('comment'),
        );
    }
}
