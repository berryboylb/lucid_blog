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
                <i class="fas fa-ellipsis-v" id="edit-delete" onclick="editDelete(event)"></i>
                <div class="float-right">
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
                <div class="main">
                    <h2><span>Home</span>/<span>Blog</span> /Pyschology of the Mind</h2>
                    <small>Published on Jun 3rd, 2020 02:25 PM</small>
                    <p>I am so into psychology of the mind and body these days. Sometimes I wonder if the disconnect between what I am studying in the university and where my interest lies, is the factor behind my procrastination and lackadaisical attitude to important tasks before me.

                        Okay, enough of the ramblings, this should be about what I learn so far and what I wish to learn. First off I'll start with psychology before delving to engineering.
                        
                        If you want something, ask for it, never hold grudge against someone, if someone offend you, call him out and say your grievance.
                        Make your bed each morning before leaving the house.Imagine returning from tiring day and you see mess all over your bed room. This has made me feel the effect of little accomplishments. Whenever I make my bed first thing, I become happier and with some sense of accomplishment.
                        Want to defeat a narcissist who insults you? Don't react. Just ignore him completely in front of others. It will hurt his image and he will stop poking you.
                        Want to feel confident? When meeting someone just assume you have everything which other person wants in/from you. It will be enough to seal the deal. This has also helped me long the way.
                        Want to complete something? Convince your brain to start the work. Once you start doing it, you will find it interesting and you will complete it.
                        I call the last one, the 5 seconds hack, it has increase my confidence in the sense that, I've been a shy guy in the past not able to strike a conversation with random people, but nowadays the moment the thought of talking to someone around me comes to mind, before the 5 seconds window elapse, I will initiate a conversation, doesn't matter what will come out of my mouth, just talk and take things further from there, works every time, especially approaching ladies.
                        
                        And then let's talk a bit about my Engineering side, I am a student of Electrical Engineering and ever since I was in primary school, I've been fascinated with cellphones of those days, how they convey sound from a place to another through cables, towers and free air as I use to say it those days.
                        
                        Then came digital calculators, I can spend hours just pressing random buttons and watching the display, then the advent of desktop computers, we use to play games and all what not. Later on came the mobile hand held devices, the cell phones mostly. To this day, I can zone out for hours reading about trends in technology, history and engineering marvels without getting bored.
                        
                        And then when I got admitted to study Electrical Engineering, I found programming and fell in love. I am still a beginner though and have learnt over the course of asking around and reading the lives and journeys of computer programmers, especially the ones in Nigeria here that every little project and work counts to ones advantage and so I am using this forthcoming internship to meet people, learn and contribute as well.</p>
                        <div class="social-likes">
                            <div class="likes-comment-views">
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
                                <textarea name="comment"></textarea>
                                <button type="Submit">Comment</button>
                            </form>
                        </div>

                        <div class="comments">
                            <h2>Comments:</h2>
                            <div class="one-person-comment">
                                <div class="comment-img">
                                    <img src="{{ asset('profile_pictures/Ellipse 9.png') }}" alt="">
                                </div>
                                <div class="comment-content">
                                    <div class="name-time">
                                        <h3>Emily shody</h3>
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
    </section>
@endsection