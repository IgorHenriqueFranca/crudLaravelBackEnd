<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // Retorna apenas os campos pre definidos e caso não exista os campos subtendesse que não possui registros par retornar.
        try {
            $result = [
                'id' => $this->id,
                'name' => $this->name,
                'email' => $this->email
            ];
    
            return $result;
        } catch (\Exception $e) {
            return [];
        }
    }
}
