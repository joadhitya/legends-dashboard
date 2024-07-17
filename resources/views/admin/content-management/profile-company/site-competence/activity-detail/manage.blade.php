<div class="card-body pt-2" id="manage-site-competence">
    <form action="javascript:void(0)" id="form-master-site-competence" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="id" name="id" value="{{ $master->id }}">
        <div class="row">
            <div class="col-md-4">
                <label>Kode: </label>
                <div class="form-group">
                    <input type="text" id="code" name="code" readonly
                        class="form-control form-control-sm bg-transparent" value="{{ $master->code }}">
                </div>
            </div>
            <div class="col-md-8">
                <label>Nama Master Konten: </label>
                <div class="form-group">
                    <input type="text" id="name" name="name" readonly
                        class="form-control form-control-sm bg-transparent" value="{{ $master->name }}">
                </div>
            </div>
            <div class="col-md-12">
                <label>Deskripsi: </label>
                <div class="form-group">
                    <input type="text" id="description" name="description" readonly value="{{ $master->description }}"
                        class="form-control form-control-sm bg-transparent">
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-0" id="button-action-add-on">
            <div class="col-md-6"></div>
            <div class="col-md-6">
            </div>
        </div>
    </form>


    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <div class="toolbar row ">
                        <div class="col-md-8 col-sm-8 col-8">
                            <h5 class="h5 text-uppercase">List Konten Tempat Uji Kompetensi Perusahaan</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body" id="">
                    <table class="table datatables table-bordered table-hover table-data"
                        id="table-company-information">
                        <thead>
                            <tr>
                                <th class="w-5p">No</th>
                                <th class="w-15p">Kode</th>
                                <th>Nama</th>
                                <th class="w-15p">Tipe</th>
                                <th class="w-5p">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                                <tr>
                                    <td class="w-5p">{{ $key + 1 }}</td>
                                    <td class="w-15p">{{ $item->code }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td class="w-15p">{{ $item->type }}</td>
                                    <td class="w-5p">
                                        <div class="btn-group btn-group-sm" role="group">
                                            <button type="button" class="btn p5x btn-sm btn-outline-primary"
                                                onclick="openModal('category-field','edit', 1)"><span
                                                    class="fe fe-info"></span></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
