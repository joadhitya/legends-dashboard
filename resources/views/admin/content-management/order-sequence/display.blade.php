<table class="table datatables table-bordered table-hover table-data" id="">
    <thead>
        <tr class="text-uppercase">
            <th class="w-5p">No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th class="w-5p">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $key => $item)
            <tr id="row-order-sequence-{{ $item->code }}">
                <td class="w-5p">{{ $key + 1 }}</td>
                <td>{{ $item->code }}</td>
                <td>{{ $item->title }}</td>
                <td class="w-5p">
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn p5x btn-sm btn-outline-primary"
                            onclick="manageData('order-sequence',{{ $item->id }}, '{{ $item->code }}')"><span
                                class="fe fe-settings"></span></button>
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
