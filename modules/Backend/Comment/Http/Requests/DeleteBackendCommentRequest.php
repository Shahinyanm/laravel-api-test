<?php

namespace Modules\Backend\Comment\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Backend\Comment\Dto\DeleteBackendCommentDto;

final class DeleteBackendCommentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            //
        ];
    }

    public function toDto(): DeleteBackendCommentDto
    {
        return new DeleteBackendCommentDto(
            $this->route('id'),
        );
    }
}
