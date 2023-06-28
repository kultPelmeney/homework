<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::all();
        return view('front.blog', compact('blogs'));
    }

    public function show($id) {
        $blog = Blog::find($id);
        $blogComments = BlogComment::where('blog_id', $id)->get();
        return view('front.blog_detail', compact('blog', 'blogComments'));
    }

    public function addCmt(Request $request, $id)
    {
        $data = $request->all();
        $data['blog_id'] = $id;
        $data['user_id'] = Auth::user()->id;
        $data['email'] =  Auth::user()->email;
        $data['name'] = Auth::user()->name;

        BlogComment::create($data);

        return redirect('blog/' . $id . '/blog_detail');
    }
}
