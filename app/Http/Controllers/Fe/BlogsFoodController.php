<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\category;
use App\Models\CommentsBlog;
use Illuminate\Http\Request;

class BlogsFoodController extends Controller
{
    public function ViewBlogs(){
        $blogs = Blogs::orderBy('id', 'desc')->get();
        return view('fe.blog.blogs',compact('blogs'));
    }

    public function BlogDetail($category,$slug){
        
        $blogs = Blogs::orderBy('id', 'desc')->take(3)->get();
        $cate = category::all();
        $blog = Blogs::where('slug', $slug)->first();
        $blog_id  = $blog->id;
        $comment = CommentsBlog::where('blog_id',$blog_id)->orderBy('id', 'desc')->get();
        $blogbycategory = Blogs::where('category_id', $blog->category_id)
            ->where('id', '!=', $blog->id)
            ->take(2)->get();
        return view('fe.blog.blogDetail',compact('cate','blog','blogs','blogbycategory','comment'));
    }
    
}
