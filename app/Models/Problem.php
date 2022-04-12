<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
    /**
     *
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    /**
     *
     * return slug
     *
     * @var array<int, string>
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //category relationship
    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }

}
