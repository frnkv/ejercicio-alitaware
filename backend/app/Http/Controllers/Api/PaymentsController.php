<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PaymentResource;
use App\Services\PaymentsService;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    private PaymentsService $paymentsService;

    /**
     * PaymentsController constructor.
     * @param PaymentsService $paymentsService
     */
    public function __construct(
        PaymentsService $paymentsService
    ) {
        $this->paymentsService = $paymentsService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $with = $request->get('with', []);

        if (!is_array($with)) {
            $with = explode(',', $with);
        }

        $payments = $this->paymentsService->getAll($with);

        return PaymentResource::collection($payments);
    }
}
