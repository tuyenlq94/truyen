<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\Truyen;

class ChapterController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$chapter = Chapter::with( 'truyen' )->orderBy( 'id', 'desc' )->get();
		return view( 'admincp.chapter.index' )->with( compact( 'chapter' ) );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$truyen = Truyen::orderBy( 'id', 'desc' )->get();
		return view( 'admincp.chapter.create' )->with( compact( 'truyen' ) );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		$data                 = $request->validate(
			[
				'name'        => 'required|unique:chapter|max:255',
				'slug'        => 'required|unique:chapter|max:255',
				'description' => 'required',
				'content'     => 'required',
				'status'      => 'required',
				'truyen_id'   => 'required',
			],
			[
				'slug.required'        => 'Slug phải có',
				'name.required'        => 'Tên chapter phải có',
				'name.unique'          => 'Tên chapter đã có. Vui lòng thêm tên khác',
				'name.max'             => 'Tên chapter chỉ có 255 ký tự',
				'description.required' => 'Mô tả chapter phải có',
				'content.required'     => 'Nội dung chapter phải có',
				'truyen_id.required'   => 'Thuộc truyện phải có',
			]
		);
		$chapter              = new Chapter();
		$chapter->name        = $data['name'];
		$chapter->slug        = $data['slug'];
		$chapter->content     = $data['content'];
		$chapter->description = $data['description'];
		$chapter->truyen_id   = $data['truyen_id'];
		$chapter->status      = $data['status'];

		$chapter->save();
		return redirect()->back()->with( 'status', 'Thêm chapter thành công' );
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
		Chapter::find( $id )->delete();
		return redirect()->back()->with( 'status', 'Xóa chapter thành công' );
	}
}
