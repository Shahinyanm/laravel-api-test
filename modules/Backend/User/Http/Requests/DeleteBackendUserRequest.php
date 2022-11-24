<?php

namespace Modules\Backend\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Backend\User\Dto\DeleteBackendUserDto;

final class DeleteBackendUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            //
        ];
    }

    public function toDto(): DeleteBackendUserDto
    {
        return new DeleteBackendUserDto(
            $this->route('id'),
        );
    }
}
