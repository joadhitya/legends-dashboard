<div class="card-body pt-2" id="manage-complaint-compensation">
    <form action="javascript:void(0)" id="form-master-complaint-compensation" enctype="multipart/form-data">
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
                    <input type="text" id="name" name="name"
                        class="form-control form-control-sm bg-transparent" value="{{ $master->name }}">
                </div>
            </div>
            <div class="col-md-12">
                <label>Deskripsi: </label>
                <div class="form-group">
                    <input type="text" id="description" name="description" value="{{ $master->description }}"
                        class="form-control form-control-sm bg-transparent">
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-0" id="button-action-add-on">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <button type="submit" class="btn text-uppercase btn-success btn-sm text-white btn-block"
                    onclick="manageData('save')"><i class="fe fe-check mr-2"></i>Save Data</button>
            </div>
        </div>
    </form>


    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <div class="toolbar row ">
                        <div class="col-md-8 col-sm-8 col-8">
                            <h5 class="h5 text-uppercase">List Konten data keluhan, banding & ganti rugi Perusahaan</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body" id="">
                    <div class="d-flex text-center ">
                        <div class="spinner-border spinner-border text-black mr-2"> <span
                                class="sr-only">Loading...</span>
                        </div>
                        <h4 for="" class="ml-2">Please Wait ......</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
