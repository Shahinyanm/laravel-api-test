<?php

namespace Modules\Backend\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Backend\User\Dto\ViewBackendUserDto;

final class ViewBackendUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            //
        ];
    }

    public function toDto(): ViewBackendUserDto
    {
        return new ViewBackendUserDto(
            $this->route('id'),
        );
    }
}
