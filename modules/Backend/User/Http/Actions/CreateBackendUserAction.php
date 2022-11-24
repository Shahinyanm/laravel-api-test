<?php

namespace Modules\Backend\User\Http\Actions;

use Illuminate\Http\JsonResponse;
use Modules\Backend\User\Services\BackendUserCommandService;
use Modules\Backend\User\Http\Requests\CreateBackendUserRequest;

final class CreateBackendUserAction
{
    /**
     * @OA\Post(
     *      path="/backend/user",
     *      tags={"Backend - User"},
     *      security={
     *          {"passport": {}},
     *      },
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(property="email", type="string"),
     *              @OA\Property(property="password", type="string"),
     *              @OA\Property(property="full_name", type="string"),
     *          )
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Successful",
     *          @OA\JsonContent(
     *              type="object",
     *              ref="#/components/schemas/IdSchema",
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
    public function __invoke(CreateBackendUserRequest $request, BackendUserCommandService $service): JsonResponse
    {
        $dto = $request->toDto();
        $id = $service->create($dto);

        return response()->id($id, JsonResponse::HTTP_CREATED);
    }
}
