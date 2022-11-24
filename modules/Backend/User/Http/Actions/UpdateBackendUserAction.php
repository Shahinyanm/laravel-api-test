<?php

namespace Modules\Backend\User\Http\Actions;

use Illuminate\Http\JsonResponse;
use Modules\Backend\User\Services\BackendUserCommandService;
use Modules\Backend\User\Http\Requests\UpdateBackendUserRequest;

final class UpdateBackendUserAction
{
    /**
     * @OA\Put(
     *      path="/backend/user/{id}",
     *      tags={"Backend - User"},
     *      security={
     *          {"passport": {}},
     *      },
     *      @OA\Parameter(
     *          name="id",
     *          parameter="id",
     *          @OA\Schema(type="integer"),
     *          in="path",
     *          required=true,
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="password", type="string"),
     *              @OA\Property(property="full_name", type="string"),
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful",
     *          @OA\JsonContent(
     *              type="object",
     *              ref="#/components/schemas/MessageSchema",
     *          ),
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Not Found",
     *          @OA\JsonContent(
     *              type="object",
     *              ref="#/components/schemas/ErrorMessageSchema",
     *          ),
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *          @OA\JsonContent(
     *              type="object",
     *              ref="#/components/schemas/ErrorMessageSchema",
     *          ),
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Validation Error",
     *          @OA\JsonContent(
     *              type="object",
     *              ref="#/components/schemas/ErrorBagSchema",
     *          ),
     *      ),
     * )
     */
    public function __invoke(UpdateBackendUserRequest $request, BackendUserCommandService $service): JsonResponse
    {
        $dto = $request->toDto();
        $service->update($dto);

        return response()->message('User has been successfully updated');
    }
}
