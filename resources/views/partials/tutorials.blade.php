<div class="post-lists">
    @foreach($posts as $post)
        <div class="columns column-3">
            <a href="{{route('blog.single',$post->slug)}}">
                <div class="post-list-item">
                    <div class="post-top">
                        <img class="post-image" src="{{ asset('images/posts/'.$post->thumbnail) }}">
                        <h3 class="post-title">
                            <a href="{{route('blog.single',$post->slug)}}"><span>{{ucwords($post->title)}}</span></a>
                        </h3>
                    </div>
                    <div class="post-bottom">
                        <div class="post-author-box">
                            <a href="{{route('blog.category',$post->category->category)}}" class="timeline-category-name">{{ mb_strimwidth(strtoupper($post->category->category),0,24) }}</a>
                            {{--<span class="post-date item-spacing"><i class="fa fa-eye"></i></span>--}}
                            {{--<span class="post-date item-spacing">|</span>--}}
                            <span class="post-date item-spacing"><i class=" item-spacing fa fa-comments"></i>{{ count($post->comments) }}</span>
                            <span class="post-date item-spacing">|</span>
                            <a href="{{route('blog.single',$post->slug)}}" class="author-name item-spacing"><i class="fa fa-user"></i> {{ucwords($post->admin->name)}}</a>
                            <span class="post-date item-spacing"><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>