
<div class="footer-inner container">

        <div class="footer-logo"><img src="{{ asset('images/'. $Ui_designs->bottom_logo) }}" alt="Logo"></div>
         <div class="footer-content"><p>{{ $Ui_designs->footer_text }}</p></div>
        <ul>
            @if (count($links) > 0)
                @foreach ($links as $link)
                    <li><a href="{{ '/'.$link->name }}" class="{{ request()->is('/'.$link->name) ? 'active-link' : '' }}">{{ $link->name }}</a></li> 
                @endforeach
            @endif
        </ul>

        
</div>