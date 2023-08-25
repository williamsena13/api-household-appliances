<?php

namespace App\Repositories;

use App\Models\Brand;

class BandRepository
{
    public function all()
    {
        return Band::all();
    }

    public function create($data)
    {
        return Band::create($data);
    }

    public function update($id, $data)
    {
        $band = Band::find($id);

        if (!$band) {
            return false; // Marca não encontrada
        }

        $band->update($data);
        return true; // Atualização bem-sucedida
    }

    public function find($id)
    {
        return Band::find($id);
    }

    public function delete($id)
    {
        $band = Band::find($id);

        if (!$band) {
            return false; // Marca não encontrada
        }

        $band->delete();
        return true; // Exclusão bem-sucedida
    }
}