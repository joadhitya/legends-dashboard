    <div class="col-md-12 p-4">
        <form action="javascript:void(0)" id="form-article" enctype="multipart/form-data">
            @csrf
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
                        <select name="id_category[]" multiple id="id_category"
                            class="form-control form-control-sm bg-transparent select2-multi">
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
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="logo">Gambar:</label>
                        <input type="file" id="image" name="image" class="form-control-file">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Tanggal:</label>
                        <input type="date" id="date_archieve" name="date_archieve"
                            class="form-control form-control-sm bg-transparent" value="">
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
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" id="add-article" class="btn btn-sm btn-block btn-success text-white mr-1"
                        onclick="manageData('save')"><i class="fe fe-check fe-16"></i> Submit</button>
                    <button type="submit" id="edit-article" class="btn btn-sm btn-block btn-warning text-white mr-1"
                        onclick="manageData('update')"><i class="fe fe-edit fe-16"></i> Update</button>
                </div>
            </div>
        </form>
    </div>



    @push('page-scripts')
        <script>
            $('.select2-multi').select2({
                multiple: true,
                theme: 'bootstrap4',
            });
        </script>
    @endpush
