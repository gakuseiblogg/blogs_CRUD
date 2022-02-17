<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades;
use App\Http\Requests\BlogRequest;
use App\Blog;

class BlogController extends Controller
{
    public function showList()
    {
        $blogs = Blog::all();
        // dd($blogs);
        return view('blog.list', ['blogs' => $blogs]);
    }

    public function showDetail($id)
    {
        $blog = Blog::find($id);
        // dd($blog);
        if (is_null($blog)) {
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('blogs'));
        }
        return view('blog.detail', ['blog' => $blog]);
    }

    public function showCreate()
    {
        return view('blog.form');
    }

    public function exeStore(BlogRequest $request)
    {
        $inputs = $request->all();
        // dd($inputs);
        \DB::beginTransaction();
        try {
            Blog::create($inputs);
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'ブログを登録しました');
        return redirect(route('blogs'));
    }

    public function showEdit($id)
    {
        $blog = Blog::find($id);
        // dd($blog);
        if (is_null($blog)) {
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('blogs'));
        }
        return view('blog.edit', ['blog' => $blog]);
    }

    public function exeUpdate(BlogRequest $request)
    {
        $inputs = $request->all();
        // dd($inputs);
        \DB::beginTransaction();
        try {
            $blog = Blog::find($inputs['id']);
            $blog->fill([
              'title'=> $inputs['title'],
              'content'=>$inputs['content'],
            ]);
            $blog->save();
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg', 'ブログを更新しました');
        return redirect(route('blogs'));
    }

    public function exeDelete($id)
    {  
        if (empty($id)) {
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('blogs'));
        }

        try {
            // ブログを削除
            Blog::destroy($id);
        } catch(\Throwable $e) {
            abort(500);
        }

        \Session::flash('err_msg', '削除しました。');
        return redirect(route('blogs'));
    }

}
