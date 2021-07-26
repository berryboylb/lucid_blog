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
                <div class="profile-credentials">
                       <form action="" method="post">
                           @csrf
                           <div>
                                <img src="{{ asset('images/Banner.png') }}">
                                <label for="my-cover-img"><i class="fas fa-sort-down"></i></label>
                           </div>
                           <input type="file" id="my-cover-img">
                           <input type="Submit" value="submit">
                       </form>
        
                            <div>
                                <div>
                                    <img src="{{ asset('images/Rectangle 402.png') }}" alt="{{ asset('profile_pictures/Ellipse 9.png') }}">
                                </div>
                                <h3>{{ $User->name }} {{ $User->last_name }}</h3>
                                <h3>{{ $User->email }}</h3>
                                <p>Graphic Designer at Self</p>
                                <input type="text" value="Graphic Designer at Self">
                            </div>
        
                            <div>
                                <h3>Following</h3>
                                <p>50</p>
                            </div>
    
                            <div>
                                <h3>Followers</h3>
                                <p>500</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection