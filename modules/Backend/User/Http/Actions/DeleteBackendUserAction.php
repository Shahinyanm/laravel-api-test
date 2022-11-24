<?php

namespace Modules\Backend\User\Http\Actions;

use Illuminate\Http\JsonResponse;
use Modules\Backend\User\Services\BackendUserCommandService;
use Modules\Backend\User\Http\Requests\DeleteBackendUserRequest;

final class DeleteBackendUserAction
{
    /**
     * @OA\Delete(
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
     * )
     */
    public function __invoke(DeleteBackendUserRequest $request, BackendUserCommandService $service): JsonResponse
    {
        $dto = $request->toDto();
        $service->delete($dto);

        return response()->message('User has been successfully deleted');
    }
}
