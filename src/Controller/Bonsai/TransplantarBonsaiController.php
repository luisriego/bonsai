<?php


namespace App\Controller\Bonsai;


use App\Services\TransplantarService;
use Symfony\Component\HttpFoundation\JsonResponse;

class TransplantarBonsaiController
{
    private TransplantarService $transplantarService;

    public function __construct(TransplantarService $transplantarService)
    {
        $this->transplantarService = $transplantarService;
    }

    public function __invoke(): JsonResponse
    {
        $transplantar = $this->transplantarService->transplantarBonsai();

        if (null === $transplantar) {
            return new JsonResponse(null, JsonResponse::HTTP_BAD_REQUEST);
        }

        return new JsonResponse($transplantar, JsonResponse::HTTP_OK);
    }
}
