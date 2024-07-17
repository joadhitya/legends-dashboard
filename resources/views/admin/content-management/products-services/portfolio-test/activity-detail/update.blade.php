<div class="card-body pt-2">
    <div class="card-header p-0 pb-2">
        <div class="toolbar row ">
            <div class="col-md-6 col-sm-6 col-6">
                <h5 class="h5 text-uppercase">List Konten Uji Portfolio Setting</h5>
            </div>
        </div>
    </div>

    <table class="table datatables table-bordered table-hover table-data" id="table-portfolio-test">
        <thead>
            <tr class="text-uppercase">
                <th class="w-5p text-center">Urutan</th>
                <th class="w-20p">Kode</th>
                <th>Nama</th>
                <th class="w-10p">Status</th>
                <th class="w-5p">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $detail)
                <tr>
                    <td class="w-5p text-center">{{ $detail->sequence }}</td>
                    <td class="w-20p">{{ $detail->code }}</td>
                    <td>{{ $detail->name }}</td>
                   <td class="w-10p {{ $detail->is_active == 'yes' ? 'text-success' : 'text-danger' }}"> {{ $detail->is_active == 'yes' ? 'Aktif' : 'Tidak Aktif' }} </td>
                    <td class="w-5p">

                        <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <label class="dropdown-item pointer"
                                onclick="activityDetail('portfolio-test','edit',{{ $detail->id }})"><span
                                    class="mr-2 fe fe-edit"></span>Edit</label>
                        </div>
                    </td>
                </tr>
            @empty
                <tr colspan="5">Tidak terdapat data konten Uji Portfolio Perusahaan</tr>
            @endforelse
        </tbody>
    </table>

</div>
