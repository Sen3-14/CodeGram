@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-3 p-5">
         <img draggable="false" src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
      </div>
      <div class="col-9 pt-5">
         <div class="d-flex justify-content-between align-items-baseline">
           <div class="d-flex align-items-center pb-3">
                <div class="h4">{{$user->username}}</div>
                <button class="btn btn-primary ml-4">Follow</button>
            </div>
           @can('update',$user->profile)
            <div>
                <button type="button" onclick="location.href='/p/create';" class="btn btn-primary">
                  Add New Post
                 </button>
            </div>
           @endcan
         </div>
         @can('update',$user->profile)
           <div>
               <button type="button" onclick="location.href='/profile/{{ $user->id }}/edit';" class="btn btn-outline-dark">
                 Edit Profile
               </button>
          </div>
         @endcan
         <div class="d-flex">
           <div class="pr-5"><strong>{{ $user->posts->count()}}</strong> posts</div>
           <div class="pr-5"><strong>number</strong> followers</div>
           <div class="pr-5"><strong>number</strong> following</div>
         </div>
         <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
         <div>{{ $user->profile->description }}</div>
         <div><a href="{{$user->profile->url}}">{{$user->profile->url}}</a></div>
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
