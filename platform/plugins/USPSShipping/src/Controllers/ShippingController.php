<?php

namespace Botble\USPSShipping\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Botble\USPSShipping\Services\USPSService;
use Illuminate\Http\Request;
use Exception;

class ShippingController extends BaseController
{
    protected $uspsService;

    public function __construct(USPSService $uspsService)
    {
        $this->uspsService = $uspsService;
    }

    public function calculateRate(Request $request)
    {
        try {
            // Extract package details from request
            $packageDetails = $request->all(); // Assuming package details are sent in the request body

            // Use $this->uspsService->calculateShippingRate($packageDetails) to calculate rate
            $rate = $this->uspsService->calculateShippingRate($packageDetails);

            // Return response
            return response()->json([
                'success' => true,
                'rate' => $rate,
            ]);
        } catch (Exception $e) {
            Log::error('Error calculating USPS shipping rate: ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to calculate shipping rate.',
            ], 500);
        }
    }
}