<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
class ProveedorController extends Controller
{
    public function HandleGetProveedores(){
        return Proveedor::orderBy('id','desc')->get();
    }
    public function HandleGetProveedor($id){
        return Proveedor::where('id',$id)->first();
    }
    public function HandleStoreProveedor(Request $request){
        Proveedor::create($request->all());
    }
    public function HandleUpdateProveedor(Request $request){
        Proveedor::findOrFail($request->id)->fill($request->all())->save();
    }
    public function HandleDeleteProveedor($id){
        Proveedor::findOrFail($id)->delete();
    }
}
