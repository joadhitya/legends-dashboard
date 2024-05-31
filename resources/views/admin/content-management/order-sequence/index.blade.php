@extends('admin.layouts.master')
@section('title', 'Management Atur Urutan Konten')

@push('page-styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.css">
@endpush

@section('content')
    <div class="col-md-12 ">
        <div class="card shadow">
            <div class="card-header">
                <div class="toolbar row ">
                    <div class="col-md-6 col-sm-6 col-6">
                        <h5 class="h5 text-uppercase">Atur Urutan Konten</h5>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <button id="back-order-sequence" style="display: none" type="button"
                            class="btn btn-sm btn-warning mr-1 text-white float-right text-uppercase"
                            onclick="openForm('order-sequence','back')"><i class="fe fe-skip-back"></i> Kembali</button>
                    </div>
                </div>
            </div>

            <div class="card-body pt-2" id="show-data-order-sequence">
                <div class="d-flex text-center ">
                    <div class="spinner-border spinner-border text-black mr-2"> <span class="sr-only">Loading...</span>
                    </div>
                    <h4 for="" class="ml-2">Please Wait ......</h4>
                </div>
                {{-- <table id="sortable-table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-id="1"><td>1</td><td>Article 1</td></tr>
                        <tr data-id="2"><td>2</td><td>Article 2</td></tr>
                        <tr data-id="3"><td>3</td><td>Article 3</td></tr>
                    </tbody>
                </table>

                <button id="getOrderButton">Get Order Index</button> --}}
            </div>

            <div class="card-body py-0 px-1" id="activity-detail-order-sequence" style="display: none">
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
@endsection

@push('page-scripts')
    <script src="{{ asset('script/admin/general.js') }}"></script>
    <script src="{{ asset('script/admin/order-sequence.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>\
    <script>
    </script>
@endpush
