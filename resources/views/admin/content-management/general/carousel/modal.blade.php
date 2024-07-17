<div class="modal fade text-left" id="modal-detail-carousel" tabindex="-1" role="dialog" aria-labelledby="modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Detail Data Carousel</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" id="form-carousel-update" enctype="multipart/form-data">
                    @csrf
                    <div style='padding:2%;'>
                        <input type="hidden" id="id-carousel-edit" name="id-carousel-edit" value="" disabled>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <h4>Preview Gambar</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="w-100" id="preview-image" src="" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Nama Carousel: </label>
                                        <div class="form-group">
                                            <input type="text" id="name-carousel-edit" name="name-carousel-edit"
                                                value="" class="form-control form-control-sm bg-transparent"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Deskripsi Carousel: </label>
                                        <div class="form-group">
                                            <textarea class="form-control form-control-sm bg-transparent" rows="5" name="description-carousel-edit"
                                                id="description-carousel-edit" disabled></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Sequence Carousel</label>
                                        <div class="form-group">
                                            <select name="sequence-carousel-edit" id="sequence-carousel-edit"
                                                class="form-control form-control-sm bg-transparent" value=""
                                                disabled>
                                                {{-- <option value="undefined">Tidak tahu</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12" id="container-input-carousel">
                                        <label>Gambar Carousel</label>
                                        <div class="form-group">
                                            <input type="file" name="image-carousel-edit" id="image-carousel-edit"
                                                class="form-control-sm bg-transparent" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="btn-carousel-edit">
                                            <button class="btn btn-warning text-white btn-init-detail"
                                                onclick="handlingEditCarouselForm(true)"
                                                style="width: 100%">Edit</button>

                                        </div>
                                        <div id="btn-carousel-update">
                                            <button type="submit" class="btn btn-success text-white btn-init-detail"
                                                onclick="manageData('update', 'carousel')" style="width: 100%;">Update</button>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-danger btn-init-detail" onclick="manageData('delete', 'carousel')"
                                            style="width: 100%;">Hapus</button>
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
