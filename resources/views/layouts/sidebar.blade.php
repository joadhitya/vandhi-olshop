<aside class="left-sidebar bg-sidebar">
	<div id="sidebar" class="sidebar">
		<div class="app-brand">
			<a href="{{ url('admin/dashboard') }}">
			<span class="brand-name">Vandhi Online Shop</span>
			</a>
		</div>
		<div class="sidebar-scrollbar">
			<ul class="nav sidebar-inner" id="sidebar-menu">
				<li  class="has-sub active" >
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#master-data"
						aria-expanded="false" aria-controls="master-data">
						<i class="mdi mdi-view-master-data-outline"></i>
						<span class="nav-text">Master Data</span> <b class="caret"></b>
					</a>
					<ul  class="collapse @if(Request::segment(2) == 'master-data') 
						show
					@endif "  id="master-data"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li  class="@if(Request::segment(3) == 'category') active @endif" >
								<a class="sidenav-item-link" href="{{ url('admin/master-data/category')}}">
								<span class="nav-text">Kategori</span>
								</a>
							</li>
							<li class="@if(Request::segment(3) == 'subcategory') active @endif">
								<a class="sidenav-item-link" href="{{ url('admin/master-data/subcategory')}}">
								<span class="nav-text">Subkategori</span>
								</a>
							</li>
							<li class="@if(Request::segment(3) == 'product') active @endif">
								<a class="sidenav-item-link" href="{{ url('admin/master-data/product')}}">
								<span class="nav-text">Produk</span>
								</a>
							</li>
						</div>
					</ul>
				</li>              
				<li  class="has-sub active" >
					<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#transaction"
						aria-expanded="false" aria-controls="transaction">
						<i class="mdi mdi-view-transaction-outline"></i>
						<span class="nav-text">Transaksi</span> <b class="caret"></b>
					</a>
					<ul  class="collapse"  id="transaction"
						data-parent="#sidebar-menu">
						<div class="sub-menu">
							<li  class="active" >
								<a class="sidenav-item-link" href="{{ url('admin/transaction/category')}}">
								<span class="nav-text">Data Transaksi</span>
								</a>
							</li>
							<li>
								<a class="sidenav-item-link" href="{{ url('admin/transaction/subcategory')}}">
								<span class="nav-text">Pengiriman</span>
								</a>
							</li>
						</div>
					</ul>
				</li>              
			</ul>
		</div>
	</div>
</aside>