<?php

namespace Modules\Backend\Post\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Backend\Post\Dto\UpdateBackendPostDto;

final class UpdateBackendPostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
            ],
            'description' => [
                'required',
                'string',
            ],
        ];
    }

    public function toDto(): UpdateBackendPostDto
    {
        return new UpdateBackendPostDto(
            $this->route('id'),
            $this->input('title'),
            $this->input('description'),
        );
    }
}
