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
		return view( 'admincp.danhmuctruyen.index' );
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
				'description' => 'required',
				'status'      => 'required',
			],
			[
				'name.required'        => 'Tên danh mục phải có',
				'description.required' => 'Mô tả danh mục phải có',
			]
		);
		$danhmuctruyen              = new DanhmucTruyen();
		$danhmuctruyen->name        = $data['name'];
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
