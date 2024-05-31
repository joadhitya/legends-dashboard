<table class="table datatables table-bordered table-hover table-data" id="table-comment">
    <thead>
        <tr class="text-uppercase">
            <th class="w-5p">No</th>
            <th class="w-15p">Penulis</th>
            <th class="w-15p">Email</th>
            <th class="w-15p">Artikel</th>
            <th>Komentar</th>
            <th class="w-5p">Status</th>
            <th class="w-5p">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $key => $item)
            <tr>
                <td class="w-5p">{{ $key + 1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->comment }}</td>
                {{-- <td>{{ !$item->status ? 'Active' : 'Dikirim' }}</td> --}}
                <td>
                    @if ($item->status == 1)
                        <p class="text-uppercase text-primary">Dikirim</p>
                    @elseif ($item->status == 2)
                        <p class="text-uppercase text-success">Dipost</p>
                    @else
                        <p class="text-uppercase text-danger">Ditakeout</p>
                    @endif
                </td>
                <td class="w-5p">
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn p5x btn-sm btn-outline-primary"
                            onclick="openModal('comment','detail', {{ $item->id }})"><span
                                class="fe fe-info"></span></button>

                        @if ($item->is_post == 0)
                            <button type="button" class="btn p5x btn-sm btn-outline-success"
                                onclick="manageData('post',{{ $item->id }})"><span
                                    class="fe fe-check"></span></button>
                        @else
                            <button type="button" class="btn p5x btn-sm btn-outline-danger"
                                onclick="manageData('takeout',{{ $item->id }})"><span
                                    class="fe fe-x"></span></button>
                        @endif
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
