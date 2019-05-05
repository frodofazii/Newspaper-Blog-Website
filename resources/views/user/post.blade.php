@extends('user/app')


@section('bg-img',Storage::disk('local')->url($post->image) )

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('user/css/prism.css')}}">

@endsection

@section('title',$post->title )

@section('Sub-Heading',$post->subtitle)

<link rel="stylesheet"  href="{{ asset('/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">



@section('main-content')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=311968229534667&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <small>Created at {{ $post->created_at->diffForHumans()}}</small>
               @foreach ( $post->categories as $category)
            <small class="pull-right" style="margin-right:15px">
                
             <!--<a href="{{ route('category', $category->slug) }}">-->
              {{ $category->name}}
              <!--</a>-->

            </small>
            
              @endforeach

            
           {!! htmlspecialchars_decode($post->body) !!}


           <!--For Tag-->
           <h3>Tags Clouds</h3>
               @foreach ( $post->tags as $tag)
          <!-- <a href="{{ route('tag', $tag->slug) }}">--> 
            <small class="pull-left" style="margin-right:15px;border-radius: 5px;border:1px solid gray;
            padding:5px">
                
              {{ $tag->name}}

            </small>
          <!--</a>-->
            
              @endforeach

          </div>

          <div class="fb-comments" data-href="{{ Request::url()}}" data-numposts="5"></div>

        </div>
      </div>
    </article>

    <hr>


@endsection

@section('footer')

<script src="{{ asset('user/js/prism.js')}}"></script>
@endsection