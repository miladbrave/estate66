@extends('backend.dashboard')

@section('content')
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">ایجاد دسته بندی جدید</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="{{route('category.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name">نام</label>
                                <input type="text" name="name" class="form-control" required placeholder="عنوان دسته بندی را وارد کنید...">
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
                                <label for="meta_title">عنوان سئو</label>
                                <input type="text" name="meta_title" class="form-control" placeholder="عنوان سئو را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label for="meta_desc">توضیحات سئو</label>
                                <textarea type="text" name="meta_desc" class="form-control" placeholder="توضیحات سئو را وارد کنید..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="meta_keywords">کلمات کلیدی سئو</label>
                                <input type="text" name="meta_keywords" class="form-control" placeholder="کلمات کلیدی سئو را وارد کنید...">
                            </div>
                            <button type="submit" class="btn btn-success pull-left">ذخیره</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
