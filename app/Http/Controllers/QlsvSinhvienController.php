<?php

namespace App\Http\Controllers;

use App\Models\qlsv_sinhvien;
use App\Models\User;
use Illuminate\Http\Request;
class QlsvSinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sinhVien = qlsv_sinhvien::all();
        return view('admin.Quantriadmin.SinhVien.quanlySinhvien', ['qlsv_sinhvien' => $sinhVien]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sinhVien = qlsv_sinhvien::all();
        return view('admin.Quantriadmin.SinhVien.addSinhvien', ['qlsv_sinhvien' => $sinhVien]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sinhVien = new qlsv_sinhvien();
        $User= new User();
        $User->name= $request->name;
        $User->email= $request->email;
        $User->password= $request->password;
        $sinhVien->hovaten = $request->hovaten;
        $sinhVien->diachi = $request->diachi;
        $sinhVien->gioitinh = $request->gioitinh;
        $sinhVien->gmail = $request->gmail;
        $sinhVien->sodienthoaisinhvien = $request->sodienthoaisinhvien;
        $sinhVien->sodienthoaigiadinh = $request->sodienthoaigiadinh;
        $sinhVien->ghichu = $request->ghichu;
        $sinhVien->save();
        $User->save();
        return redirect('/sinhvien/index');
    }
    public function edit($id)
    {
        $sinhVien = qlsv_sinhvien::find($id);
        return view('admin.Quantriadmin.SinhVien.updateSinhvien', ['qlsv_sinhvien' => $sinhVien]);
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\qlsv_sinhvien  $qlsv_sinhvien
     * @return \Illuminate\Http\Response
     */
    public function show(qlsv_sinhvien $qlsv_sinhvien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\qlsv_sinhvien  $qlsv_sinhvien
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\qlsv_sinhvien  $qlsv_sinhvien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sinhVien = qlsv_sinhvien::find($id);
        $sinhVien->hovaten = $request->hovaten;
        $sinhVien->diachi = $request->diachi;
        $sinhVien->gioitinh = $request->gioitinh;
        $sinhVien->gmail = $request->gmail;
        $sinhVien->sodienthoaisinhvien = $request->sodienthoaisinhvien;
        $sinhVien->sodienthoaigiadinh = $request->sodienthoaigiadinh;
        $sinhVien->ghichu = $request->ghichu;
        $sinhVien->save();
        return redirect('/sinhvien/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\qlsv_sinhvien  $qlsv_sinhvien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sinhVien = qlsv_sinhvien::find($id);
        $sinhVien->delete();
        return redirect('/sinhvien/index');
    }
}
