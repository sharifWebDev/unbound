<?php

namespace App\Services\Admin;

use App\Models\TourPackage;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class TourPackageService
{
    public function get(Request $request): LengthAwarePaginator
    {
        $length = $request->input('length', 10);
        $search = $request->input('search');
        $status = $request->input('status');

        $sortColumnIndex = $request->input('order.0.column');
        $sortDirection = $request->input('order.0.dir', 'desc');

        $columns = [
            0 => 'id',
            1 => 'title',
            2 => 'slug',
            3 => 'tour_includes',
            4 => 'tour_not_includes',
            5 => 'tour_type_id',
            6 => 'minimum_age',
            7 => 'transport_id',
            8 => 'meal_id',
            9 => 'accommodation_id',
            10 => 'language_id',
            11 => 'from_date',
            12 => 'to_date',
            13 => 'duration',
            14 => 'group_size',
            15 => 'accommodation',
            16 => 'transportation',
            17 => 'meals',
            18 => 'fitness_level',
            19 => 'min_age',
            20 => 'guiding_method_id',
            21 => 'guiding_method',
            22 => 'language',
            23 => 'travel_point_id',
            24 => 'season_id',
            25 => 'best_season',
            26 => 'departure_from_id',
            27 => 'departure_from',
            28 => 'arrival_on_id',
            29 => 'arrival_on',
            30 => 'max_altitude',
            31 => 'location',
            32 => 'feature_image',
            33 => 'thumbnail',
            34 => 'gallery_images',
            35 => 'video',
            36 => 'video_url',
            37 => 'feedback_logs',
            38 => 'unit_price',
            39 => 'discount_type',
            40 => 'discount',
            41 => 'discount_price',
            42 => 'sale_price',
            43 => 'sub_title',
            44 => 'intro',
            45 => 'highlight',
            46 => 'attraction',
            47 => 'location_image',
            48 => 'trip_notes',
            49 => 'faq',
            50 => 'reviews',
            51 => 'pickup_location',
            52 => 'dropoff_location',
            53 => 'pdf_url',
            54 => 'is_popular_day_trips',
            55 => 'is_tour_by_traveller_choise',
            56 => 'is_featured',
            57 => 'is_published',
            58 => 'published_date',
            59 => 'is_active',
            60 => 'meta_title',
            61 => 'meta_description',
            62 => 'meta_keyword',
            63 => 'canonical_url',
            64 => 'meta_robots',
            65 => 'meta_img',
            66 => 'structured_data',
            67 => 'og_title',
            68 => 'og_description',
            69 => 'og_image',
            70 => 'twitter_title',
            71 => 'twitter_description',
            72 => 'twitter_image',
            73 => 'created_by',
            74 => 'updated_by',
            75 => 'created_at',
            76 => 'updated_at',
            77 => 'deleted_at',
        ];

        $sortColumn = $columns[$sortColumnIndex] ?? 'id';

        $query = TourPackage::query();

        if ($search && is_string($search)) {
            $query->where(function ($q) use ($search) {
                foreach ((new TourPackage)->getFillable() as $column) {
                    $q->orWhere($column, 'like', "%{$search}%");
                }
            });
        }

        if ($status) {
            $query->where('status', $status);
        }

        $query->orderBy($sortColumn, $sortDirection);

        if (strtolower($length) == -1) {
            $all = $query->get()->count();

            return $query->paginate($all);
        }

        return $query->paginate($length);
    }

    /**
     * Get all Teams for form dropdowns.
     */
    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return TourPackage::all();
    }

    public function find(int $id): TourPackage
    {
        return TourPackage::findOrFail($id);
    }

    public function store(array $data): TourPackage
    {
        $data['created_by'] = auth()->id();
        $data['slug'] = Str::slug(reset($data) ?? '');

        return TourPackage::create($data);
    }

    public function update(int $id, array $data): TourPackage
    {
        $tour_package = $this->find($id);

        $data['slug'] = Str::slug(reset($data) ?? '');

        $data['updated_by'] = auth()->id();

        $tour_package->update($data);

        return $tour_package;
    }

    public function delete(int $id): bool
    {
        $tour_package = $this->find($id);

        return $tour_package->delete();
    }
}
