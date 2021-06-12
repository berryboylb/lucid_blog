@extends('layouts.app')

@section('content')
    <section class="home-sect"> 
        <div class="container home-style">
            <div class="checklist-settings">
                <div class="checklist">
                    <div class="checklist-header">
                        <h1>Categories</h3>
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                    <div class="moguls">
                        <div>
                            <h3>Start Ng</h3>
                            <label class="beta">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div>
                            <h3>Developer</h3>
                            <label class="beta">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div>
                            <h3>Engineering</h3>
                            <label class="beta">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div>
                            <h3>Github</h3>
                            <label class="beta">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div>
                            <h3>Learning</h3>
                            <label class="beta">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div>
                            <h3>Laravel</h3>
                            <label class="beta">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div>
                            <h3>Css</h3>
                            <label class="beta">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div>
                            <h3>Technology</h3>
                            <label class="beta">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div>
                            <h3>News</h3>
                            <label class="beta">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div>
                            <h3>Clubhouse</h3>
                            <label class="beta">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
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
                <div class="content">
                   <div class="topics-people">
                        <h3>Engineering</h3>
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
                            <figure>
                                <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                <figcaption>Astard Collin</figcaption>
                            </figure>
                            <figure>
                                <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                <figcaption>Astard Collin</figcaption>
                            </figure>
                            <figure>
                                <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                <figcaption>Astard Collin</figcaption>
                            </figure>
                            <figure>
                                <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                <figcaption>Astard Collin</figcaption>
                            </figure>
                            <figure>
                                <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                <figcaption>Astard Collin</figcaption>
                            </figure>

                            <figure>
                                <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                <figcaption>Astard Collin</figcaption>
                            </figure>

                            <figure>
                                <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                <figcaption>Astard Collin</figcaption>
                            </figure>
                            <figure>
                                <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                <figcaption>Astard Collin</figcaption>
                            </figure>
                            <figure>
                                <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                <figcaption>Astard Collin</figcaption>
                            </figure>
                            <figure>
                                <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                <figcaption>Astard Collin</figcaption>
                            </figure>
                            <figure>
                                <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                <figcaption>Astard Collin</figcaption>
                            </figure>
                        </div>
                   </div>
                   <div class="blog-posts">
                        <div class="main-content">
                            <div class="profile-img"> <img src="{{ asset('images/anonymous.jpg') }}" alt=""></div>
                            <div class="content-visible">
                                <h2>Declan Rice</h2>
                                <h3>The art of troubleshooting</h3>
                                <img src="{{ asset('images/Rectangle 402.png') }}" alt="">
                                <p class="show-read-more">Recently, I noticed a significant difference in my response to coding obstructions (or bugs) from the usual (quick) frustration to curiosity. I did a review, and realized it's been that way for almost entirely nothing that woule come out from such endeavors and...</p>
                            </div>
                        </div>
                        <div class="main-content">
                            <div class="profile-img"> <img src="{{ asset('images/anonymous.jpg') }}" alt=""></div>
                            <div class="content-visible">
                                <h2>Tristen Mark</h2>
                                <h3>Product design walk arounds</h3>
                                <img src="{{ asset('images/Rectangle 402.png') }}" alt="">
                                <p>Recently, I noticed a significant difference in my response to coding obstructions (or bugs) from the usual (quick) frustration to curiosity. I did a review, and realized it's been that way for almost entirely nothing that woule come out from such endeavors and...Recently, I noticed a significant difference in my response to coding obstructions (or bugs) from the usual (quick) frustration to curiosity. I did a review, and realized it's been that way for almost entirely nothing that woule come out from such endeavors and...</p>
                            </div>
                       </div>
                   </div>
                </div>

                <div class="content">
                    <div class="topics-people">
                         <h3>Technology</h3>
                         <div class="people">
                             <figure>
                                 <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                 <figcaption>Kevin Price</figcaption>
                             </figure>
                             <figure>
                                 <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                 <figcaption>Taylor Hunt</figcaption>
                             </figure>
                             <figure>
                                 <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                 <figcaption>ED Mcaullen</figcaption>
                             </figure>
                             <figure>
                                 <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                 <figcaption>Haylee Lu</figcaption>
                             </figure>
                         </div>
                    </div>
                    <div class="blog-posts">
                         <div class="main-content">
                             <div class="profile-img"> <img src="{{ asset('images/anonymous.jpg') }}" alt=""></div>
                             <div class="content-visible">
                                 <h2>Kevin Price</h2>
                                 <h3>The Future of embedded systems</h3>
                                 <img src="{{ asset('images/Rectangle 402.png') }}" alt="">
                                 <p>Recently, I noticed a significant difference in my response to coding obstructions (or bugs) from the usual (quick) frustration to curiosity. I did a review, and realized it's been that way for almost entirely nothing that woule come out from such endeavors and...</p>
                             </div>
                         </div>
                         <div class="main-content">
                             <div class="profile-img"> <img src="{{ asset('images/anonymous.jpg') }}" alt=""></div>
                             <div class="content-visible">
                                 <h2>Haylee Lu</h2>
                                 <h3>Product design walk arounds</h3>
                                 <img src="{{ asset('images/Rectangle 402.png') }}" alt="">
                                 <p>Recently, I noticed a significant difference in my response to coding obstructions (or bugs) from the usual (quick) frustration to curiosity. I did a review, and realized it's been that way for almost entirely nothing that woule come out from such endeavors and...Recently, I noticed a significant difference in my response to coding obstructions (or bugs) from the usual (quick) frustration to curiosity. I did a review, and realized it's been that way for almost entirely nothing that woule come out from such endeavors and...</p>
                             </div>
                        </div>
                        <div class="main-content">
                            <div class="profile-img"> <img src="{{ asset('images/anonymous.jpg') }}" alt=""></div>
                            <div class="content-visible">
                                <h2>Haylee Lu</h2>
                                <h3>Product design walk arounds</h3>
                                <img src="{{ asset('images/Rectangle 402.png') }}" alt="">
                                <p>Recently, I noticed a significant difference in my response to coding obstructions (or bugs) from the usual (quick) frustration to curiosity. I did a review, and realized it's been that way for almost entirely nothing that woule come out from such endeavors and...Recently, I noticed a significant difference in my response to coding obstructions (or bugs) from the usual (quick) frustration to curiosity. I did a review, and realized it's been that way for almost entirely nothing that woule come out from such endeavors and...</p>
                            </div>
                       </div>
                    </div>
                 </div>

                 <div class="content">
                    <div class="topics-people">
                         <h3>GitHub</h3>
                         <div class="people">
                             <figure>
                                 <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                 <figcaption>Kevin Price</figcaption>
                             </figure>
                             <figure>
                                 <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                 <figcaption>Taylor Hunt</figcaption>
                             </figure>
                             <figure>
                                 <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                 <figcaption>ED Mcaullen</figcaption>
                             </figure>
                             <figure>
                                 <img src="{{ asset('images/anonymous.jpg') }}" alt="Trulli" style="width:100%">
                                 <figcaption>Haylee Lu</figcaption>
                             </figure>
                         </div>
                    </div>
                    <div class="blog-posts">
                         <div class="main-content">
                             <div class="profile-img"> <img src="{{ asset('images/anonymous.jpg') }}" alt=""></div>
                             <div class="content-visible">
                                 <h2>Kevin Price</h2>
                                 <h3>Learn Git</h3>
                                 <img src="{{ asset('images/Rectangle 402.png') }}" alt="">
                                 <p>Recently, I noticed a significant difference in my response to coding obstructions (or bugs) from the usual (quick) frustration to curiosity. I did a review, and realized it's been that way for almost entirely nothing that woule come out from such endeavors and...</p>
                             </div>
                         </div>
                    </div>
                 </div>

            </div>
        </div>
    </section>
@endsection