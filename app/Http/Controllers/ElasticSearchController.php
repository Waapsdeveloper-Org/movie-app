<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Helpers\ElasticHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ElasticSearchController extends Controller
{
    //
    public function index(Request $request)
    {
        // get all films data and index it in elastic search
        $films = Film::all();
        $elastic = new ElasticHelper();


        $result = $elastic->bulkIndex('films', 'film', $films->toArray());
        return response()->json($result);
    }

    public function search(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'search' => 'required|string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $search = $request->get('search');
        // get all films data and index it in elastic search
        $elastic = new ElasticHelper();
        $films = $elastic->search($search);
        return self::success('FIlms List', ['data' => $films]);
    }

    public function deleteAll(Request $request)
    {
        // get all films data and index it in elastic search
        $elastic = new ElasticHelper();
        $result = $elastic->deleteAll('films');
        return response()->json($result);
    }
}
