<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Investment extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'bussiness' => $this->bussiness,
            'share_stock_amount' => (int) $this->share_stock_amount,
            'status_id' => (int) $this->status_id,
            'unit_value' => (int) $this->unit_value,
            'amount' => (int) $this->amount,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
