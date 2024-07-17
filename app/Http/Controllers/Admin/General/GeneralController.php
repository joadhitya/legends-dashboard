<?php

namespace App\Http\Controllers\Admin\General;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\MasterData\LotHouse;
use App\Models\MasterData\SubCategoryMaterial;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function generateCode(Request $request)
    {
        return Helper::generateCodeMasterData($request->target);
    }

    public function generateCodeTransactional(Request $request)
    {
        return Helper::generateCodeTransactional($request->target);
    }

    public function getMasterDataTo(Request $request)
    {
        $selected_lov = $request->selected_lov;
        $id = $request->id;
        if ($selected_lov == 'category-material') {
            $data = SubCategoryMaterial::where('id_category', $id)->get();
        } else if ($selected_lov == 'block-house') {
            $data = LotHouse::where('id_block', $id)->get();
        }
        return response()->json([
            'data' => $data,
            'message' => 'Successfully fetched data ',
            'material' => $data ? 200 : 400,
        ]);
    }
}
