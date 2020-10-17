<?php

namespace App\Http\Controllers;

use App\Setting;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SettingController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $validated = $request->validate([
            'logo' => 'sometimes|image',
            'favicon' => 'sometimes|image',
        ]);

        if ($request->hasFile('logo') || $request->hasFile('favicon')) {

            if ($request->hasFile('logo')) {
                $extension = $request->logo->extension();
                $request->logo->storeAs('/public/', 'logo' . "." . $extension);
                $update = $setting->update([
                    'logo' => 'logo.' . $extension,
                ]);

            }elseif ($request->hasFile('favicon')) {

                $extension = $request->favicon->extension();
                $request->favicon->storeAs('/public/', 'favicon' . "." . $extension);
                $update = $setting->update([
                    'favicon' => 'favicon.' . $extension,
                ]);
            }
        }

        $update = $setting->update([
            'title' => $request->title,
            'bgcolor'   => $request->bgcolor,
            'limit' => $request->limit,
        ]);

        if ($update) {
            Toastr::success('Settings Updated Successfully!');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
