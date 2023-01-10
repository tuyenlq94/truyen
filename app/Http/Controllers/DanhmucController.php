<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;

class DanhmucController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$data = DanhmucTruyen::orderby( 'id', 'desc' )->get();
		return view( 'admincp.danhmuctruyen.index' )->with( compact( 'data' ) );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view( 'admincp.danhmuctruyen.create' );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		$data                       = $request->validate(
			[
				'name'        => 'required|unique:danhmuc|max:255',
				'slug'        => 'required|unique:danhmuc|max:255',
				'description' => 'required',
				'status'      => 'required',
			],
			[
				'name.required'        => 'Tên danh mục phải có',
				'name.unique'          => 'Tên danh mục đã có. Vui lòng thêm tên khác',
				'name.max'             => 'Tên danh mục chỉ có 255 ký tự',
				'description.required' => 'Mô tả danh mục phải có',
			]
		);
		$danhmuctruyen              = new DanhmucTruyen();
		$danhmuctruyen->name        = $data['name'];
		$danhmuctruyen->slug        = $data['slug'];
		$danhmuctruyen->description = $data['description'];
		$danhmuctruyen->status      = $data['status'];
		$danhmuctruyen->save();
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
		$data = DanhmucTruyen::find( $id );
		return view( 'admincp.danhmuctruyen.edit' )->with( compact( 'data' ) );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int                      $id
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id ) {
		$data                       = $request->validate(
			[
				'name'        => 'required|max:255',
				'slug'        => 'required|max:255',
				'description' => 'required',
				'status'      => 'required',
			],
			[
				'name.required'        => 'Tên danh mục phải có',
				'description.required' => 'Mô tả danh mục phải có',
			]
		);
		$danhmuctruyen              = DanhmucTruyen::find( $id );
		$danhmuctruyen->name        = $data['name'];
		$danhmuctruyen->slug        = $data['slug'];
		$danhmuctruyen->description = $data['description'];
		$danhmuctruyen->status      = $data['status'];

		$danhmuctruyen->save();

		return redirect()->back()->with( 'status', 'Cập nhập danh mục thành công' );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		DanhmucTruyen::find( $id )->delete();
		return redirect()->back()->with( 'status', 'Xóa danh mục thành công' );
	}
}
