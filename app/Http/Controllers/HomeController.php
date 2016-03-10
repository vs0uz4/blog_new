<?php

namespace App\Http\Controllers;

use App\Post;
use App\Skill;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
	public function showHomePage()
	{
		$posts = Post::all()->sortByDesc('updated_at');
		$skills = Skill::all()->sortByDesc('level');

		return view('home.index', compact('posts', 'skills'));
	}
}
