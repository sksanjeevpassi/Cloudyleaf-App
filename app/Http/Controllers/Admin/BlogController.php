<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function getBlog(Request $request)
    {
        $blogs = Blog::all();
        return view('Admin/Blog/index', ['blogs' => $blogs]);
    }

    public function addBlog(Request $request)
    {
        return view('Admin/Blog/add');
    }

    public function saveBlog(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'blog_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'blog_name' => 'required|string|max:255',
            'blog_description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Save data to the database
        $blog = new Blog;
        $blog->blog_name = $request->input('blog_name');
        $blog->blog_description = $request->input('blog_description');

        // Handle image upload with a unique name
        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $blog->blog_image = $imageName;
        }

        $blog->save();

        // Redirect with success message
        return redirect()->route('list.blog')->with('success', 'Blog saved successfully!');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('Admin/Blog/edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'blog_name' => 'required|string',
            'blog_description' => 'required|string',
            'blog_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed image types and size as needed
        ]);

        $blog = Blog::findOrFail($id);

        // Handle image upload
        if ($request->hasFile('blog_image')) {
            // Delete the old image
            Storage::delete('uploads/' . $blog->blog_image);

            // Store the new image with a unique name
            $image = $request->file('blog_image');
           $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
           
           $image->move(public_path('uploads'), $imageName);
            $blog->blog_image = $imageName;
        }

        // Update other fields
        $blog->blog_name = $request->input('blog_name');
        $blog->blog_description = $request->input('blog_description');

        $blog->save();

        return redirect()->route('list.blog')->with('success', 'Blog updated successfully!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete the associated image
        Storage::delete('uploads/' . $blog->blog_image);

        $blog->delete();

        return redirect()->route('list.blog')->with('success', 'Blog deleted successfully!');
    }
}
