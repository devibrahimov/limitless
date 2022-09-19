
<div class="sidebar">
    <div class="thumb position-relative">
        <label for="image">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=687&amp;q=80" alt="img">
            <div class="overlay"><i class="fa-regular fa-pen-to-square"></i></div>
            <input type="file" id="image">
        </label>
        <h4 style="text-align: center; margin-top: 30px">{{auth()->user()->first_name}}</h4>
    </div>
    <div>
        <ul class="nav">
            <li><a href="{{route('frontend.cabinet_profil')}}" class="active">Profil</a></li>
            <li><a href="{{route('frontend.cabinet_courses')}}">Kurslarım</a></li>
            <li><a href="{{route('frontend.cabinet_results')}}">Nəticələrim</a></li>
            <li><a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit()">Çıxış</a></li>
        </ul>
    </div>
</div>

<form action="{{route('frontend.cabinet_logout')}}" method="post" id="logoutform" style="display: none">
    @csrf
</form>
