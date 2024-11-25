<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'short_desc',
        'video_link',
        'author_id',
        'status',
        'publish_date',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_id' => 'integer',
        'publish_date' => 'timestamp',
        'deleted_at' => 'timestamp',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
