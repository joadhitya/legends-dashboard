<div class="row">
    <div class="col-md-12">
        <h4 class="text-center">Management Data Konten General</h4>
        <hr>
    </div>
    <div class="col-md-12">
        <div class="d-flex mb-2" style="gap: 20px;">
            <button id="tab-company-location" onclick="handlingMenuLayoutTab('location')" type="button"
                class="btn mb-2 p-2 btn-primary btn-md">
                <span class="fe fe-map-pin fe-18 mr-2"></span>
                Lokasi Perusahaan</button>
            <button id="tab-company-contact" onclick="handlingMenuLayoutTab('contact')" type="button"
                class="btn mb-2 btn-light btn-md">
                <span class="fe fe-phone-call fe-18 mr-2"></span>
                Kontak Perusahaan</button>
        </div>
        <hr>
        <div id='information-area'>
            <div id='location-company-container'>
                <form action="javascript:void(0)" id="form-information-location-update" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class='col-md-6'>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Lokasi Perusahaan</h4>
                                </div>
                                <div class="col-md-12">
                                    <p id='location-company-info'>{{ $location->description }}</p>
                                    <div class="form-group">
                                        <textarea class="form-control form-control-sm bg-transparent" rows="5" name="location"
                                            id="location-company-edit" style="display: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-2" style="gap: 20px;">
                                <button id="btn-edit-location" class="btn btn-warning btn-init-detail"
                                    onclick="handlingInformationForm('location', true)">
                                    <span class="fe fe-edit fe-18 mr-2"></span>
                                    Edit Lokasi
                                </button>
                                <button type="submit" id="btn-update-location" class="btn btn-success btn-init-detail"
                                    onclick="manageData('update', 'location')" style="display: none;">
                                    <span class="fe fe-check fe-18 mr-2"></span>
                                    Update
                                </button>
                                <button id="btn-cancel-location" class="btn btn-danger btn-init-detail"
                                    onclick="handlingInformationForm('location', false)" style="display: none;">
                                    <span class="fe fe-x-circle fe-18 mr-2"></span>
                                    Cancel
                                </button>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='row'>
                                <div class="col-md-12">
                                    <h4>Alamat Perusahaan</h4>
                                </div>
                                <div class="col-md-12">
                                    <p id='location-address-info'>{{ $address->description }}</p>
                                    <div class="form-group">
                                        <textarea class="form-control form-control-sm bg-transparent" rows="5" name="address"
                                            id="location-address-edit" style="display: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div id='contact-company-container' style="display: none;">
                <form action="javascript:void(0)" id="form-information-contact-update" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class='col-md-6'>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Email Perusahaan</h4>
                                </div>
                                <div class="col-md-12">
                                    <p id='contact-email-info'>{{ $email->description }}</p>
                                    <div class="form-group">
                                        <textarea class="form-control form-control-sm bg-transparent" rows="5" name="email"
                                            id="contact-email-edit" style="display: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-2" style="gap: 20px;">
                                <button id="btn-edit-contact" class="btn btn-warning btn-init-detail"
                                    onclick="handlingInformationForm('contact', true)">
                                    <span class="fe fe-edit fe-18 mr-2"></span>
                                    Edit Kontak
                                </button>
                                <button type="submit" id="btn-update-contact" class="btn btn-success btn-init-detail"
                                    onclick="manageData('update', 'contact')" style="display: none;">
                                    <span class="fe fe-check fe-18 mr-2"></span>
                                    Update
                                </button>
                                <button id="btn-cancel-contact" class="btn btn-danger btn-init-detail"
                                    onclick="handlingInformationForm('contact', false)" style="display: none;">
                                    <span class="fe fe-x-circle fe-18 mr-2"></span>
                                    Cancel
                                </button>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='row'>
                                <div class="col-md-12">
                                    <h4>Telepon Perusahaan</h4>
                                </div>
                                <div class="col-md-12">
                                    <p id='contact-phone-info'>{{ $phone->description }}</p>
                                    <div class="form-group">
                                        <textarea class="form-control form-control-sm bg-transparent" rows="5" name="phone"
                                            id="contact-phone-edit" style="display: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
