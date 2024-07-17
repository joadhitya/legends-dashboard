<div class="card-body p-2" id="">
    <input type="hidden" id="order_sequence" value="">
    <table class="table datatables table-bordered table-hover table-data" id="sortable-table">
        <thead>
            <tr class="text-uppercase">
                <th class="w-5p">No</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $key => $item)
                <tr data-id="{{ $item->id }}">
                    <td class="w-5p">{{ $key + 1 }}</td>
                    {{-- @if (
                        $type == 'field-vertical' ||
                            $type == 'field-horizontal' ||
                            $type == 'booklet' ||
                            $type == 'booklet-Legends' ||
                            $type == 'booklet-form' ||
                            $type == 'booklet-pustaka' ||
                            $type == 'booklet-regulasi' ||
                            $type == 'skktk' ||
                            $type == 'skktk-pembangkit' ||
                            $type == 'bidang-pembangkitan' ||
                            $type == 'bidang-distribusi' ||
                            $type == 'bidang-pemanfaatan' ||
                            $type == 'bidang-penjualan'
                            )
                    @elseif($type == 'booklset')
                    @endif --}}
                    <td>{{ $item->name }}</td>
                @empty
            @endforelse
        </tbody>
    </table>
</div>
<div class="card-footer">
    <div class="row">
        <div class="col-md-6">
            <button type="button"
                class="btn btn-sm btn-block btn-success text-white mr-1"onclick=" saveOrderSequence('{{ $type }}')"><i
                    class="fe fe-code fe-16"></i> Urutkan Konten</button>
            {{-- <button type="submit" id="edit-article" class="btn btn-sm btn-block btn-warning text-white mr-1"
                onclick="manageData('update')"><i class="fe fe-edit fe-16"></i> Update</button> --}}
        </div>
    </div>
</div>
