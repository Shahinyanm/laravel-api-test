<?php

namespace Modules\Backend\User\Services;

use Infrastructure\Eloquent\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Modules\Backend\User\Dto\ViewBackendUserDto;
use Modules\Backend\User\Dto\QueryBackendUserDto;

final class BackendUserQueryService
{
    public function query(QueryBackendUserDto $request): Collection
    {
        return User::query()->orderBy('id')->get();
    }

    public function view(ViewBackendUserDto $request): User
    {
        return User::findOrFail($request->id);
    }
}
