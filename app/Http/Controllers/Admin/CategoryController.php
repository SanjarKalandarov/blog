<?php

namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\CategoryRequest;
    use App\Models\Category;
    use GrahamCampbell\ResultType\Success;
    use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $catagory=Category::OrderbyDesc('id')->get();
//        dd($catagory);
        return view('admin.category.index',[
            'categories'=>$catagory
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $cetegory=$request->validate([
        'title'=>'required'
    ]);
        $cetagory_title=new Category();
        $cetagory_title->title=$request->input('title');
        $cetagory_title->save();

        return  redirect()->back()->withSuccess('Categoriya saqlandi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

        return  view('admin.category.edit',[
            'categories'=>$category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->title=$request->input('title');
        $category->save();
        $cetegory=$request->validate([
            'title'=>'required'
        ]);
        return  redirect()->back()->withSuccess('Ma\'lumot tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return  redirect()->back()->withSuccess('Categoriya ochirildi');
    }
}
