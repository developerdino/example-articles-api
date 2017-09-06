<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PeopleResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type'       => 'people',
            'id'         => (string)$this->id,
            'attributes' => [
                'first-name' => $this->first_name,
                'last-name'  => $this->last_name,
                'twitter'    => $this->twitter,
            ],
            'links'      => [
                'self' => route('authors.show', ['authors' => $this->id]),
            ],
        ];
    }
}
