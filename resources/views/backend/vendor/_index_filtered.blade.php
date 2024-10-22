<div class="table-responsive">
    <table class="table align-middle rounded-4">
        <thead>
            <tr>
                <th scope="col" class="text-primary">
                    <div class="form-check p-0 d-flex align-items-center"><span class="ms-4">SL</span></div>
                </th>
                <th scope="col text-center">Vendor Name</th>
                <th scope="col text-center">Email</th>
                <th scope="col text-center">phone</th>
                <th scope="col">View Vendor</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($vendors as $key=>$vendor)
                <tr>
                    <td><strong class="ms-4">{{$key+1}}</strong></td>
                    <td>{{$vendor->company_name??'N/A'}}</td>
                    <td>{{$vendor->email??'N/A'}}</td>
                    <td>{{$vendor->phone??'N/A'}}</td>
                    <td><a href="{{ route('admin.vendor.view',$vendor->id) }}" class="view-vendor"><span><i class="fa-duotone  fa-eye"></i></span></a></td>
                    <td>
                        <div class="dropdown action-opt">
                            <button class="btn bg p-0 dropdown_action_btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-ellipsis-vertical"></i></button>
                            <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                <li><a onclick="deleteAjax('{{ route('admin.location.delete',$vendor->id) }}', 'reloadAjaxGetData') " class="dropdown-item" href="javascript:void(0)"><i data-feather="trash-2"></i> Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">
                        <b>No data found...!</b>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{ $vendors->links('backend.pagination.common_ajax_pagination') }}