@extends('layouts.app')

@section('title','Contact')

@section('content')

	<section class="main-content extra-pages">
			<div class="main-content-wrapper add-to-margin">
				<div class="content-body">

					<!-- article body start -->
					<article class="article-wrapper">
						<div class="article-content">
							<h1 class="extra-title">Contact</h1>
							<div class="article-inner">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

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
										<dic class="frm-row">
											<textarea class="frm-input" rows="8" required="" name="message" placeholder="Enter your message"></textarea>
										</dic>
										<div class="frm-row send-button">
											<button type="submit" class="frm-button material-button">Send message</button>
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
						<div class="sidebar-button-group">
							<a href="#" class="sidebar-buttons material-button"><i class="material-icons">&#xE851;</i><span class="btn-label">About Us</span></a>
							<a href="#" class="sidebar-buttons material-button"><i class="material-icons">&#xE866;</i><span class="btn-label">Authors</span></a>
							<a href="#" class="sidebar-buttons material-button"><i class="material-icons">&#xE87F;</i><span class="btn-label">Privacy Policy</span></a>
							<a href="#" class="sidebar-buttons material-button active"><i class="material-icons">&#xE894;</i><span class="btn-label">Contacts</span></a>
						</div>

					</div>
				</div>
			</div>
		</section>

@stop