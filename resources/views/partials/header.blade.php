<nav>
        <div class="title"> <img src="{{ asset('images/'. $Ui_designs->header_logo) }}" alt=""><h3>{{ $Ui_designs->site_name }}</h3></div>
        <ul class="navlist">
            <li><a href="/" class="{{ request()->is('/') ? 'active-link' : '' }}">Home</a></li>
            <li><a href="/create"  class="{{ request()->is('/create') ? 'active-link' : '' }}">Explore</a></li>
            <li><a href="#"><i class="fas fa-bell"></i></a></li>
            <li><a href="#"><img src="{{ asset('images/anonymous.jpg') }}" alt=""></i></a></li>
            <li><a href="#"><i class="fas fa-sort-down" id="dropDown"></i></a></li>
            <div class="dropdown-content">
                <div class="profile-details">
                    <div class="img-con"><img src="{{ asset('images/anonymous.jpg') }}" alt="Profile picture"></div>
                    <div class="name-cone">
                        <h1>Enas Obi</h1>
                        <p>Enasobi@gmail.com</p>
                    </div>
                </div>
               <div class="link">
                    <a href="#">Sign Up</a>
                    <a href="#">Logout</a>
               </div>
            </div>
        </ul>
</nav>
