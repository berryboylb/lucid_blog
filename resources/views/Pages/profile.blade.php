@extends('layouts.app')

@section('content')
    <section class="home-sect"> 
        <div class="container home-style">
            <div class="checklist-settings" id="sidebar">
                <div class="checklist">
                    <div class="checklist-header">
                        <h1>Categories</h3>
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                    <div class="moguls">

                        @if (count($Categories) > 0)
                        @foreach ($Categories as $Category)
                            <div>
                                <h3>{{ $Category->category }}</h3>
                                <label class="beta">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div> 
                        @endforeach
                        @else
                        <h2 class="no-story">No Categories</h2>
                    @endif
                    </div>
                </div>
            </div>
            <div class="posts-one">
                <div>
                    <form action="" method="POST">
                        @csrf
                        <div>
                            <img src="{{ asset('images/Banner.png') }}" alt="{{ asset('images/Banner.png') }}">
        
                            <div>
                                <div>
                                    <img src="{{ asset('images/Rectangle 402.png') }}" alt="{{ asset('profile_pictures/Ellipse 9.png') }}">
                                </div>
                                <h3></h3>
                                <p>Graphic Designer at Self</p>
                                <input type="text" value="Graphic Designer at Self">
                            </div>
        
                            <div class="following">
                                <h3>Following</h3>
                                <p>50</p>
                            </div>
        
                            <div class="followers">
                                <h3>Followers</h3>
                                <p>500</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection