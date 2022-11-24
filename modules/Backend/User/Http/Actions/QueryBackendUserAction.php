<?php

namespace Modules\Backend\User\Http\Actions;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Modules\Backend\User\Services\BackendUserQueryService;
use Infrastructure\Http\Resources\Backend\BackendUserResource;
use Modules\Backend\User\Http\Requests\QueryBackendUserRequest;

final class QueryBackendUserAction
{
    /**
     * @OA\Get(
     *      path="/backend/user",
     *      tags={"Backend - User"},
     *      security={
     *          {"passport": {}},
     *      },
     *      @OA\Response(
     *          response=200,
     *          description="Successful",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(ref="#/components/schemas/BackendUserSchema")
     *              ),
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
    public function __invoke(QueryBackendUserRequest $request, BackendUserQueryService $service): ResourceCollection
    {
        $dto = $request->toDto();
        $users = $service->query($dto);

        return BackendUserResource::collection($users);
    }
}
