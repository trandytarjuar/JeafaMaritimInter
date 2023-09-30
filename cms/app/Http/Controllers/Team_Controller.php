<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\TeamModel;
use Illuminate\Support\Facades\Auth;

class Team_Controller extends Controller
{
    public function index()
    {
        $team = TeamModel::all();
        return view('team.index',compact('team'));
    }

    public function add()
    {
       
        return view('team.add');
    }
    public function save(Request $request)
    {
        $user = Auth::user();
        $name = $user->name;
        $nama = $request->input('name');
        $posi = $request->input('position');
        $pesan = $request->input('pesan');

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('uploads/image/team'); // Sesuaikan path penyimpanan dengan yang Anda inginkan
            $image->move($imagePath, $imageName);
        } else {
            // Jika gambar tidak diunggah, Anda mungkin ingin menangani ini sesuai kebutuhan Anda
            $imageName = null;
        }

        $team = new TeamModel([
            'nama' => $nama,
            'jabatan' => $posi,
            'pesan' => $pesan,
            'created_at' => $name,
            'created_date' => now(), // Set created_date to the current timestamp
            'foto' => $imageName, 
        ]);
        if ($team->save()) {
            // Redirect dengan pesan sukses
            return redirect('/team')->with('datasuccess', 'Data has been saved');
        } else {
            // Redirect dengan pesan error
            return redirect('/addTeam')->with('error', 'Periksa form tambah blog.');
        }
    }

    public function delete($id)
    {
        // var_dump($id); die;
        $team = TeamModel::findOrFail($id);
        if ($team->delete()) {
            return response()->json(['success' => true, 'message' => ' Data Blog has been deleted']);
        } else {
            // Return a JSON response indicating an error
            return response()->json(['error' => false, 'message' => 'Delet Blog fail']);
        }
    }

    public function edit($id)
    {
        $team = TeamModel::findOrFail($id);
        return view('team.edit',compact('team'));
    }
    public function update(Request $request,$id)
    {
        $tem = TeamModel::findOrFail($id);
        $user = Auth::user();
        $name = $user->name;

        $tem->nama = $request->input('nama');
        $tem->jabatan = $request->input('position');
        $tem->pesan = $request->input('deskripsi');
        $tem->update_at = $name;
        $tem->update_date= now();

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image/team'), $imageName);
    
            // Update the image path in the database
            $tem->foto =  $imageName;
        }else{
            $tem->foto = $tem->foto;
        }
        $tem->save();
        return redirect('/team')->with('updatesuccess', 'Blog post updated successfully');
    }
}
