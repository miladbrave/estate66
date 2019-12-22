@extends('backend.dashboard')

@section('content')

    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">مقادیر ویژگی ها</h3>
                <div class="box-tools pull-right">
                    <a class="btn btn-primary" href="{{route('attributevalue.create')}}">جدید</a>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th class="text-center">عملیات</th>
                            <th class="text-center">ویژگی</th>
                            <th class="text-center">عنوان</th>
                            <th class="text-center">شناسه</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($attvalue as $attval)
                            <tr>
                                <td class="text-center">
                                    <form method="post" action="{{route('attribute.destroy',$attval->id)}}" style="display: inline">
                                        {{csrf_field()}}
                                        {{ method_field('Delete')}}
                                        <button class="btn btn-danger">حذف</button>
                                    </form>
                                    <a href="{{route('attributevalue.edit',$attval->id)}}" class="btn btn-warning">ویرایش</a>
                                </td>
                                <td class="text-center"> {{$attval->attributeGroup->title}}</td>
                                <td class="text-center">{{$attval->title}}</td>
                                <td class="text-center">{{$attval->id}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div style="margin-right: 30%">
                {{ $attvalue->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
