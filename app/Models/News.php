<?php

namespace App\Models;

use App\Enums\NewsStatus;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class News extends Model implements HasMedia
{

    use HasFactory;
    use HasTranslations;
    use HasSlug;
    use SoftDeletes;
    use InteractsWithMedia;

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
            'id' => 'integer',
            'author_id' => 'integer',
            'publish_date' => 'timestamp',
            'deleted_at' => 'timestamp',
        ];

    public static function getForm(): array
    {
        return [
            Forms\Components\Section::make()
                ->description('Create Something exiting')
                ->aside()
                ->schema([
                    Forms\Components\Select::make('category_id')
                        ->relationship('categories', 'title')
                        ->multiple()
                        ->preload(),
                    Forms\Components\Select::make('tag_id')
                        ->relationship('tags', 'title')
                        ->multiple()
                        ->preload(),
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('slug')
                        ->disabled()
                        ->maxLength(255),
                    Forms\Components\RichEditor::make('description')
                        ->columnSpanFull(),
                    Forms\Components\RichEditor::make('short_desc')
                        ->columnSpanFull(),
                    Forms\Components\TextInput::make('video_link')
                        ->maxLength(255),
                    Forms\Components\Select::make('author_id')
                        ->relationship('author', 'name')
                        ->required(),
                    Forms\Components\Select::make('status')
                        ->options(NewsStatus::class)
                        ->default(NewsStatus::NotActive),
                    Forms\Components\DateTimePicker::make('publish_date')
                        ->native(false)
                        ->seconds(false)
                        ->required(),
                    SpatieMediaLibraryFileUpload::make('img')
                        ->collection('news')
                        ->conversion('big-thumb')
                        ->conversion('card-thumb')
                        ->conversion('small-thumb')
                ])
        ];
    }

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

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }


    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('news')
            ->singleFile();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('big-thumb')
            ->width(1680)
            ->height(815)
            ->nonQueued();

        $this->addMediaConversion('card-thumb')
            ->width(633)
            ->height(470)
            ->nonQueued();

        $this->addMediaConversion('small-thumb')
            ->width(300)
            ->height(100)
            ->nonQueued();
    }

}
