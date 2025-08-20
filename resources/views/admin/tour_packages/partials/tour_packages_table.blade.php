 <!-- Packages Table -->
 <div class="packages-table-container">
     <table class="table packages-table table table-hover" id="example1">
         <thead>
             <tr>
                 <th>Package</th>
                 <th>Duration</th>
                 <th>Unit Price</th>
                 <th>Discount Price</th>
                 <th>Sale Price</th>
                 <th>Is Featured</th>
                 <th>Is Active</th>
                 <th>Actions</th>
             </tr>
         </thead>
         <tbody id="datatable">
             @if (count($query) > 0)
                 @foreach ($query as $key => $data)
                     <tr class="package-row">
                         <td>
                             {{ $data->title }}
                             {{ $data->sub_title }}
                         </td>

                         <td>{{ $data->duration }}</td>
                         <td>{{ $data->unit_price }}</td>
                         <td>{{ $data->discount_price }}</td>
                         <td>{{ $data->sale_price }}</td>
                         <td>
                             @php
                                 $badgeClass =
                                     $data->is_popular_day_trips == 1 ? 'badge badge-success' : 'badge badge-danger';
                                 $statusText = $data->is_popular_day_trips == 1 ? 'Yes' : 'No';
                             @endphp
                             <span class="{{ $badgeClass }} badge-is_popular_day_trips">{{ $statusText }}</span>
                         </td>
                         <td>
                             @php
                                 $badgeClass =
                                     $data->is_tour_by_traveller_choise == 1
                                         ? 'badge badge-success'
                                         : 'badge badge-danger';
                                 $statusText = $data->is_tour_by_traveller_choise == 1 ? 'Yes' : 'No';
                             @endphp
                             <span
                                 class="{{ $badgeClass }} badge-is_tour_by_traveller_choise">{{ $statusText }}</span>
                         </td>
                         <td>
                             @php
                                 $badgeClass = $data->is_featured == 1 ? 'badge badge-success' : 'badge badge-danger';
                                 $statusText = $data->is_featured == 1 ? 'Yes' : 'No';
                             @endphp
                             <span class="{{ $badgeClass }} badge-is_featured">{{ $statusText }}</span>
                         </td>
                         <td>
                             @php
                                 $badgeClass = $data->is_published == 1 ? 'badge badge-success' : 'badge badge-danger';
                                 $statusText = $data->is_published == 1 ? 'Yes' : 'No';
                             @endphp
                             <span class="{{ $badgeClass }} badge-is_published">{{ $statusText }}</span>
                         </td>
                         <td>{{ $data->published_date }}</td>
                         <td>
                             @php
                                 $badgeClass = $data->is_active == 1 ? 'badge badge-success' : 'badge badge-danger';
                                 $statusText = $data->is_active == 1 ? 'Yes' : 'No';
                             @endphp
                             <span class="{{ $badgeClass }} badge-is_active">{{ $statusText }}</span>
                         </td>
                         <td style="min-width:130px" class="my-1 d-flex">

                             <div><label class="form-check form-switch mr-2">
                                     <input type="checkbox" title="discount_type" class="form-check-input status-toggle"
                                         name="discount_type" data-id="{{ $data->id }}"
                                         {{ $data->discount_type == 1 ? 'checked' : '' }}>
                                 </label><span style="margin-left:-70px !important">discount_type</span></div>
                             <div><label class="form-check form-switch mr-2">
                                     <input type="checkbox" title="is_popular_day_trips"
                                         class="form-check-input status-toggle" name="is_popular_day_trips"
                                         data-id="{{ $data->id }}"
                                         {{ $data->is_popular_day_trips == 1 ? 'checked' : '' }}>
                                 </label><span style="margin-left:-70px !important">is_popular_day_trips</span></div>
                             <div><label class="form-check form-switch mr-2">
                                     <input type="checkbox" title="is_tour_by_traveller_choise"
                                         class="form-check-input status-toggle" name="is_tour_by_traveller_choise"
                                         data-id="{{ $data->id }}"
                                         {{ $data->is_tour_by_traveller_choise == 1 ? 'checked' : '' }}>
                                 </label><span style="margin-left:-70px !important">is_tour_by_traveller_choise</span>
                             </div>
                             <div><label class="form-check form-switch mr-2">
                                     <input type="checkbox" title="is_featured" class="form-check-input status-toggle"
                                         name="is_featured" data-id="{{ $data->id }}"
                                         {{ $data->is_featured == 1 ? 'checked' : '' }}>
                                 </label><span style="margin-left:-70px !important">is_featured</span></div>
                             <div><label class="form-check form-switch mr-2">
                                     <input type="checkbox" title="is_published" class="form-check-input status-toggle"
                                         name="is_published" data-id="{{ $data->id }}"
                                         {{ $data->is_published == 1 ? 'checked' : '' }}>
                                 </label><span style="margin-left:-70px !important">is_published</span></div>
                             <div><label class="form-check form-switch mr-2">
                                     <input type="checkbox" title="is_active" class="form-check-input status-toggle"
                                         name="is_active" data-id="{{ $data->id }}"
                                         {{ $data->is_active == 1 ? 'checked' : '' }}>
                                 </label><span style="margin-left:-70px !important">is_active</span></div>

                             <a href="{{ route('admin.tour_packages.edit', $data->id) }}"
                                 class="border-0 btn btn-primary btn-sm edit text-light" rel="tooltip" id="edit"
                                 title="Edit" data-id="4">
                                 <i class="fa-regular fa-pen-to-square"></i>
                             </a>
                             <a href="{{ route('admin.tour_packages.show', $data->id) }}"
                                 class="border-0 btn btn-info btn-sm text-light view" id="view" rel="tooltip"
                                 title="view">
                                 <i class="fas fa-eye"></i>
                             </a>
                             <form action="{{ route('admin.tour_packages.destroy', $data->id) }}" method="POST"
                                 style="display: inline;">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-sm btn-danger delete"
                                     onclick="return confirm('Are you sure?')"> <i
                                         class="fas fa-trash-can"></i></button>
                             </form>
                         </td>
                     </tr>
                 @endforeach
             @else
                 <tr class="h-50 text-center align-middle">
                     <td colspan="13">
                         <p class="fs-6">No data found</p>
                     </td>
                 </tr>
             @endif

         </tbody>
     </table>
 </div>
