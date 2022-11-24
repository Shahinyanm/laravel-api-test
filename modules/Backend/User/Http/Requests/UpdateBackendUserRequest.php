<?php

namespace Modules\Backend\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Backend\User\Dto\UpdateBackendUserDto;

final class UpdateBackendUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
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

    public function toDto(): UpdateBackendUserDto
    {
        return new UpdateBackendUserDto(
            $this->route('id'),
            $this->input('password'),
            $this->input('full_name'),
        );
    }
}
