<form method="POST" id="edittour_packagesForm" action="{{ route('admin.tour_packages.update', $query->id) }}"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="title">Title</label><br>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title', $query->title ?? '') }}" placeholder="Enter title..." id="edit_title"
                    required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="tour_includes">Tour_includes</label><br>
                <textarea name="tour_includes" class="form-control @error('tour_includes') is-invalid @enderror"
                    placeholder="Enter tour_includes..." id="edit_tour_includes" required>{{ old('tour_includes', $query->tour_includes ?? '') }}</textarea>
                @error('tour_includes')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="tour_not_includes">Tour_not_includes</label><br>
                <textarea name="tour_not_includes" class="form-control @error('tour_not_includes') is-invalid @enderror"
                    placeholder="Enter tour_not_includes..." id="edit_tour_not_includes" required>{{ old('tour_not_includes', $query->tour_not_includes ?? '') }}</textarea>
                @error('tour_not_includes')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="tour_type_id">Tour_type_id</label><br>
                <input type="number" name="tour_type_id" min="0"
                    class="form-control @error('tour_type_id') is-invalid @enderror"
                    value="{{ old('tour_type_id', $query->tour_type_id ?? '') }}" placeholder="Enter tour_type_id..."
                    id="edit_tour_type_id" required>
                @error('tour_type_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="minimum_age">Minimum_age</label><br>
                <input type="number" name="minimum_age" min="0"
                    class="form-control @error('minimum_age') is-invalid @enderror"
                    value="{{ old('minimum_age', $query->minimum_age ?? '') }}" placeholder="Enter minimum_age..."
                    id="edit_minimum_age" required>
                @error('minimum_age')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="transport_id">Transport_id</label><br>
                <input type="number" name="transport_id" min="0"
                    class="form-control @error('transport_id') is-invalid @enderror"
                    value="{{ old('transport_id', $query->transport_id ?? '') }}" placeholder="Enter transport_id..."
                    id="edit_transport_id" required>
                @error('transport_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="meal_id">Meal_id</label><br>
                <input type="number" name="meal_id" min="0"
                    class="form-control @error('meal_id') is-invalid @enderror"
                    value="{{ old('meal_id', $query->meal_id ?? '') }}" placeholder="Enter meal_id..."
                    id="edit_meal_id" required>
                @error('meal_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="accommodation_id">Accommodation_id</label><br>
                <input type="number" name="accommodation_id" min="0"
                    class="form-control @error('accommodation_id') is-invalid @enderror"
                    value="{{ old('accommodation_id', $query->accommodation_id ?? '') }}"
                    placeholder="Enter accommodation_id..." id="edit_accommodation_id" required>
                @error('accommodation_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="language_id">Language_id</label><br>
                <input type="number" name="language_id" min="0"
                    class="form-control @error('language_id') is-invalid @enderror"
                    value="{{ old('language_id', $query->language_id ?? '') }}" placeholder="Enter language_id..."
                    id="edit_language_id" required>
                @error('language_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="from_date">From_date</label><br>
                <input type="date" name="from_date" class="form-control @error('from_date') is-invalid @enderror"
                    value="{{ old('from_date', $query->from_date ?? '') }}" id="edit_from_date" required>
                @error('from_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="to_date">To_date</label><br>
                <input type="date" name="to_date" class="form-control @error('to_date') is-invalid @enderror"
                    value="{{ old('to_date', $query->to_date ?? '') }}" id="edit_to_date" required>
                @error('to_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="duration">Duration</label><br>
                <input type="text" name="duration" class="form-control @error('duration') is-invalid @enderror"
                    value="{{ old('duration', $query->duration ?? '') }}" placeholder="Enter duration..."
                    id="edit_duration" required>
                @error('duration')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="group_size">Group_size</label><br>
                <input type="number" name="group_size" min="0"
                    class="form-control @error('group_size') is-invalid @enderror"
                    value="{{ old('group_size', $query->group_size ?? '') }}" placeholder="Enter group_size..."
                    id="edit_group_size" required>
                @error('group_size')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="accommodation">Accommodation</label><br>
                <input type="text" name="accommodation"
                    class="form-control @error('accommodation') is-invalid @enderror"
                    value="{{ old('accommodation', $query->accommodation ?? '') }}"
                    placeholder="Enter accommodation..." id="edit_accommodation" required>
                @error('accommodation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="transportation">Transportation</label><br>
                <input type="text" name="transportation"
                    class="form-control @error('transportation') is-invalid @enderror"
                    value="{{ old('transportation', $query->transportation ?? '') }}"
                    placeholder="Enter transportation..." id="edit_transportation" required>
                @error('transportation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="meals">Meals</label><br>
                <input type="text" name="meals" class="form-control @error('meals') is-invalid @enderror"
                    value="{{ old('meals', $query->meals ?? '') }}" placeholder="Enter meals..." id="edit_meals"
                    required>
                @error('meals')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="fitness_level">Fitness_level</label><br>
                <input type="text" name="fitness_level"
                    class="form-control @error('fitness_level') is-invalid @enderror"
                    value="{{ old('fitness_level', $query->fitness_level ?? '') }}"
                    placeholder="Enter fitness_level..." id="edit_fitness_level" required>
                @error('fitness_level')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="min_age">Min_age</label><br>
                <input type="number" name="min_age" min="0"
                    class="form-control @error('min_age') is-invalid @enderror"
                    value="{{ old('min_age', $query->min_age ?? '') }}" placeholder="Enter min_age..."
                    id="edit_min_age" required>
                @error('min_age')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="guiding_method_id">Guiding_method_id</label><br>
                <input type="number" name="guiding_method_id" min="0"
                    class="form-control @error('guiding_method_id') is-invalid @enderror"
                    value="{{ old('guiding_method_id', $query->guiding_method_id ?? '') }}"
                    placeholder="Enter guiding_method_id..." id="edit_guiding_method_id" required>
                @error('guiding_method_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="guiding_method">Guiding_method</label><br>
                <input type="text" name="guiding_method"
                    class="form-control @error('guiding_method') is-invalid @enderror"
                    value="{{ old('guiding_method', $query->guiding_method ?? '') }}"
                    placeholder="Enter guiding_method..." id="edit_guiding_method" required>
                @error('guiding_method')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="language">Language</label><br>
                <input type="text" name="language" class="form-control @error('language') is-invalid @enderror"
                    value="{{ old('language', $query->language ?? '') }}" placeholder="Enter language..."
                    id="edit_language" required>
                @error('language')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="travel_point_id">Travel_point_id</label><br>
                <input type="number" name="travel_point_id" min="0"
                    class="form-control @error('travel_point_id') is-invalid @enderror"
                    value="{{ old('travel_point_id', $query->travel_point_id ?? '') }}"
                    placeholder="Enter travel_point_id..." id="edit_travel_point_id" required>
                @error('travel_point_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="season_id">Season_id</label><br>
                <input type="number" name="season_id" min="0"
                    class="form-control @error('season_id') is-invalid @enderror"
                    value="{{ old('season_id', $query->season_id ?? '') }}" placeholder="Enter season_id..."
                    id="edit_season_id" required>
                @error('season_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="best_season">Best_season</label><br>
                <input type="text" name="best_season"
                    class="form-control @error('best_season') is-invalid @enderror"
                    value="{{ old('best_season', $query->best_season ?? '') }}" placeholder="Enter best_season..."
                    id="edit_best_season" required>
                @error('best_season')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="departure_from_id">Departure_from_id</label><br>
                <input type="number" name="departure_from_id" min="0"
                    class="form-control @error('departure_from_id') is-invalid @enderror"
                    value="{{ old('departure_from_id', $query->departure_from_id ?? '') }}"
                    placeholder="Enter departure_from_id..." id="edit_departure_from_id" required>
                @error('departure_from_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="departure_from">Departure_from</label><br>
                <input type="text" name="departure_from"
                    class="form-control @error('departure_from') is-invalid @enderror"
                    value="{{ old('departure_from', $query->departure_from ?? '') }}"
                    placeholder="Enter departure_from..." id="edit_departure_from" required>
                @error('departure_from')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="arrival_on_id">Arrival_on_id</label><br>
                <input type="number" name="arrival_on_id" min="0"
                    class="form-control @error('arrival_on_id') is-invalid @enderror"
                    value="{{ old('arrival_on_id', $query->arrival_on_id ?? '') }}"
                    placeholder="Enter arrival_on_id..." id="edit_arrival_on_id" required>
                @error('arrival_on_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="arrival_on">Arrival_on</label><br>
                <input type="text" name="arrival_on"
                    class="form-control @error('arrival_on') is-invalid @enderror"
                    value="{{ old('arrival_on', $query->arrival_on ?? '') }}" placeholder="Enter arrival_on..."
                    id="edit_arrival_on" required>
                @error('arrival_on')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="max_altitude">Max_altitude</label><br>
                <input type="text" name="max_altitude"
                    class="form-control @error('max_altitude') is-invalid @enderror"
                    value="{{ old('max_altitude', $query->max_altitude ?? '') }}" placeholder="Enter max_altitude..."
                    id="edit_max_altitude" required>
                @error('max_altitude')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="location">Location</label><br>
                <input type="text" name="location" class="form-control @error('location') is-invalid @enderror"
                    value="{{ old('location', $query->location ?? '') }}" placeholder="Enter location..."
                    id="edit_location" required>
                @error('location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="feature_image">Feature_image</label><br>
                <input type="text" name="feature_image"
                    class="form-control @error('feature_image') is-invalid @enderror"
                    value="{{ old('feature_image', $query->feature_image ?? '') }}"
                    placeholder="Enter feature_image..." id="edit_feature_image" required>
                @error('feature_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="thumbnail">Thumbnail</label><br>
                <input type="file" name="thumbnail" id="thumbnail"
                    class="form-control @error('thumbnail') is-invalid @enderror"
                    value="{{ old('thumbnail', $query->thumbnail ?? '') }}">
                <img src="{{ asset('storage/' . $query->thumbnail) }}" alt="{{ $query->thumbnail }}"
                    height="40px" />
                @error('thumbnail')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="gallery_images">Gallery_images</label><br>
                <input type="text" name="gallery_images"
                    class="form-control @error('gallery_images') is-invalid @enderror"
                    value="{{ old('gallery_images', $query->gallery_images ?? '') }}"
                    placeholder="Enter gallery_images..." id="edit_gallery_images" required>
                @error('gallery_images')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="video">Video</label><br>
                <input type="text" name="video" class="form-control @error('video') is-invalid @enderror"
                    value="{{ old('video', $query->video ?? '') }}" placeholder="Enter video..." id="edit_video"
                    required>
                @error('video')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="video_url">Video_url</label><br>
                <input type="text" name="video_url" class="form-control @error('video_url') is-invalid @enderror"
                    value="{{ old('video_url', $query->video_url ?? '') }}" placeholder="Enter video_url..."
                    id="edit_video_url" required>
                @error('video_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="feedback_logs">Feedback_logs</label><br>
                <input type="text" name="feedback_logs"
                    class="form-control @error('feedback_logs') is-invalid @enderror"
                    value="{{ old('feedback_logs', $query->feedback_logs ?? '') }}"
                    placeholder="Enter feedback_logs..." id="edit_feedback_logs" required>
                @error('feedback_logs')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="unit_price">Unit_price</label><br>
                <input type="number" step="any" name="unit_price" min="0"
                    class="form-control @error('unit_price') is-invalid @enderror"
                    value="{{ old('unit_price', $query->unit_price ?? '') }}" placeholder="Enter unit_price..."
                    id="edit_unit_price" required>
                @error('unit_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="discount_type">Discount_type</label><br>
                <div class="flex inline-flex items-center space-x-4">
                    <input type="radio" name="discount_type" id="edit_discount_type_yes" value="1"
                        class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('discount_type') is-invalid @enderror"
                        {{ old('discount_type', $query->discount_type ?? '') == 1 ? 'checked' : '' }} checked>
                    <label for="edit_discount_type_yes">Discount_type Yes</label>
                    <input type="radio" name="discount_type" id="edit_discount_type_no" value="0"
                        class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('discount_type') is-invalid @enderror"
                        {{ old('discount_type', $query->discount_type ?? '') == 0 ? 'checked' : '' }}>
                    <label for="edit_discount_type_no">Discount_type No</label>
                </div>
                @error('discount_type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="discount">Discount</label><br>
                <input type="number" step="any" name="discount" min="0"
                    class="form-control @error('discount') is-invalid @enderror"
                    value="{{ old('discount', $query->discount ?? '') }}" placeholder="Enter discount..."
                    id="edit_discount" required>
                @error('discount')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="discount_price">Discount_price</label><br>
                <input type="number" step="any" name="discount_price" min="0"
                    class="form-control @error('discount_price') is-invalid @enderror"
                    value="{{ old('discount_price', $query->discount_price ?? '') }}"
                    placeholder="Enter discount_price..." id="edit_discount_price" required>
                @error('discount_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="sale_price">Sale_price</label><br>
                <input type="number" step="any" name="sale_price" min="0"
                    class="form-control @error('sale_price') is-invalid @enderror"
                    value="{{ old('sale_price', $query->sale_price ?? '') }}" placeholder="Enter sale_price..."
                    id="edit_sale_price" required>
                @error('sale_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="sub_title">Sub_title</label><br>
                <input type="text" name="sub_title" class="form-control @error('sub_title') is-invalid @enderror"
                    value="{{ old('sub_title', $query->sub_title ?? '') }}" placeholder="Enter sub_title..."
                    id="edit_sub_title" required>
                @error('sub_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="intro">Intro</label><br>
                <textarea name="intro" class="form-control @error('intro') is-invalid @enderror" placeholder="Enter intro..."
                    id="edit_intro" required>{{ old('intro', $query->intro ?? '') }}</textarea>
                @error('intro')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="highlight">Highlight</label><br>
                <textarea name="highlight" class="form-control @error('highlight') is-invalid @enderror"
                    placeholder="Enter highlight..." id="edit_highlight" required>{{ old('highlight', $query->highlight ?? '') }}</textarea>
                @error('highlight')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="attraction">Attraction</label><br>
                <textarea name="attraction" class="form-control @error('attraction') is-invalid @enderror"
                    placeholder="Enter attraction..." id="edit_attraction" required>{{ old('attraction', $query->attraction ?? '') }}</textarea>
                @error('attraction')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="location_image">Location_image</label><br>
                <input type="text" name="location_image"
                    class="form-control @error('location_image') is-invalid @enderror"
                    value="{{ old('location_image', $query->location_image ?? '') }}"
                    placeholder="Enter location_image..." id="edit_location_image" required>
                @error('location_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="trip_notes">Trip_notes</label><br>
                <textarea name="trip_notes" class="form-control @error('trip_notes') is-invalid @enderror"
                    placeholder="Enter trip_notes..." id="edit_trip_notes" required>{{ old('trip_notes', $query->trip_notes ?? '') }}</textarea>
                @error('trip_notes')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="faq">Faq</label><br>
                <textarea name="faq" class="form-control @error('faq') is-invalid @enderror" placeholder="Enter faq..."
                    id="edit_faq" required>{{ old('faq', $query->faq ?? '') }}</textarea>
                @error('faq')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="reviews">Reviews</label><br>
                <textarea name="reviews" class="form-control @error('reviews') is-invalid @enderror" placeholder="Enter reviews..."
                    id="edit_reviews" required>{{ old('reviews', $query->reviews ?? '') }}</textarea>
                @error('reviews')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="pickup_location">Pickup_location</label><br>
                <input type="text" name="pickup_location"
                    class="form-control @error('pickup_location') is-invalid @enderror"
                    value="{{ old('pickup_location', $query->pickup_location ?? '') }}"
                    placeholder="Enter pickup_location..." id="edit_pickup_location" required>
                @error('pickup_location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="dropoff_location">Dropoff_location</label><br>
                <input type="text" name="dropoff_location"
                    class="form-control @error('dropoff_location') is-invalid @enderror"
                    value="{{ old('dropoff_location', $query->dropoff_location ?? '') }}"
                    placeholder="Enter dropoff_location..." id="edit_dropoff_location" required>
                @error('dropoff_location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="pdf_url">Pdf_url</label><br>
                <input type="text" name="pdf_url" class="form-control @error('pdf_url') is-invalid @enderror"
                    value="{{ old('pdf_url', $query->pdf_url ?? '') }}" placeholder="Enter pdf_url..."
                    id="edit_pdf_url" required>
                @error('pdf_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="is_popular_day_trips">Is_popular_day_trips</label><br>
                <div class="flex inline-flex items-center space-x-4">
                    <input type="radio" name="is_popular_day_trips" id="edit_is_popular_day_trips_yes"
                        value="1"
                        class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_popular_day_trips') is-invalid @enderror"
                        {{ old('is_popular_day_trips', $query->is_popular_day_trips ?? '') == 1 ? 'checked' : '' }}
                        checked>
                    <label for="edit_is_popular_day_trips_yes">Is_popular_day_trips Yes</label>
                    <input type="radio" name="is_popular_day_trips" id="edit_is_popular_day_trips_no"
                        value="0"
                        class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_popular_day_trips') is-invalid @enderror"
                        {{ old('is_popular_day_trips', $query->is_popular_day_trips ?? '') == 0 ? 'checked' : '' }}>
                    <label for="edit_is_popular_day_trips_no">Is_popular_day_trips No</label>
                </div>
                @error('is_popular_day_trips')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="is_tour_by_traveller_choise">Is_tour_by_traveller_choise</label><br>
                <div class="flex inline-flex items-center space-x-4">
                    <input type="radio" name="is_tour_by_traveller_choise"
                        id="edit_is_tour_by_traveller_choise_yes" value="1"
                        class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_tour_by_traveller_choise') is-invalid @enderror"
                        {{ old('is_tour_by_traveller_choise', $query->is_tour_by_traveller_choise ?? '') == 1 ? 'checked' : '' }}
                        checked>
                    <label for="edit_is_tour_by_traveller_choise_yes">Is_tour_by_traveller_choise Yes</label>
                    <input type="radio" name="is_tour_by_traveller_choise" id="edit_is_tour_by_traveller_choise_no"
                        value="0"
                        class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_tour_by_traveller_choise') is-invalid @enderror"
                        {{ old('is_tour_by_traveller_choise', $query->is_tour_by_traveller_choise ?? '') == 0 ? 'checked' : '' }}>
                    <label for="edit_is_tour_by_traveller_choise_no">Is_tour_by_traveller_choise No</label>
                </div>
                @error('is_tour_by_traveller_choise')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="is_featured">Is_featured</label><br>
                <div class="flex inline-flex items-center space-x-4">
                    <input type="radio" name="is_featured" id="edit_is_featured_yes" value="1"
                        class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_featured') is-invalid @enderror"
                        {{ old('is_featured', $query->is_featured ?? '') == 1 ? 'checked' : '' }} checked>
                    <label for="edit_is_featured_yes">Is_featured Yes</label>
                    <input type="radio" name="is_featured" id="edit_is_featured_no" value="0"
                        class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_featured') is-invalid @enderror"
                        {{ old('is_featured', $query->is_featured ?? '') == 0 ? 'checked' : '' }}>
                    <label for="edit_is_featured_no">Is_featured No</label>
                </div>
                @error('is_featured')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="is_published">Is_published</label><br>
                <div class="flex inline-flex items-center space-x-4">
                    <input type="radio" name="is_published" id="edit_is_published_yes" value="1"
                        class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_published') is-invalid @enderror"
                        {{ old('is_published', $query->is_published ?? '') == 1 ? 'checked' : '' }} checked>
                    <label for="edit_is_published_yes">Is_published Yes</label>
                    <input type="radio" name="is_published" id="edit_is_published_no" value="0"
                        class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_published') is-invalid @enderror"
                        {{ old('is_published', $query->is_published ?? '') == 0 ? 'checked' : '' }}>
                    <label for="edit_is_published_no">Is_published No</label>
                </div>
                @error('is_published')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="published_date">Published_date</label><br>
                <input type="datetime-local" name="published_date"
                    class="form-control @error('published_date') is-invalid @enderror"
                    value="{{ old('published_date', $query->published_date ?? '') }}" id="edit_published_date"
                    required>
                @error('published_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="is_active">Is_active</label><br>
                <div class="flex inline-flex items-center space-x-4">
                    <input type="radio" name="is_active" id="edit_is_active_yes" value="1"
                        class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_active') is-invalid @enderror"
                        {{ old('is_active', $query->is_active ?? '') == 1 ? 'checked' : '' }} checked>
                    <label for="edit_is_active_yes">Is_active Yes</label>
                    <input type="radio" name="is_active" id="edit_is_active_no" value="0"
                        class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_active') is-invalid @enderror"
                        {{ old('is_active', $query->is_active ?? '') == 0 ? 'checked' : '' }}>
                    <label for="edit_is_active_no">Is_active No</label>
                </div>
                @error('is_active')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="meta_title">Meta_title</label><br>
                <input type="text" name="meta_title"
                    class="form-control @error('meta_title') is-invalid @enderror"
                    value="{{ old('meta_title', $query->meta_title ?? '') }}" placeholder="Enter meta_title..."
                    id="edit_meta_title" required>
                @error('meta_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="meta_description">Meta_description</label><br>
                <input type="text" name="meta_description"
                    class="form-control @error('meta_description') is-invalid @enderror"
                    value="{{ old('meta_description', $query->meta_description ?? '') }}"
                    placeholder="Enter meta_description..." id="edit_meta_description" required>
                @error('meta_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="meta_keyword">Meta_keyword</label><br>
                <input type="text" name="meta_keyword"
                    class="form-control @error('meta_keyword') is-invalid @enderror"
                    value="{{ old('meta_keyword', $query->meta_keyword ?? '') }}"
                    placeholder="Enter meta_keyword..." id="edit_meta_keyword" required>
                @error('meta_keyword')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="canonical_url">Canonical_url</label><br>
                <input type="text" name="canonical_url"
                    class="form-control @error('canonical_url') is-invalid @enderror"
                    value="{{ old('canonical_url', $query->canonical_url ?? '') }}"
                    placeholder="Enter canonical_url..." id="edit_canonical_url" required>
                @error('canonical_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="meta_robots">Meta_robots</label><br>
                <input type="text" name="meta_robots"
                    class="form-control @error('meta_robots') is-invalid @enderror"
                    value="{{ old('meta_robots', $query->meta_robots ?? '') }}" placeholder="Enter meta_robots..."
                    id="edit_meta_robots" required>
                @error('meta_robots')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="meta_img">Meta_img</label><br>
                <input type="text" name="meta_img" class="form-control @error('meta_img') is-invalid @enderror"
                    value="{{ old('meta_img', $query->meta_img ?? '') }}" placeholder="Enter meta_img..."
                    id="edit_meta_img" required>
                @error('meta_img')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="structured_data">Structured_data</label><br>
                <input type="text" name="structured_data"
                    class="form-control @error('structured_data') is-invalid @enderror"
                    value="{{ old('structured_data', $query->structured_data ?? '') }}"
                    placeholder="Enter structured_data..." id="edit_structured_data" required>
                @error('structured_data')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="og_title">Og_title</label><br>
                <input type="text" name="og_title" class="form-control @error('og_title') is-invalid @enderror"
                    value="{{ old('og_title', $query->og_title ?? '') }}" placeholder="Enter og_title..."
                    id="edit_og_title" required>
                @error('og_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="og_description">Og_description</label><br>
                <input type="text" name="og_description"
                    class="form-control @error('og_description') is-invalid @enderror"
                    value="{{ old('og_description', $query->og_description ?? '') }}"
                    placeholder="Enter og_description..." id="edit_og_description" required>
                @error('og_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="og_image">Og_image</label><br>
                <input type="text" name="og_image" class="form-control @error('og_image') is-invalid @enderror"
                    value="{{ old('og_image', $query->og_image ?? '') }}" placeholder="Enter og_image..."
                    id="edit_og_image" required>
                @error('og_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="twitter_title">Twitter_title</label><br>
                <input type="text" name="twitter_title"
                    class="form-control @error('twitter_title') is-invalid @enderror"
                    value="{{ old('twitter_title', $query->twitter_title ?? '') }}"
                    placeholder="Enter twitter_title..." id="edit_twitter_title" required>
                @error('twitter_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="twitter_description">Twitter_description</label><br>
                <input type="text" name="twitter_description"
                    class="form-control @error('twitter_description') is-invalid @enderror"
                    value="{{ old('twitter_description', $query->twitter_description ?? '') }}"
                    placeholder="Enter twitter_description..." id="edit_twitter_description" required>
                @error('twitter_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label class="" for="twitter_image">Twitter_image</label><br>
                <input type="text" name="twitter_image"
                    class="form-control @error('twitter_image') is-invalid @enderror"
                    value="{{ old('twitter_image', $query->twitter_image ?? '') }}"
                    placeholder="Enter twitter_image..." id="edit_twitter_image" required>
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
