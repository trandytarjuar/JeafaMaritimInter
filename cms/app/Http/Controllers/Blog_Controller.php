<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use Illuminate\Support\Facades\Auth;

class Blog_Controller extends Controller
{
    public function index()
    {
        $blog = BlogModel::all();
        return view('blog.index', compact('blog'));
    }

    public function add()
    {
        return view('blog.add');
    }


    public function delete($id)
    {

        $blog = BlogModel::findOrFail($id);

        if ($blog->delete()) {
            return response()->json(['success' => true, 'message' => ' Data Blog has been deleted']);
        } else {
            // Return a JSON response indicating an error
            return response()->json(['error' => false, 'message' => 'Delet Blog fail']);
        }
    }
    public function submit(Request $request)
    {
        $user = Auth::user();
        $name = $user->name;
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');

        // Simpan gambar jika ada
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('uploads/image/blog'); // Sesuaikan path penyimpanan dengan yang Anda inginkan
            $image->move($imagePath, $imageName);
        } else {
            // Jika gambar tidak diunggah, Anda mungkin ingin menangani ini sesuai kebutuhan Anda
            $imageName = null;
        }

        $blog = new BlogModel([
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'create_at' => $name,
            'created_date' => now(), // Set created_date to the current timestamp
            'image' => $imageName, // Simpan nama file gambar ke dalam kolom 'gambar'
        ]);

        if ($blog->save()) {
            // Redirect dengan pesan sukses
            return redirect('/blog')->with('datasuccess', 'Data has been saved');
        } else {
            // Redirect dengan pesan error
            return redirect('/add')->with('error', 'Periksa form tambah blog.');
        }
    }

    public function edit($id)
    {
        $blog = BlogModel::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request,$id)
    {
        $blog = BlogModel::findOrFail($id);
        $user = Auth::user();
        $name = $user->name;
        $blog->judul = $request->input('judul');
        $blog->deskripsi = $request->input('deskripsi');
        $blog->update_at = $name;
        $blog->update_date = now();

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image/blog'), $imageName);
    
            // Update the image path in the database
            $blog->image = 'uploads/image/blog/' . $imageName;
        }else{
            $blog->image = $blog->image;
        }
        $blog->save();
        return redirect('/blog')->with('updatesuccess', 'Blog post updated successfully');
    }
}
