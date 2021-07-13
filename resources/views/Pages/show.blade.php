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
                <i class="fas fa-ellipsis-v" id="edit-delete-show" onclick="editDeleteShow(event)"></i>
                <div class="float-right-show">
                    <div class="edit">
                        <a href="">Edit</a>
                    </div>
            
                <form action="" class="pt-3" method="post">
                    @csrf
                    @method('DELETE')
                    <button
                    class="border-b-2 pb-2 border-dotted italic text-red-500" 
                    type="submit">
                    Delete
                    </button>
                </form>
            </div>
                <div class="main-one">
                    <h2><span>Home</span>/ <span>{{ $CategoryName }}</span> /{{ $Posts->title }}</h2>
                    <small class="published">Published on {{ $Posts->created_at }}</small>
                    <p class="text">{{ $Posts->Body }}</p>
                        <img class="content-img" onclick="modal(event)" src="{{ asset('images/'. $Posts->image_path) }}" alt="{{ asset('images/'. $Posts->image_path) }}">
                                    <!-- The Modal -->
                                    <div id="myModal" class="modal">
                                        <span class="close">&times;</span>
                                        <img class="modal-content">
                                        <div id="caption"></div>
                                    </div>
                        <div class="social-likes">
                            <div class="likes-comment">
                                <div class="bum">
                                    <div class="bruh" id="bruh">
                                        <input type="checkbox" id="me" class ="like-checkbox"/>
                                        <label for="me">
                                          <svg class="like-svg" id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                                            <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                                              <path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2"/>
                                              <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5"/>
                                    
                                              <g id="grp7" opacity="0" transform="translate(7 6)">
                                                <circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2"/>
                                                <circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2"/>
                                              </g>
                                    
                                              <g id="grp6" opacity="0" transform="translate(0 28)">
                                                <circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2"/>
                                                <circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2"/>
                                              </g>
                                    
                                              <g id="grp3" opacity="0" transform="translate(52 28)">
                                                <circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2"/>
                                                <circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2"/>
                                              </g>
                                    
                                              <g id="grp2" opacity="0" transform="translate(44 6)">
                                                <circle id="oval2" fill="#CC8EF5" cx="5" cy="6" r="2"/>
                                                <circle id="oval1" fill="#CC8EF5" cx="2" cy="2" r="2"/>
                                              </g>
                                    
                                              <g id="grp5" opacity="0" transform="translate(14 50)">
                                                <circle id="oval1" fill="#91D2FA" cx="6" cy="5" r="2"/>
                                                <circle id="oval2" fill="#91D2FA" cx="2" cy="2" r="2"/>
                                              </g>
                                    
                                              <g id="grp4" opacity="0" transform="translate(35 50)">
                                                <circle id="oval1" fill="#F48EA7" cx="6" cy="5" r="2"/>
                                                <circle id="oval2" fill="#F48EA7" cx="2" cy="2" r="2"/>
                                              </g>
                                    
                                              <g id="grp1" opacity="0" transform="translate(24)">
                                                <circle id="oval1" fill="#9FC7FA" cx="2.5" cy="3" r="2"/>
                                                <circle id="oval2" fill="#9FC7FA" cx="7.5" cy="2" r="2"/>
                                              </g>
                                            </g>
                                          </svg>
                                        </label>
                                      </div>
                                    <a href="">
                                        <span> Likes</span>
                                    </a>
                                </div>
                                <a href="">
                                    <i class="far fa-comment-alt"></i>
                                    <i class="far fa-eye"></i>
                                    <span>Comments</span>
                                </a>
                            </div>

                            <div class="socials">
                                <a href="">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </div>
                        </div>

                        <div class="comment-box">
                            <form action="">
                                <textarea name="comment" placeholder="Write a comment..."></textarea>
                                <button type="Submit">Comment</button>
                            </form>
                        </div>

                        <div class="comments">
                            <h3>Comments:</h3>
                            <div class="one-person-comment">
                                    <div class="comment-img">
                                        <img src="{{ asset('profile_pictures/Ellipse 9.png') }}" alt="">
                                    </div>
                                    <div class="brave">
                                        <div class="name-time">
                                            <h4>Emily shody</h4>
                                            <small> <i class="fas fa-eye"></i></i> 3 mins ago</small>
                                        </div>
                                        <div class="the-comment">
                                            <p>Recently, I noticed a significant difference in my response to coding obstructions (or bugs) from the usual (quick) frustration to curiosity. I did a review, and realized it's been that way for almost entirely </p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <script>
            function editDeleteShow(evt){
                   evt.currentTarget.nextElementSibling.classList.toggle('dow');
                    //console.log( evt.currentTarget.nextElementSibling)
            }

            function modal(evt){
            var img = evt.currentTarget;
            var modal = img.nextElementSibling;
            var modalImg = modal.firstElementChild.nextElementSibling;
            var captionText = modal.firstElementChild.nextElementSibling.nextElementSibling;
            modal.style.display = "block";
            modalImg.src = img.src;
            captionText.innerHTML = img.alt;
            var span = modal.firstElementChild;
            span.onclick = function() { 
                modal.style.display = "none";
            }
            }
        </script>
    </section>
@endsection