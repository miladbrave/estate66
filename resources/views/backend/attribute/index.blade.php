@extends('backend.dashboard')

@section('content')

    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">ویژگی ها</h3>
                <div class="box-tools pull-right">
                    <a class="btn btn-primary" href="{{route('attribute.create')}}">جدید</a>
                </div>
            </div>
            @if(Session::has('error_category'))
                <div class="alert alert-danger">
                    <div>{{session('error_category')}}</div>
                </div>
            @endif
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th class="text-center">عملیات</th>
                            <th class="text-center">نوع</th>
                            <th class="text-center">عنوان</th>
                            <th class="text-center">شناسه</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($attributeGroup as $att)
                            <tr>
                                <td class="text-center">
                                    <form method="post" action="{{route('attribute.destroy',$att->id)}}" style="display: inline">
                                        {{csrf_field()}}
                                        {{ method_field('Delete')}}
                                        <button class="btn btn-danger">حذف</button>
                                    </form>
                                    <a href="{{route('attribute.edit',$att->id)}}" class="btn btn-warning">ویرایش</a>
                                </td>
                                <td class="text-center"> {{$att->type}}</td>
                                <td class="text-center">{{$att->title}}</td>
                                <td class="text-center">{{$att->id}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div style="margin-right: 40%">
            {{$attributeGroup->links()}}
            </div>
        </div>
    </section>
@endsection
