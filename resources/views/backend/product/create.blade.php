@extends('backend.dashboard')

@section('content')
    <section class="content" id="app">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">ایجاد محصول جدید</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>نام</label>
                                <input type="text" name="name" class="form-control"
                                     required   placeholder="نام محصول را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label >نام مستعار</label>
                                <input type="text" name="slug" class="form-control"
                                    required    placeholder="نام مستعار را وارد کنید...">
                            </div>
                            <attribute-component></attribute-component>

                            <div class="form-group">
                                <label>قیمت محصول</label>
                                <input type="number" name="price" class="form-control"
                                    required   placeholder="قیمت محصول را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>تخفیف</label>
                                <input type="number" name="dis_price" class="form-control"
                                       placeholder="تخفیف را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>توضیحات</label>
                                <textarea id="textareaDes" name="des" class="ckeditor form-control"
                                     required     placeholder="توضیحات محصول را وارد کنید..."> </textarea>
                            </div>
                            <div class="form-group">
                                <label >نام شهر</label>
                                <input type="text" name="city" class="form-control"
                                   required    placeholder="نام شهر را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label >نام منطقه</label>
                                <input type="text" name="zone" class="form-control"
                                       placeholder="نام منطقه را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>عنوان سئو</label>
                                <input type="text" name="meta_title" class="form-control"
                                       placeholder="عنوان سئو را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>توضیحات سئو</label>
                                <textarea type="text" name="meta_desc" class="form-control"
                                          placeholder="توضیحات سئو را وارد کنید..."></textarea>
                            </div>
                            <div class="form-group">
                                <label>کلمات کلیدی سئو</label>
                                <input type="text" name="meta_keywords" class="form-control"
                                       placeholder="کلمات کلیدی سئو را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>وضعیت نشر</label><br>
                                <input type="radio" name="status" value="0" checked><span>نشر</span>
                                <input type="radio" name="status" value="1" style="margin-left: 5%"><span>عدم نشر</span>
                            </div>
                            <div class="form-group">
                                <label for="photo">تصویر</label>
                                <input type="hidden" name="photo_id[]" id="product-photo">
                                <div id="photo" class="dropzone"></div>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label>en</label>
                                <input type="checkbox" name="check" class="en">
                                <label>ara</label>
                                <input type="checkbox" name="check" class="tu">
                                <label>fra</label>
                                <input type="checkbox" name="check" class="tu">
                            </div>

                            <hr class="line">
{{--                            //////////////EN///////////////                             --}}
                            <strong style="text-align: center;margin-right: 50%;color: red">English</strong>

                            <hr class="line">

                            <div class="form-group">
                                <label>title</label>
                                <input type="text" name="entitle" class="form-control"
                                   required    placeholder="نام محصول را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label >slug</label>
                                <input type="text" name="enslug" class="form-control"
                                   required    placeholder="نام مستعار را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label >Description</label>
                                <input type="text" name="endes" class="form-control"
                                    required  >
                            </div>
                            <div class="form-group">
                                <label >city</label>
                                <input type="text" name="encity" class="form-control"
                                   required    placeholder="نام شهر را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label >zone</label>
                                <input type="text" name="enzone" class="form-control"
                                       placeholder="نام منطقه را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>Seo_title</label>
                                <input type="text" name="enmeta_title" class="form-control"
                                       placeholder="عنوان سئو را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>Seo_des</label>
                                <textarea type="text" name="enmeta_desc" class="form-control"
                                          placeholder="توضیحات سئو را وارد کنید..."></textarea>
                            </div>
                            <div class="form-group">
                                <label>Seo_keywords</label>
                                <input type="text" name="enmeta_keywords" class="form-control"
                                       placeholder="کلمات کلیدی سئو را وارد کنید...">
                            </div>
                            <hr class="line">

                            {{--                            //////////////ara///////////////                             --}}
                                <strong style="text-align: center;margin-right: 50%;color: red">Arabic</strong>
                            <hr class="line">

                            <div class="form-group">
                                <label>title</label>
                                <input type="text" name="aratitle" class="form-control"
                                  required     placeholder="نام محصول را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label >slag</label>
                                <input type="text" name="araslug" class="form-control"
                                  required     placeholder="نام مستعار را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label >description</label>
                                <input type="text" name="arades" class="form-control"
                                  required      >
                            </div>
                            <div class="form-group">
                                <label >city</label>
                                <input type="text" name="aracity" class="form-control"
                                  required     placeholder="نام شهر را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label >zone</label>
                                <input type="text" name="arazone" class="form-control"
                                       placeholder="نام منطقه را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>Seo_title</label>
                                <input type="text" name="arameta_title" class="form-control"
                                       placeholder="عنوان سئو را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>Seo_des</label>
                                <textarea type="text" name="arameta_desc" class="form-control"
                                          placeholder="توضیحات سئو را وارد کنید..."></textarea>
                            </div>
                            <div class="form-group">
                                <label>Seo_keywords</label>
                                <input type="text" name="arameta_keywords" class="form-control"
                                       placeholder="کلمات کلیدی سئو را وارد کنید...">
                            </div>
                            <hr class="line">

                            {{--                            //////////////fra///////////////                             --}}
                            <strong style="text-align: center;margin-right: 50%;color: red">France</strong>
                            <hr class="line">

                            <div class="form-group">
                                <label>title</label>
                                <input type="text" name="fratitle" class="form-control"
                                   required    placeholder="نام محصول را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label >slug</label>
                                <input type="text" name="fraslug" class="form-control"
                                    required   placeholder="نام مستعار را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label >description</label>
                                <input type="text" name="frades" class="form-control"
                                   required    placeholder="نام مستعار را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label >city</label>
                                <input type="text" name="fracity" class="form-control"
                                   required    placeholder="نام شهر را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label >zone</label>
                                <input type="text" name="frazone" class="form-control"
                                       placeholder="نام منطقه را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>Seo_title</label>
                                <input type="text" name="frameta_title" class="form-control"
                                       placeholder="عنوان سئو را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>Seo_des</label>
                                <textarea type="text" name="frameta_desc" class="form-control"
                                          placeholder="توضیحات سئو را وارد کنید..."></textarea>
                            </div>
                            <div class="form-group">
                                <label>Seo_keywords</label>
                                <input type="text" name="frameta_keywords" class="form-control"
                                       placeholder="کلمات کلیدی سئو را وارد کنید...">
                            </div>

                            <button type="submit" onclick="productGallery()" class="btn btn-success pull-left">ذخیره
                            </button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script-vue')
    <script src="{{asset('js/app.js')}}"></script>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('/back/js/dropzone.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/back/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('/back/js/backSelf.js')}}"></script>

    <script>
        Dropzone.autoDiscover = false;
        var photosGallery = []
        var drop = new Dropzone('#photo', {
            addRemoveLinks: true,
            url: "{{route('photos.store')}}",
            sending: function (file, xhr, formData) {
                formData.append("_token", "{{csrf_token()}}")
            },
            success: function (file, response) {
                photosGallery.push(response.photo_id)
            }
        });
        productGallery = function () {
            document.getElementById('product-photo').value = photosGallery

        }
        CKEDITOR.replace('textareaDes', {
            customConfig: 'config.js',
            language: 'fa',
            toolbar: 'simple',
            removePlugins: 'cloudservices , easyimage'
        })


    </script>
@endsection
