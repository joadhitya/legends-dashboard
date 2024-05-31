@extends('admin.layouts.master')
@section('title', 'List Kata Terlarang')
@section('content')
    <div class="col-md-12 ">
        <div class="card shadow">
            <div class="card-header">
                <div class="toolbar row ">
                    <div class="col-md-6 col-sm-6 col-6">
                        <h5 class="h5 text-uppercase">List Kata Terlarang</h5>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">

                        <button id="btn-manage-forbidden-word" type="button"
                            class="btn btn-sm btn-primary mr-1 float-right text-uppercase"
                            onclick="openForm('forbidden-word','manage')"><i class="fe fe-settings"></i> Kelola
                            Kata</button>
                        <button id="btn-submit-forbidden-word" style="display: none" type="button"
                            class="btn btn-sm btn-success mr-1 float-right text-uppercase text-white"
                            onclick="manageData('submit')"><i class="fe fe-check-circle"></i>Simpan Data</button>
                        <button id="btn-back-forbidden-word" style="display: none" type="button"
                            class="btn btn-sm btn-warning text-white mr-1 float-right text-uppercase"
                            onclick="openForm('forbidden-word','back')"><i class="fe fe-skip-back"></i> Kembali</button>
                    </div>
                </div>
            </div>

            <div class="card-body pt-2" id="show-data-forbidden-word">
                <div class="d-flex text-center ">
                    <div class="spinner-border spinner-border text-black mr-2"> <span class="sr-only">Loading...</span>
                    </div>
                    <h4 for="" class="ml-2">Please Wait ......</h4>
                </div>
            </div>
            <div class="card-body pt-2" id="activity-detail-forbidden-word" style="display: none">
                <div class="d-flex text-center ">
                    <div class="spinner-border spinner-border text-black mr-2"> <span class="sr-only">Loading...</span>
                    </div>
                    <h4 for="" class="ml-2">Please Wait ......</h4>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('modal')
    {{-- @include('admin.master-data.booklet.modal') --}}
@endsection

@push('page-scripts')
    <script src="{{ asset('script/admin/article-management.js') }}"></script>
    {{-- <script src="{{ asset('script/admin/general.js') }}"></script> --}}
@endpush
