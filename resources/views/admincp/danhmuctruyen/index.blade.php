@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">{{ __('List danh mục truyện') }}</div>

				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif
					<table class="table">
						<thead>
							<tr>
							<th scope="col">#</th>
							<th scope="col">Tên</th>
							<th scope="col">Slug</th>
							<th scope="col">Mô tả</th>
							<th scope="col">Trạng thái</th>
							<th scope="col">Quản lý</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $key => $value)
							<tr>
								<th scope="row">{{ $key }}</th>
								<td>{{ $value->name }}</td>
								<td>{{ $value->slug }}</td>
								<td>{{ $value->description }}</td>
								<td>
									@if( $value->status == 0 )
										<span class="text text-success">Kích hoạt</span>
									@else
										<span class="text text-danger">Không Kích hoạt</span>
									@endif
								</td>
								<td>
									<a href="{{ route('danhmuc.edit', [$value->id]) }}" class="btn btn-primary">Edit</a>
									<form method="POST" action="{{ route('danhmuc.destroy', [$value->id]) }}">
										@method('DELETE')
										@csrf
										<button onclick="return confirm('Bạn có muốn xóa danh mục truyện này không?')" class="btn btn-danger">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
