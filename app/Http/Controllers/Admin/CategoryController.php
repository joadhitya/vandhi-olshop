<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category;

use Illuminate\Http\Request;


class CategoryController extends Controller
{
    private function _validation(Request $request){
        $validation = $request->validate([
            'category_code' => 'required|max:5|min:2',
            'category_name' => 'required|max:20|min:3',
        ],
        [
            'category_code.required' => 'Silahkan mengisi data kode',
            'category_code.min' => 'Kode minimal 2 karakter alfanumerik',
            'category_code.max' => 'Kode maksimal 5 karakter alfanumerik',
            'category_name.required' => 'Silahkan mengisi data nama',
            'category_name.min' => 'Nama minimal 4 karakter alfanumerik',
            'category_name.max' => 'Nama maksimal 20 karakter alfanumerik'
        ]);
    }

    public function index()
    {       
        return view('admin.master-data.category.index');
    }

    public function display(){    
        $categories = Category::get();
        $html = '';
        $no = 1;
        foreach($categories as $data){
            $html .= '<tr>';
            $html .= '<td>'.$no++.'</td>';
            $html .= '<td>'.$data->category_code.'</td>';
            $html .= '<td>'.$data->category_name.'</td>';
            $html .= '<td>'.$data->category_name.'</td>';
            $html .= '<td>'.$data->category_description.'</td>';
            $html .= '<td>
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
        //
    }

    public function store(Request $request)
    {
        $this->_validation($request);
        Category::create($request->all());
        echo 'Sukses menambahkan data Kategori';
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $response[] = array(
            "id"=>$category->id,
            "category_code"=>$category->category_code,
            "category_name"=>$category->category_name,
            "category_slug"=>$category->category_slug,
            "category_description"=>$category->category_description,
       );
       echo json_encode($response);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        echo 'Sukses memperbaharui data Kategori';  
    }
    
    public function destroy($id)
    {
        Category::destroy($id);    
        echo 'Sukses menghapus data Kategori';  
    }
}
