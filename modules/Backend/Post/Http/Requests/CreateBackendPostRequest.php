<?php

namespace Modules\Backend\Post\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Backend\Post\Dto\CreateBackendPostDto;

final class CreateBackendPostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => [
                'required',
                'int',
                'exists:users,id',
            ],
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

    public function toDto(): CreateBackendPostDto
    {
        return new CreateBackendPostDto(
            $this->input('user_id'),
            $this->input('title'),
            $this->input('description'),
        );
    }
}
