<?php

namespace App\Http\Controllers;

use App\SocialMedia;
use Illuminate\Http\Request;

use App\Comments;
use Session;
use URL;
use DB;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas= DB::table('social_media')->join('clients', 'social_media.clients_id', '=', 'clients.id')->get();
        return view('social_media.list')->with(compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('social_media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $data = $request->all();
        $request_type = new SocialMedia($data);
        $request_type->fill($data);
        $request_type->clients_id=Session::get('id');
        if($request->file('image')) {
            $file = $request->file('image');
            $destinationPath = 'uploads';
            $myRandom = rand(1, 10000);
            $myPath = $myRandom . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $myPath);
            $request_type->image = URL::to('/') . "/uploads/" . $myPath;
        }
        $request_type->save();
        Session::put('social_media',2);
        return redirect('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $social_media = SocialMedia::where('clients_id', '=', $id)->first();
        $comments = Comments::where('services_id', '=', $social_media->id)->where('service', '=', 'SocialMedia')->get();
        $service = 'SocialMedia';
        return view('social_media.show')->with(compact('social_media', 'service','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $socialMedia)
    {
        //
    }
}
