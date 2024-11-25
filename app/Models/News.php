<?php

namespace App\Models;

use Filament\Forms;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class News extends Model
{

    use HasFactory;
    use HasTranslations;

    public array $translatable = ['title', 'description', 'short_desc'];

    protected $fillable
        = [
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
    protected $casts
        = [
            'id'           => 'integer',
            'author_id'    => 'integer',
            'publish_date' => 'timestamp',
            'deleted_at'   => 'timestamp',
        ];

    public static function getForm(): array
    {
        return [
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('slug')
                ->required()
                ->maxLength(255),
            Forms\Components\Textarea::make('description')
                ->required()
                ->columnSpanFull(),
            Forms\Components\Textarea::make('short_desc')
                ->required()
                ->columnSpanFull(),
            Forms\Components\TextInput::make('video_link')
                ->required()
                ->maxLength(255),
            Forms\Components\Select::make('author_id')
                ->relationship('author', 'name')
                ->required(),
            Forms\Components\TextInput::make('status')
                ->required()
                ->maxLength(255),
            Forms\Components\DateTimePicker::make('publish_date')
                ->required(),
        ];
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
