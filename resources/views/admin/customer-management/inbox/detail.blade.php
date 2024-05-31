<div class="modal fade text-left" id="modal-inbox" tabindex="-1" role="dialog" aria-labelledby="modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Detail Komplain Customer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x"></i>
                </button>
            </div>
            <form action="javascript:void(0)" id="form-inbox" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Pengirim: </label>
                                <input type="text" id="sender_name" name="sender_name"
                                    class="form-control form-control-sm bg-transparent" value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Kirim: </label>
                                <input type="text" id="created_at" name="created_at"
                                    class="form-control form-control-sm bg-transparent" value="" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Telepon: </label>
                                <input type="text" id="phone" name="phone"
                                    class="form-control form-control-sm bg-transparent" value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email: </label>
                                <input type="text" id="email" name="email"
                                    class="form-control form-control-sm bg-transparent" value="" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Pesan: </label>
                                <textarea class="form-control" id="message" name="message" rows="4" readonly></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="mark-read" class="btn btn-sm btn-info text-white mr-1"
                        onclick="manageData('mark-read')"><i class="fe fe-eye fe-16"></i> Mark As Read</button>
                </div>
            </form>
        </div>
    </div>
</div>
