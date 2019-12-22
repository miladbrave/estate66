@extends('backend.dashboard')

@section('content')
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"> ویرایش دسته ها: {{$categories->name}}</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="{{route('category.update',$categories)}}">
                            {{csrf_field()}}
                            {{ method_field('PATCH')}}
                            <div class="form-group">
                                <label for="name">نام</label>
                                <input type="text" name="name" class="form-control" value="{{$categories->name}}"
                                       id="name">
                            </div>
                            <div class="form-group">
                                <label for="meta_title">عنوان</label>
                                <input type="text" name="meta_title" class="form-control"
                                       value="{{$categories->meta_title}}" id="meta_title">
                            </div>
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" name="enname" class="form-control" value="{{$categories->enname}}">
                            </div>
                            <div class="form-group">
                                <label for="name">الاسم</label>
                                <input type="text" name="araname" class="form-control" value="{{$categories->araname}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" name="franame" class="form-control" value="{{$categories->franame}}">
                            </div>
                            <div class="form-group">
                                <label for="meta_desc">توضیحات</label>
                                <textarea name="meta_desc" class="form-control"
                                          id="meta_desc">{{$categories->meta_des}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="meta_keywords">کلمات کلیدی</label>
                                <input type="text" name="meta_keywords" class="form-control"
                                       value="{{$categories->meta_keywords}}" id="meta_keywords">
                            </div>

                            <button type="submit" class="btn btn-success pull-left">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
