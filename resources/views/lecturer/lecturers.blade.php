@extends('layouts.layout')
@section('content')
    <main>

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slider-area">
                        <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
                            <div class="hero-caption hero-caption2">
                                <h2>Lecturers</h2>
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
                                            <option>Browse by Name of Lecturer</option>
                                            @foreach($lecturer as $lect)
                                            <option>{{$lect->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="best-selling p-0">
                            <div class="row">
                                @foreach($lecturer as $lect)
                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
                                    <div class="properties pb-30">
                                        <div class="properties-card">
                                            <div class="properties-img">
                                                <a href="{{ route('review', $lect->id) }}"><img
                                                    src="/uploads/{{ $lect->image }} " height="300px" alt=""></a>
                                                         </p>
                                            </div>
                                            <div class="properties-caption properties-caption2">
                                                <h3><a href="{{ route('review', $lect->id) }}">{{$lect->name}}</a></h3>
                                                <p>{{$lect->email}}</p>
                                                <div
                                                    class="properties-footer d-flex justify-content-between align-items-center">
                                                    <div class="review">
                                                        <div class="rating">
                                                            @if($lect->stars > 0)
                                                            @for ($i = 0; $i < $lect->stars; $i++)
                                                            <i class="fas fa-star"></i>
                                                            @endfor
                                                            @else
                                                                <p>No Reviews yet</p>
                                                            @endif
                                                            
                                                        </div>
                                                        <p>(<span>{{$lect->reviews_count}}</span> Review)</p>
                                                    </div>
                                                    <div class="price">
                                                        <a href="{{ route('review',$lect->id) }}" class="btn">Review</a>
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