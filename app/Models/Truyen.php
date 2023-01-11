<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truyen extends Model {

	use HasFactory;

	public $timestamps  = false;
	protected $fillable = [
		'name',
		'slug',
		'author',
		'description',
		'image',
		'category',
		'status',
	];
	protected $primakey = 'id';
	protected $table    = 'truyen';

	public function danhmuctruyen() {
		return $this->belongsTo( 'App\Models\DanhmucTruyen', 'category', 'id' );
	}

	public function chapter() {
		return $this->hasMany( 'App\Models\Chapter' );
	}
}
