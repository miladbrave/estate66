@extends('backend.dashboard')

@section('content')
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">  تعیین ویژگی دسته بندی  {{$category->name}}  </h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="{{route('saveSetting',$category->id)}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="att">ویژگی ها</label>
                                <select name="att[]" id="att" class="form-control" multiple>
                                    @foreach($attributeGroups as $attributeGroup)
                                        <option value="{{$attributeGroup->id}}" @if(in_array($attributeGroup->id,$category->attributeGroups->pluck('id')->toArray())) selected @endif>{{$attributeGroup->title}}</option>
                                    @endforeach
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