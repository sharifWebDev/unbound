<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\File;

class TourPackage extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tour_packages';

    protected $fillable = [
        'name',
        'slug',
        'unit_price',
        'discount_price',
        'sale_price',
        'booking_amount',
        'is_show_on_website',
        'is_featured',
        'is_popular_day_trips',
        'is_travellers_choice',
        'tour_activities',
        'from_date',
        'to_date',
        'tour_type_id',
        'duration',
        'group_size',
        'accommodation',
        'transportation',
        'meals',
        'fitness_level',
        'minimum_age',
        'language',
        'best_season',
        'guiding_method',
        'location',
        'travel_point_id',
        'max_altitude',
        'arrival_on',
        'departure_from',
        'sub_title',
        'intro',
        'tour_highlight',
        'tour_attraction',
        'map_image',
        'trip_notes',
        'faq',
        'reviews',
        'pickup_location',
        'dropoff_location',
        'feature_image',
        'thumbnail',
        'gallery_images',
        'video',
        'video_url',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'canonical_url',
        'meta_robots',
        'meta_img',
        'structured_data',
        'og_title',
        'og_description',
        'og_image',
        'twitter_title',
        'twitter_description',
        'twitter_image',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'is_show_on_website' => 'boolean',
        'is_featured' => 'boolean',
        'is_popular_day_trips' => 'boolean',
        'is_travellers_choice' => 'boolean',
        'tour_activities' => 'array',
        'gallery_images' => 'array',
        'structured_data' => 'array',
        'from_date' => 'date',
        'to_date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    /**
     * Relationships
     */
    public function tourType()
    {
        return $this->belongsTo(TourType::class, 'tour_type_id');
    }

    public function travelPoint()
    {
        return $this->belongsTo(TravelPoint::class, 'travel_point_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * Handle the image upload, ensure directory exists, and return the image path
     *
     * @param  UploadedFile  $file  The file to upload
     * @param  string  $type  The type of file to upload (e.g., image, logo)
     * @return string The path of the uploaded file
     */
    public function uploadImage(\Illuminate\Http\UploadedFile $file, $type = 'image')
    {
        // Define the directory path for storing files
        $directory = storage_path("app/public/tour_packages/{$type}");

        // Check if the directory exists, if not, create it
        if (! \Illuminate\Support\Facades\File::exists($directory)) {
            \Illuminate\Support\Facades\File::makeDirectory($directory, 0755, true);
        }

        // Generate a unique filename and store the file
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs("public/tour_packages/{$type}", $fileName);

        // Return the file path
        return $path;
    }
}
