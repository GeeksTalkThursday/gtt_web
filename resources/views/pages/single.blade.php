@extends('layouts.app')

<?php $titleTag = htmlspecialchars($post->title);?>

@section('title',$titleTag)

@section('content')

		<section class="sub-highlight">

			<!-- Detail parallax start -->
			<div class="parallax-box">
				<div class="parallax-image" style="background-image: url({{ asset('images/posts/'.$post->thumbnail) }});"></div>
				<article class="post-box">
		    		<div class="post-overlay">
		    			<div class="post-overlay-inner">
			    			<a href="{{route('blog.category',$post->category->category)}}" class="post-category" title="{{ucwords($post->category->category)}}" rel="tag">{{ucwords($post->category->category)}}</a>
			    			<h1 class="post-title bg-opacity">{{ucwords($post->title)}}</h1>
			    			<div class="post-meta">
			    				<div class="post-meta-author-info">
			    					<span class="post-meta-author-name">
			    						<a href="#" title="{{ucwords($post->admin->admin)}}" rel="author">{{ucwords($post->admin->admin)}}</a>
			    					</span>
			    					<span class="middot">·</span>
			    					<span class="post-meta-date">
			    						<abbr class="published updated bg-opacity"  title="{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}">
			    							{{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}
	                                	</abbr>
			    					</span>
			    				</div>
			    			</div>
		    			</div>
		    		</div>
		    	</article>
			</div>
		</section>
		<section class="main-content">
			<div class="main-content-wrapper">
				<div class="content-body">
					<article class="article-wrapper">
						<div class="article-header">
							<div class="breadcrumb">
								<ul>
									<li><a href="{{url('/')}}"><span>Home</span></a> <i class="material-icons">&#xE315;</i></li>
									<li><a href="{{route('blog.category',$post->category->category)}}"><span>{{$post->category->category}}</span></a> <i class="material-icons">&#xE315;</i></li>
									<li><span>{{$post->title}}</span></li>
								</ul>
							</div>
						</div>
						<div class="article-content"> <!-- adbox120 or adbox160 -->
							<div class="article-left-box">
								<div class="article-left-box-inner">
									<div class="article-share">

										<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url('blog/'.$post->slug)) }}" class="facebook fb-xfbml-parse-ignore"></a>
										<a target="_blank" href="https://twitter.com/home?status=Hey,check out {{$post->title }} on {{ url('blog/'.$post->slug) }} . Follow @AppsLab_KE" class="twitter"></a>
										<a target="_blank" href="https://plus.google.com/share?url{{ ltrim(http_build_query([url('blog/'.$post->slug)]),'0') }}" class="google-plus"></a>
									</div>
								@auth
									<a href="{{url('/favorite',$post->id)}}" id="favorite" data-method='get' >
										<span id="button-fav" class="{{$book?'add-to-favorite1':'add-to-favorite'}}" data-zebra-tooltip title="Add to favorite">
										<i class="material-icons">&#xE866;</i>
										</span>
									</a>
								@endauth
								@guest
								<a href="{{url('/favorite',$post->id)}}" id="favorite" data-method='get' >
										<span id="button-fav" class="add-to-favorite" data-zebra-tooltip title="Add to favorite">
										<i class="material-icons">&#xE866;</i>
										</span>
									</a>
								@endguest
									{{-- <ul class="article-emoticons">
										<li>
											<a href="#" class="popular happy"></a><span class="happy1">13</span>
											<ul>
												<li><a href="#" class="love"></a><span class="love1"> 7</span></li>
												<li><a href="#" class="shocked"></a><span class="shocked1">5</span></li>
												<li><a href="#" class="angry"></a><span class="angry1">4</span></li>
												<li><a href="#" class="crying"></a><span class="crying1">1</span></li>
												<li><a href="#" class="sleepy"></a><span class="sleepy1">0</span></li>
											</ul>
										</li>										
									</ul> --}}
								</div>
							</div>
							<div class="article-inner">

								{!! $post->body !!}
								
								
								<div class="article-tags">
									<span class="tag-subtitle">Tags : </span>
									@foreach($post->tags as $tag)
										<a href="{{route('blog.tag',$tag->name)}}">{{$tag->name}}</a><span class="tag-dot"></span>
									@endforeach
								</div>
								<!-- article tags area end -->
							</div>

							<!--this is important for the left ad box or share box fixer -->
							<div id="endOfTheArticle"></div>

							<!-- More article unit start -->
							<div class="more-article">
								<div class="w-header">
									<div class="w-title">Continue Reading</div>
									<div class="w-seperator"></div>
								</div>
								<div class="more-posts">
								@foreach($pops as $pop)
									<div class="columns column-2">

								    	<article class="post-box" style="background-image: url({{ asset('images/posts/'.$pop->thumbnail) }});">
								    		<div class="post-overlay">
								    			<a href="{{route('blog.category',$pop->category->category)}}" class="post-category" title="{{$pop->category->category}}" rel="tag">{{$pop->category->category}}</a>
								    			<h3 class="post-title">{{$pop->title}}</h3>
								    			<div class="post-meta">
								    				
								    				<div class="post-meta-author-info">
								    					<span class="post-meta-author-name">
								    						<a href="#" title="Posts by John Doe" rel="author">{{$pop->admin->admin}}</a>
								    					</span>
								    					<span class="middot">·</span>
								    					<span class="post-meta-date">
								    						<abbr class="published updated" title="December 4, 2017">{{date('M j, Y ',strtotime($pop->created_at))}}</abbr>
								    					</span>
								    				</div>
								    			</div>
								    		</div>
								    		<a href="{{route('blog.single',$pop->slug)}}" class="post-overlayLink"></a>
								    	</article>

								    </div>
								@endforeach

								</div>
							</div>
							<!-- More article unit end -->

							<!-- article comment area start -->
							<div class="article-comments">
								<div class="w-header">
									<div class="w-title">Comments ({{$post->comments()->count()}})</div>
									<div class="w-seperator"></div>
								</div>
								<div class="comment-form">
									<form action="{{route('comments.store',$post->id)}}" method="post" data-parsley-validate >
                            			{{ csrf_field() }}
										<div class="comment-columns">
											<div class="frm-row columns column-3">
												<input name="name" {{Auth::check()? "readonly": ''}} value="{{Auth::check()?Auth::user()->name: ''}}" placeholder="Name" class="frm-input" required="">
											</div>
											<div class="frm-row columns column-3">
												<input type="email" name="email" {{Auth::check()? "readonly": ''}} value="{{Auth::check()?Auth::user()->email: ''}}" placeholder="Email" class="frm-input" required="">
											</div>
										</div>
										<div class="frm-row">
											<textarea class="frm-input" name="comment" rows="4" placeholder="Your comments..."></textarea>
										</div>
										<div class="frm-row">
											<div class="comment-form-notice columns column-4">
												<div>Your comments must be minimum 30 charachter.</div>
												<div>You are commenting as a visitor, you can <a href="#" data-modal="loginModal">login</a> or <a href="#" data-modal="registerModal">register</a></div>
											</div>
											<div class="columns column-2">
												<button type="submit" class="frm-button full material-button">Send your comment</button>
											</div>
											<div class="clearfix"></div>
										</div>
				
									</form>
								</div>
								<div class="all-comments">

								@forelse($post->comments()->paginate(6) as $comment)
									<!-- comment item start -->
									<div class="comment-item">
										<div class="comment-avatar">
											<span class="comment-img"><img src={{"https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email)))  }} width="50" height="50"></span>
										</div>
										<div class="comment-content">
											<div class="comment-header">
												<span class="author-name">{{$comment->name}}</span> - 
												<span class="comment-date">{{ date('F dS, Y - g:iA',strtotime($comment->created_at)) }}</span>
											</div>
											<div class="comment-wrapper">
												{!! $comment->comment !!}
											</div>
											
										</div>
									</div>
									<!-- comment item end -->
								@empty

									<div class="comment-item">
										
										<div class="comment-content">
											
											<div class="comment-wrapper">
												No comments yet...
											</div>
											
										</div>
									</div>

								@endforelse
								</div>
							</div>
						</div>
					</article>
				</div>
				<div class="content-sidebar">
					<div class="sidebar_inner">

						<div class="widget-item">
							<div class="w-header">
								<div class="w-title">Editor's Picks</div>
								<div class="w-seperator"></div>
							</div>
							<div class="w-boxed-post">
								<ul>
									@php
                                    $i = 1;
                                    @endphp
                                @foreach($porpulars as $porpular)
                                    <li>
                                        <a href="{{route('blog.single',$porpular->slug)}}" style="background-image: url({{ asset('images/posts/'.$porpular->thumbnail) }});">
                                            <div class="box-wrapper">
                                                <div class="box-left">
                                                    <span>{{$i++}}</span>
                                                </div>
                                                <div class="box-right">
                                                    <h3 class="p-title">{{$porpular->title}}</h3>
                                                    <div class="p-icons">
                                                        213 likes . 124 comments
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
								</ul>
							</div>
						</div>

						<div class="widget-item">
							<div class="w-header">
								<div class="w-title">Carousel Posts</div>
								<div class="w-seperator"></div>
							</div>
							<div class="w-carousel-post">
								<div class="owl-carousel" id="widgetCarousel">
								@foreach($slides as $slide)
                                    <div class="item">
                                        <a href="{{route('blog.single',$slide->slug)}}">
                                            <img src="{{ asset('images/posts/'.$slide->thumbnail) }}" width="300">
                                            <span class="w-post-title">{{$slide->title}}</span>
                                        </a>
                                    </div>
                                @endforeach
								</div>
							</div>
						</div>

						<div class="seperator"></div>

						<a href="#" class="widget-ad-box">
							<img src="/img/adbox300x250.png" width="300" height="250">
						</a>

					
					</div>
				</div>
			</div>
		</section>

@stop