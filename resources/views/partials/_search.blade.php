<section class="main-content">
	<div class="main-content-wrapper">
		<div class="search-bar" style="margin-top: 60px;">
			<ul style="list-style: none; color: #fff;">
				@forelse($posts as $post)
					<div class="col-sm-12">
						<a style="color: #fff; text-decoration: none;" href="{{route('blog.single',$post->slug)}}">{{ ucwords($post->title) }}</a>
					</div>
				@empty
					<code id="nosearch"></code>
				@endforelse
			</ul>
		</div>
	</div>
</section>