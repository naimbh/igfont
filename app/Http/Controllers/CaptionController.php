<?php

namespace App\Http\Controllers;

use App\Caption;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CaptionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function multiDelete(Request $request)
    {
        $ids = $request->ids;
        Caption::whereIn('id',explode(",", $ids))->delete();
        return response()->json(['success'=>"Captions Deleted successfully."]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'caption' => 'required|string',
        ]);

        $captions = explode("#", $request->caption);
        $captions = array_filter($captions);

        foreach ($captions as $item){
            $caption = Caption::create([
                'caption'   => str_replace('#', '', $item),
            ]);
        }

        if ($caption){
            Toastr::success('Caption Added Successfully!');
        }

        return back();
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
    public function edit(Caption $caption)
    {
        return view('backend.caption_edit', compact('caption'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caption $caption)
    {
        $update = $caption->update([
            'caption' => $request->caption
        ]);

        if ($update){
            Toastr::success('Caption Updated Successfully!');
        }

        return redirect(route('admin.caption'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caption $caption)
    {
        $delete = $caption->delete();

        if ($delete){
            Toastr::success('Caption Deleted Successfully!');
        }

        return back();
    }
}
