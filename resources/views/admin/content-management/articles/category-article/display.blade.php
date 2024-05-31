<table class="table datatables table-bordered table-hover table-data" id="table-category-article">
    <thead>
        <tr class="text-uppercase">
            <th class="w-5p">No</th>
            <th class="w-15p">Code</th>
            <th>Nama</th>
            <th>Slug</th>
            <th>Description</th>
            <th class="w-5p">Action</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($data as $key => $item)
            <tr>
                <td class="w-5p">{{ $key + 1 }}</td>
                <td class="w-15p">{{ $item->code }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->slug }}</td>
                <td>{{ $item->description }}</td>
                <td class="w-5p">
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn p5x btn-sm btn-outline-warning"
                            onclick="openModal('category-article','edit', {{ $item->id }})"><span
                                class="fe fe-edit"></span></button>
                        <button type="button" class="btn p5x btn-sm btn-outline-danger"
                            onclick="manageData('delete',{{ $item->id }}, '{{ $item->name }}')"><span
                                class="fe fe-trash"></span></button>
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
