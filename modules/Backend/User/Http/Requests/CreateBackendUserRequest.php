<?php

namespace Modules\Backend\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Backend\User\Dto\CreateBackendUserDto;

final class CreateBackendUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'string',
                'email',
            ],
            'password' => [
                'required',
                'string',
            ],
            'full_name' => [
                'required',
                'string',
            ],
        ];
    }

    public function toDto(): CreateBackendUserDto
    {
        return new CreateBackendUserDto(
            $this->input('email'),
            $this->input('password'),
            $this->input('full_name'),
        );
    }
}
