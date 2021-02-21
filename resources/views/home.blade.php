@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
      <div class="col-3 p-5">
         <img draggable="false" src="https://instagram.fbeg8-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fbeg8-1.fna.fbcdn.net&amp;_nc_ohc=0oVoPC0dcYwAX9LkAT-&amp;tp=1&amp;oh=243ce2eeccfcf863a7615e7b0b8c6caf&amp;oe=6057B4E7" class="rounded-circle">
      </div>
      <div class="col-9 pt-5">
         <div><h1>{{$user->username}}</h1></div>
         <div class="d-flex">
           <div class="pr-5"><strong>number</strong> followers</div>
           <div class="pr-5"><strong>number</strong> following</div>
           <div class="pr-5"><strong>number</strong> posts</div>
         </div>
         <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
         <div>{{ $user->profile->description }}</div>
         <div><a href="#">{{$user->profile->url}}</a></div>
      </div>
   </div>
   <div class="row pt-5">
         <div class="col-4">
              <img src="https://cutewallpaper.org/21/no-copyright-wallpaper/Anime-Wallpaper-Scenery-48-images-on-Genchi.info.jpg" id="main-image" alt="error" class="w-100">
         </div>
         <div class="col-4">
              <img src="https://cutewallpaper.org/21/no-copyright-wallpaper/Anime-Wallpaper-Scenery-48-images-on-Genchi.info.jpg" id="main-image" alt="error" class="w-100">
         </div>
         <div class="col-4">
              <img src="https://cutewallpaper.org/21/no-copyright-wallpaper/Anime-Wallpaper-Scenery-48-images-on-Genchi.info.jpg" id="main-image" alt="error" class="w-100">
         </div>
   </div>
</div>
@endsection
