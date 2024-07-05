<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\CommentsBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function product(Request $req,$id){
        $data = [
            'customer_id' => Auth::guard('customers')->id(),
            'product_id' => $id,
            'content' => $req->content,
            'rating' => $req->rating
        ];
    
        // dd($data);
    
        $comment = Comment::create($data);
        // return redirect()->back();

        return response()->json([
            'success' => true,
            'message' => 'Comment added successfully',
            'comment' => $comment->load('customer')
        ]);
    }
    public function blog(Request $req,$id){
        $data = [
            'customer_id' => Auth::guard('customers')->id(),
            'blog_id' => $id,
            'content' => $req->content
        ];
    
        // dd($data);
    
        $comment = CommentsBlog::create($data);
        // return redirect()->back();

        return response()->json([
            'success' => true,
            'message' => 'Comment added successfully',
            'comment' => $comment->load('customer')
        ]);
    }
}
