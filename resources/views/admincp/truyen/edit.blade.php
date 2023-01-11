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
					<form method="POST" action="{{ route('truyen.update',[$truyen->id]) }}" enctype="multipart/form-data">
						@method('PUT')
						@csrf
						<div class="mb-3">
							<label for="name" class="form-label">Tên</label>
							<input type="text" class="form-control" id="slug" name="name" onkeyup="ChangeToSlug();" value="{{ $truyen->name }}" placeholder="Tên truyện">
						</div>
						<div class="mb-3">
							<label for="slug" class="form-label">Slug</label>
							<input type="text" class="form-control" id="convert_slug" name="slug" value="{{ $truyen->slug }}" placeholder="Slug truyện">
						</div>
						<div class="mb-3">
							<label for="slug" class="form-label">Tác giả</label>
							<input type="text" class="form-control" id="author" name="author" value="{{ $truyen->author }}" placeholder="Tác giả">
						</div>
						<div class="mb-3">
							<label for="description" class="form-label">Tóm tắt</label>
							<textarea name="description" id="description" rows="5" style="resize: none" class="form-control">{{ $truyen->description }}</textarea>
						</div>
						<div class="mb-3">
							<label for="list_danhmuc" class="form-label">Danh mục truyện</label>
							<select class="form-select" name="category" aria-label="Default select example">
								@foreach( $danhmuc as $key => $value )
									<option {{ $value->id == $truyen->category ? 'selected' : '' }} value="{{ $value->id }}">{{ $value->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="mb-3">
							<label for="slug" class="form-label">Hình ảnh</label>
							<input type="file" class="form-control-file" name="image">
							<img src="{{ asset('uploads/truyen/'. $truyen->image ) }}" width="200" height="200" style="object-fit: contain;">
						</div>
						<div class="mb-3">
							<label for="status_truyen" class="form-label">Kích hoạt truyện</label>
							<select class="form-select" name="status" aria-label="Default select example">
								@if( $truyen->status == 0 )
									<option selected value="0">Kích hoạt</option>
									<option value="1">Không kích hoạt</option>
								@else
									<option value="0">Kích hoạt</option>
									<option selected value="1">Không kích hoạt</option>
								@endif
							</select>
						</div>
						<button type="submit" name="themtruyen" class="btn btn-primary">Cập nhập</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
