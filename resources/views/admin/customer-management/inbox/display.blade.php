<table class="table datatables table-bordered table-hover table-data" id="table-inbox">
    <thead>
        <tr class="text-uppercase">
            <th class="w-5p">No</th>
            <th class="w-15p">Pengirim</th>
            <th class="w-15p">Email</th>
            <th>Pesan</th>
            <th class="w-5p">Status</th>
            <th class="w-5p">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $key => $item)
            <tr>
                <td class="w-5p">{{ $key + 1 }}</td>
                <td>{{ $item->sender_name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->message }}</td>
                <td>{{ !$item->is_read ? 'Dibaca' : 'Dikirim' }}</td>
                <td class="w-5p">
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn p5x btn-sm btn-outline-success"
                            onclick="openModal('inbox','edit', {{ $item->id }})"><span
                                class="fe fe-send"></span></button>
                        <button type="button" class="btn p5x btn-sm btn-outline-primary"
                            onclick="openModal('inbox','edit', {{ $item->id }})"><span
                                class="fe fe-info"></span></button>
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
