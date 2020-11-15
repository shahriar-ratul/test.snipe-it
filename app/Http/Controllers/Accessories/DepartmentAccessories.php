<?php

namespace App\Http\Controllers\Accessories;

use App\Http\Controllers\Controller;
use App\Models\Accessory;
use App\Models\Department;
use App\Models\DepartmentAccessory;
use Illuminate\Http\Request;

class DepartmentAccessories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessories = DepartmentAccessory::get();

        return view('department_accessories.index', compact('accessories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $departments = Department::get();
        $accessories = Accessory::get();
        return view('department_accessories.create', compact('departments', 'accessories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'department_id' => 'required',
            'accessory_id' => 'required',
        ]);


        $department_accessories = new DepartmentAccessory();

        $department_accessories->fill($request->all());
        $department_accessories->save();
        return redirect()->route("assign-accessories.index")->with('success', 'Item Added Successfully');
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
        $item = DepartmentAccessory::find($id);
        $departments = Department::get();
        $accessories = Accessory::get();
        return view('department_accessories.edit', compact('departments', 'accessories', 'item'));
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
        $this->validate($request, [
            'department_id' => 'required',
            'accessory_id' => 'required',
        ]);


        $department_accessories = DepartmentAccessory::find($id);
        $department_accessories->fill($request->all());
        $department_accessories->save();
        return redirect()->route("assign-accessories.index")->with('success', 'Item updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department_accessories = DepartmentAccessory::find($id);
        $department_accessories->delete();
        return redirect()->route("assign-accessories.index")->with('success', 'Item Deleted Successfully');
    }
}
