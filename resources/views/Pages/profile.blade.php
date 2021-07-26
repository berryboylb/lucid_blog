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
            <div class="posts-one" style="padding: 0">
                <div class="profile-credentials">
                       <form action="" method="post" class="cover-img-form">
                           @csrf
                           <div class="my-cover-img-con">
                                <img src="{{ asset('images/Banner.png') }}">
                                <label for="my-profile-cover-img"><i class="fas fa-pencil-alt"></i></label>
                           </div>
                           <input type="file"  class="none" id="my-profile-cover-img">
                           <input type="Submit"  value="submit" class="none">
                       </form>
                       <form action="" method="post" class="profile-pic-form">
                            <div>
                                <img src="{{ asset('images/Rectangle 402.png') }}" alt="{{ asset('profile_pictures/Ellipse 9.png') }}">
                                <label for="my-profile-img"><i class="fas fa-pencil-alt"></i></label>
                            </div>
                            <input type="file"  class="none" id="my-profile-img">
                            <input type="Submit" class="none"  value="submit">
                        </form>
        
                            <div class="prolific-details">
                                <h3>{{ $User->name }} {{ $User->last_name }}</h3>
                                <h4>{{ $User->email }}</h4>
                                <h5>Graphic Designer at Self<i id="edit" class="fas fa-pencil-alt"></i></h5>
                                <div>
                                    <p>Location</p>
                                    <p>Birthday</p>
                                    <p>Joined on {{ $User->created_at }}</p>
                                </div>
                            </div>

                            <form action="" method="post" class="edit-profile-details">
                                <span class="closed">&times;</span>
                               <div>
                                    <label for="about">About</label>
                                    <input type="text" id="about" value="" class="details-input">
                                    <label for="location">Location</label >
                                    <input type="text" id="location" value="" class="details-input">
                                    <label for="birthday">Birthday</label>
                                    <input type="date" name="" id="birthday" class="details-input">
                                    <input type="submit" value="Save Changes" class="details-submit">
                               </div>
                            </form>
                            <div class="followed-followers">
                                <div>
                                    <p class="word">50</p>
                                    <p class="num">Following</p>
                                    
                                </div>
                                <div>
                                    <p class="word">500</p>
                                    <p class="num">Followers</p>
                                </div>
                            </div>
                </div>
                         <div>
                            <div class="tab">
                                <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'London')">Timeline</button>
                                <button class="tablinks" onclick="openCity(event, 'Paris')">Posts</button>
                                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Contact</button>
                              </div>
                              
                              <div id="London" class="tabcontent">
                                @foreach ($Categories as $Category)
                                 @foreach ($Category->posts as $Post )
                                 <div class="profile-posts">
                                    <div class="main-content">
                                        <i class="fas fa-ellipsis-v" id="edit-delete" onclick="editDelete(event)"></i>
                                        <div class="float-right">
                                           <div class="edit">
                                            <a href="bars/{{ $Post->id }}/edit">Edit</a>
                                           </div>
                        
                                            <form action="/bars/{{ $Post->id }}" class="pt-3" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                class="border-b-2 pb-2 border-dotted italic text-red-500" 
                                                 type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                        <h2 class="create-category">{{ $Category->category }}</h2>
                                        <div class="profile-img"> <img src="{{ asset('images/Rectangle 402.png') }}" alt=""></div>
                                        <div class="content-visible">
                                            <h2>{{ $Post->user->name ?? 'No name'}} {{ $Post->user->last_name ?? 'No name'}}</h2>
                                            <small>Created At  {{ ago($Post->created_at) }} </small>
                                            <h3>{{ $Post->title }}</h3>
                                            <p class="show-read-more"> {{ $Post->Body }} <a href="/{{ $Post->id }}">Read More</a></p>
                                            <img onclick="modal(event)" src="{{ asset('images/'. $Post->image_path) }}" alt="">
                                                <!-- The Modal -->
                                                <div id="myModal" class="modal">
                                                    <span class="close">&times;</span>
                                                    <img class="modal-content" id="{{ $Post->title }}">
                                                    <div id="caption"></div>
                                                </div>
                                            <div class="likes-comment-views">
                                                <div class="bum">
                                                    <div class="bruh" id="bruh">
                                                        <input type="checkbox" id="{{ $Post->id }}" class ="like-checkbox"/>
                                                        <label for="{{ $Post->id }}">
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
                                                <a href="">
                                                    <i class="fas fa-eye"></i>
                                                    <span>Views {{ $Post->views }}</span>  
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                                @endforeach
                              </div>
                              
                              <div id="Paris" class="tabcontent">
                                @foreach ($Categories as $Category)
                                 @foreach ($Category->posts as $Post )
                                 @if ($Post->user_id == $User->id)
                                 <div class="profile-posts">
                                    <div class="main-content">
                                        <i class="fas fa-ellipsis-v" id="edit-delete" onclick="editDelete(event)"></i>
                                        <div class="float-right">
                                           <div class="edit">
                                            <a href="bars/{{ $Post->id }}/edit">Edit</a>
                                           </div>
                        
                                            <form action="/bars/{{ $Post->id }}" class="pt-3" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                class="border-b-2 pb-2 border-dotted italic text-red-500" 
                                                 type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                        <h2 class="create-category">{{ $Category->category }}</h2>
                                        <div class="profile-img"> <img onclick="modal(event)" src="{{ asset('images/Rectangle 402.png') }}" alt=""></div>
                                        <div class="content-visible">
                                            <h2>{{ $Post->user->name ?? 'No name'}} {{ $Post->user->last_name ?? 'No name'}}</h2>
                                            <small>Created At  {{ ago($Post->created_at) }} </small>
                                            <h3>{{ $Post->title }}</h3>
                                            <p class="show-read-more"> {{ $Post->Body }} <a href="/{{ $Post->id }}">Read More</a></p>
                                            <img onclick="modal(event)" src="{{ asset('images/'. $Post->image_path) }}" alt="">
                                                <!-- The Modal -->
                                                <div id="myModal" class="modal">
                                                    <span class="close">&times;</span>
                                                    <img class="modal-content" id="{{ $Post->title }}">
                                                    <div id="caption"></div>
                                                </div>
                                            <div class="likes-comment-views">
                                                <a href="">
                                                    <i class="far fa-heart"></i>
                                                    <span> Likes</span>
                                                </a>
                                                <a href="/bars/{{ $Post->id }}">
                                                    <i class="far fa-comment-alt"></i>
                                                    <i class="far fa-eye"></i>
                                                    <span>Comments</span>
                                                </a>
                                                <a href="">
                                                    <i class="fas fa-eye"></i>
                                                    <span>Views {{ $Post->views }}</span>  
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                 @endif
                                 @endforeach
                                @endforeach
                              </div>
                              
                              <div id="Tokyo" class="tabcontent">
                                @foreach ($Categories as $Category)
                                 @foreach ($Category->posts as $Post )
                                 <div class="profile-posts">
                                    <div class="main-content">
                                        <i class="fas fa-ellipsis-v" id="edit-delete" onclick="editDelete(event)"></i>
                                        <div class="float-right">
                                           <div class="edit">
                                            <a href="bars/{{ $Post->id }}/edit">Edit</a>
                                           </div>
                        
                                            <form action="/bars/{{ $Post->id }}" class="pt-3" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                class="border-b-2 pb-2 border-dotted italic text-red-500" 
                                                 type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                        <h2 class="create-category">{{ $Category->category }}</h2>
                                        <div class="profile-img"> <img onclick="modal(event)" src="{{ asset('images/Rectangle 402.png') }}" alt=""></div>
                                        <div class="content-visible">
                                            <h2>{{ $Post->user->name ?? 'No name'}} {{ $Post->user->last_name ?? 'No name'}}</h2>
                                            <small>Created At  {{ ago($Post->created_at) }} </small>
                                            <h3>{{ $Post->title }}</h3>
                                            <p class="show-read-more"> {{ $Post->Body }} <a href="/{{ $Post->id }}">Read More</a></p>
                                            <img onclick="modal(event)" src="{{ asset('images/'. $Post->image_path) }}" alt="">
                                                <!-- The Modal -->
                                                <div id="myModal" class="modal">
                                                    <span class="close">&times;</span>
                                                    <img class="modal-content" id="{{ $Post->title }}">
                                                    <div id="caption"></div>
                                                </div>
                                            <div class="likes-comment-views">
                                                <a href="">
                                                    <i class="far fa-heart"></i>
                                                    <span> Likes</span>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-comment-alt"></i>
                                                    <i class="far fa-eye"></i>
                                                    <span>Comments</span>
                                                </a>
                                                <a href="">
                                                    <i class="fas fa-eye"></i>
                                                    <span>Views {{ $Post->views }}</span>  
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                                @endforeach
                              </div>
                              
                              <script>
                              function openCity(evt, cityName) {
                                var i, tabcontent, tablinks;
                                tabcontent = document.getElementsByClassName("tabcontent");
                                for (i = 0; i < tabcontent.length; i++) {
                                  tabcontent[i].style.display = "none";
                                }
                                tablinks = document.getElementsByClassName("tablinks");
                                for (i = 0; i < tablinks.length; i++) {
                                  tablinks[i].className = tablinks[i].className.replace(" active", "");
                                }
                                document.getElementById(cityName).style.display = "block";
                                evt.currentTarget.className += " active";
                              }
            
                               document.getElementById("defaultOpen").click();
                              </script>
                           </div>
                </div>
            </div>
        </div>
        <script>

            function editDelete(evt){
                    evt.currentTarget.nextElementSibling.classList.toggle('show');
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

            const close = document.querySelector(".closed");
            const edit = document.querySelector("#edit");
            const detailsForm = document.querySelector(".edit-profile-details")
            edit.onclick = () => {
                detailsForm.style.display = "flex";
            }
            close.onclick = () => {
                detailsForm.style.display = "none";
            }

        </script>

    
    </section>
@endsection