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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                    <td><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
                                        <td>{{ $post->content}}</td>
                                        <td>{{ $post->customer->name}}</td>
                                        <td>{{ $post->customer->email}}</td>
                                        <td><img src="\storage\{{ $post->image}}" alt="" width="50px" height="50px"></td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container-fluid">
    <h1>Post List</h1>
    <table>
        <thead>
            <th>Title</th>
            <th>Content</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                <td><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
                    <td>{{ $post->content}}</td>
                    <td>{{ $post->customer->name}}</td>
                    <td>{{ $post->customer->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}

@endsection


