<?php

namespace Modules\Backend\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Backend\User\Dto\QueryBackendUserDto;

final class QueryBackendUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            //
        ];
    }

    public function toDto(): QueryBackendUserDto
    {
        return new QueryBackendUserDto(
            //
        );
    }
}
