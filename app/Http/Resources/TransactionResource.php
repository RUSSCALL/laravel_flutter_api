<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'category_id' => $this->category_id,
            'category_name' => $this->category_name,
            'transaction_date' => Carbon::createFromFormat('Y-m-d' ,$this->transaction_date )->format('m/d/Y'),
            'amount' => number_format($this->amount / 100 , 2),
            'description' => $this->description,
        ];
    }
}
