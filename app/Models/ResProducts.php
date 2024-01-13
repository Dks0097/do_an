<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResProducts extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function restaurant(){
        return $this->belongsTo(ResCategory::class, 'rescat_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function scopeSearch($query)
    {
        if ($key = request()->key) {
            $query = $query->whereHas('restaurant', function ($query) use ($key) {
                $query->where('name', 'LIKE', '%' . $key . '%');
            })
                ->orwhere('name', 'like', '%' . $key . '%')
                ->orwhere('description', 'like', '%' . $key . '%')
                ->orWhere('unit_price', 'LIKE', '%' . $key . '%');
              
        } else {
            ResProducts::all();
        }
        return $query;
    }
}
