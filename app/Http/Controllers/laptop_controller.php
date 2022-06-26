<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_laptop;

class laptop_controller extends Controller
{
     public function getAll(){
         return tb_laptop::all();
     }

     public function save(Request $req){
        $data = new tb_laptop;
        $data->merek = $req->input('merek');
        $data->serial = $req->input('seri');
        $data->tahun_produksi = $req->input('tahun_produksi');
        $data->save();
        return "Data Saved";

     }
     public function update($id){
         return tb_laptop::where('id',$id)->first();
     }
     public function updated(Request $req){
        $data = tb_laptop::where('id',$req->id)->first();
        $data->merek = $req->input('merek');
        $data->serial = $req->input('seri');
        $data->tahun_produksi = $req->input('tahun_produksi');
        $data->save();
        return "Data Updated";
     }

     public function delete($id){
         $data = tb_laptop::where('id',$id)->first();
         $data->delete();
         return "Data Deleted";
     }




}