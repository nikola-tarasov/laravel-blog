<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Override;

class Category extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'meta_desc'];

    #[Override]
    public function sluggable(): array
    {
        return [
            'slug'=>[
                'source'=>'title'
            ]
        ];
    }
}
