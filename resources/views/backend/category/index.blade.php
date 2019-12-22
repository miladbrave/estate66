@extends('backend.dashboard')

@section('content')

    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">دسته بندی ها</h3>
                <div class="box-tools pull-right">
                    <a class="btn btn-primary" href="{{route('category.create')}}">جدید</a>
                </div>
            </div>
            @if(Session::has('error_category'))
                <div class="alert alert-danger">
                    <div>{{session('error_category')}}</div>
                </div>
            @endif
            @if(Session::has('create'))
                <div class="alert alert-success">
                    <div>{{session('create')}}</div>
                </div>
            @endif
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th class="text-center">عملیات</th>
                            <th class="text-center">عنوان</th>
                            <th class="text-center">شناسه</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $cat)
                            <tr>
                                <td class="text-center">
                                    <a href="{{route('indexSetting',$cat->id)}}" class="btn btn-primary">تنظیمات</a>
                                    <form method="post" action="{{route('category.destroy',$cat->id)}}" style="display: inline">
                                        {{csrf_field()}}
                                        {{ method_field('Delete')}}
                                        <button class="btn btn-danger">حذف</button>
                                    </form>
                                    <a href="{{route('category.edit',$cat->id)}}" class="btn btn-warning">ویرایش</a>
                                </td>
                                <td class="text-center"> {{$cat->name}}</td>
                                <td class="text-center">{{$cat->id}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection