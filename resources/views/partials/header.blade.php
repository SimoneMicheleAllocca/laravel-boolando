<header>
    
    <div class="row justify-content-between">
    <div class="col-2 mt-3">
    <ul class="d-flex justify-content-between gap-3">
        <li><a href="{{ route("Home") }}">Home</a></li>
        <li><a href=" {{ route("Donna") }} ">Donna</a></li>
        <li><a href=" {{ route("Uomo") }} ">Uomo</a></li>
        <li><a href=" {{ route("Bambino") }} ">Bambino</a></li>
    </ul>
</div>
    <div class="text-center">
        <img class="img-fluid" src="{{ Vite::asset("resources/img/boolean-logo.png")}}" alt="logo">
    </div>
</div>
</header>