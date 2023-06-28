@extends('front.layout.master')
@section('title','About Us')
<link rel="stylesheet" href="./front/css/style.css">
@section('body')
<div id="blog">

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(front/img/blog/bg-img/b1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>about us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <h4><a href="#" class="post-headline">We connect people and build communities to create economic opportunity for all.</a></h4>
                            <p class="mb-3"> we create pathways to connect millions of sellers and buyers in more than 190 markets around the world. Our technology empowers our customers, providing everyone the opportunity to grow and thrive — no matter who they are or where they are in the world. And the ripple effect of our work creates waves of change for our customers, our company, our communities and our planet.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <p class="mb-3">From creating a workplace environment where employees can be their authentic selves, to being a responsible business with a commitment to the community – we're breaking down barriers and helping to foster opportunity for all.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-catagory-area clearfix mb-100">
                        <img  src="front/img/blog/blog-img/1.jpg" alt="">
                        <!-- Catagory Title -->
                        <div class="catagory-title">
                            <a href="#">Lifestyle posts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

    <!-- ##### Cool Facts Area Start ##### -->
    <div class="cool-facts-area section-padding-100-0 bg-img background-overlay" style="background-image: url(front/img/blog/bg-img/b4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-blog-area blog-style-2 text-center mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <h4><a href="#" class="post-headline">Small Business Programs and Support</a></h4>
                            <p>Success for us happens together. We don’t compete with our sellers — we win when they do.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <h2><span class="counter">25</span></h2>
                        <p>Awards won</p>
                    </div>
                </div>
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <h2><span class="counter">12</span>K</h2>
                        <p>FB Followers</p>
                    </div>
                </div>
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <h2><span class="counter">9</span></h2>
                        <p>Team members</p>
                    </div>
                </div>
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <h2><span class="counter">16</span></h2>
                        <p>Coffes/Day</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Cool Facts Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100-0 clearfix">
        <div class="container">
            <div class="row">

                @foreach($blogs as $blog)
                    <!-- Single Blog Area  -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-blog-area blog-style-2 mb-100">
                            <div class="single-blog-thumbnail">
                                <img style="height: 280px;" src="front/img/blog/{{ $blog->image }}" alt="">
                                <div class="post-date">
                                    {{  date('M d, Y',strtotime($blog->created_at)) }}
                                </div>
                            </div>
                            <!-- Blog Content -->
                            <div class="single-blog-content mt-50">
                                <div class="line"></div>
                                <h4><a href="blog/{{ $blog->id }}/blog_detail" class="post-headline">{{ $blog->title }}</a></h4>
                                <p>{{ $blog->content }}</p>
                                <div class="post-meta">
                                    <p>By {{ $blog->user->name }}</p>
                                    <p>{{ count($blog->blogComments) }} comments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->
</div>
@endsection
