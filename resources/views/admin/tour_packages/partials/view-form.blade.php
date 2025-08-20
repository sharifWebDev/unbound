<form>
    <div class="row">
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="title" class="">Title</label><br><input type="text" name="title"
                    class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title', $query->title ?? '') }}" placeholder="Enter title..." id="view_title" disabled>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="tour_includes" class="">Tour_includes</label><br>
                <textarea name="tour_includes" class="form-control @error('tour_includes') is-invalid @enderror"
                    placeholder="Enter tour_includes..." id="view_tour_includes" disabled>{{ old('tour_includes', $query->tour_includes ?? '') }}</textarea>
                @error('tour_includes')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="tour_not_includes" class="">Tour_not_includes</label><br>
                <textarea name="tour_not_includes" class="form-control @error('tour_not_includes') is-invalid @enderror"
                    placeholder="Enter tour_not_includes..." id="view_tour_not_includes" disabled>{{ old('tour_not_includes', $query->tour_not_includes ?? '') }}</textarea>
                @error('tour_not_includes')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="tour_type_id" class="">Tour_type_id</label><br><input type="number"
                    name="tour_type_id" min="0" class="form-control @error('tour_type_id') is-invalid @enderror"
                    value="{{ old('tour_type_id', $query->tour_type_id ?? '') }}" placeholder="Enter tour_type_id..."
                    id="view_tour_type_id" disabled>
                @error('tour_type_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="minimum_age" class="">Minimum_age</label><br><input type="number" name="minimum_age"
                    min="0" class="form-control @error('minimum_age') is-invalid @enderror"
                    value="{{ old('minimum_age', $query->minimum_age ?? '') }}" placeholder="Enter minimum_age..."
                    id="view_minimum_age" disabled>
                @error('minimum_age')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="transport_id" class="">Transport_id</label><br><input type="number"
                    name="transport_id" min="0" class="form-control @error('transport_id') is-invalid @enderror"
                    value="{{ old('transport_id', $query->transport_id ?? '') }}" placeholder="Enter transport_id..."
                    id="view_transport_id" disabled>
                @error('transport_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="meal_id" class="">Meal_id</label><br><input type="number" name="meal_id"
                    min="0" class="form-control @error('meal_id') is-invalid @enderror"
                    value="{{ old('meal_id', $query->meal_id ?? '') }}" placeholder="Enter meal_id..."
                    id="view_meal_id" disabled>
                @error('meal_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="accommodation_id" class="">Accommodation_id</label><br><input type="number"
                    name="accommodation_id" min="0"
                    class="form-control @error('accommodation_id') is-invalid @enderror"
                    value="{{ old('accommodation_id', $query->accommodation_id ?? '') }}"
                    placeholder="Enter accommodation_id..." id="view_accommodation_id" disabled>
                @error('accommodation_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="language_id" class="">Language_id</label><br><input type="number" name="language_id"
                    min="0" class="form-control @error('language_id') is-invalid @enderror"
                    value="{{ old('language_id', $query->language_id ?? '') }}" placeholder="Enter language_id..."
                    id="view_language_id" disabled>
                @error('language_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="from_date" class="">From_date</label><br><input type="date" name="from_date"
                    class="form-control @error('from_date') is-invalid @enderror"
                    value="{{ old('from_date', $query->from_date ?? '') }}" id="view_from_date" disabled>
                @error('from_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="to_date" class="">To_date</label><br><input type="date" name="to_date"
                    class="form-control @error('to_date') is-invalid @enderror"
                    value="{{ old('to_date', $query->to_date ?? '') }}" id="view_to_date" disabled>
                @error('to_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="duration" class="">Duration</label><br><input type="text" name="duration"
                    class="form-control @error('duration') is-invalid @enderror"
                    value="{{ old('duration', $query->duration ?? '') }}" placeholder="Enter duration..."
                    id="view_duration" disabled>
                @error('duration')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="group_size" class="">Group_size</label><br><input type="number" name="group_size"
                    min="0" class="form-control @error('group_size') is-invalid @enderror"
                    value="{{ old('group_size', $query->group_size ?? '') }}" placeholder="Enter group_size..."
                    id="view_group_size" disabled>
                @error('group_size')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="accommodation" class="">Accommodation</label><br><input type="text"
                    name="accommodation" class="form-control @error('accommodation') is-invalid @enderror"
                    value="{{ old('accommodation', $query->accommodation ?? '') }}"
                    placeholder="Enter accommodation..." id="view_accommodation" disabled>
                @error('accommodation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="transportation" class="">Transportation</label><br><input type="text"
                    name="transportation" class="form-control @error('transportation') is-invalid @enderror"
                    value="{{ old('transportation', $query->transportation ?? '') }}"
                    placeholder="Enter transportation..." id="view_transportation" disabled>
                @error('transportation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="meals" class="">Meals</label><br><input type="text" name="meals"
                    class="form-control @error('meals') is-invalid @enderror"
                    value="{{ old('meals', $query->meals ?? '') }}" placeholder="Enter meals..." id="view_meals"
                    disabled>
                @error('meals')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="fitness_level" class="">Fitness_level</label><br><input type="text"
                    name="fitness_level" class="form-control @error('fitness_level') is-invalid @enderror"
                    value="{{ old('fitness_level', $query->fitness_level ?? '') }}"
                    placeholder="Enter fitness_level..." id="view_fitness_level" disabled>
                @error('fitness_level')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="min_age" class="">Min_age</label><br><input type="number" name="min_age"
                    min="0" class="form-control @error('min_age') is-invalid @enderror"
                    value="{{ old('min_age', $query->min_age ?? '') }}" placeholder="Enter min_age..."
                    id="view_min_age" disabled>
                @error('min_age')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="guiding_method_id" class="">Guiding_method_id</label><br><input type="number"
                    name="guiding_method_id" min="0"
                    class="form-control @error('guiding_method_id') is-invalid @enderror"
                    value="{{ old('guiding_method_id', $query->guiding_method_id ?? '') }}"
                    placeholder="Enter guiding_method_id..." id="view_guiding_method_id" disabled>
                @error('guiding_method_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="guiding_method" class="">Guiding_method</label><br><input type="text"
                    name="guiding_method" class="form-control @error('guiding_method') is-invalid @enderror"
                    value="{{ old('guiding_method', $query->guiding_method ?? '') }}"
                    placeholder="Enter guiding_method..." id="view_guiding_method" disabled>
                @error('guiding_method')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="language" class="">Language</label><br><input type="text" name="language"
                    class="form-control @error('language') is-invalid @enderror"
                    value="{{ old('language', $query->language ?? '') }}" placeholder="Enter language..."
                    id="view_language" disabled>
                @error('language')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="travel_point_id" class="">Travel_point_id</label><br><input type="number"
                    name="travel_point_id" min="0"
                    class="form-control @error('travel_point_id') is-invalid @enderror"
                    value="{{ old('travel_point_id', $query->travel_point_id ?? '') }}"
                    placeholder="Enter travel_point_id..." id="view_travel_point_id" disabled>
                @error('travel_point_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="season_id" class="">Season_id</label><br><input type="number" name="season_id"
                    min="0" class="form-control @error('season_id') is-invalid @enderror"
                    value="{{ old('season_id', $query->season_id ?? '') }}" placeholder="Enter season_id..."
                    id="view_season_id" disabled>
                @error('season_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="best_season" class="">Best_season</label><br><input type="text"
                    name="best_season" class="form-control @error('best_season') is-invalid @enderror"
                    value="{{ old('best_season', $query->best_season ?? '') }}" placeholder="Enter best_season..."
                    id="view_best_season" disabled>
                @error('best_season')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="departure_from_id" class="">Departure_from_id</label><br><input type="number"
                    name="departure_from_id" min="0"
                    class="form-control @error('departure_from_id') is-invalid @enderror"
                    value="{{ old('departure_from_id', $query->departure_from_id ?? '') }}"
                    placeholder="Enter departure_from_id..." id="view_departure_from_id" disabled>
                @error('departure_from_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="departure_from" class="">Departure_from</label><br><input type="text"
                    name="departure_from" class="form-control @error('departure_from') is-invalid @enderror"
                    value="{{ old('departure_from', $query->departure_from ?? '') }}"
                    placeholder="Enter departure_from..." id="view_departure_from" disabled>
                @error('departure_from')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="arrival_on_id" class="">Arrival_on_id</label><br><input type="number"
                    name="arrival_on_id" min="0"
                    class="form-control @error('arrival_on_id') is-invalid @enderror"
                    value="{{ old('arrival_on_id', $query->arrival_on_id ?? '') }}"
                    placeholder="Enter arrival_on_id..." id="view_arrival_on_id" disabled>
                @error('arrival_on_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="arrival_on" class="">Arrival_on</label><br><input type="text" name="arrival_on"
                    class="form-control @error('arrival_on') is-invalid @enderror"
                    value="{{ old('arrival_on', $query->arrival_on ?? '') }}" placeholder="Enter arrival_on..."
                    id="view_arrival_on" disabled>
                @error('arrival_on')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="max_altitude" class="">Max_altitude</label><br><input type="text"
                    name="max_altitude" class="form-control @error('max_altitude') is-invalid @enderror"
                    value="{{ old('max_altitude', $query->max_altitude ?? '') }}" placeholder="Enter max_altitude..."
                    id="view_max_altitude" disabled>
                @error('max_altitude')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="location" class="">Location</label><br><input type="text" name="location"
                    class="form-control @error('location') is-invalid @enderror"
                    value="{{ old('location', $query->location ?? '') }}" placeholder="Enter location..."
                    id="view_location" disabled>
                @error('location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="feature_image" class="">Feature_image</label><br><input type="text"
                    name="feature_image" class="form-control @error('feature_image') is-invalid @enderror"
                    value="{{ old('feature_image', $query->feature_image ?? '') }}"
                    placeholder="Enter feature_image..." id="view_feature_image" disabled>
                @error('feature_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="thumbnail" class="">Thumbnail</label><br><input type="file" name="thumbnail"
                    class="form-control @error('thumbnail') is-invalid @enderror"
                    value="{{ old('thumbnail', $query->thumbnail ?? '') }}" id="view_thumbnail" disabled>
                <div class="form-group">
                    <label for="thumbnail" class="">Thumbnail</label><br>
                    <img src="{{ asset('storage/' . $query->thumbnail) }}" alt="{{ $query->thumbnail }}"
                        height="40px" />
                </div>
                @error('thumbnail')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="gallery_images" class="">Gallery_images</label><br><input type="text"
                    name="gallery_images" class="form-control @error('gallery_images') is-invalid @enderror"
                    value="{{ old('gallery_images', $query->gallery_images ?? '') }}"
                    placeholder="Enter gallery_images..." id="view_gallery_images" disabled>
                @error('gallery_images')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="video" class="">Video</label><br><input type="text" name="video"
                    class="form-control @error('video') is-invalid @enderror"
                    value="{{ old('video', $query->video ?? '') }}" placeholder="Enter video..." id="view_video"
                    disabled>
                @error('video')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="video_url" class="">Video_url</label><br><input type="text" name="video_url"
                    class="form-control @error('video_url') is-invalid @enderror"
                    value="{{ old('video_url', $query->video_url ?? '') }}" placeholder="Enter video_url..."
                    id="view_video_url" disabled>
                @error('video_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="feedback_logs" class="">Feedback_logs</label><br><input type="text"
                    name="feedback_logs" class="form-control @error('feedback_logs') is-invalid @enderror"
                    value="{{ old('feedback_logs', $query->feedback_logs ?? '') }}"
                    placeholder="Enter feedback_logs..." id="view_feedback_logs" disabled>
                @error('feedback_logs')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="unit_price" class="">Unit_price</label><br><input type="number" step="any"
                    name="unit_price" class="form-control @error('unit_price') is-invalid @enderror"
                    value="{{ old('unit_price', $query->unit_price ?? '') }}" placeholder="Enter unit_price..."
                    id="view_unit_price" disabled>
                @error('unit_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="discount_type" class="">Discount_type</label><br>
                <div class="flex inline-flex items-center space-x-4">
                    <input type="radio" name="discount_type" id="view_discount_type_yes" value="1"
                        class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('discount_type') is-invalid @enderror"
                        {{ old('discount_type', $query->discount_type ?? '') == 1 ? 'checked' : '' }} disabled>
                    <label for="view_discount_type_yes">Discount_type Yes</label>
                    <input type="radio" name="discount_type" id="view_discount_type_no" value="0"
                        class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('discount_type') is-invalid @enderror"
                        {{ old('discount_type', $query->discount_type ?? '') == 0 ? 'checked' : '' }} disabled>
                    <label for="view_discount_type_no">Discount_type No</label>
                </div>
                @error('discount_type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="discount" class="">Discount</label><br><input type="number" step="any"
                    name="discount" class="form-control @error('discount') is-invalid @enderror"
                    value="{{ old('discount', $query->discount ?? '') }}" placeholder="Enter discount..."
                    id="view_discount" disabled>
                @error('discount')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="discount_price" class="">Discount_price</label><br><input type="number"
                    step="any" name="discount_price"
                    class="form-control @error('discount_price') is-invalid @enderror"
                    value="{{ old('discount_price', $query->discount_price ?? '') }}"
                    placeholder="Enter discount_price..." id="view_discount_price" disabled>
                @error('discount_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="sale_price" class="">Sale_price</label><br><input type="number" step="any"
                    name="sale_price" class="form-control @error('sale_price') is-invalid @enderror"
                    value="{{ old('sale_price', $query->sale_price ?? '') }}" placeholder="Enter sale_price..."
                    id="view_sale_price" disabled>
                @error('sale_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="sub_title" class="">Sub_title</label><br><input type="text" name="sub_title"
                    class="form-control @error('sub_title') is-invalid @enderror"
                    value="{{ old('sub_title', $query->sub_title ?? '') }}" placeholder="Enter sub_title..."
                    id="view_sub_title" disabled>
                @error('sub_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="intro" class="">Intro</label><br>
                <textarea name="intro" class="form-control @error('intro') is-invalid @enderror" placeholder="Enter intro..."
                    id="view_intro" disabled>{{ old('intro', $query->intro ?? '') }}</textarea>
                @error('intro')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="highlight" class="">Highlight</label><br>
                <textarea name="highlight" class="form-control @error('highlight') is-invalid @enderror"
                    placeholder="Enter highlight..." id="view_highlight" disabled>{{ old('highlight', $query->highlight ?? '') }}</textarea>
                @error('highlight')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="attraction" class="">Attraction</label><br>
                <textarea name="attraction" class="form-control @error('attraction') is-invalid @enderror"
                    placeholder="Enter attraction..." id="view_attraction" disabled>{{ old('attraction', $query->attraction ?? '') }}</textarea>
                @error('attraction')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="location_image" class="">Location_image</label><br><input type="text"
                    name="location_image" class="form-control @error('location_image') is-invalid @enderror"
                    value="{{ old('location_image', $query->location_image ?? '') }}"
                    placeholder="Enter location_image..." id="view_location_image" disabled>
                @error('location_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="trip_notes" class="">Trip_notes</label><br>
                <textarea name="trip_notes" class="form-control @error('trip_notes') is-invalid @enderror"
                    placeholder="Enter trip_notes..." id="view_trip_notes" disabled>{{ old('trip_notes', $query->trip_notes ?? '') }}</textarea>
                @error('trip_notes')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="faq" class="">Faq</label><br>
                <textarea name="faq" class="form-control @error('faq') is-invalid @enderror" placeholder="Enter faq..."
                    id="view_faq" disabled>{{ old('faq', $query->faq ?? '') }}</textarea>
                @error('faq')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="reviews" class="">Reviews</label><br>
                <textarea name="reviews" class="form-control @error('reviews') is-invalid @enderror" placeholder="Enter reviews..."
                    id="view_reviews" disabled>{{ old('reviews', $query->reviews ?? '') }}</textarea>
                @error('reviews')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="pickup_location" class="">Pickup_location</label><br><input type="text"
                    name="pickup_location" class="form-control @error('pickup_location') is-invalid @enderror"
                    value="{{ old('pickup_location', $query->pickup_location ?? '') }}"
                    placeholder="Enter pickup_location..." id="view_pickup_location" disabled>
                @error('pickup_location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="dropoff_location" class="">Dropoff_location</label><br><input type="text"
                    name="dropoff_location" class="form-control @error('dropoff_location') is-invalid @enderror"
                    value="{{ old('dropoff_location', $query->dropoff_location ?? '') }}"
                    placeholder="Enter dropoff_location..." id="view_dropoff_location" disabled>
                @error('dropoff_location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="pdf_url" class="">Pdf_url</label><br><input type="text" name="pdf_url"
                    class="form-control @error('pdf_url') is-invalid @enderror"
                    value="{{ old('pdf_url', $query->pdf_url ?? '') }}" placeholder="Enter pdf_url..."
                    id="view_pdf_url" disabled>
                @error('pdf_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="is_popular_day_trips" class="">Is_popular_day_trips</label><br>
                <div class="flex inline-flex items-center space-x-4">
                    <input type="radio" name="is_popular_day_trips" id="view_is_popular_day_trips_yes"
                        value="1"
                        class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_popular_day_trips') is-invalid @enderror"
                        {{ old('is_popular_day_trips', $query->is_popular_day_trips ?? '') == 1 ? 'checked' : '' }}
                        disabled>
                    <label for="view_is_popular_day_trips_yes">Is_popular_day_trips Yes</label>
                    <input type="radio" name="is_popular_day_trips" id="view_is_popular_day_trips_no"
                        value="0"
                        class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_popular_day_trips') is-invalid @enderror"
                        {{ old('is_popular_day_trips', $query->is_popular_day_trips ?? '') == 0 ? 'checked' : '' }}
                        disabled>
                    <label for="view_is_popular_day_trips_no">Is_popular_day_trips No</label>
                </div>
                @error('is_popular_day_trips')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="is_tour_by_traveller_choise" class="">Is_tour_by_traveller_choise</label><br>
                <div class="flex inline-flex items-center space-x-4">
                    <input type="radio" name="is_tour_by_traveller_choise"
                        id="view_is_tour_by_traveller_choise_yes" value="1"
                        class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_tour_by_traveller_choise') is-invalid @enderror"
                        {{ old('is_tour_by_traveller_choise', $query->is_tour_by_traveller_choise ?? '') == 1 ? 'checked' : '' }}
                        disabled>
                    <label for="view_is_tour_by_traveller_choise_yes">Is_tour_by_traveller_choise Yes</label>
                    <input type="radio" name="is_tour_by_traveller_choise" id="view_is_tour_by_traveller_choise_no"
                        value="0"
                        class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_tour_by_traveller_choise') is-invalid @enderror"
                        {{ old('is_tour_by_traveller_choise', $query->is_tour_by_traveller_choise ?? '') == 0 ? 'checked' : '' }}
                        disabled>
                    <label for="view_is_tour_by_traveller_choise_no">Is_tour_by_traveller_choise No</label>
                </div>
                @error('is_tour_by_traveller_choise')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="is_featured" class="">Is_featured</label><br>
                <div class="flex inline-flex items-center space-x-4">
                    <input type="radio" name="is_featured" id="view_is_featured_yes" value="1"
                        class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_featured') is-invalid @enderror"
                        {{ old('is_featured', $query->is_featured ?? '') == 1 ? 'checked' : '' }} disabled>
                    <label for="view_is_featured_yes">Is_featured Yes</label>
                    <input type="radio" name="is_featured" id="view_is_featured_no" value="0"
                        class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_featured') is-invalid @enderror"
                        {{ old('is_featured', $query->is_featured ?? '') == 0 ? 'checked' : '' }} disabled>
                    <label for="view_is_featured_no">Is_featured No</label>
                </div>
                @error('is_featured')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="is_published" class="">Is_published</label><br>
                <div class="flex inline-flex items-center space-x-4">
                    <input type="radio" name="is_published" id="view_is_published_yes" value="1"
                        class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_published') is-invalid @enderror"
                        {{ old('is_published', $query->is_published ?? '') == 1 ? 'checked' : '' }} disabled>
                    <label for="view_is_published_yes">Is_published Yes</label>
                    <input type="radio" name="is_published" id="view_is_published_no" value="0"
                        class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_published') is-invalid @enderror"
                        {{ old('is_published', $query->is_published ?? '') == 0 ? 'checked' : '' }} disabled>
                    <label for="view_is_published_no">Is_published No</label>
                </div>
                @error('is_published')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="published_date" class="">Published_date</label><br><input type="datetime-local"
                    name="published_date" class="form-control @error('published_date') is-invalid @enderror"
                    value="{{ old('published_date', $query->published_date ?? '') }}" id="view_published_date"
                    disabled>
                @error('published_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="is_active" class="">Is_active</label><br>
                <div class="flex inline-flex items-center space-x-4">
                    <input type="radio" name="is_active" id="view_is_active_yes" value="1"
                        class="text-green-600 form-radio focus:ring-green-500 focus:ring-2 @error('is_active') is-invalid @enderror"
                        {{ old('is_active', $query->is_active ?? '') == 1 ? 'checked' : '' }} disabled>
                    <label for="view_is_active_yes">Is_active Yes</label>
                    <input type="radio" name="is_active" id="view_is_active_no" value="0"
                        class="text-red-600 form-radio focus:ring-red-500 focus:ring-2 @error('is_active') is-invalid @enderror"
                        {{ old('is_active', $query->is_active ?? '') == 0 ? 'checked' : '' }} disabled>
                    <label for="view_is_active_no">Is_active No</label>
                </div>
                @error('is_active')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="meta_title" class="">Meta_title</label><br><input type="text" name="meta_title"
                    class="form-control @error('meta_title') is-invalid @enderror"
                    value="{{ old('meta_title', $query->meta_title ?? '') }}" placeholder="Enter meta_title..."
                    id="view_meta_title" disabled>
                @error('meta_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="meta_description" class="">Meta_description</label><br><input type="text"
                    name="meta_description" class="form-control @error('meta_description') is-invalid @enderror"
                    value="{{ old('meta_description', $query->meta_description ?? '') }}"
                    placeholder="Enter meta_description..." id="view_meta_description" disabled>
                @error('meta_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="meta_keyword" class="">Meta_keyword</label><br><input type="text"
                    name="meta_keyword" class="form-control @error('meta_keyword') is-invalid @enderror"
                    value="{{ old('meta_keyword', $query->meta_keyword ?? '') }}"
                    placeholder="Enter meta_keyword..." id="view_meta_keyword" disabled>
                @error('meta_keyword')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="canonical_url" class="">Canonical_url</label><br><input type="text"
                    name="canonical_url" class="form-control @error('canonical_url') is-invalid @enderror"
                    value="{{ old('canonical_url', $query->canonical_url ?? '') }}"
                    placeholder="Enter canonical_url..." id="view_canonical_url" disabled>
                @error('canonical_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="meta_robots" class="">Meta_robots</label><br><input type="text"
                    name="meta_robots" class="form-control @error('meta_robots') is-invalid @enderror"
                    value="{{ old('meta_robots', $query->meta_robots ?? '') }}" placeholder="Enter meta_robots..."
                    id="view_meta_robots" disabled>
                @error('meta_robots')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="meta_img" class="">Meta_img</label><br><input type="text" name="meta_img"
                    class="form-control @error('meta_img') is-invalid @enderror"
                    value="{{ old('meta_img', $query->meta_img ?? '') }}" placeholder="Enter meta_img..."
                    id="view_meta_img" disabled>
                @error('meta_img')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="structured_data" class="">Structured_data</label><br><input type="text"
                    name="structured_data" class="form-control @error('structured_data') is-invalid @enderror"
                    value="{{ old('structured_data', $query->structured_data ?? '') }}"
                    placeholder="Enter structured_data..." id="view_structured_data" disabled>
                @error('structured_data')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="og_title" class="">Og_title</label><br><input type="text" name="og_title"
                    class="form-control @error('og_title') is-invalid @enderror"
                    value="{{ old('og_title', $query->og_title ?? '') }}" placeholder="Enter og_title..."
                    id="view_og_title" disabled>
                @error('og_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="og_description" class="">Og_description</label><br><input type="text"
                    name="og_description" class="form-control @error('og_description') is-invalid @enderror"
                    value="{{ old('og_description', $query->og_description ?? '') }}"
                    placeholder="Enter og_description..." id="view_og_description" disabled>
                @error('og_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="og_image" class="">Og_image</label><br><input type="text" name="og_image"
                    class="form-control @error('og_image') is-invalid @enderror"
                    value="{{ old('og_image', $query->og_image ?? '') }}" placeholder="Enter og_image..."
                    id="view_og_image" disabled>
                @error('og_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="twitter_title" class="">Twitter_title</label><br><input type="text"
                    name="twitter_title" class="form-control @error('twitter_title') is-invalid @enderror"
                    value="{{ old('twitter_title', $query->twitter_title ?? '') }}"
                    placeholder="Enter twitter_title..." id="view_twitter_title" disabled>
                @error('twitter_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="twitter_description" class="">Twitter_description</label><br><input type="text"
                    name="twitter_description"
                    class="form-control @error('twitter_description') is-invalid @enderror"
                    value="{{ old('twitter_description', $query->twitter_description ?? '') }}"
                    placeholder="Enter twitter_description..." id="view_twitter_description" disabled>
                @error('twitter_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="mb-3 form-group">
                <label for="twitter_image" class="">Twitter_image</label><br><input type="text"
                    name="twitter_image" class="form-control @error('twitter_image') is-invalid @enderror"
                    value="{{ old('twitter_image', $query->twitter_image ?? '') }}"
                    placeholder="Enter twitter_image..." id="view_twitter_image" disabled>
                @error('twitter_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3 text-right">
            <a type="button" class="btn bg-danger" href="{{ route('admin.tour_packages.index') }}">Close</a>
        </div>
    </div>
</form>
