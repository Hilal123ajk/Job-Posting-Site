<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['company','title','user_id','email','tags','website','description','logo'];

    public function scopeByTags($query, array $paramsPassed)
    {
        $query->where('tags', 'like', '%' . request('tag') . '%');

        if($paramsPassed['search'] ?? false)
        {
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
