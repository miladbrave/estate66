@extends('backend.dashboard')

@section('content')
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"> ایجاد مقدار ویژگی</h3>
            </div>
            {{--            @if(Session::has('att_create'))--}}
            {{--                <div class="alert alert-danger">--}}
            {{--                    <div>{{session('att_create')}}</div>--}}
            {{--                </div>--}}
            {{--            @endif--}}
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="{{route('attributevalue.store')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="att-group">انتخاب ویژگی</label>
                                <select name="att-group" id="att-group" class="form-control">
                                    <option value="">انتخاب کنید</option>
                                    @foreach($attvalue as $attv)
                                        <option value="{{$attv->id}}">{{$attv->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                <input type="text" name="title" class="form-control"
                                     required   placeholder="عنوان مقدار ویژگی را وارد کنید.. " id="title">
                            </div>
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" name="enname" class="form-control" required placeholder="عنوان دسته بندی را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label for="name">الاسم</label>
                                <input type="text" name="araname" class="form-control" required placeholder="عنوان دسته بندی را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" name="franame" class="form-control" required placeholder="عنوان دسته بندی را وارد کنید...">
                            </div>
                            <button type="submit" class="btn btn-success pull-left">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
