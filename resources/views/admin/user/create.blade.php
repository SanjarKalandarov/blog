@extends('layouts.admin_layout')
@section('title','Kategoriya qo\'shish')
@section('content')
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Categoryiya qo'shish</h1>
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
                     <form action="{{route('user.store')}}" method="post">
                         @csrf
                         @if ($errors->any())
                             <div class="alert alert-danger">
                                 <ul>
                                     @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                     @endforeach
                                 </ul>
                             </div>
                         @endif
                         <div class="card-body">
{{--                             <div style="text-align: right"><a class="btn btn-info p-2"  href="{{route('category.create')}}">Categoriya qo'shish</a></div>--}}
                             <div class="form-group">
                                 <label for="title">Ism</label>
                                 <input type="text" class="form-control" name="name" id="title" placeholder="Ismingizni kiriting" >
                             </div>
                             <div class="form-group">
                                 <label for="email">Email</label>
                                 <input type="email" class="form-control" name="email" id="email" placeholder="Emaillingizni kiriting" >
                             </div>
{{--                             <div class="form-group">--}}
{{--                                 <label for="password">Parol</label>--}}
{{--                                 <input type="password" class="form-control" name="password" id="password" placeholder="Parolingizni kiriting" >--}}
{{--                             </div>--}}
                             <div class="form-group mt-2">
                                 <label>Select</label>
                                 <select class="form-control" name="role" required>
                                     @foreach($roles as $id=>$role)
                                         <option value="{{$id}}" {{$id==old('role')? 'selected':''}}>{{$role}}</option>
                                     @endforeach

                                 </select>

                             </div>
                             @error('role')
                             <div class="text-danger">{{$message}}</div>
                             @enderror

                             <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">Check me out</label>
                             </div>
                         </div>
                         <!-- /.card-body -->
                         <div class="card-footer">
                             <button type="submit" class="btn btn-primary">Qo'shish</button>
                         </div>
                     </form>

                     <!-- /.card -->



                 </div><!-- /.container-fluid -->
             </div>
         </div>
        </div>
    </section>
    <!-- /.content -->





@endsection