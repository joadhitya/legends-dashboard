@extends('admin.layouts.master')
@section('title', 'Konten Management Tentang Perusahaan')
@section('content')
    <div class="col-md-12 ">
        <div class="card shadow">
            <div class="card-header">
                <div class="toolbar row ">
                    <div class="col-md-4 col-sm-4 col-4">
                        <h5 class="h5 text-uppercase">Tentang Perusahaan</h5>
                    </div>

                    <div class="col-md-8 col-sm-8 col-8 ">
                        {{-- <button type="button" class="btn btn-sm btn-outline-danger mr-1 float-right text-uppercase"
                            onclick="activityDetail('about-us','terminate')"><i class="fe fe-x-circle"></i>
                            Terminate
                            Konten</button> --}}
                        <button type="button" class="btn btn-sm btn-outline-primary mr-1 float-right text-uppercase"
                            onclick="activityDetail('about-us','manage')"><i class="fe fe-settings"></i> Kelola
                            Konten</button>
                        <button type="button" class="btn btn-sm btn-outline-warning mr-1 float-right text-uppercase"
                            onclick="activityDetail('about-us','update')"><i class="fe fe-edit"></i> Update
                            Konten</button>
                        <button type="button" class="btn btn-sm btn-outline-success mr-1 float-right text-uppercase"
                            onclick="activityDetail('about-us','preview')"><i class="fe fe-eye"></i> Preview
                            Konten</button>
                    </div>
                </div>
            </div>
            <div class="card p-1">
                <div class="card-header">
                    <div class="toolbar row">
                        <div class="col-md-12 col-sm-12 col-12 text-center">Management tentang Profile Perusahaan digunakan
                            untuk mengatur isi konten yang berada pada halaman "Tentang Perusahaan"
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="card-body pt-2" id="show-data-about-us">
                <div class="d-flex text-center ">
                    <div class="spinner-border spinner-border text-black mr-2"> <span class="sr-only">Loading...</span>
                    </div>
                    <h4 for="" class="ml-2">Please Wait ......</h4>
                </div>
            </div> --}}
            <div class="card p-2" id="activity-detail-about-us">
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
    @include('admin.content-management.profile-company.about-us.modal')
@endsection

@push('page-scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script src="{{ asset('script/admin/profile-company.js') }}"></script>
    <script src="{{ asset('script/admin/general.js') }}"></script>
@endpush
