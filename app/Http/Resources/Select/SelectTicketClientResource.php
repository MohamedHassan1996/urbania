<?php

namespace App\Http\Resources\Select;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SelectTicketClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "value" => $this->id,
            "label" => $this->firstname ? $this->firstname . " " . $this->lastname : $this->company_name
        ];
    }
}
