<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class FileController extends Controller
{
    public function serveCV($filename)
    {
        // Ambil URL PDF dari konfigurasi (APP_PDF)
        $pdfUrl = env('APP_PDF');

        // Pastikan URL PDF sudah ditentukan
        if (empty($pdfUrl)) {
            Log::error('PDF URL is not configured.');
            abort(500, 'PDF URL is not configured');
        }

        // Bentuk URL lengkap untuk file CV
        $fileUrl = $pdfUrl . '/' . $filename;

        // Coba untuk mendapatkan file dari URL
        $fileContents = @file_get_contents($fileUrl);

        // Jika file berhasil diambil, kirim sebagai response
        if ($fileContents !== false) {
            return response($fileContents, 200)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'inline; filename="' . $filename . '"');
        } else {
            Log::error('File not found at URL: ' . $fileUrl);
            abort(404, 'File not found');
        }
    }
}
