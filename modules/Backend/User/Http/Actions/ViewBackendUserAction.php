<?php

namespace Modules\Backend\User\Http\Actions;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Backend\User\Services\BackendUserQueryService;
use Infrastructure\Http\Resources\Backend\BackendUserResource;
use Modules\Backend\User\Http\Requests\ViewBackendUserRequest;

final class ViewBackendUserAction
{
    /**
     * @OA\Get(
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
     *              @OA\Property(property="data", ref="#/components/schemas/BackendUserSchema"),
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
    public function __invoke(ViewBackendUserRequest $request, BackendUserQueryService $service): JsonResource
    {
        $dto = $request->toDto();
        $user = $service->view($dto);

        return new BackendUserResource($user);
    }
}
