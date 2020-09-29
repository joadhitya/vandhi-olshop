@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom justify-content-between">
                <h2>Category</h2>
                <button type="button" class="btn btn-primary" data-target="#add-category" data-toggle="modal">+ Add
                    Data</button>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped">
                    <thead>
                        <th style="width:5%">#</th>
                        <th>Kode Kategori</th>
                        <th>Nama Kategori</th>
                        <th>Slug</th>
                        <th>Deskripsi</th>
                        <th style="width:14%">Action</th>
                    </thead>
                    <tbody id="data-category">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


@section('modal')
<div class="modal fade" id="add-category" tabindex="-1" role="dialog" aria-labelledby="add-categoryLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add-categoryLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-add-category" action="" method="post">
            <div class="modal-body">                
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category-code" class="col-form-label">Kode Kategori:</label>
                                <input type="text" class="form-control" name="category_code">
                                <input type="hidden" class="form-control" name="category_slug" value="slug">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category-name" class="col-form-label">Nama Kategori:</label>
                                <input type="text" class="form-control" name="category_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Deskripsi:</label>
                                <textarea class="form-control" name="category_description"></textarea>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="save-data-category" class="btn mb-2 btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="edit-category" tabindex="-1" role="dialog" aria-labelledby="edit-categoryLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-categoryLabel">Ubah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-edit-category" action="" method="post">
            <div class="modal-body">                
                    @csrf
                    <input type="hidden" id="id_category" name="id_category" value="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category-code" class="col-form-label">Kode Kategori:</label>
                                <input type="text" class="form-control" id="category_code" name="category_code">
                                <input type="hidden" class="form-control" id="category_slug" name="category_slug" value="slug">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category-name" class="col-form-label">Nama Kategori:</label>
                                <input type="text" class="form-control" id="category_name" name="category_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Deskripsi:</label>
                                <textarea class="form-control" id="category_description" name="category_description"></textarea>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="update-data-category" class="btn mb-2 btn-primary">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
<script src="{{asset('admin/script/master-data/category.js')}}"></script>
<script src="{{asset('admin/script/master-data/master-data.js')}}"></script>
@endpush
