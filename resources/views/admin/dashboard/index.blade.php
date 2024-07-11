@extends('admin.layouts.master')
@section('title', 'Master Data Kategori Satuan')
@section('content')
    <div class="col-md-12 ">
        <div class="card shadow">
            <div class="card-header">
                <div class="toolbar row ">
                    <div class="col-md-6 col-sm-6 col-6">
                        <h5 class="h5 text-uppercase">Dashboard</h5>
                    </div>
                </div>
            </div>

            <div class="card-body-pt-2" id="section-chart-revenue">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-0">
                                <label class="col-form-label">Periode Transaksi</label>
                                {{-- <select name="start_periode" id="start_periode"
                                    class="form-control form-control-sm bg-transparent">
                                    <option value="">--Pilih Periode</option>
                                    @foreach ($data as $dataPeriodeStart)
                                        <option value="{{ $dataPeriodeStart->jt }}">
                                            {{ date_format(date_create($dataPeriodeStart->jt), 'd F Y') }}</option>
                                    @endforeach
                                </select> --}}
                                <input type="date" name="start_periode" id="start_periode" class="form-control form-control-sm bg-transparent">
                              
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-0">
                                <label class="col-form-label">Akhir Periode Transaksi</label>
                                <input type="date" name="end_periode" id="end_periode" class="form-control form-control-sm bg-transparent">
                              
                                {{-- <select name="end_periode" id="end_periode"
                                    class="form-control form-control-sm bg-transparent">
                                    <option value="">--Pilih Periode</option>
                                    @foreach ($data as $dataPeriodeEnd)
                                        <option value="{{ $dataPeriodeEnd->jt }}">
                                            {{ date_format(date_create($dataPeriodeEnd->jt), 'd F Y') }}</option>
                                    @endforeach
                                </select> --}}
                            </div>
                        </div>
                        {{-- <div class="col-md-4">
                            <div class="form-group mb-0">
                                <label class="col-form-label">Item</label>
                                <select multiple name="item[]" id="item"
                                    class="form-control form-control-sm bg-transparent">
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-md-4">
                            <div class="form-group mb-0">
                                <button type="button" class="btn text-uppercase btn-primary btn-sm text-white btn-block"
                                    onclick="showDashboard()" style="margin-top:30px"><i
                                        class="fe fe-search mr-2"></i>Tampilan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="chart-revenue">
                    <div class="col-md-12 mt-2">
                        <h5 class="text-center">--Silahkan pilih periode--</h5>
                    </div>
                </div>
            </div>

            <div class="card-body pt-2" id="table-revenue">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table datatables table-bordered table-hover table-data" id="table-revenue">
                            <thead>
                                <tr class="text-uppercase">
                                    @foreach (['DATE', 'THERAPIST', 'NONA', 'KITCHEN', 'BEVERAGE', 'PAKET', 'MINOL', 'WINE', 'CIGARETTE', 'CERUTU', 'MINIBAR', 'ROOM', 'LOSTNBRAKE'] as $header)
                                        <th>{{ $header }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ date_format(date_create($item->jt), 'd F Y') }}</td>
                                        @foreach (['therapist', 'nona', 'kitchen', 'beverage', 'paket', 'minol', 'wine', 'cigarettes', 'cerutu', 'minibar', 'room', 'lostnbrake'] as $field)
                                            <td class="text-right">{{ number_format($item->$field) }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


@section('modal')
@endsection

@push('page-scripts')
    <script src="js/Chart.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });

        var htmlLoading = `<div class="d-flex text-center ">
                    <div class="spinner-border spinner-border text-black mr-2"> <span class="sr-only">Loading...</span>
                    </div>
                    <h4 for="" class="ml-2">Please Wait ......</h4>
                </div>`;

        var htmlEmpty = `<div class="col-md-12 mt-2">
                        <h5 class="text-center">--Silahkan pilih periode--</h5>
                    </div>`;

        function showDashboard() {
            $("#chart-revenue").html(htmlLoading)
            var start_periode = $("#start_periode").val();
            var end_periode = $("#end_periode").val();
            if (start_periode == "" || end_periode == "") {
                $("#chart-revenue").html(htmlEmpty)
                return;
            }

            $.ajax({
                type: "post",
                url: "/admin/revenue",
                data: {
                    start_periode,
                    end_periode,
                },
                dataType: "json",
                success: function(response) {
                    console.log(response)
                    $("#chart-revenue").html(response.view);
                },
                error: function(err) {
                    console.log(err)
                }
            });
        }
    </script>
@endpush
