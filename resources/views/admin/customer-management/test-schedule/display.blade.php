<table class="table datatables table-bordered table-hover table-data" id="table-test-schedule">
    <thead>
        <tr class="text-uppercase">
            <th class="w-5p">No</th>
            <th class="w-10p">Bidang</th>
            <th>Asesor</th>
            <th class="w-10p">Admin</th>
            <th class="w-10p">Jumlah Peserta</th>
            <th class="w-10p">Input Permohonan</th>
            <th class="w-15p">Tanggal Uji Kompetensi</th>
            <th class="w-10p">Input Hasil Kompetensi</th>
            <th class="w-15p">Registrasi OJK</th>
            <th class="w-10p">Status</th>
            <th class="w-5p">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $key => $item)
            <tr class="">
                <td class="w-5p">{{ $item->register_no }}</td>
                <td class="w-10p">{{ $item->field }}</td>
                <td>{{ $item->assessor }}</td>
                <td class="w-10p">{{ $item->admin }}</td>
                <td class="w-10p">{{ $item->number_participant }}</td>
                <td class="w-10p">{{ date_format(date_create($item->date_request), 'd F Y') }}</td>
                <td class="w-10p">{{ date_format(date_create($item->date_start_test), 'd F Y') }} - {{ date_format(date_create($item->date_end_test), 'd F Y') }}</td>
                <td class="w-15p">{{ $item->result_test }}</td>
                <td class="w-15p">{{ $item->ojk_result }}</td>
                <td class="w-10p {{ $item->status == 'POST' ? 'text-success' : 'text-primary' }}">{{ $item->status }}
                </td>
                <td class="w-5p">
                    <div class="btn-group btn-group-sm" role="group">
                        @if ($item->status == 'DRAFT')
                            <button type="button" class="btn p5x btn-sm btn-outline-success"
                                onclick="manageData('post','test-schedule',{{ $item->id }})"><span
                                    class="fe fe-send"></span></button>
                        @endif

                        @if ($item->status == 'POST')
                            <button type="button" class="btn p5x btn-sm btn-outline-danger"
                                onclick="manageData('takeout','test-schedule',{{ $item->id }})"><span
                                    class="fe fe-x-circle"></span></button>
                        @endif
                        <button type="button" class="btn p5x btn-sm btn-outline-warning"
                            {{ $item->status == 'POST' ? 'disabled' : '' }}
                            onclick="openForm('test-schedule','edit', {{ $item->id }})"><span
                                class="fe fe-edit"></span></button>
                        {{-- <button type="button" class="btn p5x btn-sm btn-outline-warning"
                            onclick="openModal('test-schedule','edit', {{ $item->id }})"><span
                                class="fe fe-edit"></span></button> --}}
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
