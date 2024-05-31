<div class="col-md-12 p-4">
    <form action="javascript:void(0)" id="form-test-schedule" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="id" name="id" value="">
        <div class="row">
            <div class="col-md-4">
                <label>Nomor. Registrasi: </label>
                <div class="form-group">
                    <input type="text" id="register_no" name="register_no"
                        class="form-control form-control-sm bg-transparent" value="">
                </div>
            </div>
            <div class="col-md-4">
                <label>Bidang: </label>
                <div class="form-group">
                    <input type="text" id="field" name="field"
                        class="form-control form-control-sm bg-transparent" value="">
                </div>
            </div>
            <div class="col-md-4">
                <label>Asesor: </label>
                <div class="form-group">
                    <input type="text" id="assessor" name="assessor"
                        class="form-control form-control-sm bg-transparent" value="">
                </div>
            </div>
            <div class="col-md-4">
                <label>Admin: </label>
                <div class="form-group">
                    <input type="text" id="admin" name="admin"
                        class="form-control form-control-sm bg-transparent" value="">
                </div>
            </div>
            <div class="col-md-4">
                <label>Jumlah Peserta: </label>
                <div class="form-group">
                    <input type="text" id="number_participant" name="number_participant"
                        class="form-control form-control-sm bg-transparent" value="">
                </div>
            </div>
            <div class="col-md-4">
                <label>Input Permohonan: </label>
                <div class="form-group">
                    <input type="date" id="date_request" name="date_request"
                        class="form-control form-control-sm bg-transparent" value="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="date-input1">Tanggal Uji Kompetensi:</label>
                    <input type="text" name="date_test" id="date_test"
                        class="form-control form-control-sm datetimes" />
                </div>
            </div>
            <div class="col-md-4">
                <label>Input Hasil Uji: </label>
                <div class="form-group"><input type="text" name="result_test" id="result_test" class="form-control ">
                </div>
            </div>
            <div class="col-md-4">
                <label>Registrasi DJK: </label>
                <div class="form-group"><input type="text" name="ojk_result" id="ojk_result" class="form-control ">
                </div>
            </div>
            <div class="col-md-4">
                <label>Cetak: </label>
                <div class="form-group"><input type="text" name="print" id="print" class="form-control ">
                </div>
            </div>
            <div class="col-md-8">
                <label>Keterangan: </label>
                <div class="form-group"><input type="text" name="notes" id="notes" class="form-control ">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <button type="submit" id="add-test-schedule" class="btn btn-sm btn-block btn-success text-white mr-1"
                    onclick="manageData('save','test-schedule')"><i class="fe fe-check fe-16"></i> Submit</button>
                <button type="submit" id="edit-test-schedule" class="btn btn-sm btn-block btn-warning text-white mr-1"
                    onclick="manageData('update')"><i class="fe fe-edit fe-16"></i> Update</button>
            </div>
        </div>
    </form>
</div>
