<?php

namespace App\Services;

use Yajra\DataTables\DataTables;

class DatatableService {
    
    public function datatable($model)
    {
        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('action', function($c) {
                return view('components.action-button', ['id'=> $c->id]);
            })
            ->rawColumns(['action'])
            ->toJson();
    }
}