<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\post;
use App\Models\Tag;
//use App\Http\Controllers\Admin\Tag;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Exception;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBY('id','desc')->get();
        return  view('admin.post.index',[
            'posts'=>$posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
//        dd(Tag::all());
//        dd(Category::all());
        $categories=Category::orderByDesc('id')->get();
        $tags=Tag::all();
//        dd($tags);
        return view('admin.post.create',[
            'categories'=>$categories,
            'tags'=>$tags
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

        try{
            $data=$request->validated();

//        dd($data);
            if(isset($data['tag_ids'])) {
                $tagids = $data['tag_ids'];
                unset($data['tag_ids']);
            }
            if(isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
            if(isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }
            $post= Post::firstOrcreate($data);
            if(isset($tagids)) {
                $post->tags()->attach($tagids);
            }
        }catch (\Exception){
            abort('404');
        }
        return  redirect()->back()->withSuccess('maqola muvaffaqiyatli qo\'shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories=Category::orderByDesc('created_at')->get();

        $tags=Tag::all();
//        dd($post->id);
//        dd($tags);

        return view('admin.post.edit',[
            'categories'=>$categories,
            'post'=>$post,
            'tags'=>$tags
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, post $post)
    {
       try {
//           Db:mysqli_begin_transaction();
           $posts = new Post();
           $data = $request->validated();

//        dd($data);
           if (isset($data['tag_ids'])) {
               $tagids = $data['tag_ids'];
               unset($data['tag_ids']);
           }
           if (isset($data['preview_image'])) {
               $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
           }
           if (isset($data['main_image'])) {
               $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
           }
           $post = Post::firstOrcreate($data);
           $post->update($data);
           if(isset($tagids)) {
               $post->tags()->sync($tagids);
           }
       }catch(Exception $exception){
           DB:rollBack();
           abort(500);
       }
//        $posts->save();
        return  redirect()->back()->withSuccess('maqola muvaffaqiyatli tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();
        return  redirect()->back()->withSuccess('maqola muvaffaqiyatli Ochirildi');
    }
}
