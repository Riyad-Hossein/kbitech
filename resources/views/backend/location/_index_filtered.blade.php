<div class="table-responsive">
    <table class="table align-middle rounded-4">
        <thead>
            <tr>
                <th scope="col" class="text-primary">
                    <div class="form-check p-0 d-flex align-items-center"><span class="ms-4">SL</span></div>
                </th>
                <th scope="col text-center">Location Name</th>
                <th scope="col text-center">State</th>
                <th scope="col text-center">City</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($locations as $key=>$location)
                <tr>
                    <td><strong class="ms-4">{{$key+1}}</strong></td>
                    <td>
                        <div class="form-check p-0 d-flex align-items-center">
                            <a href="javascript:void(0);" class="d-flex align-items-center ms-0">
                                <img src="{{asset('assets/backend')}}/images/united-states.png" class="wh-25 rounded-3"
                                    alt="product">
                                <h6 class="ps-2">USA</h6>
                            </a>
                        </div>
                    </td>
                    <td>{{$location->state->name??'N/A'}}</td>
                    <td>{{$location->city_name??'N/A'}}</td>
                    <td>
                        <div class="dropdown action-opt">
                            <button class="btn bg p-0 dropdown_action_btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                <li><a onclick="editItem({{$location->id}})" href="javascript:void(0)" class="dropdown-item"><i data-feather="edit"></i> Edit</a></li>
                                <li><a onclick="deleteAjax('{{ route('admin.location.delete',$location->id) }}', 'reloadAjaxGetData') " class="dropdown-item" href="javascript:void(0)"><i data-feather="trash-2"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        <b>No data found...!</b>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{ $locations->links('backend.pagination.common_ajax_pagination') }}