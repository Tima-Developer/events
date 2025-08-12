<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'title'         => $this->title,
            'description'   => $this->description,
            'event_date'    => $this->event_date,
            'created_at'    => $this->created_at,
            'address'       => $this->address,
            'contacts'      => $this->contacts,
            'image'         => asset(Storage::url($this->image)),
            'original_link' => $this->original_link,
        ];
    }
}
