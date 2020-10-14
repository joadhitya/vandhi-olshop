@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom justify-content-between">
                <h2>Subkategori</h2>
                <button type="button" class="btn btn-primary" data-target="#add-subcategory" data-toggle="modal">+ Tambah
                    Data</button>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped">
                    <thead>
                        <th style="width:5%">#</th>
                        <th>Kode Subkategori</th>
                        <th>Nama Subkategori</th>
                        <th>Kategori</th>
                        <th>Slug</th>
                        <th>Deskripsi</th>
                        <th style="width:13%">Aksi</th>
                    </thead>
                    <tbody id="data-subcategory">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


@section('modal')
<div class="modal fade" id="add-subcategory" tabindex="-1" role="dialog" aria-labelledby="add-subcategoryLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add-subcategoryLabel">Tambah Subkategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-add-subcategory" action="" method="post">
            <div class="modal-body">                
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subcategory-code" class="col-form-label">Kode Subkategori:</label>
                                <input type="text" class="form-control" name="subcategory_code">
                                <input type="hidden" class="form-control" name="subcategory_slug" value="slug">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subcategory-name" class="col-form-label">Nama Subkategori:</label>
                                <input type="text" class="form-control" name="subcategory_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subcategory-name" class="col-form-label">Kategori:</label>
                                <select name="id_category" id="" class="form-control">
                                    <option value="">--Silahkan pilih Kategori--</option>
                                    @foreach ($categories as $data)
                                    <option value="{{$data->id}}">{{$data->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Deskripsi:</label>
                                <textarea class="form-control" name="subcategory_description"></textarea>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="save-data-subcategory" class="btn mb-2 btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="edit-subcategory" tabindex="-1" role="dialog" aria-labelledby="edit-subcategoryLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-subcategoryLabel">Ubah Subkategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-edit-subcategory" action="" method="post">
            <div class="modal-body">                
                    @csrf
                    <input type="hidden" id="id_subcategory" name="id_subcategory" value="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subcategory-code" class="col-form-label">Kode Subkategori:</label>
                                <input type="text" class="form-control" id="subcategory_code" name="subcategory_code">
                                <input type="hidden" class="form-control" id="subcategory_slug" name="subcategory_slug" value="slug">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subcategory-name" class="col-form-label">Nama Subkategori:</label>
                                <input type="text" class="form-control" id="subcategory_name" name="subcategory_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category-name" class="col-form-label">Kategori:</label>
                                <select name="id_category" id="id_category" class="form-control">
                                    <option value="">--Silahkan pilih Kategori--</option>
                                    @foreach ($categories as $data)
                                    <option value="{{$data->id}}">{{$data->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Deskripsi:</label>
                                <textarea class="form-control" id="subcategory_description" name="subcategory_description"></textarea>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="update-data-subcategory" class="btn mb-2 btn-primary">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
<script src="{{asset('admin/script/master-data/subcategory.js')}}"></script>
<script src="{{asset('admin/script/master-data/master-data.js')}}"></script>
@endpush
