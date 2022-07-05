@extends('layouts.admin_layout')
@section('title','Maqola')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Maqolalar</h1>
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
            <div class="text-right p-3">
                <a href="{{route('post.create')}}" class="btn btn-success">Maqola qoshish</a>
            </div>

                <div class="card">

                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">
                                    ID
                                </th>
                                <th>
                                   Sarlavha
                                </th>

                                <th style="width: 20%">
                                    Categoriya
                                </th>
                                <th style="width: 20%">
                                    yaratilgan vaqti
                                </th>
                                <th style="width: 20%">

                                </th>
                            </tr>
                            </thead>
                            <tbody>
                          @foreach($posts as $post)
                              <tr>
                                  <td>{{$post->id}}</td>
                                  <td>
                                      {{$post->title}}
                                  </td>
                                  <td>
                                      {{$post->category['title']}}
                                  </td>
{{--                                  <td>--}}
{{--                                      {{$post->created_at}}--}}
{{--                                  </td>--}}
                                  <td>

                                      <small>
                                          {{$post->created_at}}
                                      </small>
                                  </td>


                                  <td class="project-actions text-right">

                                      <a class="btn btn-info btn-sm" href="{{route('post.edit',$post->id)}}">
                                          <i class="fas fa-pencil-alt">
                                          </i>
                                          Tahrirlash
                                      </a>
                                     <form action="{{route('post.destroy',$post->id)}}" method="post"  style="display: inline-block">
                                         @csrf
                                         @method('DELETE')
                                         <button class="btn btn-danger btn-sm">
                                             <i class="fas fa-trash">
                                             </i>
                                             O'chirish
                                         </button>
                                     </form>
                                  </td>
                              </tr>


                          @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
        </div>
    </section>
    <!-- /.content -->





@endsection
