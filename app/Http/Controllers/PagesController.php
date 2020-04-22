<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function buscar(Request $request){
        $categoriasId;
        $proveedoresId;
        $articulosId;
        $categorias;
        $articulos;
        if(isset($request->name)){
            $articulos = App\Articulo::where('description',$request->name)
            ->get();;
            foreach($articulos as $ar){
                $categoriasId = App\ArticuloCategoria::where('articulo_id',$ar->id)
                ->get();;
                $proveedoresId = App\ArticuloProveedor::where('articulo_id',$ar->id)
                ->get();;
                foreach($categoriasId as $cate){
                    $categorias = App\Categoria::where('id',$cate->id)
                    ->get();;
                }
                foreach($proveedoresId as $pro){
                    $proveedores = App\Proveedor::where('id',$pro->id)
                    ->get();;
                }
            }
            
        }else if(isset($request->categoria)){
            $categorias = App\Categoria::where('description',$request->categoria)
            ->get();
            foreach($categorias as $car){
                $articulosId = App\ArticuloCategoria::where('articulo_id',$car->id)
                ->get();;

                foreach($articulosId as $cate){
                    $proveedoresId = App\ArticuloProveedor::where('articulo_id',$cate->articulo_id)
                    ->get();
                    $articulos = App\Articulo::where('id',$cate->articulo_id)
                    ->get();;
                    foreach($proveedoresId as $pro){
                        $proveedores = App\Proveedor::where('id',$pro->proveedor_id)
                        ->get();;
                       
                    }
                }
            }
        }
        else if(isset($request->preoveedor)){
            $proveedores = App\Proveedor::where('description',$request->proveedor)
            ->get();
            foreach($proveedores as $pro){
                $articulosId = App\ArticuloProveedor::where('articulo_id',$car->id)
                ->get();;

                foreach($articulosId as $cate){
                    $proveedoresId = App\ArticuloProveedor::where('articulo_id',$cate->articulo_id)
                    ->get();
                    $articulos = App\Articulo::where('id',$cate->articulo_id)
                    ->get();;
                    foreach($proveedoresId as $pro){
                        $proveedores = App\Proveedor::where('id',$pro->proveedor_id)
                        ->get();;
                       
                    }
                }
            }
        }
        return view('resultados',compact('articulos','categorias','proveedores'));
        
    }
}
