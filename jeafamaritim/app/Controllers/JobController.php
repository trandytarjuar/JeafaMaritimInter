<?php

namespace App\Controllers;

use App\Models\JobModel;
use App\Models\CandidateModel;
use Config\Services;

class JobController extends BaseController
{
    public function index()
    {
        $blog = new JobModel();
        $allBlog = $blog->index();
        $data["job"] = $allBlog->getResult();
        return view('job/index', $data);
    }
    public function submit()
    {
        $request = Services::request();
        $file = $request->getFile('file');
        $fileName = $file->getRandomName();
        $data = [
            'nama_loker' => $request->getPost('title'),
            'nama_lengkap' => $request->getPost('name'),
            'tgl_lahir' => $request->getPost('date'),
            'alamat' => $request->getPost('alamat'),
            'email' => $request->getPost('email'),
            'no_telp' => $request->getPost('telp'),
            'jenis_kelamin' => $request->getPost('gender'),
            'pendidikan' => $request->getPost('education'),
            'status_pernikahan' => $request->getPost('marital-status'),
            'document' => $fileName
        ];

        // Simpan data ke database menggunakan model
        $CandidateModel = new CandidateModel();
        $CandidateModel->saveJob($data);

        // Pindahkan file yang diunggah ke folder public/uploads
        $file->move(ROOTPATH . 'public/uploads/cv', $fileName);

        // Redirect pengguna ke halaman yang sesuai setelah pengiriman berhasil
        return redirect()->to('job')->with('success', 'Job application submitted successfully');
    }
}
