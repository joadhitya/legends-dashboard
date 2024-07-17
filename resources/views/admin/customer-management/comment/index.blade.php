@extends('admin.layouts.master')
@section('title', 'Komentar - Kustomer')
@section('content')
    <div class="col-md-12 ">
        <div class="card shadow">
            <div class="card-header">
                <div class="toolbar row ">
                    <div class="col-md-6 col-sm-6 col-6">
                        <h5 class="h5 text-uppercase">List Komentar Artikel</h5>
                    </div>
                    {{-- <div class="col-md-6 col-sm-6 col-6">
                        <button type="button" class="btn btn-sm btn-primary mr-1 float-right text-uppercase"
                            onclick="openModal('comment','add')"><i class="fe fe-plus"></i> Tambah Data</button>
                    </div> --}}
                </div>
            </div>

            <div class="card-body pt-2" id="show-data-comment">
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
    {{-- @include('admin.customer-management.comment.detail') --}}
@endsection

@push('page-scripts')
    <script src="{{ asset('script/admin/master-data.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js" integrity="sha512-42PE0rd+wZ2hNXftlM78BSehIGzezNeQuzihiBCvUEB3CVxHvsShF86wBWwQORNxNINlBPuq7rG4WWhNiTVHFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="{{ asset('script/admin/general.js') }}"></script> --}}
@endpush
