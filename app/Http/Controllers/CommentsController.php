<?php

namespace App\Http\Controllers;

use App\Mail\StatusUpdate;
use Illuminate\Http\Request;

use App\Comments;
use App\Clients;

class CommentsController extends Controller
{
   public function update(Request $request)
   {
//      dd($request);
//       echo $request->services_id;
       $service= $request->service;
       $service_name = ltrim($service, 'App\\');
       $media_name = $request->service_name;
       $data = $service::find($request->services_id);
       $data->status = $request->status;
       $data->save();
//       switch ($data->status) {
//           case 1:
//               $status = 'Received';
//               break;
//           case 2:
//               $status = 'In Progress';
//               break;
//           case 3:
//               $status = 'Awaiting Information';
//               break;
//           case 4:
//               $status = 'Awaiting Review';
//               break;
//           case 5:
//               $status = 'Completed';
//               break;
//       }


//       dd($data);
       $comment = '';
       $comment = new Comments;
       $comment->services_id = $request->services_id;
       $comment->service = $request->service;
       $comment->status = $request->status;
       if($request->comment) {
           $comment->comment = $request->comment;
       }
           $comment->save();
       $status = $request->status;
////       Session::put('press_release',2);
//       dd($request);

       $client = Clients::find($request->clients_id);

       \Mail::to($client->email)->send(new StatusUpdate($status, $data, $comment, $request->view_folder, $media_name));
       return redirect('service/' . $service_name);
   }
}
