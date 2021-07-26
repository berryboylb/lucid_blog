@extends('layouts.app')

@section('content')
    <section class="home-sect maybe">
        <div class="container create-style">
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
            <div class="create-form">
               <div class="picture-form">
                <div class="creator-picture">
                    <img src="{{ asset('images/Rectangle 402.png') }}" alt="{{ asset('images/photo.png') }}">
                </div>
                <form action="/bars" method="post" enctype="multipart/form-data" class="main-form">
                    @csrf
                    <input class="post-title" name="title" type="text" placeholder="Title">
                    <textarea class="post-body" name="body" id="" cols="30" rows="10" placeholder="Compose an Epic"></textarea>
                    <input class="post-tags" id="categories_tags" name="tags" type="text"  placeholder="Select tags">
                    <label for="create_image" class="create_label"> <i class="fas fa-bell"></i> Click to upload Image</label>
                    <input class="post-image" id="create_image" style="display: none" type="file" name="image">
                   
                   <div class="post-submit">
                       <input class="send" type="Submit" value="Publish">
                       <button class="save" type="Submit" disabled onclick= "draft()">Save Draft</button>
                   </div>
                </form>
               </div>

               <div class="timeline-post-contact">
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
                                <a href="/{{ $Post->id }}/edit">Edit</a>
                               </div>
            
                                <form action="/{{ $Post->id }}" class="pt-3" method="post">
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
                                <small>Created At  {{ $Post->created_at }} </small>
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
                     @if ($Post->user_id == $User)
                     <div class="profile-posts">
                        <div class="main-content">
                            <i class="fas fa-ellipsis-v" id="edit-delete" onclick="editDelete(event)"></i>
                            <div class="float-right">
                               <div class="edit">
                                <a href="/{{ $Post->id }}/edit">Edit</a>
                               </div>
            
                                <form action="/{{ $Post->id }}" class="pt-3" method="post">
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
                                <small>Created At  {{ $Post->created_at }} </small>
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
                                <a href="/{{ $Post->id }}/edit">Edit</a>
                               </div>
            
                                <form action="/{{ $Post->id }}" class="pt-3" method="post">
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

            <div class="suscribe">
                <form action="{{ route('newsLetter') }}" method="POST" class="suscribe-form">
                    @csrf
                    <h3>Get your favourite website posts on your time line</h3>
                    <input class="email-subscribe" name="body" type="text" placeholder="Enter your email">
                    <input class="subscribe-submit" type="submit" value = "Subscribe">
                </form>
            </div>
        </div>
        <i class="far fa-bell" id="notify"></i>

        <script>
            const notify = document.querySelector('#notify');
            const subscribe = document.querySelector(".suscribe");

            notify.addEventListener('click', ()=>{
                subscribe.classList.toggle('suscribe-new');
                
            })

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
        </script>
         <script>
            //picks and submits form inputs
            $(document).ready(function(){
                $('form.suscribe-form').on('submit', function(){
    
                    var that = $(this),
                        url = that.attr('action'),
                        type = that.attr('method'),
                        data = {};
    
                    that.find('[name]').each(function(index, value) {
                        var that = $(this),
                            name = that.attr('name'),
                            value = that.val();
    
                        data[name] = value;
                    });
    
                    $.ajax({
                        url: url,
                        type: type,
                        data: data,
    
                        success: function(response)
                        {
                            $.each( response, function( key, value ) {
                           
                           if(key == 'success'){
                               swal(key, value, key)
                           }
                           else {
                               swal(key, value, key)
                           }
                           
                           
                       });
                        }
                    });
                    return false;
                });
            });
        </script>
        <script>
            $('#categories_tags').tags();
        </script>
    </section>
@endsection