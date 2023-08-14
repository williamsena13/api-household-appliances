<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BandResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'descricao' => $this->descricao,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}