<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Catalogue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const  PATH_VIEW = 'admin.catalogues.';
    const  PATH_UPLOAD = 'catalogues';

    public function index()
    {
        $data = Catalogue::query()->latest('id')->paginate(5);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catalogues = Catalogue::all();
        return view(self::PATH_VIEW . __FUNCTION__,compact('catalogues'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('image');
        if($request->hasFile('image')){
            $data['image'] = Storage::put(self::PATH_UPLOAD,$request->file('image'));
        }
        Catalogue::query()->create($data);
        return redirect()->route('admin.catalogues.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model=Catalogue::query()->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
