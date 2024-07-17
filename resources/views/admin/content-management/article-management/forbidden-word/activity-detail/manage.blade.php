<table class="table datatables table-bordered table-hover table-data">
    <thead>
        <tr class="text-uppercase">
            <th>Kata Terlarang</th>
            <th class="w-5p">Aksi <button type="button" class="btn p5x btn-sm btn-outline-success"
                    onclick="addForbiddenWord()"><span class="fe fe-plus"></span></button></th>
        </tr>
    </thead>
    <tbody id='table-body-manage-forbidden'>
        @forelse ($data as $key => $item)
            <tr class="row-table-forbidden" id="row-data-{{ $key }}">
                <td><input type="text" class="form-control form-control-sm input-forbidden-word" value="{{ $item }}"></td>
                <td class="w-5p"> <button type="button" class="btn p5x btn-sm btn-outline-danger"
                        onclick="removeForbiddenWord('{{ $key }}')"><span
                            class="fe fe-x-circle"></span></button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="2">Tidak terdapat kata terlarang</td>
            </tr>
        @endforelse
    </tbody>
</table>
<input type="hidden" id="value_forbidden_word" value="{{$config}}">
