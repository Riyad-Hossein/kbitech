<div class="table-responsive">
    <table class="table align-middle rounded-4">
        <thead>
            <tr>
                <th scope="col" class="text-primary">
                    <div class="form-check p-0 d-flex align-items-center"><span class="ms-4">SL</span></div>
                </th>
                <th scope="col text-center">Name</th>
                <th scope="col text-center">Logo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($partners as $key=>$partner)
                <tr>
                    <td><strong class="ms-4">{{$key+1}}</strong></td>
                    <td>{{$partner->name??'N/A'}}</td>
                    <td><img src="{{ $partner->show_image }}" class="me-1 am-img" alt="{{ $partner->name }}" style="width: 110px"> </td>
                    <td>
                        <div class="dropdown action-opt">
                            <button class="btn bg p-0 dropdown_action_btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                <li><a onclick="editItem({{$partner->id}})" href="javascript:void(0)" class="dropdown-item"><i data-feather="edit"></i> Edit</a></li>
                                <li><a onclick="deleteAjax('{{ route('admin.partner.delete',$partner->id) }}', 'reloadAjaxGetData') " class="dropdown-item" href="javascript:void(0)"><i data-feather="trash-2"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        <b>No data found...!</b>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{ $partners->links('backend.pagination.common_ajax_pagination') }}