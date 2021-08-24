<div class="backbtn">
    @if ((Request::getRequestUri()) == "/" || (Request::getRequestUri()) == "")
    
    @else
    <a href="/">ACASA</a><span> >> {{ ucfirst(strtolower($title ?? '')) }}</span>

    @endif

</div>