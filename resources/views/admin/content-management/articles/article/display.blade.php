<table class="table datatables table-bordered table-hover table-data" id="table-article">
    <thead>
        <tr class="text-uppercase">
            <th class="w-5p">No</th>
            <th class="w-15p">Kategori</th>
            <th>Headline</th>
            <th class="w-15p">Status</th>
            <th class="w-5p">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $key => $item)
            <tr>
                <td class="w-5p">{{ $key + 1 }}</td>
                <td class="w-15p">
                    @php
                        use Illuminate\Support\Facades\DB;
                        $category = DB::table('category_articles')->select('category_articles.*')->get();
                        $arrayCategory = explode(',', $item->id_category);
                        $matchingCategoryArticles = [];
                        foreach ($arrayCategory as $categoryId) {
                            // Find the corresponding category article in $category
                            $matchingArticle = $category->firstWhere('id', $categoryId);

                            // If a matching article is found, add it to the result array
                            if ($matchingArticle) {
                                $matchingCategoryArticles[] = $matchingArticle;
                            }
                        }
                        print_r($matchingCategoryArticles);

                    @endphp
                </td>
                <td>{{ $item->headline }}</td>
                <td class="w-15p">{{ $item->status }}</td>
                <td class="w-5p">
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn p5x btn-sm btn-outline-warning"
                            onclick="openModal('article','edit', {{ $item->id }})"><span
                                class="fe fe-edit"></span></button>
                        <button type="button" class="btn p5x btn-sm btn-outline-danger"
                            onclick="manageData('delete',{{ $item->id }}, '{{ $item->title }}')"><span
                                class="fe fe-trash"></span></button>
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
