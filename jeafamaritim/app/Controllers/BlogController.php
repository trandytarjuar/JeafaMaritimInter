<?php

namespace App\Controllers;
use App\Models\BlogModel;

class BlogController extends BaseController
{
    public function index()
    {
        $blog = new BlogModel();
        $allBlog = $blog->all();
        $data["blog"] = $allBlog->getResult();
        return view('blog/index',$data);
    }
}