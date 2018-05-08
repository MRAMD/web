<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function index1()
    {
     $article = DB::table('article')->get();
     
    return view('welcome',['article' =>$article]);
    }

    public function setting()
    {
        return view('panel.setting');
    }

     public function users()
    {
        
         $users = DB::table('users')->get();

        return view('panel.users', ['users' => $users]);

      
    }

     public function comment()
    {
        $user = DB::table('users')->get();
        $article = DB::table('article')->get();
        $comment = DB::table('comment')->get();
        return view('panel.comment',[
            'comment' => $comment ,
            'article' => $article,
            'user' => $user                          
        ]);
    }

     public function article()
    {
         $article = DB::table('article')->get();
        return view('panel.article',['article' => $article]);
    }

     public function delete($id)
    {
         $users = DB::table('users')->get();
        $users1= DB::table('users')->where('id', '=', $id)->delete();
         return view('panel.users', ['users' => $users]);
    }

     public function showupdata($id)
    {
         $users = DB::table('users')->where('id', '=', $id)->get();
         return view('panel.updateusers', ['users' => $users]);
    }

   
     public function updata(Request $request, $id)
    {
            DB::table('users')->where('id', $id)->update([
               'name' => $request['name'],
            'family' => $request['family'],
            'email' => $request['email'],
            'password' => $request['password'],
               ]);

         return view('panel.users');
    }

    public function  deletearticle($id)
    {
        $article = DB::table('article')->get();
        $article1= DB::table('article')->where('id', '=', $id)->delete();
         return view('panel.article', ['article' => $article]);
    }


    public function  ArticleShowUpdata($id)
    {
        $article = DB::table('article')->get($id);
         return view('panel.updataarticle', ['article' => $article]);
    }

     public function updataarticle(Request $request, $id)
    {
            DB::table('article')->where('id', $id)->update([
               'title' => $request['title'],
            'body' => $request['body'],
            
               ]);

         return view('panel.article');
    }

     public function addarticle()
    {
         $user = DB::table('users')->get();
        return view('panel.addarticle',['user' => $user] );
    }
 
     public function savearticle(Request $request)
    {
        DB::table('article')->insert(
      ['title' =>  $request['title'],
       'body' =>  $request['body'],
       'user_id'=>  $request['user_id'],
       ]);
         $article= DB::table('article')->get();
        return view('panel.article',['article' => $article] );
    }

      public function showarticle($id)
    {
        $article = \App\Article::get()->where('id','=',$id);
        return view('showarticle',['article' => $article ]);
    }


    
}

