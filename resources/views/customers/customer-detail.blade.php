@extends('layouts.app2')
@section('content2')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-xl-2"></div>
        <div class="col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center mb-4">
                        <img class="mr-3" src="{{asset('images/avatar/11.png')}}" width="80" height="80" alt="">
                        <div class="media-body">
                            <h3 class="mb-0">{{ $customer->name}}</h3>
                            <p class="text-muted mb-0">Canada</p>
                        </div>
                    </div>

                    <div class="row mb-5">

                        <div class="col-6 text-center">
                            <a href="/customers/update/{{$customer->id}}" class="btn btn-warning px-5">Update</a>

                        </div>
                        <div class="col-6 text-center">
                            <a href="/customers/delete/{{ $customer->id}}" class="btn btn-danger px-5">Delete</a>
                        </div>
                    </div>

                    <h4>About Me</h4>
                    <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>
                    <ul class="card-profile__info">
                        <li class="mb-1"><strong class="text-dark mr-4">Password</strong> <span>{{ $customer->password}}</span></li>
                        <li><strong class="text-dark mr-4">Email</strong> <span>{{ $customer->email}}</span></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
