@extends('../layout')
@section('slider')
	@include('pages.slider')
@endsection
@section('content')
<section class="album py-5 bg-light">
	<div class="container">
		<div class="d-flex justify-content-between">
			<h3>Truyện mới cập nhập</h3>
			<a href="#" class="btn btn-success">Xem tất cả</a>
		</div>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
			<div class="col">
				<div class="card shadow-sm">
					<a href="#"><img src="{{ asset('uploads/truyen/linh-vu-thien-ha18.jpg') }}"></a>
					<div class="card-body">
						<h3><a href="#">Linh Vũ Thiên Hạ</a></h3>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
								<a href="#" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
								<a class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-eye"></i> 11234</a>
							</div>
							<small class="text-muted">9 mins ago</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection