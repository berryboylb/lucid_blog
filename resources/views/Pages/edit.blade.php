@extends('layouts.app')

@section('content')
    <section class="home-sect"> 
        <div class="container home-style">
            <div class="first-section" id="sidebar">
                <div class="profile-container">
                    <img class="cover-img" src="{{ asset('images/Banner.png') }}" alt="{{ asset('images/Banner.png') }}">

                    <div class="user-details">
                        <div class="profile-img-con">
                            <img src="{{ asset('images/Rectangle 402.png') }}" alt="{{ asset('profile_pictures/Ellipse 9.png') }}">
                        </div>
                        <h3>ENAS OBZ</h3>
                        <p>Graphic Designer at Self</p>
                    </div>

                    <div class="following">
                        <h3>Following</h3>
                        <p>50</p>
                    </div>

                    <div class="followers">
                        <h3>Followers</h3>
                        <p>500</p>
                    </div>

                    <div class="bio-link">
                        <a href="#">Click to set your bio </a>
                    </div>
                </div>


                <div class="suggestions">
                    <div class="topic">
                        <h3>Suggestions</h3>
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                    <div class="people-suggestions">
                        <div class="one-person">
                            <div class="one-person-content">
                                <div class="one-person-img">
                                    <img src="{{ asset('images/photo.png') }}" alt="">
                                </div>
                                <div class="eagle">
                                    <h3>Jessica William</h3>
                                    <p>Graphic Designer</p>
                                </div>
                            </div>

                            <i class="fas fa-plus"></i>
                        </div>

                        <div class="one-person">
                            <div class="one-person-content">
                                <div class="one-person-img">
                                    <img src="{{ asset('images/photo.png') }}" alt="">
                                </div>
                                <div class="eagle">
                                    <h3>Jessica William</h3>
                                    <p>Graphic Designer</p>
                                </div>
                            </div>

                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="one-person">
                            <div class="one-person-content">
                                <div class="one-person-img">
                                    <img src="{{ asset('images/photo.png') }}" alt="">
                                </div>
                                <div class="eagle">
                                    <h3>Jessica William</h3>
                                    <p>Graphic Designer</p>
                                </div>
                            </div>

                            <i class="fas fa-plus"></i>
                        </div>
                    </div>

                    <script>
                        var add = document.getElementsByClassName('fa-plus');
                        //console.log(add);
                        Array.from(add).forEach((i)=> {
                            i.addEventListener('click', ()=> {
                                i.style.background = '#871E99';
                                i.style.color = '#fff';
                                setTimeout(function(){ 
                                    i.parentElement.style.display = 'none';
                                    },
                                 500);
                            })
                        })
                    </script>
                    <div class="view-more">
                        <a href="">View More</a>
                    </div>
                </div>

            </div>
            <div class="posts-one">
                <div class="main-two">
                    <div class="sub"><h3>Edit Your Post</h3></div>
                    <form action="/bars/{{ $Posts->id }}" method="POST">
                        @csrf
                        @method('PUT')

                        <input type="text" class="edit-title" name="title" value="{{ $Posts->title }}">
                        <textarea  name="body" class="edit-body" >{{ $Posts->Body }}</textarea>
                        <div class="edit-image-catalogue" max="4">
                            <div>
                                <img src="{{ asset('images/'. $Posts->image_path) }}" alt="Post Images">
                            </div>
                            <div>
                                <img src="{{ asset('images/'. $Posts->image_path) }}" alt="Post Images">
                            </div>
                        </div>
                        <label for="fileupload" class="create_label"><i class="fas fa-bell"></i> Click to Select new images and upload</label>
                        <input id="fileupload"   type="file" class="edit-image" style="display: none" name="image" multiple  >
                        <button type="submit" class="edit-submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            var editBox = document.querySelector('.edit-image-catalogue');
            Array.from(editBox.children).forEach((div)=>{
                const span = document.createElement('span');
                span.textContent = "x";
                div.appendChild(span);
                span.addEventListener('click', ()=> {
                  const firstParent =  span.parentElement;
                  const secondParent = firstParent.parentElement;
                  secondParent.removeChild(firstParent);
                })
            })
        </script>
    </section>
@endsection