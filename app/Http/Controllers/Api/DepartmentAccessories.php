<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DepartmentAccessoriesCollection;
use App\Http\Transformers\DepartmentsAccessoriesTransformer;
use App\Models\DepartmentAccessory;
use Illuminate\Http\Request;

class DepartmentAccessories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $allowed_columns = ['id', 'department_id', 'accessory_id'];
        $accessories = DepartmentAccessory::with('department')->with('accessory');
        if ($request->filled('search')) {
            $accessories = $accessories->TextSearch($request->input('search'));
        }

        if ($request->filled('department_id')) {
            $accessories->where('department_id', '=', $request->input('department_id'));
        }

        if ($request->filled('accessory_id')) {
            $accessories->where('accessory_id', '=', $request->input('accessory_id'));
        }

        // Set the offset to the API call's offset, unless the offset is higher than the actual count of items in which
        // case we override with the actual count, so we should return 0 items.
        $offset = (($accessories) && ($request->get('offset') > $accessories->count())) ? $accessories->count() : $request->get('offset', 0);


        // Check to make sure the limit is not higher than the max allowed
        ((config('app.max_results') >= $request->input('limit')) && ($request->filled('limit'))) ? $limit = $request->input('limit') : $limit = config('app.max_results');


        $order = $request->input('order') === 'asc' ? 'asc' : 'desc';

        $total = $accessories->count();

        $accessories = $accessories->skip($offset)->take($limit)->get();

        return new DepartmentAccessoriesCollection(DepartmentAccessory::get());
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
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
