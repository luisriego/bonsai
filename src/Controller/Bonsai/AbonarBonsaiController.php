<?php


namespace App\Controller\Bonsai;



use App\Services\AbonarService;
use Symfony\Component\HttpFoundation\JsonResponse;

class AbonarBonsaiController
{
    private AbonarService $abonarService;

    public function __construct(AbonarService $abonarService)
    {
        $this->abonarService = $abonarService;
    }

    public function __invoke(): JsonResponse
    {
        $abono = $this->abonarService->abonarBonsai();

        if (null === $abono) {
            return new JsonResponse(null, JsonResponse::HTTP_BAD_REQUEST);
        }

        return new JsonResponse($abono, JsonResponse::HTTP_OK);
    }
}
