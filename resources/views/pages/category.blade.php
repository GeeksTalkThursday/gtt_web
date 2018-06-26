@extends('layouts.app')

<?php $titleTag = htmlspecialchars($category->category);?>

@section('title',$titleTag)

@section('content')

	<div class="extra-posts">
		<div class="extra-post-wrapper">
			<div class="columns column-4">
				<article class="extra-post-box">
					<div class="post-image">
						<span><img src="{{ asset('img/meeting.png') }}" width="80" height="80"></span>
					</div>
					<div class="post-title">
						<h4><span style="font-weight: 800; font-size: larger"> {{ strtoupper($category->category) }} | {{ count($data['categories']) }} Posts</span></h4>
						<span class="post-date">Engage and Learn</span>
					</div>
				</article>
			</div>
			<div class="columns column-2">
				<article class="extra-post-box">
					<div class="post-title">
						<div class="col-sm-10">
							<h4><i class="fa fa-file fa-2x"></i><span style="font-weight: 800; font-size: larger"> {{ strtoupper($category->category) }}</span></h4>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
		<section class="main-content">
			<div class="main-content-wrapper">
				<div class="content-body">
					<div class="content-timeline">

						<div class="post-list-header">
							<span class="post-list-title">{{ strtoupper($category->category) }} Tutorials</span>
						</div>

						<!--Timeline items start -->
						@include('partials.tutorials')
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
								{{-- <div class="w-title">Related</div> --}}
								{{-- <div class="w-seperator"></div> --}}
							</div>
							<div class="w-boxed-post">
								<ul>
									 {{--@php--}}
                                    {{--$i = 1;--}}
                                    {{--@endphp--}}
                                {{--@foreach($porpulars as $porpular)--}}
                                    {{--<li>--}}
                                        {{--<a href="{{route('blog.single',$porpular->slug)}}" style="background-image: url({{ asset('images/posts/'.$porpular->thumbnail) }});">--}}
                                            {{--<div class="box-wrapper">--}}
                                                {{--<div class="box-left">--}}
                                                    {{--<span>{{$i++}}</span>--}}
                                                {{--</div>--}}
                                                {{--<div class="box-right">--}}
                                                    {{--<h3 class="p-title">{{$porpular->title}}</h3>--}}
                                                    {{--<div class="p-icons">--}}
                                                        {{--213 likes . 124 comments--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--@endforeach--}}
								</ul>
							</div>
						</div>

						<div class="seperator"></div>

						<a href="list-timeline.html#" class="widget-ad-box">
							<img src="/img/adbox300x250.png" width="300" height="250">
						</a>

					</div>
				</div>
			</div>
		</section>

@stop