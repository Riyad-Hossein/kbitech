<div class="table-responsive">
    <table class="table align-middle rounded-4">
        <thead>
            <tr>
                <th scope="col" class="text-primary">
                    <div class="form-check p-0 d-flex align-items-center"><span class="ms-4">SL</span></div>
                </th>
                <th scope="col text-center">Date</th>
                <th scope="col text-center">Project Name</th>
                <th scope="col text-center">Client</th>
                <th scope="col text-center">Business Type</th>
                <th scope="col text-center">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $key=>$project)
                <tr>
                    <td><strong class="ms-4">{{$key+1}}</strong></td>
                    <td>{{$project->project_date??'N/A'}}</td>
                    <td>{{$project->name??'N/A'}}</td>
                    <td>{{$project->client??'N/A'}}</td>
                    <td>{{$project->business_type?->name??'N/A'}}</td>
                    <td>{{$project->project_category?->name??'N/A'}}</td>
                    <td>
                        <div class="dropdown action-opt">
                            <button class="btn bg p-0 dropdown_action_btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                <li><a onclick="editItem({{$project->id}})" href="javascript:void(0)" class="dropdown-item"><i data-feather="edit"></i> Edit</a></li>
                                <li><a onclick="deleteAjax('{{ route('admin.project.delete',$project->id) }}', 'reloadAjaxGetData') " class="dropdown-item" href="javascript:void(0)"><i data-feather="trash-2"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">
                        <b>No data found...!</b>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{ $projects->links('backend.pagination.common_ajax_pagination') }}