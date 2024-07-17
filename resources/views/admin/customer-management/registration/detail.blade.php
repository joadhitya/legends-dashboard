<div class="modal fade text-left" id="modal-detail-registration" tabindex="-1" role="dialog" aria-labelledby="modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Detail registrasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x"></i>
                </button>
            </div>
            <form action="javascript:void(0)" id="form-detail-registration" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Data Diri</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap:</label>
                                <input type="text" id="name" name="name"
                                    class="form-control form-control-sm bg-transparent" value="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nik">NIK:</label>
                                <input type="text" id="nik" name="nik"
                                    class="form-control form-control-sm bg-transparent" value="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="place_birth">Tempat Lahir:</label>
                                <input type="text" id="place_birth" name="place_birth"
                                    class="form-control form-control-sm bg-transparent" value="" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dob">Tanggal Lahir:</label>
                                <input type="text" id="dob" name="dob"
                                    class="form-control form-control-sm bg-transparent" value="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <h5>Alamat Lengkap</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="province_name">Provinsi:</label>
                                <input type="text" id="province_name" name="province_name"
                                    class="form-control form-control-sm bg-transparent" value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city_name">Kota:</label>
                                <input type="text" id="city_name" name="city_name"
                                    class="form-control form-control-sm bg-transparent" value="" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Alamat:</label>
                                <textarea class="form-control" id="address" name="address" rows="4" value="" disabled></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <h5>Kontak Informasi</h5>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">E-Mail:</label>
                                <input type="text" id="email" name="email"
                                    class="form-control form-control-sm bg-transparent" value="" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="password_offset">Password:</label>
                                <input type="text" id="password_offset" name="password_offset"
                                    class="form-control form-control-sm bg-transparent" value="" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone">No.Handphone:</label>
                                <input type="text" id="phone" name="phone"
                                    class="form-control form-control-sm bg-transparent" value="" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <h5>Lampiran</h5>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ktp">Scan KTP</label>
                                <img class="w-100" id="ktp" src="" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ijazah">Ijazah</label>
                                <img class="w-100" id="ijazah" src="" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="legal_photo">Foto Resmi</label>
                                <img class="w-100" id="legal_photo" src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </form>
        </div>
    </div>
</div>
