<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboardmasyarakat extends BaseController
{
	public function index()
	{
		$data['intro']='<div class="jumbotron mt-5">
		<h1><i>Hai, '.session()->get('username').'</i></h1>
		<p><i>Silahkan gunakan halaman ini untuk menampilkan informasi Pengaduan Masyarakat anda !</i></p>
	  </div>';
		return view ('Masyarakat/Dashboard', $data);
	}
}
