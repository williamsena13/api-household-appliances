<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Http\Requests\BandRequest;
use App\Http\Resources\BandResource;
use Illuminate\Http\Request;

class BandController extends Controller
{
    public function index()
    {
        $bands = Band::all();
        return BandResource::collection($bands);
    }

    public function store(BandRequest $request)
    {
        $band = Band::create($request->validated());
        return new BandResource($band);
    }

    public function show(Band $band)
    {
        return new BandResource($band);
    }

    public function update(BandRequest $request, Band $band)
    {
        $band->update($request->validated());
        return new BandResource($band);
    }

    public function destroy(Band $band)
    {
        $band->delete();
        return response()->noContent();
    }
}