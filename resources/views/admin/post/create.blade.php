@extends('layouts.admin_layout')
@section('title','Post qo\'shish')
@section('content')
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Po'st qo'shish</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
        @if(session('success'))
            <div class="alert alert-success" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
            </div>
            @endif
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">

                 <!-- general form elements -->
                 <div class="card card-primary">

                     <!-- /.card-header -->
                     <!-- form start -->
                     <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                         @csrf
{{--                         @if ($errors->any())--}}
{{--                             <div class="alert alert-danger">--}}
{{--                                 <ul>--}}
{{--                                     @foreach ($errors->all() as $error)--}}
{{--                                         <li>{{ $error }}</li>--}}
{{--                                     @endforeach--}}
{{--                                 </ul>--}}
{{--                             </div>--}}
{{--                         @endif--}}
                         <div class="card-body">
{{--                             <div style="text-align: right"><a class="btn btn-info p-2"  href="{{route('category.create')}}">Categoriya qo'shish</a></div>--}}

                             <div class="form-group">
                                 <label for="title">Title</label>
                                 <input type="text" class="form-control" name="title" id="title" placeholder="title..." >
                             </div>
@error('title')
                             <div class="text-danger">{{$message}}</div>
                             @enderror


                            <div class="form-group">
                                <div class="form-group mt-2">
                                    <label>Select</label>
                                    <select class="form-control" name="cat_id" required>
                                        @foreach($categories as $category)
                                            <option value="{{$category['id']}}" {{$category->id==old('category_id')? 'selected':''}}>{{$category['title']}}</option>
                                        @endforeach

                                    </select>

                                </div>
                                @error('cat-id')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Teglabel</label>
                                    <select class="select2 form-control " name="tag_ids[]"  multiple="multiple" data-placeholder="Yangi teg" style="width:100%">
                                      @foreach($tags as $tag)
                                        <option  {{is_array(old('tag_ids')) && in_array($tag->id,old('tag_ids')) ? 'selected':''}} value="{{$tag['id']}}">{{$tag['title']}}</option>
                                            @endforeach

                                    </select>
                                </div>

                            </div>
                             @error('tag_ids')
                             <div class="text-danger">{{$message}}</div>
                             @enderror

                             <div class="form-group">
                                 <textarea  class="editor" name="text" ></textarea>
                             </div>
                             @error('text')
                             <div class="text-danger">{{$message}}</div>
                             @enderror
{{--                             <div class="form-group">--}}
{{--                                 <label for="feature_image">изобретение стати</label>--}}
{{--                                 <img src="" class="img-uploaded" style="display: block">--}}
{{--                                 <input type="text" name="img" id="feature_image" readonly  class="form-control" name="feature_image" value="">--}}
{{--                                 <a href="" class="popup_selector" data-inputid="feature_image"> Выбрат изобретение </a>--}}
{{--                             </div>--}}
                             <div class="form-group">
                                 <label for="exampleInputFile">dabavit prevyu</label>
                                 <div class="input-group">
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" name="preview_image" id="exampleInputFile">
                                         <label class="custom-file-label"  for="exampleInputFile">vibrite izobrajeniya</label>
                                     </div>
                                     <div class="input-group-append">
                                         <span class="input-group-text">Upload</span>
                                     </div>
                                 </div>
                             </div>
                             @error('preview_image')
                             <div class="text-danger">{{$message}}</div>
                             @enderror
                             <div class="form-group">
                                 <label for="exampleInputFile2" class="form-label">dabavit prevyu</label>
                                 <div class="input-group">
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" name="main_image" id="exampleInputFile2">
                                         <label class="custom-file-label"  for="exampleInputFile2">vibrite glavniy izobrajeniya</label>

                                     </div>
                                     <div class="input-group-append">
                                         <span class="input-group-text">Upload</span>
                                     </div>
                                 </div>
                             </div>
                             @error('main_image')
                             <div class="text-danger">{{$message}}</div>
                             @enderror
                             <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">Check me out</label>
                             </div>

                             <!-- /.card-body -->
                             <div class="card-footer">
                                 <button type="submit" class="btn btn-primary">Qo'shish</button>
                             </div>
                         </div>
{{--                             <div class="form-group">--}}
{{--                                 <textarea  class="editor" name="text" ></textarea>--}}
{{--                             </div>--}}

{{--                         </div>--}}



                     </form>

                     <!-- /.card -->



                 </div><!-- /.container-fluid -->
             </div>
         </div>
        </div>
    </section>
    <!-- /.content -->





@endsection
