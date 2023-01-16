<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Cgy;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('site.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function gallery()
    {
        //
        return view('site.gallery');
    }
    public function blog()
    {
        //
        return view('site.blog');
    }
    //
    public function blog_single($id)
    {
        $sit = Article::find($id);

        $cgy = Cgy::find($sit->cgy_id);
        return view('site.blog_single', compact('sit', 'cgy'));
    }
    public function contact()
    {
        //
        return view('site.contact');
    }
    //
    public function articles()
    {
        //
        return view('site.articles');
    }
    // 註冊會員
    public function sign()
    {
        return view('site.sign');
    }
    // 登入會員
    public function login()
    {
        return view('site.login');
    }
    // 會員頁面
    public function member()
    {
        return view('site.member');
    }
    // 變更密碼
    public function password()
    {
        return view('site.password');
    }
    // 修改會員資料
    public function modify()
    {
        return view('site.modify');
    }
}
