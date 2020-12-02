<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
use App\Models\comment;
use App\Models\notification;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function store(Request $request)
    {
        

         post::create([
             'title' => $request->title,
             'userid'=> Auth::id(),
             'description'=>$request->description,
             'city'=>$request->city,
             'address'=>$request->address,
             'price'=>$request->price,
             'date'=>$request->date,
             'time'=>$request->time
         ]);


        //return $request->all();
         return redirect('/allpost');

    }

    public function showpost(Type $var = null)
    {
        $p = post::all();
        return view('showPosts',["posts"=>$p]);
        # code...
    }

    public function postComment($id,Request $request)
    {
        comment::create([
            'userid'=>Auth::id(),
            'parentid'=>$id,
            'comment'=>$request->comment,
        ]);

        $body = \App\Models\User::where('id','=',Auth::id()) -> first("firstname")->firstname.'is interested in your job';
        $userid_post = post::where('id','=',$id)->first("userid")->userid;
        notification::create([
            'userid'=>$userid_post,
            'body'=> $body,
            'status'=> 'notread',
            'postid'=> $id,
        ]);

        return redirect()->back();
        # code...
    }

    public function details($id)
    {
        # code...
        $p = post::find($id);
        $po = post::where('id',$id)->get();
        $c = comment::where('parentid', $id)->get();
        $users = User::where('id',$p->userid)->get();
        //dd($users);
        return view('detail_comment',["post"=>$po,"comment"=>$c, "user"=>$users]);
    }

}
