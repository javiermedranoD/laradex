<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{   
    protected $fillable = ['name', 'avatar', 'description', 'slug'];
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
