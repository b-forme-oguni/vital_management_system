<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VitalIndex extends JsonResource
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
      'data' => [
        'type' => $this->getTable(),
        'id' => $this->id,
        'attribute' => [
          'id' => $this->id,
          'day' => $this->weatherRecord->day,
          'weather' => $this->weatherRecord->weather,
          'body_temp' => $this->body_temp,
          'condition' => $this->condition,
          'mood' => $this->mood,
          'sleep' => $this->sleep,
          'breakfast' => $this->breakfast
        ],
      ],
      'links' => [
        'self' => url('/api/index/vitals/' . $this->id),
      ]
    ];
  }
}
