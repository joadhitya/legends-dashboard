<table class="table datatables table-bordered table-hover table-data" id="table-registration">
    <thead>
        <tr class="text-uppercase">
            <th class="w-5p">No</th>
            <th>Nama Lengkap</th>
            <th class="w-10p">NIK</th>
            <th class="w-15p">Email</th>
            <th class="w-10p">Lampiran</th>
            <th class="w-5p">Status</th>
            <th class="w-10p">Approval</th>
            <th class="w-5p">Action</th>
        </tr>
    </thead>
    <style>
        .registration-body tr td {
            vertical-align: top !important;
        }
    </style>
    <tbody class="registration-body" style="">
        @forelse ($data as $key => $item)
            <tr>
                <td class="w-5p">{{ $key + 1 }}</td>
                <td>{{ $item->name }}</td>
                <td class="w-10p">{{ $item->nik }}</td>
                <td class="w-15p">{{ $item->email }}</td>
                <td class="w-10p">
                    {{-- admin/images/ktp --}}
                    <a target="_blank" href="{{ url('admin/images/ktp/' . $item->ktp) }}">KTP</a><br>
                    <a target="_blank" href="{{ url('admin/images/ijazah/' . $item->ijazah) }}">Ijazah</a><br>
                    <a target="_blank" href="{{ url('admin/images/legal_photo/' . $item->legal_photo) }}">Foto Resmi</a>
                </td>
                <td class="w-5p">{{ $item->status }}</td>
                <td class="w-10p">{{ $item->status == 'REQUESTED'? 'Belum di proses' : '' }}</td>
                <td class="w-5p">
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn p5x btn-sm btn-outline-success"
                            onclick="manageData('approval', 'registration',{{ $item->id }})"><span
                                class="fe fe-send"></span></button>
                        <button type="button" class="btn p5x btn-sm btn-outline-primary"
                            onclick="openModal('registration','detail', {{ $item->id }})"><span
                                class="fe fe-info"></span></button>
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
