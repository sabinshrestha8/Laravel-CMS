<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class PostController extends Controller
{
    public function create() {

        // $data['post'] = new Post();
        // if ($request->post_id) {
        //     $id = $request->post_id;
        //     $data['post'] = Post::where('id', $id)->first();
        // }

        return view('admin.post.addPost');
    }

    public function show() {
        $data['posts'] = Post::paginate(10);
        return view('admin.post.showpost', $data);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'section_title' => 'required',
        ]);
        if ($validator->fails()) {
            $success = 0;
            return back()->withErrors($validator)->withInput();
        } else {
            if ($request->image) {
                $filename = $this->fileUpload($request, 'image', '');
            }
            $data = array(
                'page_title' => $request->page_title,
                'section_title' => $request->section_title,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $filename,
            );
            $post = Post::create($data);
            if ($post) {
                return redirect()->route('post-add')->with(['message' => 'post successfully inserted']);
            } else {
                return back()->with(['message' => 'Something is Wrong']);
            }
        }
    }
}
