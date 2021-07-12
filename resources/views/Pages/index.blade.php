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

                <div class="settings">
                    <form action="">
                        <h3>Sort By:</h3>
                        <div class="custom-select">
                            <select name="cars" id="cars">
                                <option value="volvo">-------</option>
                                <option value="volvo">Recent</option>
                                <option value="saab">Oldest</option>
                                <option value="mercedes">Trending</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="posts">
            @foreach ($Categories as $Category)
            <div class="content">
                <div class="topics-people">
                     <h3>{{ $Category->category }}</h3>
                     
                     <div class="people">
                         <figure>
                             <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                             <figcaption>Declan rice</figcaption>
                         </figure>
                         <figure>
                             <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                             <figcaption>Tristan Mark</figcaption>
                         </figure>
                         <figure>
                             <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                             <figcaption>Eddard Stark</figcaption>
                         </figure>
                         <figure>
                             <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                             <figcaption>Astard Collin</figcaption>
                         </figure>
                     </div>
                </div>

                @forelse ($Category->posts as $Post )
                    <div class="blog-posts">
                        <div class="main-content">
                            <div class="profile-img"> <img src="{{ asset('images/Rectangle 402.png') }}" alt=""></div>
                            <div class="content-visible" id="content-visible">
                                <i class="fas fa-ellipsis-v" id="edit-delete"></i>
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
                                <h2>{{ $Post->user->name ?? 'No name'}}</h2>
                                <small>Created At  {{ $Post->created_at }} </small>
                                <h3>{{ $Post->title }}</h3>
                                <img id="{{ $Post->title }}" src="{{ asset('images/'. $Post->image_path) }}" alt="{{ asset('images/'. $Post->image_path) }}">
                                <!-- The Modal -->
                                    <div id="myModal" class="modal">
                                        <span class="close">&times;</span>
                                        <img class="modal-content" id="{{ $Post->title }}">
                                        <div id="caption"></div>
                                    </div>
                                    
                                    {{-- <script>
                                        $('myModal').each
                                    
                                        var modal = document.querySelectorAll("myModal");
                                        console.log(modal);
                                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                                        var img = modal.previousElementSibling;
                                        console.log(img)
                                        var modalImg = modal.firstElementChild.nextElementSibling;
                                        console.log(modalImg)
                                        var captionText = modal.firstElementChild.nextElementSibling.nextElementSibling;
                                        console.log(captionText)
                        
                                        if(img.id == modalImg.id) {
                                            console.log('shcbsdbc')
                                            img.onclick = function(){
                                            modal.style.display = "block";
                                            modalImg.src = this.src;
                                            captionText.innerHTML = this.alt;
                                        }
                                        }
                                        // Get the <span> element that closes the modal
                                        var span = document.getElementsByClassName("close")[0];
                                        
                                        // When the user clicks on <span> (x), close the modal
                                        span.onclick = function() { 
                                            modal.style.display = "none";
                                        }
                                        </script> --}}
                                <p class="show-read-more"> {{ $Post->Body }} <a href="/{{ $Post->id }}">Read More</a></p>
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

                   @empty

                    <div class="error-log">
                        <img src="{{ asset('images/oops.jpg') }}" alt="{{ asset('images/oops.jpg') }}">
                        <h2 class="no-story">Ooops no post. Let's Create One <a href="/create">Create  Post</a></h2>
                    </div>
                @endforelse
               
             </div>
            @endforeach
             <script>
                    $( "#myModal" ).each(function( index ) {
                        console.log( index + ": " + $( this ).text() );
                    });
             </script>
            </div>
        </div>
    </section>
@endsection