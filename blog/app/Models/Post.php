<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\isNull;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['image', 'slug', 'body', 'title', 'excerpt', 'created_at'];

    public function imageUrl(){
        $imageUrl = "";
        if (! is_null($this->image)) {
            $imagePath = public_path() . "/img/" . $this->image;
            if(file_exists($imagePath)) $imageUrl = asset('img/' . $this->image);
        }
        return $imageUrl;
    }
    public function date(){
        return $this->created_at->diffForHumans();
    }
    public function scopePublished($query)
    {
        return $query->where('created_at', "<=", Carbon::now());
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
}
