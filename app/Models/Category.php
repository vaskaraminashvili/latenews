<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    use HasTranslations;
    use HasSlug;

    public array $translatable = ['title', 'description'];
    protected $fillable = [
        'title',
        'slug',
        'description',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'array',
        'description' => 'array',
        'status' => 'boolean',
        'deleted_at' => 'timestamp',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->getSlugOptions();
        });
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(function () {
                return $this->getTranslation('title', 'ka');
            })
            ->saveSlugsTo('slug');
    }
}
