<?php

namespace App\Http\Controllers;

use App\Models\VisiModel;
use App\Models\MisiModel;
use App\Models\AboutusModel;
use App\Models\ManfaatModel;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Aboutus_Controller extends Controller
{
    public function index()
    {   $about = AboutusModel::all();
        return view('about.index',compact('about'));
    }
    public function deleteabout($id)
    {
        $about = AboutusModel::findOrFail($id);
        if ($about->delete()) {
            return response()->json(['success' => true, 'message' => ' Data  has been deleted']);
        } else {
            // Return a JSON response indicating an error
            return response()->json(['error' => false, 'message' => 'Delet  fail']);
        }
    }
    public function addabout()
    {
        return view('about.add');
    }
    public function submitabout(Request $request)
    {
        $user = Auth::user();
        $name = $user->name;
        $title = $request->input('title');
        $deskripsi = $request->input('deskripsi');
        $about = new AboutusModel([
            'title'=>$title,
            'description'=>$deskripsi,
            'created_at'=>$name,
            'created_date'=>now()
        ]);
        if ($about->save()) {
            // Return a JSON response indicating success
            // return response()->json(['success' => true]);
            return response()->json(['success' => true, 'message' => 'Add Data success']);
        } else {
            // Return a JSON response indicating an error
            return response()->json(['error' => false, 'message' => 'Add Data fail']);
        }
    }
    public function editabout($id)
    {
        $about= AboutusModel::findOrFail($id);
        return view('about.edit',compact('about'));
    }
    public function updateabout(Request $request,$id)
    {
        $about =AboutusModel::findOrFail($id);
        $user = Auth::user();
        $name = $user->name;

        $title = $request->input('title');
        $deskripsi = $request->input('deskripsi');

        $about->title = $title;
        $about->description = $deskripsi;
        $about->update_at = $name;
        $about->update_date = now();
        // var_dump($about); die;
        if ($about->save()) {
            // Return JSON response indicating success
            return response()->json(['success' => true, 'message' => 'Update Data  success']);
        } else {
            // Return JSON response indicating an error
            return response()->json(['error' => true, 'message' => 'Update Data  fail']);
        }
    }
    public function visi()
    {
        $visi = VisiModel::all();
        // var_dump($visi); die;
        return view('about.visi.index', compact('visi'));
    }
    public function addvisi()
    {
        return view('about.visi.add');
    }
    public function submitvisi(Request $request)
    {
        $user = Auth::user();
        $name = $user->name;
        $deskripsi = $request->input('deskripsi');
        $visi = new VisiModel([
            'deskripsi' => $deskripsi,
            'created_by' => $name,
            'created_date' => now()
        ]);

        if ($visi->save()) {
            // Return a JSON response indicating success
            // return response()->json(['success' => true]);
            return response()->json(['success' => true, 'message' => 'Add Data Visi success']);
        } else {
            // Return a JSON response indicating an error
            return response()->json(['error' => false, 'message' => 'Add Data Visi fail']);
        }
    }
    public function deletevisi($id)
    {
        $visi = VisiModel::findOrFail($id);
        if ($visi->delete()) {
            return response()->json(['success' => true, 'message' => ' Data Visi has been deleted']);
        } else {
            // Return a JSON response indicating an error
            return response()->json(['error' => false, 'message' => 'Delet Visi fail']);
        }
    }
    public function editvisi($id)
    {
        $visi = VisiModel::findOrFail($id);
        return view('about.visi.edit', compact('visi'));
    }
    public function updatevisi(Request $request, $id)
    {
        $visi = VisiModel::findOrFail($id);

        $user = Auth::user();
        $name = $user->name;

        $deskripsi = $request->input('deskripsi');

        $visi->deskripsi = $deskripsi;
        $visi->update_at = $name;
        $visi->update_date = now();
        // var_dump($visi); die;
        if ($visi->save()) {
            // Return JSON response indicating success
            return response()->json(['success' => true, 'message' => 'Update Data visi success']);
        } else {
            // Return JSON response indicating an error
            return response()->json(['error' => true, 'message' => 'Update Data visi fail']);
        }
    }
    public function misi()
    {
        $misi = MisiModel::all();
        return view('about.misi.index', compact('misi'));
    }
    public function addmisi()
    {
        return view('about.misi.add');
    }
    public function submitmisi(Request $request)
    {
        $user = Auth::user();
        $name = $user->name;
        $deskripsi = $request->input('deskripsi');
        $misi = new MisiModel([
            'deskripsi' => $deskripsi,
            'create_at' => $name,
            'created_date' => now()
        ]);
        if ($misi->save()) {
            // Return a JSON response indicating success
            // return response()->json(['success' => true]);
            return response()->json(['success' => true, 'message' => 'Add Data Misi success']);
        } else {
            // Return a JSON response indicating an error
            return response()->json(['error' => false, 'message' => 'Add Data Misi fail']);
        }
    }
    public function deletemisi($id)
    {
        $misi = MisiModel::findOrFail($id);
        if($misi->delete()) {
            return response()->json(['success' => true, 'message' => ' Data Visi has been deleted']);
        } else {
            // Return a JSON response indicating an error
            return response()->json(['error' => false, 'message' => 'Delet Visi fail']);
        }
    }
    public function editmisi($id)
    {
        $misi = MisiModel::findOrFail($id);
        return view('about.misi.edit',compact('misi'));
    }
    public function updatemisi(Request $request,$id)
    {
        $misi = MisiModel::findOrFail($id);

        $user = Auth::user();
        $name = $user->name;

        $deskripsi = $request->input('deskripsi');

        $misi->deskripsi = $deskripsi;
        $misi->update_at = $name;
        $misi->update_date = now();

        if ($misi->save()) {
            // Return JSON response indicating success
            return response()->json(['success' => true, 'message' => 'Update Data visi success']);
        } else {
            // Return JSON response indicating an error
            return response()->json(['error' => true, 'message' => 'Update Data visi fail']);
        }
    }

    public function indexmsk()
    {
        $manfaat = ManfaatModel::all();
        return view('about.manfaatsistemkerjasama.index',compact('manfaat'));
    }
    public function addmanfaat()
    {
        return view('about.manfaatsistemkerjasama.addmanfaat');
    }
    public function submitmsanfaat(Request $request)
    {
        $user = Auth::user();
        $name = $user->name;
        $deskripsi = $request->input('deskripsi');
        $manfaat = new ManfaatModel([
            'deskripsi' => $deskripsi,
            'create_at' => $name,
            'create_date' => now()
        ]);
        if ($manfaat->save()) {
            // Return a JSON response indicating success
            // return response()->json(['success' => true]);
            return response()->json(['success' => true, 'message' => 'Add Data  success']);
        } else {
            // Return a JSON response indicating an error
            return response()->json(['error' => false, 'message' => 'Add Data  fail']);
        }
    }

    public function deletemanfaat($id)
    {
        $manfaat = ManfaatModel::findOrFail($id);
        if($manfaat->delete()) {
            return response()->json(['success' => true, 'message' => ' Data  has been deleted']);
        } else {
            // Return a JSON response indicating an error
            return response()->json(['error' => false, 'message' => 'Delet  fail']);
        }
    }
    public function editmanfaat($id)
    {
        $manfaat = ManfaatModel::findOrFail($id);
        return view('about.manfaatsistemkerjasama.edit',compact('manfaat'));
    }

    public function updatemanfaat(Request $request,$id)
    {
        $manfaat = ManfaatModel::findOrFail($id);

        $user = Auth::user();
        $name = $user->name;

        $deskripsi = $request->input('deskripsi');

        $manfaat->deskripsi = $deskripsi;
        $manfaat->update_at = $name;
        $manfaat->update_date = now();

        if ($manfaat->save()) {
            // Return JSON response indicating success
            return response()->json(['success' => true, 'message' => 'Update Data  success']);
        } else {
            // Return JSON response indicating an error
            return response()->json(['error' => true, 'message' => 'Update Data  fail']);
        }
    }
}
