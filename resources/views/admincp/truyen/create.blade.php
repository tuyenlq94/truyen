@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">{{ __('Thêm truyện') }}</div>

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
					<form method="POST" action="{{ route('truyen.store') }}" enctype="multipart/form-data">
						@csrf
						<div class="mb-3">
							<label for="name" class="form-label">Tên</label>
							<input type="text" class="form-control" id="slug" name="name" onkeyup="ChangeToSlug();" value="{{ old('name') }}" placeholder="Tên truyện">
						</div>
						<div class="mb-3">
							<label for="slug" class="form-label">Slug</label>
							<input type="text" class="form-control" id="convert_slug" name="slug" value="{{ old('slug') }}" placeholder="Slug truyện">
						</div>
						<div class="mb-3">
							<label for="slug" class="form-label">Tác giả</label>
							<input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}" placeholder="Tác giả">
						</div>
						<div class="mb-3">
							<label for="description" class="form-label">Tóm tắt</label>
							<textarea name="description" id="description" rows="5" style="resize: none" class="form-control"></textarea>
						</div>
						<div class="mb-3">
							<label for="description_danhmuc" class="form-label">Danh mục truyện</label>
							<select class="form-select" name="category" aria-label="Default select example">
								@foreach( $danhmuc as $key => $value )
								<option value="{{ $value->id }}">{{ $value->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="mb-3">
							<label for="slug" class="form-label">Hình ảnh</label>
							<input type="file" class="form-control-file" name="image">
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
