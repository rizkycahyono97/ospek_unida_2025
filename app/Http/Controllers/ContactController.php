<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100',
            'status' => 'required|min:3|max:100|in:Calon Mahasiswa Baru,Wali Calon Mahasiswa',
            'email' => 'required|email|min:3|max:255',
            'phone' => 'required|numeric',
            'message' => 'required|string|min:10|max:1000',
            // 'name' => 'required',
            // 'status' => 'required',
            // 'email' => 'required|email',
            // 'phone' => 'required|numeric',
            // 'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->name,
            'status' => $request->status,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message
        ];

        try {
            // kirim email
            Mail::send(new ContactMail($data));
            
            return redirect()->back()->with('success', 'Pesan berhasil dikirim');

        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Pesan gagal dikirim' . $e->getMessage());
        }
    }
}
