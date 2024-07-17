<div class="modal fade text-left" id="modal-article" tabindex="-1" role="dialog" aria-labelledby="modal-title"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Form Artikel</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x"></i>
                </button>
            </div>
            <form action="javascript:void(0)" id="form-article" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Title: </label>
                            <div class="form-group">
                                <input type="text" id="title" name="title"
                                    class="form-control form-control-sm bg-transparent" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Headline: </label>
                            <div class="form-group">
                                <input type="text" id="headline" name="headline"
                                    class="form-control form-control-sm bg-transparent" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Kategori Artikel: </label>
                            <div class="form-group">
                                <select name="id_category" id="id_category"
                                    class="form-control form-control-sm bg-transparent">
                                    <option value="">--Silahkan Pilih Kategori--</option>
                                    @foreach ($category_articles as $ca)
                                        <option value="{{ $ca->id }}">{{ $ca->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Keyword: </label>
                            <div class="form-group">
                                <input type="text" id="keyword" name="keyword"
                                    class="form-control form-control-sm bg-transparent" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Slug: </label>
                            <div class="form-group">
                                <input type="text" id="slug" name="slug"
                                    class="form-control form-control-sm bg-transparent" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="logo">Gambar:</label>
                                <input type="file" id="image" name="image" class="form-control-file">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Meta Title: </label>
                            <div class="form-group">
                                <input type="text" id="meta_title" name="meta_title"
                                    class="form-control form-control-sm bg-transparent" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Meta Keywords: </label>
                            <div class="form-group">
                                <input type="text" id="meta_keyword" name="meta_keyword"
                                    class="form-control form-control-sm bg-transparent" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Deskripsi Singkat: </label>
                            <div class="form-group">
                                <textarea class="form-control" id="short_description" name="short_description" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Deskripsi Meta: </label>
                            <div class="form-group">
                                <textarea class="form-control" id="meta_description" name="meta_description" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <label>Konten Artikel:</label>
                            <textarea class="form-control" id="content" name="content" rows="4"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="add-article" class="btn btn-sm btn-success text-white mr-1"
                        onclick="manageData('save')"><i class="fe fe-check fe-16"></i> Submit</button>
                    <button type="submit" id="edit-article" class="btn btn-sm btn-warning text-white mr-1"
                        onclick="manageData('update')"><i class="fe fe-edit fe-16"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
