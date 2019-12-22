@extends('backend.dashboard')

@section('content')
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"> ویرایش ویژگی ها: {{$att->title}}</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="{{route('attribute.update',$att)}}">
                            {{csrf_field()}}
                            {{ method_field('PATCH')}}
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                <input type="text" name="title" class="form-control" value="{{$att->title}}"
                                       id="title">
                            </div>
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" name="enname" class="form-control" value="{{$att->enname}}">
                            </div>
                            <div class="form-group">
                                <label for="name">الاسم</label>
                                <input type="text" name="araname" class="form-control" value="{{$att->araname}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" name="franame" class="form-control" value="{{$att->franame}}">
                            </div>
                            <div class="form-group">
                                <label for="type">نوع</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="{{$att->type}}">{{$att->type}}</option>
                                    <option value="selected">لیست تکی</option>
                                    <option value="multi">لیست چندتایی</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success pull-left">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
