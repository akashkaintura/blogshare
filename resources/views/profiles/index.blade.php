@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img alt="Change Profile Photo" class="rounded-circle" src="https://instagram.fbek1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/52412137_405238003381926_4947452349581885440_n.jpg?_nc_ht=instagram.fbek1-1.fna.fbcdn.net&amp;_nc_ohc=mIuUvtZFcsYAX85dBqF&amp;oh=5ad140de27ed2b70aed830f5dabd8b8e&amp;oe=5EC9BCD9">
        </div>
        <div class="col-9 pt-5">
            <!--passing data into view -->
        <div class="d-flex justify-content-between align-item-baseline p-3 m-1">
            <h1>{{$user->username}}</h1>
            <a href="/p/create" class="btn btn-primary p-3 m-1">Add a Post</a>
        </div>
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4"><strong>78</strong> followers</div>
                <div class="pr-4"><strong>73</strong> following</div>
            </div>
        <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
        <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">

        @foreach ($user->posts as $post)


        @endforeach
        <div class="col-4 pb-4">
        <img class="w-100" src="/storage/{{ $post->image}}">
        </div>
        <div class="col-4">
            <img class="w-100"src="https://instagram.fbek1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/74621045_164865361389537_1522074212088943092_n.jpg?_nc_ht=instagram.fbek1-1.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=zAzCrShnZk8AX9g2J1b&amp;oh=ea4a47aee256c6529bdc4cbf2f0e8cfe&amp;oe=5EC62A78" style="object-fit: cover;">
        </div>
        <div class="col-4">
            <img class="w-100"src="https://instagram.fbek1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/73537461_522838814966558_1297730963915751743_n.jpg?_nc_ht=instagram.fbek1-1.fna.fbcdn.net&amp;_nc_cat=102&amp;_nc_ohc=aoo7StfYPxwAX8r3OiS&amp;oh=9538dbc6115937e278e2623e0f5c341b&amp;oe=5EC73728" style="object-fit: cover;">
        </div>
    </div>
</div>
@endsection
