@extends('layouts.layout')
@section('content')
    <main>

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slider-area">
                        <div class="slider-height2 slider-bg10 d-flex align-items-center justify-content-center">
                            <div class="hero-caption hero-caption2">
                                <h2>Courses</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="listing-area pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-8">
                        <div class="row justify-content-end">
                            <div class="col-xl-4">
                                <div class="product_page_tittle">
                                    <div class="short_by">
                                        <select name="#" id="product_short_list">
                                            <option>Browse by Course Code</option>
                                            @foreach($Courses as $course)
                                            <option>{{$course->course_code}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="best-selling p-0">
                            <div class="row">
                                @foreach($Courses as $course)
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
                                    <div class="properties pb-30">
                                        <div class="properties-card">
                                            
                                            <div class="properties-caption properties-caption2">
                                                <h3><a href="book-details.html">{{$course->name}}</a></h3>
                                                <p><b>Course Code:</b>{{$course->course_code}}</p>
                                                <div
                                                    class="properties-footer d-flex justify-content-between align-items-center">
                                                    <div class="review">
                                                        <div class="rating">
                                                            <a class="btn" href="{{ route('lecturer', $course->id) }}">VIEW TUTORS</a>
                                                        </div>
                                                        <p></p>
                                                        <div class="price">
                                                        <span>(<span>120</span> Review)</span>
                                                    </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>


        

    </main>
@endsection