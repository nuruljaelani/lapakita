<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubcategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use App\Services\DatatableService;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backsite.subcategory.index', compact('categories'));
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
    public function store(SubcategoryRequest $request)
    {
        $subcategory = new SubCategory();
        $subcategory->category_id = $request->category;
        $subcategory->name = $request->name;
        $subcategory->save();

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
        $subcategory = SubCategory::find($id);
        return response()->json([
            'success' => true,
            'data' => $subcategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubcategoryRequest $request, $id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->name = $request->name;
        $subcategory->save();

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
        $subcategory = SubCategory::find($id);
        $subcategory->delete();

        return response()->json([
            'success' => true,
            'data' => 'Delete data has been successfull'
        ]);
    }

    public function datatable(DatatableService $service)
    {
        $model = SubCategory::with('category');
        return $service->datatable($model);
    }
}
