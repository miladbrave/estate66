@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <a  href="{{route('dashboard')}}"><button type="button" class="btn btn-outline-danger float-right"  >ورود به پنل مدیریت </button>
                   </a>
                </div>
            </div>
            <img src="{{asset('/med/logo.png')}}" width="100%" height="400px" alt="">
        </div>
    </div>
</div>
@endsection
