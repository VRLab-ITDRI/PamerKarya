<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Clockwork\Storage\Search;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];
    protected $with = ['category', 'user'];
    protected $fillable = ['views', 'title', 'slug', 'category_id', 'user_id', 'image', 'image2', 'image3', 'image4', 'video', 'slogan', 'body', 'excerpt', 'views_count'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query,$search){
            return $query->where(function($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                            ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['category'] ?? false, function($query,$category){
            return $query->whereHas('category',function($query) use ($category){
                $query ->where('slug',$category);
            });
        });

        $query->when($filters['user'] ?? false , fn($query,$user)=>
            $query->whereHas('user',fn($query)=>
                $query->where('username', $user)
            )    
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function getViewsCountAttribute()
    {
        return $this->attributes['views_count'];
    }

    
}
