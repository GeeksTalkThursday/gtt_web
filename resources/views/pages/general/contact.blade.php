@extends('layouts.app')

@section('title','Contact')

@section('content')

	<section class="main-content extra-pages">
			<div class="main-content-wrapper add-to-margin">
				<div class="content-body">

					<!-- article body start -->
					<article class="article-wrapper">
						<div class="article-content">
							<h1 class="extra-title">Contact Us</h1>
							<div class="article-inner">
								<p>We are here to help each other. Drop us a message on whatever you need or any improvement that we need to adjust.
									<br>You can report bugs, spelling errors or request to be an author. Just drop as a message on the form below or info@appslab.co.ke</p>
									@include('partials.message._message')

								<div class="contact-form">
									<form id="contactFrom"  data-parsley-validate method="post" action="{{url('contact_form')}}">
										@csrf
										<div class="frm-row">
											<div class="columns column-3">
												<input type="text" name="name" placeholder="Name" class="frm-input" required="">
											</div>
											<div class="columns column-3">
												<input type="email" name="email" placeholder="Email" class="frm-input" required="">
											</div>
											{{-- <div class="columns column-2">
												<input type="text" name="wwebsite" placeholder="Website" class="frm-input">
											</div> --}}
											<div class="clearfix"></div>
										</div>
										<div class="frm-row">
											<input type="text" name="subject" placeholder="Subject" required="" class="frm-input">
										</div>
										<div class="frm-row">
											<textarea class="frm-input" rows="8" required="" name="message" placeholder="Enter your message"></textarea>
										</div>
										<div class="frm-row send-button">
											<button type="submit" class="frm-button material-button pull-right">Send message</button>
										</div>
									</form>
								</div>
							</div>

							<!--this is important for the left ad box or share box fixer -->
							<div id="endOfTheArticle"></div>

						</div>
					</article>
					<!-- article body end -->

				</div>
				<div class="content-sidebar">
					<div class="sidebar_inner">
						<div class="sidebar-spacer"></div>
						<a href="index4.html#" class="widget-ad-box">
                            <img src="/img/adbox300x250.png" width="300" height="250">
                        </a>

					</div>
				</div>
			</div>
		</section>

@stop