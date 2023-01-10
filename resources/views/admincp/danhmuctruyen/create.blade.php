@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">{{ __('Thêm danh mục truyện') }}</div>

				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif
					<form method="POST" action="{{ route('danhmuc.store') }}">
						@csrf
						<div class="mb-3">
							<label for="name" class="form-label">Tên</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Tên danh mục truyện">
						</div>
						<div class="mb-3">
							<label for="description" class="form-label">Mô tả</label>
							<input type="text" class="form-control" id="description" name="description" placeholder="Mô tả danh mục truyện">
						</div>
						<div class="mb-3">
							<label for="description_danhmuc" class="form-label">Kích hoạt danh mục</label>
							<select class="form-select" name="status" aria-label="Default select example">
								<option value="0">Kích hoạt</option>
								<option value="1">Không kích hoạt</option>
							</select>
						</div>
						<button type="submit" name="themdanhmuc" class="btn btn-primary">Thêm</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
