<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Division;
use App\Http\Controllers\Controller;
use App\Organization;
use App\Payment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::latest('created_at')
                    ->paginate(10);
        $single_blog = new Blog();
        return view('admin.news')
            ->with('blog', $blog)
            ->with('single_blog', $single_blog)
            ->with('title', 'All Blogs');
    }

    public function add()
    {
        $blog = Blog::all();
        $single_blog = new Blog();
        return view('admin.news.add')
            ->with('blog', $blog)
            ->with('single_blog', $single_blog)
            ->with('title', 'All Blogs');
    }

    public function validatedData(){
        return request()->validate([
            'title' => 'required',
            'type' => 'required',
            'description' => 'required',
            'image' => 'nullable',
            'link' => 'nullable',
            'reference' => 'nullable',
        ]);
    }

    public function store(Request $request)
    {
        $blog = Blog::create($this->validatedData());
//        $blog = new Blog();
//        $blog->title = $request->input('title');
//        $blog->type = $request->input('type');
//        $blog->description = $request->input('description');
//        dd($request->input('image'));
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = 'blog_' . $blog->id . '.' . $extension;
            $file->move('img/blog/', $filename);
            $blog->image = 'https://shomonnoibd.com/img/blog/'.$filename;
        }
        $blog->reference = $request->input('reference');
//        $blog->save();
        if($blog->link==null){
            $blog->link = $blog->type.'/'.$blog->id;
        }
        $blog->save();
//        $blog->update($this->validatedData());

//        dd($organization);
        return redirect('/admin/blog-edit')
            ->with('status', 'New News Added');
    }

    public function edit($id)
    {
        $single_blog = Blog::findOrFail($id);

        return view('admin.news.edit')
            ->with('single_blog', $single_blog);

//        dd($organization);
//        return redirect('/admin/organization-edit')->with('status', 'New Organization Added');
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update($this->validatedData());
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = 'blog_' . $blog->id . '.' . $extension;
            $file->move('img/blog/', $filename);
            $blog->image = 'https://shomonnoibd.com/img/blog/'.$filename;
            $blog->save();
        }
//        dd($blog);
//        $blog->reference = $request->input('reference');
//        $blog->link = $request->input('link');
//        $blog->save();

        return redirect('/admin/blog-edit')
            ->with('status', 'News is Updated');
    }


    public function delete($id)
    {
//        dd($id);
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect('/admin/blog-edit')
            ->with('status', 'Data is Deleted');

    }
}
