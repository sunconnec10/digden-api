<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'text' => $this->text,
            'summary' => $this->summary,
            'image_url' => $this->image_url,
            'content_updated_date' => $this->updated_at->format('Y年m月d日'),
            'content_details' => ContentDetailResource::collection($this->content_details),
            'labels' => LabelResource::collection($this->labels),
        ];
    }
}
