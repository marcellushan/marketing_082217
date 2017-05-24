<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use App\Comments;

use Session;
use DB;

class VideoController extends BaseController
{
    const MEDIA_NAME = "Videography";
    const MODEL_NAME = 'App\\Video';
    const VIEW_FOLDER = 'videography';
    const TABLE_NAME = 'videos';
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        $datas= DB::table('videos')->join('clients', 'videos.clients_id', '=', 'clients.id')->get();
//        return view('video.list')->with(compact('datas'));
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        return view('video.create');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
////                dd($request);
//        $data = $request->all();
//        $video = new Video($data);
//        $video->clients_id=Session::get('id');
//        $video->fill($data);
//        $video->save();
//        Session::put('videography',2);
//        return redirect('service');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Video  $video
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        $videography = Video::where('clients_id', '=', $id)->first();
//        $comments = Comments::where('services_id', '=', $videography->id)->where('service', '=', 'Video')->get();
//        $service = 'Video';
//        return view('video.show')->with(compact('videography', 'service','comments'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Video  $video
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Video $video)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Video  $video
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Video $video)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Video  $video
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Video $video)
//    {
//        //
//    }
}