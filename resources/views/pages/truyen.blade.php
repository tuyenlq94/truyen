@extends('../layout')

@section('content')
<section class="doc-truyen">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Library</a></li>
				<li class="breadcrumb-item active" aria-current="page">Data</li>
			</ol>
		</nav>
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-3"><img src="{{ asset('uploads/truyen/linh-vu-thien-ha18.jpg') }}"></div>
					<div class="col-md-9">
						<h3>Linh Vũ Thiên Hạ</h3>
						<ul>
							<li>Tác giả: Vũ Phong</li>
							<li>Thể loại: Truyện Xuyên Không</li>
							<li>Số chapter: 200</li>
							<li>Số lượt xem: 2000</li>
							<li><a href="#">Xem mục lục</a></li>
							<li><a href="#" class="btn btn-primary">Đọc online</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-12">
					<h4>Giới thiệu truyện</h4>
					Nhóm dịch: Sói Già
					Đả tự: Bựa Thập Ngũ BLH

					Lục Thiếu Du, linh hồn bị xuyên qua đến thế giới khác, nhập vào thân thể của một thiếu gia không có địa vị phải trải qua cuộc sống không khác gì nô bộc.
					Thế giới này lấy Vũ vi cường, lấy Linh vi tôn, nghe đồn khi võ đạo đỉnh phong, linh đạo đạt đến cực hạn có thể phá toái hư không.
					Lục Thiếu Du mang theo ký ức từ kiếp trước tái sinh, không cam lòng làm một thiếu gia chẳng khác gì củi mục.

					Trong thế giới xa lạ,
					Say - nằm trên gối mỹ nhân,
					Tỉnh - nắm quyền thiên hạ.
					Đây mới là cuộc sống đáng mơ ước.
					Linh - Vũ song tu
					Bá chủ kiêu hùng
					Đã đến, ta sẽ lưu lại một huyền thoại......

					Hệ Thống Tu Luyện:

					- Vũ giả: Vũ khí, Vũ đồ, Vũ sĩ, Vũ sư, Vũ phách, Vũ tướng, Vũ suất, Vũ vương, Vũ tôn, Vũ đế.
					- Linh giả: Linh khí, Linh đồ, Linh sĩ, Linh sư, Linh phách, Linh tướng, Linh suất, Linh vương, Linh tôn, Linh đế.

					Mỗi cấp được chia làm cửu trọng (chín tầng). Ngoài ra còn có Yêu thú, Linh thú các thể loại, chia làm nhất giai, nhị giai,... mỗi giai chia làm sơ kỳ, trung kỳ, hậu kỳ.

					- Công pháp: chia làm sáu loại, từ cao đến thấp: Thiên, Địa, Huyền, Hoàng, Tinh, Thần

					Tất nhiên là vẫn tồn tại một số công pháp đặc biệt bí ẩn khác.

					- Ngũ hệ: Vũ giả, Vũ kỹ (công pháp cho vũ giả) được chia thành năm loại Mộc, Thủy, Hỏa, Thổ, Phong.
				</div>
				<hr>
				<h4>Mục lục</h4>
				<ul>
					<li><a href="#">Chương 1: </a></li>
					<li><a href="#">Chương 2: </a></li>
					<li><a href="#">Chương 3: </a></li>
				</ul>
				<h4>Truyện cùng danh mục</h4>
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
					<div class="col">
						<div class="card shadow-sm">
							<a href="#"><img src="{{ asset('uploads/truyen/linh-vu-thien-ha18.jpg') }}"></a>
							<div class="card-body">
								<h3><a href="#">Linh Vũ Thiên Hạ</a></h3>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<a href="#" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
										<a class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-eye"></i> 11234</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<h3>Danh mục truyện</h3>
			</div>
		</div>
	</div>
</section>
@endsection