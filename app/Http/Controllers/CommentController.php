<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller {

    //Make Comment
    public function comment(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = $request->all();

        $com_id = generate_id('comments', 'com_id', 'com', 5);

        $save['com_id'] = $com_id;
        $save['name'] = $data['name'];
        $save['email'] = $data['email'];
        $save['message'] = $data['message'];
        $save['salon_id'] = $data['salon'];

        Comment::create($save);

        return redirect()->back();
    }

    //view customer salon comment page with salon id
    public function saloncomment(Request $request) {

        $salon_id = $request->salon_id;
        return view('saloncomment', compact('salon_id'));
    }

}
