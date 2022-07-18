<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChildCategoryRequest;
use App\Models\ChildCategory;
use App\Models\SubCategory;
use App\Services\DatatableService;
use Illuminate\Http\Request;

class ChildcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::all();
        return view('backsite.childcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChildCategoryRequest $request)
    {
        $childCategory = new ChildCategory();
        $childCategory->name = $request->name;
        $childCategory->subcategory_id = $request->subcategory_id;
        $childCategory->save();

        return response()->json([
            'success' => true,
            'data' => 'Insert data has been successfull'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $childCategory = ChildCategory::find($id);
        return response()->json([
            'success' => true,
            'data' => $childCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChildCategoryRequest $request, $id)
    {
        $childCategory = ChildCategory::find($id);
        $childCategory->name = $request->name;
        $childCategory->save();

        return response()->json([
            'success' => true,
            'data' => 'Update data has been successfull'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $childCategory = ChildCategory::find($id);
        $childCategory->delete();

        return response()->json([
            'success' => true,
            'data' => 'Delete data has been successfull'
        ]);
    }

    public function datatable(DatatableService $service)
    {
        $model = ChildCategory::with('subCategory');
        return $service->datatable($model);
    }
}
