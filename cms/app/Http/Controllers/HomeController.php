<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $home = HomeModel::all();
        return view('home.tagline.index', compact('home'));
    }
    public function addtagline()
    {
        return view('home.tagline.add');
    }
    public function submittagline(Request $request)
    {
        $user = Auth::user();
        $name = $user->name;
        $title = $request->input('title');
        $tagline = $request->input('tagline');

        $home = new HomeModel([
            'title' => $title,
            'tagline' => $tagline,
            'created_by' => $name,
            'created_date' => now(), // Set created_date to the current timestamp
        ]);
        if ($home->save()) {
            // Return a JSON response indicating success
            // return response()->json(['success' => true]);
            return response()->json(['success' => true, 'message' => 'Add Data  success']);
        } else {
            // Return a JSON response indicating an error
            return response()->json(['error' => false, 'message' => 'Add Data  fail']);
        }
    }

    public function deletetagline($id)
    {
        $home = HomeModel::findOrFail($id);
        if ($home->delete()) {
            return response()->json(['success' => true, 'message' => ' Data  has been deleted']);
        } else {
            // Return a JSON response indicating an error
            return response()->json(['error' => false, 'message' => 'Delet  fail']);
        }
    }
    
    public function edittagline($id)
    {
        $home= HomeModel::findOrFail($id);
        return view('home.tagline.edit',compact('home'));
    }
    public function updatetagline(Request $request,$id)
    {
        $home = HomeModel::findOrFail($id);

        $user = Auth::user();
        $name = $user->name;

        $title = $request->input('title');
        $tagline = $request->input('tagline');

        $home->title = $title;
        $home->tagline	 = $tagline;

        $home->update_date = now();
        $home->update_at = $name; 

        if ($home->save()) {
            // Return JSON response indicating success
            return response()->json(['success' => true, 'message' => 'Update Data  success']);
        } else {
            // Return JSON response indicating an error
            return response()->json(['error' => true, 'message' => 'Update Data  fail']);
        }
    }
    public function indexbanner()
    {
        $home = HomeModel::all();
        return view('home.banner.index', compact('home'));
    }
    public function editbanner($id)
    {
        $home = HomeModel::findOrFail($id);
        return view('home.banner.edit',compact('home'));
    }
    public function updatebanner(Request $request, $home_id)
    {
        $home = HomeModel::findOrFail($home_id);
    
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image/home'), $imageName);
    
            // Update the image path in the database
            $home->banner1 =  $imageName;
        }
    
        if ($request->hasFile('gambar2')) {
            $gambar2 = $request->file('gambar2');
            $imageName2 = time() . '.' . $gambar2->getClientOriginalExtension();
            $gambar2->move(public_path('uploads/image/home'), $imageName2);
    
            // Update the image path in the database
            $home->banner2 = $imageName2;
        }
    
        $home->save();
        return redirect('/banner')->with('updatesuccess', 'Banner post updated successfully');
    }
    

}
