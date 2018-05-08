@extends('layouts.app')

<?php $titleTag = htmlspecialchars($category->category);?>

@section('title',$titleTag)

@section('content')

		<section class="main-highlight">
			
		</section>
		<section class="main-content">
			<div class="main-content-wrapper">
				<div class="content-body">
					<div class="content-timeline">
						<!--Timeline header area start -->
						<div class="post-list-header">
							<span class="post-list-title">{{$category->category}}</span>
						</div>
						<!--Timeline header area end -->


						<!--Timeline items start -->
						<div class="timeline-items">

						@foreach($posts as $post)
	                            <div class="timeline-item">
	                                <div class="timeline-left">
	                                    <div class="timeline-left-wrapper">
	                                        <a href="{{route('blog.category',$post->category->category)}}" class="timeline-category" data-zebra-tooltip title="{{$post->category->category}}"><i class="material-icons">&#xE894;</i></a>
	                                        <span class="timeline-date">
	                                        @php
	                                            $created = new \Carbon\Carbon($post->created_at);
	                                            $now = \Carbon\Carbon::now();
	                                        @endphp
	                                    {{$created->diff($now)->days < 1 ? 'today': $created->diffForHumans($now)}}</span>
	                                    </div>
	                                </div>
	                                <div class="timeline-right">
	                                    <div class="timeline-post-image">
	                                        <a href="{{route('blog.single',$post->slug)}}">
	                                            <img src="{{ asset('images/posts/'.$post->thumbnail) }}" width="260">
	                                        </a>
	                                    </div>
	                                    <div class="timeline-post-content">
	                                        <a href="{{route('blog.category',$post->category->category)}}" class="timeline-category-name">{{$post->category->category}}</a>
	                                        <a href="{{route('blog.single',$post->slug)}}">
	                                            <h3 class="timeline-post-title">{{$post->title}}</h3>
	                                        </a>
	                                        <div class="timeline-post-info">
	                                            <a href="{{route('blog.single',$post->slug)}}" class="author">{{$post->admin->name}}</a>
	                                            <span class="dot"></span>
	                                            <span class="comment">32 comments</span>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        @endforeach

						</div>
						<!--Timeline items end -->

						<!--Data load more button start  -->
						<div class="load-more">
							<div class="pull-right">
                                <div class=" pagination">
                                    {!! $posts->links(); !!}
                                </div>
                            </div>
						</div>
						<!--Data load more button start  -->
					</div>

				</div>
				<div class="content-sidebar">
					<div class="sidebar_inner">

						{{-- <div class="widget-item">
							<a href="list-timeline.html#" class="widget-ad-box">
								<img src="/img/adbox300x600.png" width="300" height="600">
							</a>
						</div> --}}

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

						{{-- <div class="seperator"></div>

						<a href="list-timeline.html#" class="widget-ad-box">
							<img src="/img/adbox300x250.png" width="300" height="250">
						</a> --}}

					</div>
				</div>
			</div>
		</section>

@stop