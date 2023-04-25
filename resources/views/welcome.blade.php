@extends('layouts.layout')
@section('content')
    <main>

        <div class="slider-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider-active dot-style">

                            <div class="single-slider slider-height slider-bg1 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                {{-- <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span> --}}
                                                <h1 data-animation="fadeInUp" data-delay=".4s" style="color:black; font-size: 50px;"></h1>
                                                {{-- <a href="{{ route('department') }}" class="btn hero-btn" data-animation="bounceIn"
                                                    data-delay=".8s">Departments</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-slider slider-height slider-bg2 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                {{-- <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span> --}}
                                                <h1 data-animation="fadeInUp" data-delay=".4s" style="font-size: 50px;">Lecture Review System</h1>
                                                <a href="{{ route('department') }}" class="btn hero-btn" data-animation="bounceIn"
                                                    data-delay=".8s">Departments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-slider slider-height slider-bg3 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                {{-- <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span> --}}
                                                <h1 data-animation="fadeInUp" data-delay=".4s" style="font-size: 50px;">Lecture Review System</h1>
                                                <a href="{{ route('department') }}" class="btn hero-btn" data-animation="bounceIn"
                                                    data-delay=".8s">Departments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="best-selling section-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Most Reviewed Lecturer</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="selling-active">
                            @foreach($most_reviewed_lecturers as $lecturer)
                            <div class="properties pb-20">
                                <div class="properties-card">
                                    <div class="properties-img">
                                        <a href="{{ route('review', $lecturer->id) }}"><img src="/uploads/{{ $lecturer->image }}"
                                                alt=""></a>
                                    </div>
                                    <a href="{{ route('review', $lecturer->id) }}">
                                        <div class="properties-caption">
                                            <h3><a href="{{ route('review', $lecturer->id) }}">{{$lecturer->name}}</a></h3>
                                            <p>Course</p>
                                            <div class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        @if($lecturer->stars > 0)
                                                            @for ($i = 0; $i < $lecturer->stars; $i++)
                                                            <i class="fas fa-star"></i>
                                                            @endfor
                                                        @else
                                                                <p>No Reviews yet</p>
                                                        @endif
                                                    </div>
                                                    <p>(<span>{{$lecturer->reviews_count}}</span> Review)</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="services-area2 top-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <div class="row">

                            <div class="col-xl-12">
                                <div class="section-tittle d-flex justify-content-between align-items-center mb-40">
                                    <h2 class="mb-0">Reviews of This Week</h2>
                                    {{-- <a href="#" class="browse-btn">View All</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="services-active">
                                    @foreach($lecturers as $lecturer)
                                        <div class="single-services d-flex align-items-center">
                                            <div class="features-img">
                                                <a href="{{ route('review', $lecturer->id) }}"><img src="/uploads/{{ $lecturer->image }}"
                                                    alt=""></a>
                                            </div>
                                            <div class="features-caption">
                                                {{-- <img src="assets/img/icon/logo.html" alt=""> --}}
                                                <h3>{{$lecturer->name}}</h3>
                                                <p>Course</p>
                                                <div class="price">
                                                    <span>Department</span>
                                                </div>
                                                <div class="review">
                                                    <div class="rating">
                                                        @if($lecturer->stars > 0)
                                                            @for ($i = 0; $i < $lecturer->stars; $i++)
                                                            <i class="fas fa-star"></i>
                                                            @endfor
                                                        @else
                                                                <p>No Reviews yet</p>
                                                        @endif
                                                    </div>
                                                    <p>(<span>{{$lecturer->reviews_count}}</span> Review)</p>
                                                </div>
                                                <a href="book-details.html" class="border-btn">View Details</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-9">

                        <div class="google-add">
                            <img src="assets/img/gallery/ad.jpg" alt="" class="w-100 h-100">
                            <img src="assets/img/gallery/ad.jpg" alt="" class="w-100 h-100">
                            <img src="assets/img/gallery/ad.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="our-client section-padding best-selling">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-12">

                        <div class="section-tittle  mb-40">
                            <h2>Latest Reviewed Lecturers</h2>
                        </div>
                    </div>
                    
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <div class="nav-button mb-40">
                            </div>
                        </div>
                </div>
            </div>
            <div class="container">

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                        
                            <div class="row">
                                @foreach($latest_reviewed_lectures as $lecturer)
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <div class="properties pb-30">
                                        <div class="properties-card">
                                            <div class="properties-img">
                                                <a href="{{ route('review', $lecturer->id) }}"><img src="/uploads/{{ $lecturer->image }}"
                                                    alt=""></a>
                                            </div>
                                            <div class="properties-caption properties-caption2">
                                                <h3><a href="{{ route('review', $lecturer->id) }}">{{$lecturer->name}}</a></h3>
                                                <p>Course</p>
                                                <div
                                                    class="properties-footer d-flex justify-content-between align-items-center">
                                                    <div class="review">
                                                        <div class="rating">
                                                            @if($lecturer->stars > 0)
                                                                @for ($i = 0; $i < $lecturer->stars; $i++)
                                                                <i class="fas fa-star"></i>
                                                                @endfor
                                                            @else
                                                                    <p>No Reviews yet</p>
                                                            @endif
                                                        </div>
                                                        <p>(<span>{{$lecturer->reviews_count}}</span> Review)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                       
                    </div>
                    <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling9.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling7.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling8.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling7.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling8.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling9.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling9.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling7.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling8.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling7.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling8.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling6.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling4.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling9.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="properties pb-30">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.html"><img src="assets/img/gallery/best_selling2.jpg"
                                                    alt=""></a>
                                        </div>
                                        <div class="properties-caption properties-caption2">
                                            <h3><a href="book-details.html">Moon Dance</a></h3>
                                            <p>J. R Rain</p>
                                            <div
                                                class="properties-footer d-flex justify-content-between align-items-center">
                                                <div class="review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                    <p>(<span>120</span> Review)</p>
                                                </div>
                                                <div class="price">
                                                    <span>$50</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>


     

      

    </main>
@endsection
   