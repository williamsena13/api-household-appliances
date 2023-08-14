<?php

namespace App\Services;

use App\Repositories\BandRepository;

class BandService
{
    protected $bandRepository;

    public function __construct(BandRepository $bandRepository)
    {
        $this->bandRepository = $bandRepository;
    }

    public function getAllBands()
    {
        return $this->bandRepository->all();
    }

    public function createBand($data)
    {
        return $this->bandRepository->create($data);
    }

    public function updateBand($id, $data)
    {
        return $this->bandRepository->update($id, $data);
    }

    public function findBand($id)
    {
        return $this->bandRepository->find($id);
    }

    public function deleteBand($id)
    {
        return $this->bandRepository->delete($id);
    }
}