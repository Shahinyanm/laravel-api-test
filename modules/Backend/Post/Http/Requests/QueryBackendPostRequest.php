<?php

namespace Modules\Backend\Post\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Backend\Post\Dto\QueryBackendPostDto;

final class QueryBackendPostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            //
        ];
    }

    public function toDto(): QueryBackendPostDto
    {
        return new QueryBackendPostDto(
            //
        );
    }
}
