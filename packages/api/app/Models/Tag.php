<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @OA\Schema(
 *      schema="Tag",
 *      type="object",
 *      @OA\Property(property="id", type="integer", example=1),
 *      @OA\Property(property="name", type="string", example="tag name"),
 *      @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00Z"),
 *      @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00Z")
 * )
 */
class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function phrases()
    {
        return $this->belongsToMany(Phrase::class);
    }
}
