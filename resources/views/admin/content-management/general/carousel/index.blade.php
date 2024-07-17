<div class="d-flex justify-content-between mb-2">
    <div class="d-flex justify-content-between">
        <h5>Limit Carousel : <span>6</span> </h5> <i class="fe fe-info-circle ml-2 pointer" style="font-size: 24px"></i>
    </div>
    <div>
        <button type="button" id="btn-add-content-general-carousel" class="btn btn-primary mr-1"
            onclick="openForm('carousel','add')">
            <i class="fe fe-plus-circle"></i> Tambah Data</button>
        <button type="button" id="btn-cancel-content-general-carousel" style="display:none" class="btn btn-danger mr-1"
            onclick="openForm('carousel','cancel')">
            <i class="fe fe-x-circle"></i> Batalkan</button>
    </div>
</div>

<div class="row">
    <div class="col-md-7">
        <div class="table-responsive" id="show-data-content-carousel">
            <table class="table table-bordered table-hover " id="table-content-carousel">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th class="w-10p">Aksi</th>
                    </tr>
                </thead>
                <tbody id="data-carousel">
                </tbody>
            </table>

        </div>
    </div>
    <div class="col-md-5">
        <div class="card" style="box-shadow: -8px 12px 18px 0 rgb(25 42 70 / 13%) !important">
            <div class="card-header">
                <h4 class="card-title">Form Data Carousel</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="javascript:void(0)" id="form-content-general-carousel" class="form"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <input type="hidden" id="id" name="id" value="">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name">Nama Carousel</label>
                                        <input type="text" class="form-control" disabled name="name"
                                            placeholder="Silahkan masukan nama carousel">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="description">Deskripsi Carousel</label>
                                        <input type="text" class="form-control" disabled name="description"
                                            placeholder="Silahkan masukan deskripsi">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="sequence">Sequence Carousel</label>
                                        <select name="sequence" id="sequence"
                                            placeholder="Silahkan pilih urutan carousel" class="form-control" disabled>
                                            <option value="">Silahkan Urutan Carousel</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="image">Gambar Carousel (1920 x 1080)</label>
                                        <input type="file" class="form-control" disabled name="image"
                                            id="image">
                                    </div>
                                </div>
                                <input type="hidden" name="type_general" value="CAROUSEL">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" style="display: none" onclick="manageData('save','carousel')"
                                        class="btn btn-success text-white" id="add-carousel"><i
                                            class="fe fe-check"></i>Simpan</button>
                                    <button type="submit" style="display: none"
                                        onclick="manageData('update','carousel')" class="btn btn-light-warning text-white"
                                        id="edit-carousel"><i class="fe fe-edit"></i>Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
