@extends('backend.dashboard')

@section('content')
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"> ایجاد ویژگی</h3>
            </div>
            @if(Session::has('att_create'))
                <div class="alert alert-danger">
                    <div>{{session('att_create')}}</div>
                </div>
            @endif
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="{{route('attribute.store')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="name">عنوان</label>
                                <input type="text" name="name" class="form-control"
                                    required    placeholder="عنوان ویژگی را وارد کنید.. " id="name">
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
                            <div class="form-group">
                                <label for="type">نوع</label>
                                <select name="type" id="type" class="form-control">
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
