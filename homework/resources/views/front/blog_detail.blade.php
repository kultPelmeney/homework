@extends('front.layout.master')
@section('title','Blog')
<link rel="stylesheet" href="front/css/style.css">
@section('body')
    <div id="blog">
        <!-- ##### Single Blog Area Start ##### -->
        <div class="single-blog-wrapper section-padding-0-100">

            <!-- Single Blog Area  -->
            <div class="single-blog-area blog-style-2 mb-50">
                <div class="single-blog-thumbnail">
                    <img src="front/img/blog/bg-img/b5.jpg" alt="">
                    <div class="post-tag-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="post-date">
                                        {{  date('M d, Y',strtotime($blog->created_at)) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <!-- ##### Post Content Area ##### -->
                    <div class="col-12 col-lg-9">
                        <!-- Single Blog Area  -->
                        <div class="single-blog-area blog-style-2 mb-50">
                            <!-- Blog Content -->
                            <div class="single-blog-content">
                                <div class="line"></div>
                                <h4><a href="#" class="post-headline mb-0">{{ $blog->title }}</a></h4>
                                <div class="post-meta mb-50">
                                    <p>By {{ $blog->user->name }}</p>
                                    <p>{{ count($blog->blogComments) }} comments</p>
                                </div>
                                <p>{{ $blog->content }}</p>

                                <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Morbi sodales, dolor id ultricies dictum, diam odio tempor purus, at ultrices elit nulla ac nisl. Vestibulum enim sapien, blandit finibus elit vitae, venenatis tempor enim. Ut varius eros at fringilla aliquet. Sed sed sodales quam. Nam fermentum sed turpis sollicitudin lobortis.</p>

                                <p>Proin a nibh dignissim, volutpat mauris vitae, pellentesque nisi. In euismod non ligula at gravida. Nunc blandit eget enim vel mattis. Sed semper, purus ac suscipit scelerisque, eros dui fermentum tortor, vitae facilisis lacus nulla sit amet diam. Nullam eget sagittis mi. Suspendisse vitae volutpat lorem. Cras porta velit id sagittis ultrices. Maecenas efficitur tellus ac aliquam molestie. Morbi vel ipsum gravida, ultricies nunc sed, posuere purus. Donec ipsum lectus, congue ut fermentum vitae, molestie hendrerit erat. Sed lacinia accumsan egestas. Cras ac ipsum a ante placerat pellentesque.</p>
                            </div>
                        </div>

                        <!-- About Author -->
                        <div class="blog-post-author mt-100 d-flex">
                            <div class="author-thumbnail">
                                <img src="front/img/user/{{ $blog->user->avatar ?? 'default-avatar.jpg'}}" alt="">
                            </div>
                            <div class="author-info">
                                <div class="line"></div>
                                <span class="author-role">Author</span>
                                <h4>{{ $blog->user->name }}</h4>
                                <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.</p>
                            </div>
                        </div>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix mt-70">
                            <h5 class="title">Comments</h5>

                            <ol>
                                @foreach($blogComments as $blogComment)
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="front/img/user/{{ $blogComment->user->avatar ?? 'default-avatar.jpg' }}" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <a href="#" class="post-date">{{  date('M d, Y',strtotime($blogComment->created_at)) }}</a>
                                                <p><a href="#" class="post-author">{{ $blogComment->name }}</a></p>
                                                <p>{{ $blogComment->messages }} </p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ol>
                        </div>

                        <div class="post-a-comment-area mt-70">
                            <h5>Leave a reply</h5>
                            <!-- Reply Form -->
                            <form action="blog/{{ $blog->id }}/blog_detail" method="post">
                                @csrf


                                <div class="row">
                                    <div class="col-12">
                                        <div class="group">
                                            <textarea name="messages" id="messages" required placeholder="Comment"></textarea>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label for="messages"></label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn original-btn">Reply</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- ##### Sidebar Area ##### -->
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="post-sidebar-area">

                            <!-- Widget Area -->
                            <div class="sidebar-widget-area">
                                <h5 class="title">Advertisement</h5>
                                <a href="#"><img src="front/img/blog/bg-img/add.gif" alt=""></a>
                            </div>

                            <!-- Widget Area -->
                            <div class="sidebar-widget-area">
                                <h5 class="title">Latest Posts</h5>

                                <div class="widget-content">

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex align-items-center widget-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="front/img/blog/blog-img/lp1.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="post-tag">Lifestyle</a>
                                            <h4><a href="#" class="post-headline">Party people in the house</a></h4>
                                            <div class="post-meta">
                                                <p><a href="#">12 March</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex align-items-center widget-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="front/img/blog/blog-img/lp2.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="post-tag">Lifestyle</a>
                                            <h4><a href="#" class="post-headline">A sunday in the park</a></h4>
                                            <div class="post-meta">
                                                <p><a href="#">12 March</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex align-items-center widget-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="front/img/blog/blog-img/lp3.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="post-tag">Lifestyle</a>
                                            <h4><a href="#" class="post-headline">Party people in the house</a></h4>
                                            <div class="post-meta">
                                                <p><a href="#">12 March</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex align-items-center widget-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="front/img/blog/blog-img/lp4.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="post-tag">Lifestyle</a>
                                            <h4><a href="#" class="post-headline">A sunday in the park</a></h4>
                                            <div class="post-meta">
                                                <p><a href="#">12 March</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Widget Area -->
                            <div class="sidebar-widget-area">
                                <h5 class="title">Tags</h5>
                                <div class="widget-content">
                                    <ul class="tags">
                                        <li><a href="#">design</a></li>
                                        <li><a href="#">fashion</a></li>
                                        <li><a href="#">travel</a></li>
                                        <li><a href="#">music</a></li>
                                        <li><a href="#">party</a></li>
                                        <li><a href="#">video</a></li>
                                        <li><a href="#">photography</a></li>
                                        <li><a href="#">adventure</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Single Blog Area End ##### -->
    </div>
@endsection
