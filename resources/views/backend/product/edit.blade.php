@extends('backend.dashboard')

@section('style')
    <link rel="stylesheet" href="{{asset('/back/css/dropzone.min.css')}}">
@endsection

@section('content')
    <section class="content" id="app">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">ویرایش محصول {{$product->title}}</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="{{route('product.update',$product->id)}}">
                            {{csrf_field()}}
                            {{ method_field('PATCH')}}
                            <div class="form-group">
                                <label for="title">نام</label>
                                <input type="text" name="name" class="form-control"
                                       id="title" value="{{$product->title}}">
                            </div>
                            <div class="form-group">
                                <label for="slug">نام مستعار</label>
                                <input type="text" name="slug" class="form-control"
                                       id="slug" value="{{$product->slug}}">
                            </div>
                            <attribute-component :product="{{$product}}"></attribute-component>

                            <div class="form-group">
                                <label>قیمت محصول</label>
                                <input type="number" name="price" class="form-control"
                                       value="{{$product->price}}">
                            </div>
                            <div class="form-group">
                                <label>تخفیف</label>
                                <input type="number" name="dis_price" class="form-control"
                                       value="{{$product->dis_price}}">
                            </div>
                            <div class="form-group">
                                <label>توضیحات</label>
                                <textarea id="textareaDes" name="des" class="ckeditor form-control">{{$product->description}} </textarea>
                            </div>
                            <div class="form-group">
                                <label >نام شهر</label>
                                <input type="text" name="city" class="form-control"
                                       value="{{$product->country}}">
                            </div>
                            <div class="form-group">
                                <label >نام منطقه</label>
                                <input type="text" name="zone" class="form-control"
                                       value="{{$product->zone}}">
                            </div>
                            <div class="form-group">
                                <label>عنوان سئو</label>
                                <input type="text" name="meta_title" class="form-control"
                                       value="{{$product->title}}">
                            </div>
                            <div class="form-group">
                                <label>توضیحات سئو</label>
                                <textarea type="text" name="meta_desc" class="form-control">{{$product->meta_des}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>کلمات کلیدی سئو</label>
                                <input type="text" name="meta_keywords" class="form-control"
                                       value="{{$product->meta_keywords}}">
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
                                <div class="row">
                                    @foreach($product->photos as $photo)
                                        <div class="col-sm-3" id="photo_{{$photo->id}}">
                                            <img class="img-responsive" src="{{ asset( $photo->path) }}" alt="image">
                                            <button type="button" class="btn btn-danger" onclick="removeImages({{$photo->id}})">حذف
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
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
                                       value="{{$product->entitle}}">
                            </div>
                            <div class="form-group">
                                <label >slug</label>
                                <input type="text" name="enslug" class="form-control"
                                       value="{{$product->enslug}}">
                            </div>
                            <div class="form-group">
                                <label >Description</label>
                                <input type="text" name="endes" class="form-control"
                                       value="{{$product->endes}}">
                            </div>
                            <div class="form-group">
                                <label >city</label>
                                <input type="text" name="encity" class="form-control"
                                       value="{{$product->encountry}}">
                            </div>
                            <div class="form-group">
                                <label >نام منطقه</label>
                                <input type="text" name="enzone" class="form-control"
                                       value="{{$product->enzone}}">
                            </div>
                            <div class="form-group">
                                <label>Seo_title</label>
                                <input type="text" name="enmeta_title" class="form-control"
                                       value="{{$product->en_seo_title}}">
                            </div>
                            <div class="form-group">
                                <label>Seo_des</label>
                                <textarea type="text" name="enmeta_desc" class="form-control"
                                          value="{{$product->en_seo_des}}"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Seo_keywords</label>
                                <input type="text" name="enmeta_keywords" class="form-control"
                                       value="{{$product->en_seo_keywords}}">
                            </div>
                            <hr class="line">

                            {{--                            //////////////ara///////////////                             --}}
                            <strong style="text-align: center;margin-right: 50%;color: red">Arabic</strong>
                            <hr class="line">

                            <div class="form-group">
                                <label>title</label>
                                <input type="text" name="aratitle" class="form-control"
                                       value="{{$product->aratitle}}">
                            </div>
                            <div class="form-group">
                                <label >slag</label>
                                <input type="text" name="araslug" class="form-control"
                                       value="{{$product->araslug}}">
                            </div>
                            <div class="form-group">
                                <label >description</label>
                                <input type="text" name="arades" class="form-control"
                                       value="{{$product->arades}}">
                            </div>
                            <div class="form-group">
                                <label >city</label>
                                <input type="text" name="aracity" class="form-control"
                                       value="{{$product->aracountry}}">
                            </div>
                            <div class="form-group">
                                <label >نام منطقه</label>
                                <input type="text" araname="zone" class="form-control"
                                       value="{{$product->arazone}}">
                            </div>
                            <div class="form-group">
                                <label>Seo_title</label>
                                <input type="text" name="arameta_title" class="form-control"
                                       value="{{$product->ara_seo_title}}">
                            </div>
                            <div class="form-group">
                                <label>Seo_des</label>
                                <textarea type="text" name="arameta_desc" class="form-control"
                                          value="{{$product->ara_seo_des}}"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Seo_keywords</label>
                                <input type="text" name="arameta_keywords" class="form-control"
                                       value="{{$product->ara_seo_keywords}}">
                            </div>
                            <hr class="line">

                            {{--                            //////////////fra///////////////                             --}}
                            <strong style="text-align: center;margin-right: 50%;color: red">France</strong>
                            <hr class="line">

                            <div class="form-group">
                                <label>title</label>
                                <input type="text" name="fratitle" class="form-control"
                                       value="{{$product->fratitle}}">
                            </div>
                            <div class="form-group">
                                <label >slug</label>
                                <input type="text" name="fraslug" class="form-control"
                                       value="{{$product->fraslug}}">
                            </div>
                            <div class="form-group">
                                <label >description</label>
                                <input type="text" name="frades" class="form-control"
                                       value="{{$product->frades}}">
                            </div>
                            <div class="form-group">
                                <label >city</label>
                                <input type="text" name="fracity" class="form-control"
                                       value="{{$product->fracountry}}">
                            </div>
                            <div class="form-group">
                                <label >نام منطقه</label>
                                <input type="text" name="farzone" class="form-control"
                                       value="{{$product->farzone}}">
                            </div>
                            <div class="form-group">
                                <label>Seo_title</label>
                                <input type="text" name="frameta_title" class="form-control"
                                       value="{{$product->fra_seo_title}}">
                            </div>
                            <div class="form-group">
                                <label>Seo_des</label>
                                <textarea type="text" name="frameta_desc" class="form-control"
                                          value="{{$product->fra_seo_des}}"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Seo_keywords</label>
                                <input type="text" name="frameta_keywords" class="form-control"
                                       value="{{$product->fra_seo_keywords}}">
                            </div>

                            <button type="submit" onclick="productGallery()" class="btn btn-success pull-left">ذخیره
                            </button>
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
        var photo = [].concat({{$product->photos->pluck('id')}})
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
                document.getElementById('product-photo').value = photosGallery.concat(photo)
        }
        CKEDITOR.replace('textareaDes', {
            customConfig: 'config.js',
            language: 'fa',
            toolbar: 'simple',
            removePlugins: 'cloudservices , easyimage'
        })
        removeImages = function (id) {
            var index = photo.indexOf(id)
            photo.splice(index , 1);
            document.getElementById('photo_' + id).remove();
        }
    </script>
@endsection
