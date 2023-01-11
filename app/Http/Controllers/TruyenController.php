<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
class TruyenController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view( 'admincp.truyen.index' );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$danhmuc = DanhmucTruyen::orderBy( 'id', 'desc' )->get();
		return view( 'admincp.truyen.create' )->with( compact( 'danhmuc' ) );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		$data                = $request->validate(
			[
				'name'        => 'required|unique:truyen|max:255',
				'slug'        => 'required|unique:truyen|max:255',
				'author'      => 'required|max:255',
				'image'       => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width:100,min-height:100,max-width:1000,max-height:1000',
				'description' => 'required',
				'status'      => 'required',
				'category'    => 'required',
			],
			[
				'author.required'      => 'Tên tác giả phải có',
				'name.required'        => 'Tên truyện phải có',
				'name.unique'          => 'Tên truyện đã có. Vui lòng thêm tên khác',
				'name.max'             => 'Tên truyện chỉ có 255 ký tự',
				'description.required' => 'Mô tả truyện phải có',
				'image.required'       => 'Hình ảnh truyện phải có',
			]
		);
		$truyen              = new Truyen();
		$truyen->name        = $data['name'];
		$truyen->slug        = $data['slug'];
		$truyen->author      = $data['author'];
		$truyen->description = $data['description'];
		$truyen->category    = $data['category'];
		$truyen->status      = $data['status'];

		// Thêm ảnh vào folder ảnh
		$get_image      = $request->image;
		$path           = 'public/uploads/truyen/'; // đường dẫn tời thư mục ảnh
		$get_name_image = $get_image->getClientOriginalName(); // lấy tên hình ảnh
		$name_image     = current( explode( '.', $get_name_image ) );
		$new_image      = $name_image . rand( 0, 99 ) . '.' . $get_image->getClientOriginalExtension();
		$get_image->move( $path, $new_image );

		$truyen->image = $new_image;

		$truyen->save();
		return redirect()->back()->with( 'status', 'Thêm danh mục thành công' );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show( $id ) {
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit( $id ) {
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int                      $id
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id ) {
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
	}
}
