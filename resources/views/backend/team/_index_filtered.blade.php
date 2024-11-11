<div class="table-responsive">
    <table class="table align-middle rounded-4">
        <thead>
            <tr>
                <th scope="col" class="text-primary">
                    <div class="form-check p-0 d-flex align-items-center"><span class="ms-4">SL</span></div>
                </th>
                <th scope="col text-center">Name</th>
                <th scope="col text-center">Designation</th>
                <th scope="col text-center">Profile Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($team_members as $key=>$team)
                <tr>
                    <td><strong class="ms-4">{{$key+1}}</strong></td>
                    <td>{{$team->name??'N/A'}}</td>
                    <td>{{$team->designation??'N/A'}}</td>
                    <td><img src="{{$team->show_image}}" alt="" class="img-fluid" width="100"/></td>
                    <td>
                        <div class="dropdown action-opt">
                            <button class="btn bg p-0 dropdown_action_btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                <li><a onclick="editItem({{$team->id}})" href="javascript:void(0)" class="dropdown-item"><i data-feather="edit"></i> Edit</a></li>
                                <li><a onclick="deleteAjax('{{ route('admin.team.delete',$team->id) }}', 'reloadAjaxGetData') " class="dropdown-item" href="javascript:void(0)"><i data-feather="trash-2"></i> Delete</a></li>
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

{{ $team_members->links('backend.pagination.common_ajax_pagination') }}