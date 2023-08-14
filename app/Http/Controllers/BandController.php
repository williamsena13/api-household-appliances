<?php

namespace App\Http\Controllers;

use App\Http\Requests\BandRequest;
use App\Http\Resources\BandResource;
use App\Services\BandService;
use App\Helpers\ApiResponse;
use Illuminate\Http\Request;

class BandController extends Controller
{
    protected $bandService;

    public function __construct(BandService $bandService)
    {
        $this->bandService = $bandService;
    }

    public function index()
    {
        $bands = $this->bandService->getAllBands();
        return ApiResponse::success(BandResource::collection($bands),  __('api.band_list'));
    }

    public function store(BandRequest $request)
    {
        $data = $request->validated();
        $band = $this->bandService->createBand($data);
        return ApiResponse::success(new BandResource($band), __('api.band_created'));
    }

    public function show($id)
    {
        $band = $this->bandService->findBand($id);

        if (!$band) {
            return ApiResponse::error(__('api.band_not_found'), 404);
        }

        return ApiResponse::success(new BandResource($band), __('api.band_found'));
    }

    public function update(BandRequest $request, $id)
    {
        $data = $request->validated();
        $band = $this->bandService->updateBand($id, $data);

        if (!$band) {
            return ApiResponse::error(__('api.band_not_found'), 404);
        }

        return ApiResponse::success(new BandResource($band), __('api.band_updated'));
    }

    public function destroy($id)
    {
        $result = $this->bandService->deleteBand($id);

        if (!$result) {
            return ApiResponse::error(__('api.band_not_found'), 404);
        }

        return ApiResponse::success(null, __('api.band_deleted'));
    }
}