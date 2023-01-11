<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhmucTruyen extends Model {

	use HasFactory;

	public $timestamps  = false;
	protected $fillable = [
		'name',
		'slug',
		'description',
		'status',
	];
	protected $primakey = 'id';
	protected $table    = 'danhmuc';

	public function truyen() {
		return $this->hasMany( 'App\Models\Truyen' );
	}
}
