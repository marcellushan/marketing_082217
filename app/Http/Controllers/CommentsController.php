<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comments;

class CommentsController extends Controller
{
   public function update(Request $request)
   {
//      dd($request);
//       $data = $request->id();
//        dd($request);
       $service= "App\\" . $request->service;
       $data = $service::find(1);
       $data->status = $request->status;
       $data->save();
//       dd($data);
//       echo "App\\"$request->service;
       if($request->comment) {
           $comment = new Comments;
           $comment->services_id = $request->services_id;
           $comment->service = $request->service;
           $comment->comment = $request->comment;
           $comment->save();
       }
//       Session::put('press_release',2);
       return redirect('admin');
   }
}
