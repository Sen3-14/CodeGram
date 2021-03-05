@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-3 p-5">
         <img draggable="false" src="https://instagram.fbeg8-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fbeg8-1.fna.fbcdn.net&amp;_nc_ohc=0oVoPC0dcYwAX9LkAT-&amp;tp=1&amp;oh=243ce2eeccfcf863a7615e7b0b8c6caf&amp;oe=6057B4E7" class="rounded-circle">
      </div>
      <div class="col-9 pt-5">
         <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{$user->username}}</h1>
          @can('update',$user->profile)
            <a href="/p/create">Add New Post</a>
          @endcan
         </div>
         @can('update',$user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
         @endcan
         <div class="d-flex">
           <div class="pr-5"><strong>{{ $user->posts->count()}}</strong> posts</div>
           <div class="pr-5"><strong>number</strong> followers</div>
           <div class="pr-5"><strong>number</strong> following</div>
         </div>
         <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
         <div>{{ $user->profile->description }}</div>
         <div><a href="#">{{$user->profile->url}}</a></div>
      </div>
   </div>
   <div class="row pt-5">
      @foreach ($user->posts as $post)
      <div class="col-4 pb-4">
         <a href="/p/{{ $post->id }}">
           <img src="/storage/{{$post->image}}" id="main-image" alt="error" class="w-100">
         </a>
      </div>
      @endforeach
   </div>
</div>
@endsection
