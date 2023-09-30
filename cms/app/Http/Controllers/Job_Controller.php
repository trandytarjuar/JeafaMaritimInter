<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobModel;
use Illuminate\Support\Facades\Auth;

class Job_Controller extends Controller
{
    public function index()
    {
        $job = JobModel::all();
        return view('job.index',compact('job'));
    }
    
    public function delete($id)
    {
        $job = JobModel::findOrFail($id);
       
        if ($job->delete()) {
            return response()->json(['success' => true, 'message' => ' Data Job has been deleted']);
        } else {
            // Return a JSON response indicating an error
            return response()->json(['error' => false, 'message' => 'Delet Job fail']);
        }
    }

    public function add()
    {
        return view('job.add');
    }
    public function submit(Request $request)
    {
        $user = Auth::user();
        $name = $user->name;

        $title = $request->input('title');
        $salarymin = $this->formatToNumber($request->input('salarymin'));
        $salarymax = $this->formatToNumber($request->input('salarymax'));
        $qualifition = $request->input('qualifition');
        $benefite = $request->input('benefite');
        $deskripsi = $request->input('deskripsi');

        // $salary = $salarymin .'-'.$salarymax;
        $salary="";

        if($salarymin==NULL||$salary==''){
            $salary = Null;
        }else {
            $salary = $salarymin .'-'.$salarymax;
        }
      

        $job = new JobModel([
            'title' => $title,
            'gaji' => $salary,
            'benefit' => $benefite,
            'kualifikasi' => $qualifition,
            'deskripsi' => $deskripsi,
            'create_at' => $name,
            'created_date' => now(), // Set created_date to the current timestamp
        ]);

        if ($job->save()) {
            return response()->json(['success' => true, 'message' => 'Add Data Job success']);
        } else {
            return response()->json(['error' => false, 'message' => 'Add Data Job fail']);
        }

    }

    public function edit($id)
    {
        $job = JobModel::findOrFail($id);
        return view('job.edit',compact('job'));
    }

    public function formatToNumber($formattedValue)
    {
        // Menghapus semua karakter selain angka dan tanda titik
        $cleanedValue = preg_replace('/[^0-9.]/', '', $formattedValue);

        // Menghilangkan tanda titik sebagai pemisah ribuan jika ada
        $cleanedValue = str_replace('.', '', $cleanedValue);

        // Mengembalikan nilai yang sudah dibersihkan
        return $cleanedValue;
    }

    public function update(Request $request,$id)
    {
        $user = Auth::user();
        $name = $user->name;

        $job = JobModel::findOrFail($id);

        $title = $request->input('title');
        $salarymin = $this->formatToNumber($request->input('salarymin'));
        $salarymax = $this->formatToNumber($request->input('salarymax'));
        $qualifition = $request->input('qualifition');
        $benefite = $request->input('benefite');
        $deskripsi = $request->input('deskri$deskripsi');

        $salary="";

        if($salarymin==NULL||$salarymax==NULL || $salarymin==''||$salarymax=''){
            $salary = Null;
        }else {
            $salary = $salarymin .'-'.$salarymax;
        }

        $job->title = $title;
        $job->benefit = $benefite;
        $job->kualifikasi = $qualifition;
        $job->gaji = $salary;
        $job->deskripsi = $deskripsi;
        $job->update_at = $name;
        $job->update_date = now();

        if ($job->save()) {
            // Return JSON response indicating success
            return response()->json(['success' => true, 'message' => 'Update Data Contact success']);
        } else {
            // Return JSON response indicating an error
            return response()->json(['error' => true, 'message' => 'Update Data Contact fail']);
        }
    }
}
