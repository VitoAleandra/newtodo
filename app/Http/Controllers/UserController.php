<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

use PDF;

class UserController extends Controller
{

        public function pembayaran_all(){
            $students = User::all();
            return view('dashboard.admin.student_all', compact('students'));    
        }

        public function validai($user_id){

            Pembayaran::where('user_id', '=', $user_id)->update([
                'status' => 1,
            ]);
            return redirect()->back()->with('done', 'Berhasil Validasi');
        }


    public function tolak($user_id){
        Pembayaran::where('user_id', '=', $user_id)->update([
            'status' => 2,
        ]);
        return redirect()->back()->with('done', 'Permintaan di tolak');
    }

    public function detail_pembayaran($user_id){
        $detailUser = User::findOrfail($user_id);
        $pem = Pembayaran::where('user_id', $user_id)->fist();
        return view('dashboard.admin.detail_bukti_pembayaran', compact('pem', 'detailUser'));
    }

    public function admin_pembayaran(){

        $students = Pembayaran::with('user')->paginate(5);
        return view('dashboard.admin.admin_pembayaran', compact('students'));
    }

    public function pembayaran(){
        return view('dashboard.pembayaran');
    }
        
    /**
     * Display a listing of the resource.web
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'nisn' => 'required',
            'jk' => 'required',
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'email' => 'required|unique:users',
            'no_hp' => 'required',
            'no_hp_ayah' => 'required',
            'no_hp_ibu' => 'required',
        ]);

        User::create([
            'nisn' => $request->nisn,
            'jk' => $request->jk,
            'nama' => $request->nama,
            'asal_sekolah' => $request->asal_sekolah,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'no_hp_ayah' => $request->no_hp_ayah,
            'no_hp_ibu' => $request->no_hp_ibu,
            'password' => Hash::make($request->nisn),
            'role' => 'user',
        ]);

        $item = User::latest()->first();
        // return $pdf->stream('ppdb.pdf');
        return view('pdf', compact('item'));
        // return redirect()->route('/');

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
    public function update(Request $request, $id)
    {
        //
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
}
