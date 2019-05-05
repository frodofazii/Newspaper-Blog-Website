<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>jamborofi</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('/user/article/css/bootstrap.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('/user/article/css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('/user/article/css/style.css')}}"/>

		

    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li><a href="category.html">News</a></li>
						
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
							<div class="collapse navbar-collapse" id="navbarResponsive">
         <button class="colorbtn"> <ul class="navbar-nav ml-auto">
							<li class="nav-item">
              @if (Auth::guest())
              
              <a class="nav-link" href="{{ route('login')}}">Login</a>
              @else
                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> 

               @endif

            </li>
        </ul>
    </div>
</button>
							
							
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				
			</div>
			<!-- /Nav -->
		</header>
		<!-- /Header -->

		<!-- section -->
		<div class="section">
		
			<div class="container">
				
				<div class="row">
					<div class="col-md-12">
						<div class="col-lg-offset-5"><h2>Daily news</h2></div>
						
					</div>
	@foreach($posts as $post)
					
		<div class="col-md-4">
		<div class="post">
		<a class="post-img"><img  src="/uploads/avatars/{{ $post->image }}" style="width:350px; height:200px;" alt=""></a>
				<div class="post-body">
				<div class="post-meta">
				 <a class="post-category cat-4" href="{{route('post',$post->slug)}}">
				 <span style="">Posted {{$post->created_at->diffForHumans()}}</span>
				 </div>
				 <h3 class="post-title">{{ $post->title}}</h3></a>
				 </div>
					</div>
						
					</div>

					@endforeach
					
				
          <!-- Pager -->
          
		</div>
				<div class="clearfix">
            {{ $posts->links()}}
         

          </div>
	</div>

			<!-- /container -->
		</div>

		<!-- /section -->
		
		<!-- section -->
		<div class="section section-grey">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Featured Posts</h2>
						</div>
					</div>

					
		@foreach($posts as $post)
		
		<div class="col-md-6">
		<div class="post">
		<a class="post-img"><img  src="/uploads/avatars/{{ $post->image }}" style="width:350px; height:200px;" alt=""></a>
				<div class="post-body">
				<div class="post-meta">
				 <a class="post-category cat-4" href="{{route('post',$post->slug)}}">
				 <span >Posted {{$post->created_at->diffForHumans()}}</span>
				 </div>
				 <h3 class="post-title">{{ $post->title}}</h3></a>
				 </div>
					</div>
						
					</div>
					@endforeach

					
					
					<!-- /post -->
				</div>
					<div class="clearfix">
            {{ $posts->links()}}
         

          </div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>Most Read</h2>
								</div>
							</div>
							<!-- post -->
		@foreach($posts as $post)
		
		<div class="col-md-12">
		<div class="post">
		<a class="post-img"><img  src="/uploads/avatars/{{ $post->image }}" style="width:350px; height:200px;" alt=""></a>
				<div class="post-body">
				<div class="post-meta">
				 <a class="post-category cat-4" href="{{route('post',$post->slug)}}">
				 <span >Posted {{$post->created_at->diffForHumans()}}</span>
				 </div>
				 <h3 class="post-title">{{ $post->title}}</h3></a>
				 </div>
					</div>
						
					</div>
					@endforeach


						</div>
					</div>

					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
						
						<!-- catagories -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
									<li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
									<li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
									<li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
									<li><a href="#" class="cat-3">CSS<span>35</span></a></li>
								</ul>
							</div>
						</div>
						<!-- /catagories -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
								<ul>
									<li><a href="#">Chrome</a></li>
									<li><a href="#">CSS</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Backend</a></li>
									<li><a href="#">JQuery</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Development</a></li>
									<li><a href="#">JavaScript</a></li>
									<li><a href="#">Website</a></li>
								</ul>
							</div>
						</div>
						<!-- /tags -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- Footer -->
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
							</div>
							<ul class="footer-nav">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Advertisement</a></li>
							</ul>
							<div class="footer-copyright">
								<h5>All Rights are preserved</h5>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">About Us</h3>
									<ul class="footer-links">
										<li><a href="about.html">About Us</a></li>
										<li><a href="#">Join Us</a></li>
										<li><a href="contact.html">Contacts</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Catagories</h3>
									<ul class="footer-links">
										<li><a href="category.html">Web Design</a></li>
										<li><a href="category.html">JavaScript</a></li>
										<li><a href="category.html">Css</a></li>
										<li><a href="category.html">Jquery</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-widget">
							<h3 class="footer-title">Join our Newsletter</h3>
							<div class="footer-newsletter">
								<form>
									<input class="input" type="email" name="newsletter" placeholder="Enter your email">
									<button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
								</form>
							</div>
							<ul class="footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>
		<!-- /Footer -->

		<!-- jQuery Plugins -->
		<script src="{{asset('/user/article/js/jquery.min.js')}}"></script>
		<script src="{{asset('/user/article/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('/user/article/js/main.js')}}"></script>

	</body>
</html>
