<form method="POST" id="createtour_packagesForm" action="{{ route('admin.tour_packages.store') }}"
    enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="row">
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="title" class="">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title') }}" placeholder="Enter title..." id="create_title" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="tour_includes" class="">Tour_includes</label>
                <textarea name="tour_includes" class="form-control @error('tour_includes') is-invalid @enderror"
                    placeholder="Enter tour_includes..." id="create_tour_includes" required>{{ old('tour_includes') }}</textarea>
                @error('tour_includes')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="tour_not_includes" class="">Tour_not_includes</label>
                <textarea name="tour_not_includes" class="form-control @error('tour_not_includes') is-invalid @enderror"
                    placeholder="Enter tour_not_includes..." id="create_tour_not_includes" required>{{ old('tour_not_includes') }}</textarea>
                @error('tour_not_includes')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="tour_type_id" class="">Tour_type_id</label>
                <input type="number" name="tour_type_id" min="0"
                    class="form-control @error('tour_type_id') is-invalid @enderror" value="{{ old('tour_type_id') }}"
                    placeholder="Enter tour_type_id..." id="create_tour_type_id" required>
                @error('tour_type_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="minimum_age" class="">Minimum_age</label>
                <input type="number" name="minimum_age" min="0"
                    class="form-control @error('minimum_age') is-invalid @enderror" value="{{ old('minimum_age') }}"
                    placeholder="Enter minimum_age..." id="create_minimum_age" required>
                @error('minimum_age')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="transport_id" class="">Transport_id</label>
                <input type="number" name="transport_id" min="0"
                    class="form-control @error('transport_id') is-invalid @enderror" value="{{ old('transport_id') }}"
                    placeholder="Enter transport_id..." id="create_transport_id" required>
                @error('transport_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="meal_id" class="">Meal_id</label>
                <input type="number" name="meal_id" min="0"
                    class="form-control @error('meal_id') is-invalid @enderror" value="{{ old('meal_id') }}"
                    placeholder="Enter meal_id..." id="create_meal_id" required>
                @error('meal_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="accommodation_id" class="">Accommodation_id</label>
                <input type="number" name="accommodation_id" min="0"
                    class="form-control @error('accommodation_id') is-invalid @enderror"
                    value="{{ old('accommodation_id') }}" placeholder="Enter accommodation_id..."
                    id="create_accommodation_id" required>
                @error('accommodation_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="language_id" class="">Language_id</label>
                <input type="number" name="language_id" min="0"
                    class="form-control @error('language_id') is-invalid @enderror" value="{{ old('language_id') }}"
                    placeholder="Enter language_id..." id="create_language_id" required>
                @error('language_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="from_date" class="">From_date</label>
                <input type="date" name="from_date" class="form-control @error('from_date') is-invalid @enderror"
                    value="{{ old('from_date') }}" id="create_from_date" required>
                @error('from_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="to_date" class="">To_date</label>
                <input type="date" name="to_date" class="form-control @error('to_date') is-invalid @enderror"
                    value="{{ old('to_date') }}" id="create_to_date" required>
                @error('to_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="duration" class="">Duration</label>
                <input type="text" name="duration" class="form-control @error('duration') is-invalid @enderror"
                    value="{{ old('duration') }}" placeholder="Enter duration..." id="create_duration" required>
                @error('duration')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="group_size" class="">Group_size</label>
                <input type="number" name="group_size" min="0"
                    class="form-control @error('group_size') is-invalid @enderror" value="{{ old('group_size') }}"
                    placeholder="Enter group_size..." id="create_group_size" required>
                @error('group_size')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="accommodation" class="">Accommodation</label>
                <input type="text" name="accommodation"
                    class="form-control @error('accommodation') is-invalid @enderror"
                    value="{{ old('accommodation') }}" placeholder="Enter accommodation..."
                    id="create_accommodation" required>
                @error('accommodation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="transportation" class="">Transportation</label>
                <input type="text" name="transportation"
                    class="form-control @error('transportation') is-invalid @enderror"
                    value="{{ old('transportation') }}" placeholder="Enter transportation..."
                    id="create_transportation" required>
                @error('transportation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="meals" class="">Meals</label>
                <input type="text" name="meals" class="form-control @error('meals') is-invalid @enderror"
                    value="{{ old('meals') }}" placeholder="Enter meals..." id="create_meals" required>
                @error('meals')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="fitness_level" class="">Fitness_level</label>
                <input type="text" name="fitness_level"
                    class="form-control @error('fitness_level') is-invalid @enderror"
                    value="{{ old('fitness_level') }}" placeholder="Enter fitness_level..."
                    id="create_fitness_level" required>
                @error('fitness_level')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="min_age" class="">Min_age</label>
                <input type="number" name="min_age" min="0"
                    class="form-control @error('min_age') is-invalid @enderror" value="{{ old('min_age') }}"
                    placeholder="Enter min_age..." id="create_min_age" required>
                @error('min_age')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="guiding_method_id" class="">Guiding_method_id</label>
                <input type="number" name="guiding_method_id" min="0"
                    class="form-control @error('guiding_method_id') is-invalid @enderror"
                    value="{{ old('guiding_method_id') }}" placeholder="Enter guiding_method_id..."
                    id="create_guiding_method_id" required>
                @error('guiding_method_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="guiding_method" class="">Guiding_method</label>
                <input type="text" name="guiding_method"
                    class="form-control @error('guiding_method') is-invalid @enderror"
                    value="{{ old('guiding_method') }}" placeholder="Enter guiding_method..."
                    id="create_guiding_method" required>
                @error('guiding_method')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="language" class="">Language</label>
                <input type="text" name="language" class="form-control @error('language') is-invalid @enderror"
                    value="{{ old('language') }}" placeholder="Enter language..." id="create_language" required>
                @error('language')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="travel_point_id" class="">Travel_point_id</label>
                <input type="number" name="travel_point_id" min="0"
                    class="form-control @error('travel_point_id') is-invalid @enderror"
                    value="{{ old('travel_point_id') }}" placeholder="Enter travel_point_id..."
                    id="create_travel_point_id" required>
                @error('travel_point_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="season_id" class="">Season_id</label>
                <input type="number" name="season_id" min="0"
                    class="form-control @error('season_id') is-invalid @enderror" value="{{ old('season_id') }}"
                    placeholder="Enter season_id..." id="create_season_id" required>
                @error('season_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="best_season" class="">Best_season</label>
                <input type="text" name="best_season"
                    class="form-control @error('best_season') is-invalid @enderror" value="{{ old('best_season') }}"
                    placeholder="Enter best_season..." id="create_best_season" required>
                @error('best_season')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="departure_from_id" class="">Departure_from_id</label>
                <input type="number" name="departure_from_id" min="0"
                    class="form-control @error('departure_from_id') is-invalid @enderror"
                    value="{{ old('departure_from_id') }}" placeholder="Enter departure_from_id..."
                    id="create_departure_from_id" required>
                @error('departure_from_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="departure_from" class="">Departure_from</label>
                <input type="text" name="departure_from"
                    class="form-control @error('departure_from') is-invalid @enderror"
                    value="{{ old('departure_from') }}" placeholder="Enter departure_from..."
                    id="create_departure_from" required>
                @error('departure_from')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="arrival_on_id" class="">Arrival_on_id</label>
                <input type="number" name="arrival_on_id" min="0"
                    class="form-control @error('arrival_on_id') is-invalid @enderror"
                    value="{{ old('arrival_on_id') }}" placeholder="Enter arrival_on_id..."
                    id="create_arrival_on_id" required>
                @error('arrival_on_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="arrival_on" class="">Arrival_on</label>
                <input type="text" name="arrival_on"
                    class="form-control @error('arrival_on') is-invalid @enderror" value="{{ old('arrival_on') }}"
                    placeholder="Enter arrival_on..." id="create_arrival_on" required>
                @error('arrival_on')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="max_altitude" class="">Max_altitude</label>
                <input type="text" name="max_altitude"
                    class="form-control @error('max_altitude') is-invalid @enderror"
                    value="{{ old('max_altitude') }}" placeholder="Enter max_altitude..." id="create_max_altitude"
                    required>
                @error('max_altitude')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="location" class="">Location</label>
                <input type="text" name="location" class="form-control @error('location') is-invalid @enderror"
                    value="{{ old('location') }}" placeholder="Enter location..." id="create_location" required>
                @error('location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="feature_image" class="">Feature_image</label>
                <input type="text" name="feature_image"
                    class="form-control @error('feature_image') is-invalid @enderror"
                    value="{{ old('feature_image') }}" placeholder="Enter feature_image..."
                    id="create_feature_image" required>
                @error('feature_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="thumbnail" class="">Thumbnail</label>
                <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror"
                    id="create_thumbnail" required>
                @error('thumbnail')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="gallery_images" class="">Gallery_images</label>
                <input type="text" name="gallery_images"
                    class="form-control @error('gallery_images') is-invalid @enderror"
                    value="{{ old('gallery_images') }}" placeholder="Enter gallery_images..."
                    id="create_gallery_images" required>
                @error('gallery_images')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="video" class="">Video</label>
                <input type="text" name="video" class="form-control @error('video') is-invalid @enderror"
                    value="{{ old('video') }}" placeholder="Enter video..." id="create_video" required>
                @error('video')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="video_url" class="">Video_url</label>
                <input type="text" name="video_url" class="form-control @error('video_url') is-invalid @enderror"
                    value="{{ old('video_url') }}" placeholder="Enter video_url..." id="create_video_url" required>
                @error('video_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="feedback_logs" class="">Feedback_logs</label>
                <input type="text" name="feedback_logs"
                    class="form-control @error('feedback_logs') is-invalid @enderror"
                    value="{{ old('feedback_logs') }}" placeholder="Enter feedback_logs..."
                    id="create_feedback_logs" required>
                @error('feedback_logs')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="unit_price" class="">Unit_price</label>
                <input type="number" step="any" name="unit_price" min="0"
                    class="form-control @error('unit_price') is-invalid @enderror" value="{{ old('unit_price') }}"
                    placeholder="Enter unit_price..." id="create_unit_price" required>
                @error('unit_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="discount_type" class="">Discount_type</label>
                <div class="flex inline-flex items-center space-x-4"><label><input type="radio"
                            name="discount_type" value="1"
                            class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('discount_type') is-invalid @enderror">
                        Yes</label><label><input type="radio" name="discount_type" value="0"
                            class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('discount_type') is-invalid @enderror"
                            checked> No</label></div>
                @error('discount_type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="discount" class="">Discount</label>
                <input type="number" step="any" name="discount" min="0"
                    class="form-control @error('discount') is-invalid @enderror" value="{{ old('discount') }}"
                    placeholder="Enter discount..." id="create_discount" required>
                @error('discount')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="discount_price" class="">Discount_price</label>
                <input type="number" step="any" name="discount_price" min="0"
                    class="form-control @error('discount_price') is-invalid @enderror"
                    value="{{ old('discount_price') }}" placeholder="Enter discount_price..."
                    id="create_discount_price" required>
                @error('discount_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="sale_price" class="">Sale_price</label>
                <input type="number" step="any" name="sale_price" min="0"
                    class="form-control @error('sale_price') is-invalid @enderror" value="{{ old('sale_price') }}"
                    placeholder="Enter sale_price..." id="create_sale_price" required>
                @error('sale_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="sub_title" class="">Sub_title</label>
                <input type="text" name="sub_title" class="form-control @error('sub_title') is-invalid @enderror"
                    value="{{ old('sub_title') }}" placeholder="Enter sub_title..." id="create_sub_title" required>
                @error('sub_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="intro" class="">Intro</label>
                <textarea name="intro" class="form-control @error('intro') is-invalid @enderror" placeholder="Enter intro..."
                    id="create_intro" required>{{ old('intro') }}</textarea>
                @error('intro')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="highlight" class="">Highlight</label>
                <textarea name="highlight" class="form-control @error('highlight') is-invalid @enderror"
                    placeholder="Enter highlight..." id="create_highlight" required>{{ old('highlight') }}</textarea>
                @error('highlight')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="attraction" class="">Attraction</label>
                <textarea name="attraction" class="form-control @error('attraction') is-invalid @enderror"
                    placeholder="Enter attraction..." id="create_attraction" required>{{ old('attraction') }}</textarea>
                @error('attraction')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="location_image" class="">Location_image</label>
                <input type="text" name="location_image"
                    class="form-control @error('location_image') is-invalid @enderror"
                    value="{{ old('location_image') }}" placeholder="Enter location_image..."
                    id="create_location_image" required>
                @error('location_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="trip_notes" class="">Trip_notes</label>
                <textarea name="trip_notes" class="form-control @error('trip_notes') is-invalid @enderror"
                    placeholder="Enter trip_notes..." id="create_trip_notes" required>{{ old('trip_notes') }}</textarea>
                @error('trip_notes')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="faq" class="">Faq</label>
                <textarea name="faq" class="form-control @error('faq') is-invalid @enderror" placeholder="Enter faq..."
                    id="create_faq" required>{{ old('faq') }}</textarea>
                @error('faq')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="reviews" class="">Reviews</label>
                <textarea name="reviews" class="form-control @error('reviews') is-invalid @enderror" placeholder="Enter reviews..."
                    id="create_reviews" required>{{ old('reviews') }}</textarea>
                @error('reviews')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="pickup_location" class="">Pickup_location</label>
                <input type="text" name="pickup_location"
                    class="form-control @error('pickup_location') is-invalid @enderror"
                    value="{{ old('pickup_location') }}" placeholder="Enter pickup_location..."
                    id="create_pickup_location" required>
                @error('pickup_location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="dropoff_location" class="">Dropoff_location</label>
                <input type="text" name="dropoff_location"
                    class="form-control @error('dropoff_location') is-invalid @enderror"
                    value="{{ old('dropoff_location') }}" placeholder="Enter dropoff_location..."
                    id="create_dropoff_location" required>
                @error('dropoff_location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="pdf_url" class="">Pdf_url</label>
                <input type="text" name="pdf_url" class="form-control @error('pdf_url') is-invalid @enderror"
                    value="{{ old('pdf_url') }}" placeholder="Enter pdf_url..." id="create_pdf_url" required>
                @error('pdf_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="is_popular_day_trips" class="">Is_popular_day_trips</label>
                <div class="flex inline-flex items-center space-x-4"><label><input type="radio"
                            name="is_popular_day_trips" value="1"
                            class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_popular_day_trips') is-invalid @enderror">
                        Yes</label><label><input type="radio" name="is_popular_day_trips" value="0"
                            class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_popular_day_trips') is-invalid @enderror"
                            checked> No</label></div>
                @error('is_popular_day_trips')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="is_tour_by_traveller_choise" class="">Is_tour_by_traveller_choise</label>
                <div class="flex inline-flex items-center space-x-4"><label><input type="radio"
                            name="is_tour_by_traveller_choise" value="1"
                            class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_tour_by_traveller_choise') is-invalid @enderror">
                        Yes</label><label><input type="radio" name="is_tour_by_traveller_choise" value="0"
                            class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_tour_by_traveller_choise') is-invalid @enderror"
                            checked> No</label></div>
                @error('is_tour_by_traveller_choise')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="is_featured" class="">Is_featured</label>
                <div class="flex inline-flex items-center space-x-4"><label><input type="radio" name="is_featured"
                            value="1"
                            class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_featured') is-invalid @enderror">
                        Yes</label><label><input type="radio" name="is_featured" value="0"
                            class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_featured') is-invalid @enderror"
                            checked> No</label></div>
                @error('is_featured')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="is_published" class="">Is_published</label>
                <div class="flex inline-flex items-center space-x-4"><label><input type="radio" name="is_published"
                            value="1"
                            class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_published') is-invalid @enderror">
                        Yes</label><label><input type="radio" name="is_published" value="0"
                            class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_published') is-invalid @enderror"
                            checked> No</label></div>
                @error('is_published')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="published_date" class="">Published_date</label>
                <input type="datetime-local" name="published_date"
                    class="form-control @error('published_date') is-invalid @enderror"
                    value="{{ old('published_date') }}" id="create_published_date" required>
                @error('published_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="is_active" class="">Is_active</label>
                <div class="flex inline-flex items-center space-x-4"><label><input type="radio" name="is_active"
                            value="1"
                            class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_active') is-invalid @enderror">
                        Yes</label><label><input type="radio" name="is_active" value="0"
                            class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_active') is-invalid @enderror"
                            checked> No</label></div>
                @error('is_active')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="meta_title" class="">Meta_title</label>
                <input type="text" name="meta_title"
                    class="form-control @error('meta_title') is-invalid @enderror" value="{{ old('meta_title') }}"
                    placeholder="Enter meta_title..." id="create_meta_title" required>
                @error('meta_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="meta_description" class="">Meta_description</label>
                <input type="text" name="meta_description"
                    class="form-control @error('meta_description') is-invalid @enderror"
                    value="{{ old('meta_description') }}" placeholder="Enter meta_description..."
                    id="create_meta_description" required>
                @error('meta_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="meta_keyword" class="">Meta_keyword</label>
                <input type="text" name="meta_keyword"
                    class="form-control @error('meta_keyword') is-invalid @enderror"
                    value="{{ old('meta_keyword') }}" placeholder="Enter meta_keyword..." id="create_meta_keyword"
                    required>
                @error('meta_keyword')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="canonical_url" class="">Canonical_url</label>
                <input type="text" name="canonical_url"
                    class="form-control @error('canonical_url') is-invalid @enderror"
                    value="{{ old('canonical_url') }}" placeholder="Enter canonical_url..."
                    id="create_canonical_url" required>
                @error('canonical_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="meta_robots" class="">Meta_robots</label>
                <input type="text" name="meta_robots"
                    class="form-control @error('meta_robots') is-invalid @enderror"
                    value="{{ old('meta_robots') }}" placeholder="Enter meta_robots..." id="create_meta_robots"
                    required>
                @error('meta_robots')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="meta_img" class="">Meta_img</label>
                <input type="text" name="meta_img" class="form-control @error('meta_img') is-invalid @enderror"
                    value="{{ old('meta_img') }}" placeholder="Enter meta_img..." id="create_meta_img" required>
                @error('meta_img')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="structured_data" class="">Structured_data</label>
                <input type="text" name="structured_data"
                    class="form-control @error('structured_data') is-invalid @enderror"
                    value="{{ old('structured_data') }}" placeholder="Enter structured_data..."
                    id="create_structured_data" required>
                @error('structured_data')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="og_title" class="">Og_title</label>
                <input type="text" name="og_title" class="form-control @error('og_title') is-invalid @enderror"
                    value="{{ old('og_title') }}" placeholder="Enter og_title..." id="create_og_title" required>
                @error('og_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="og_description" class="">Og_description</label>
                <input type="text" name="og_description"
                    class="form-control @error('og_description') is-invalid @enderror"
                    value="{{ old('og_description') }}" placeholder="Enter og_description..."
                    id="create_og_description" required>
                @error('og_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="og_image" class="">Og_image</label>
                <input type="text" name="og_image" class="form-control @error('og_image') is-invalid @enderror"
                    value="{{ old('og_image') }}" placeholder="Enter og_image..." id="create_og_image" required>
                @error('og_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="twitter_title" class="">Twitter_title</label>
                <input type="text" name="twitter_title"
                    class="form-control @error('twitter_title') is-invalid @enderror"
                    value="{{ old('twitter_title') }}" placeholder="Enter twitter_title..."
                    id="create_twitter_title" required>
                @error('twitter_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="twitter_description" class="">Twitter_description</label>
                <input type="text" name="twitter_description"
                    class="form-control @error('twitter_description') is-invalid @enderror"
                    value="{{ old('twitter_description') }}" placeholder="Enter twitter_description..."
                    id="create_twitter_description" required>
                @error('twitter_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="twitter_image" class="">Twitter_image</label>
                <input type="text" name="twitter_image"
                    class="form-control @error('twitter_image') is-invalid @enderror"
                    value="{{ old('twitter_image') }}" placeholder="Enter twitter_image..."
                    id="create_twitter_image" required>
                @error('twitter_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 text-right">
            <a type="button" class="btn bg-danger" href="{{ route('admin.tour_packages.index') }}">Cancel</a>
            <button type="submit" id="submitButton" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
