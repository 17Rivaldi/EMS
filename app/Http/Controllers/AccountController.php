<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::find(auth()->id());
        return view('web.account', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('informasi-akun');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:tbl_users',
            'phone_number' => 'nullable|numeric',
            'birthdate' => 'nullable|date',
            'gender' => 'nullable|in:male,female',
        ]);

        User::create($validatedData);

        return redirect()->route('user.create')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, User $user)
    {
        //   // Validasi form
        // //  $validatedData = validator($request->all(), [
        // //     'nama' => 'required|string|max:255',
        // //     'email' => 'required|email|max:255',
        // //     'phone_number' => 'nullable|string|max:15',
        // //     'birthdate' => 'nullable|date',
        // //     'gender' => 'in:male,female',
        // //     'fileInput' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
        // // ])->validate();


        // $user->name = $request->nama;
        // $user->email = $request->email;
        // $user->phone_number = $request->phone_number;
        // $user->birthdate = $request->birthdate;
        // $user->gender = $request->gender;

        // if ($request->password == "") {
        //     $user->password = $request->password;
        // }else{
        //     $user->password = $request->password_lama;
        // }


        // $user->save();

        // Validasi form
        // $request->validate([
        //     'nama' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'phone_number' => 'nullable|string|max:15',
        //     'birthdate' => 'nullable|date',
        //     'gender' => 'in:male,female',
        //     'fileInput' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
        // ]);

        // Ambil data user dari auth
        $user = auth()->user();

        // Update data user
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->birthdate = $request->birthdate;
        $user->gender = $request->gender;

        // Update gambar jika ada yang diunggah
        if ($request->fileInput) {
            $image = $request->file('fileInput');
            $name_img = $user->name . '.' . $image->getClientOriginalExtension();

            // Hapus gambar lama jika ada
            if ($user->gambar) {
                File::delete(public_path('upload/profile-image' . $name_img));
                echo public_path('upload/profile-image' . $name_img);
            }

            // Simpan gambar baru
            // $imagePath = $request->file('fileInput')->store(public_path('upload/profile-image'));
            // $user->gambar = $imagePath;
            // echo $imagePath;

            $image->move(public_path() . '/upload/profile-image', $name_img);
            $user->gambar = $name_img;
            echo $name_img;
        }

        // Simpan perubahan
        $user->save();

        return redirect()->route('informasi-akun')->with('success', 'Profil berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateProfile(Request $request, User $user)
    {
    }
}
