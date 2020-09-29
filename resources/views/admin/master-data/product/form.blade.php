@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom justify-content-between">
                <a href="{{route('product')}}" class="btn btn-warning">Kembali</a>
                <h2>Tambah Produk</h2>
            </div>
            <div class="card-body">
                <form class="needs-validation" method="post" action="{{route('product.save')}}" enctype="multipart/form-data" novalidate="">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="">Kode Produk</label>
                            <input type="text" class="form-control" id="product_code" name="product_code" placeholder=""
                                value="" required="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="">Produk</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" placeholder=""
                                value="" required="">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="">Kategori</label>
                            <select class="form-control" name="id_category" required id="id_category"
                                onchange="get_sub_cat('subcategory')">
                                <option value="0">Select Category</option>
                            </select>
                        </divp>

                        <div class="col-md-3 mb-3">
                            <label for="">Subkategori</label>
                            <select class="form-control" name="id_subcategory" required id="id_subcategory">
                                <option value="0">Select Sub Category</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="">Harga Produk</label>
                            <input type="text" class="form-control" id="product_price" name="product_price" placeholder="" value=""
                                required="">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="">Stock</label>
                            <input type="text" class="form-control" id="product_stock" name="product_stock" placeholder="" value=""
                                required="">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="">Recomended</label>
                            <select class="form-control" name="is_recomended" required id="is_recomended">
                                <option value="0">Tidak</option>
                                <option value="1">Ya</option>
                            </select>
                        </div>
                        <div class="col-md-5 mb-3">
                            <label for="">Deskripsi Singkat</label>
                            <input class="form-control" name="product_slug" value="" required id="product_slug" />
                        </div>

                    </div>
                    <hr>

                    <div class="form-row">
                        <div class="col-md-5 mb-3">
                            <label for="">Deskripsi</label>
                            <textarea type="text" class="form-control" id="product_description" name="product_description" value=''
                                id="" placeholder="Description Category"></textarea>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="">Gambar</label>
                            <div class="input-group mb-3">
                                <input onChange="get_image()" type="file" name="product_image" id="product_image" class="form-control" />
                            </div>
                            <ouput>
                                <div>
                                    <img src="" alt="">
                                </div>
                        </div>

                        <button id="submit_product" name="submit" type="submit" class="btn btn-primary btn-block"><i
                                class="ti-check mr-2"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@push('page-scripts')
<script src="{{asset('admin/script/master-data/product.js')}}"></script>
<script src="{{asset('admin/script/master-data/master-data.js')}}"></script>
@endpush
