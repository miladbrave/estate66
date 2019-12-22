@extends('backend.dashboard')

@section('content')
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"> ویرایش مقدار ویژگی ها: </h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="{{route('attributevalue.update', $attV->id)}}">
                            {{csrf_field()}}
                            {{ method_field('PATCH')}}
                            <div class="form-group">
                                <label for="att-group">انتخاب ویژگی</label>
                                <select name="att-group" id="att-group" class="form-control">
                                    <option value="">انتخاب کنید</option>
                                    @foreach($attributeGroup as $at)
                                    <option value="{{$at->id}}" @if($at->id == $attV->attribute_id ) selected @endif >{{$at->title}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                <input type="text" name="title" class="form-control" value="{{$attV->title}}" id="title">
                            </div>
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" name="enname" class="form-control" value="{{$attV->entitle}}">
                            </div>
                            <div class="form-group">
                                <label for="name">الاسم</label>
                                <input type="text" name="araname" class="form-control" value="{{$attV->aratitle}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" name="franame" class="form-control" value="{{$attV->fratitle}}">
                            </div>
                            <button type="submit" class="btn btn-success pull-left">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
