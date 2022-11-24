<?php

namespace Modules\Backend\User\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Infrastructure\Eloquent\Models\User;
use Modules\Backend\User\Dto\CreateBackendUserDto;
use Modules\Backend\User\Dto\DeleteBackendUserDto;
use Modules\Backend\User\Dto\UpdateBackendUserDto;

final class BackendUserCommandService
{
    public function create(CreateBackendUserDto $request): int
    {
        return DB::transaction(static function () use ($request): int {
            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'full_name' => $request->full_name,
            ]);

            return $user->id;
        });
    }

    public function update(UpdateBackendUserDto $request): void
    {
        DB::transaction(static function () use ($request): void {
            $user = User::findOrFail($request->id);

            $user->update([
                'password' => Hash::make($request->password),
                'full_name' => $request->full_name,
            ]);
        });
    }

    public function delete(DeleteBackendUserDto $request): void
    {
        DB::transaction(static function () use ($request): void {
            $user = User::findOrFail($request->id);

            $user->delete();
        });
    }
}
