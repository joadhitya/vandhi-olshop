<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Category;
use App\Subcategory;
class SubcategoryController extends Controller
{
    private function _validation(Request $request){
        $validation = $request->validate([
            'subcategory_code' => 'required|max:5|min:2',
            'subcategory_name' => 'required|max:20|min:3',
            'id_category' => 'required',
        ],
        [
            'subcategory_code.required' => 'Silahkan mengisi data kode',
            'subcategory_code.min' => 'Kode minimal 2 karakter alfanumerik',
            'subcategory_code.max' => 'Kode maksimal 5 karakter alfanumerik',
            'subcategory_name.required' => 'Silahkan mengisi data nama',
            'subcategory_name.min' => 'Nama minimal 4 karakter alfanumerik',
            'subcategory_name.max' => 'Nama maksimal 20 karakter alfanumerik',
            'id_category.required' => 'Silahkan memilih data kategori',
        ]);
    }

    public function index()
    {
        $subcategories = Subcategory::get();
        $categories = Category::get();
        return view('admin.master-data.subcategory.index',['subcategories' => $subcategories, 'categories' => $categories]);
    }

    public function display(){    
        $subcategories = Subcategory::get();
        $subcategories = DB::table('subcategories')
                        ->join('categories', 'categories.id', '=', 'subcategories.id_category')
                        ->select('subcategories.*', 'categories.category_name')
                        ->get();

        $html = '';
        $no = 1;
        foreach($subcategories as $data){
            $html .= '<tr>';
            $html .= '<td>'.$no++.'</td>';
            $html .= '<td>'.$data->subcategory_code.'</td>';
            $html .= '<td>'.$data->subcategory_name.'</td>';
            $html .= '<td>'.$data->category_name.'</td>';
            $html .= '<td>'.$data->subcategory_slug.'</td>';
            $html .= '<td>'.$data->subcategory_description.'</td>';
            $html .= '<td>
                            <button type="button" onclick="editData('.$data->id.')" class="btn mx-1 btn-sm btn-outline-warning"><span class="fa fa-edit"></span></button>
                            <button type="button" onclick="deleteData('.$data->id.')" class="btn mx-1 btn-sm btn-outline-danger"><span class="fa fa-trash"></span></button>
                        </td>';
            $html .= '</tr>';
            }
        
        if($html == ''){
            $html .= '<tr ><td class="text-center" colspan="7"><h6 class="mt-2">Tidak terdapat data Subkategori</h6></td></tr>';
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
        Subcategory::create($request->all());
        echo 'Sukses menambahkan data Subkategori';
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $response[] = array(
            "id"=>$subcategory->id,
            "subcategory_code"=>$subcategory->subcategory_code,
            "subcategory_name"=>$subcategory->subcategory_name,
            "subcategory_slug"=>$subcategory->subcategory_slug,
            "id_category"=>$subcategory->id_category,
            "subcategory_description"=>$subcategory->subcategory_description,
       );
       echo json_encode($response);
    }

    public function update(Request $request, $id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->update($request->all());
        echo 'Sukses memperbaharui data Subkategori';  
    }
    
    public function destroy($id)
    {
        Subcategory::destroy($id);    
        echo 'Sukses menghapus data Subkategori';  
    }
}
