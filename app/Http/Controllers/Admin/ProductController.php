<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Category;
use App\Subcategory;
use App\Product;

use File;
class ProductController extends Controller
{

    public function index()
    {
        return view('admin.master-data.product.index');
    }

    public function display(){    
        $products = Product::get();
                    // ->join('categories', 'categories.id', '=', 'products.category')
                    // ->join('subcategories', 'subcategories.id', '=', 'products.subcategory')
                    // ->select('products.*', 'categories.category_name', 'subcategories.subcategory_name')
                    // ->get();
        // echo json_encode($products);
        // die;

        $html = '';
        $no = 1;
        foreach($products as $data){
            $html .= '<tr>';
            $html .= '<td>'.$no++.'</td>';
            $html .= '<td>'.$data->product_code.'</td>';
            $html .= '<td>'.$data->product_name.'</td>';
            $html .= '<td>'.$data->product_price.'</td>';
            $html .= '<td>'.$data->product_stock.'</td>';
            $html .= '<td><img style="width:50px" src="../../storage/'.$data->product_image.'" /></td>';
            $html .= '<td>
                            <button type="button" onclick="detailData('.$data->id.')" class="btn mx-1 btn-sm btn-outline-info"><span class="fa fa-eye"></span></button>
                            <button type="button" onclick="editData('.$data->id.')" class="btn mx-1 btn-sm btn-outline-warning"><span class="fa fa-edit"></span></button>
                            <button type="button" onclick="deleteData('.$data->id.')" class="btn mx-1 btn-sm btn-outline-danger"><span class="fa fa-trash"></span></button>
                        </td>';
            $html .= '</tr>';
            }
        
        if($html == ''){
            $html .= '<tr ><td class="text-center" colspan="6"><h6 class="mt-2">Tidak terdapat data kategori</h6></td></tr>';
         }
         echo $html;
    }

    public function create()
    {
        return view('admin.master-data.product.form');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $img = $data['product_image'] = $request->file('product_image')->store(
            'assets/product', 'public'
        );


        DB::table('products')->insert([
            [
                'product_code' => $request->product_code, 
                'product_name' => $request->product_name, 
                'id_category' => $request->id_category, 
                'id_subcategory' => $request->id_subcategory, 
                'product_price' => $request->product_price, 
                'product_stock' => $request->product_stock, 
                'is_recomended' => $request->is_recomended, 
                'product_description' => $request->product_description, 
                'product_slug' => $request->product_slug, 
                'product_image' => $img
            ]
        ]);
        
        return view('admin.master-data.product.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
