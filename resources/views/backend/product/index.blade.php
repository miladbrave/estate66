@extends('backend.dashboard')

@section('content')
    <section class="content" style="position: relative;z-index: 100">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">محصولات</h3>
                <div class="box-tools pull-right">
                    <a class="btn btn-primary" href="{{route('product.create')}}">جدید</a>
                </div>
            </div>
            @include('backend.partial.form-error')
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th class="text-center">عملیات</th>
                            <th class="text-center">عنوان</th>
                            <th class="text-center">شناسه</th>
                            <th class="text-center">کدمحصول</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="text-center">
                                    <form method="post" action="{{route('product.destroy',$product->id)}}"
                                          style="display: inline">
                                        {{csrf_field()}}
                                        {{ method_field('Delete')}}
                                        <button class="btn btn-danger">حذف</button>
                                    </form>
                                    <a href="{{route('product.edit',$product->id)}}" class="btn btn-warning">ویرایش</a>
                                </td>
                                <td class="text-center"> {{$product->title }}</td>
                                <td class="text-center"> {{$product->sku }}</td>
                                <td class="text-center">{{$product->id}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div style="margin-right: 40%">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
