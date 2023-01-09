@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">{{ __('Trang quản lý') }}</div>

				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif
					<nav class="navbar navbar-expand-lg bg-body-tertiary">
						<div class="container-fluid">
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="{{route('home')}}">Admin</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Danh mục truyện
									</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Thêm danh mục</a></li>
										<li><a class="dropdown-item" href="#">List danh mục</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Truyện sách
									</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Thêm sách truyện</a></li>
										<li><a class="dropdown-item" href="#">List sách truyện</a></li>
									</ul>
								</li>
							</ul>
							<form class="d-flex" role="search">
								<input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Tìm kiếm</button>
							</form>
							</div>
						</div>
					</nav>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
