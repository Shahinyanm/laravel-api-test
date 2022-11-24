<?php

namespace Modules\Backend\Post\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Backend\Post\Dto\DeleteBackendPostDto;

final class DeleteBackendPostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            //
        ];
    }

    public function toDto(): DeleteBackendPostDto
    {
        return new DeleteBackendPostDto(
            $this->route('id'),
        );
    }
}
