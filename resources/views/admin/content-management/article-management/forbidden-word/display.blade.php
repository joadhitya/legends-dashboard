<table class="table datatables table-bordered table-hover table-data" id="table-forbidden-word">
    <thead>
        <tr class="text-uppercase">
            <th class="w-5p">No</th>
            <th>Kata Terlarang</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $key => $item)
            <tr>
                <td class="w-5p">{{ $key + 1 }}</td>
                <td>{{$item}}</td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
