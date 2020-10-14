@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom justify-content-between">
                <h2>Produk</h2>
                <a href="{{route('product.create')}}" class="btn btn-primary" >+ Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped">
                    <thead>
                        <th style="width:5%">#</th>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                        <th style="width:18%">Aksi</th>
                    </thead>
                    <tbody id="data-product">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


@push('page-scripts')
<script src="{{asset('admin/script/master-data/product.js')}}"></script>
<script src="{{asset('admin/script/master-data/master-data.js')}}"></script>
@endpush
