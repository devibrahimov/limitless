
<div class="sidebar">
    <div class="thumb position-relative">
        <label for="image">
            <img src="https://t3.ftcdn.net/jpg/02/65/18/30/360_F_265183061_NkulfPZgRxbNg3rvYSNGGwi0iD7qbmOp.jpg" alt="img">
            <div class="overlay"><i class="fa-regular fa-pen-to-square"></i></div>
            <input type="file" id="image">
        </label>
        <h4 style="text-align: center; margin-top: 30px">{{auth()->user()->first_name}}</h4>
    </div>
    <div>
        <ul class="nav">
            <li><a href="{{route('frontend.teacher_profil')}}" class="active">Profil</a></li>
            <li><a href="{{route('frontend.teacher_courses')}}">Satdığım Kurslarım</a></li>
            <li><a href="{{route('frontend.teacher_earning')}}">Qazancım</a></li>
            <li><a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit()">Çıxış</a></li>
        </ul>
    </div>
</div>

<form action="{{route('frontend.teacher_logout')}}" method="post" id="logoutform" style="display: none">
    @csrf
</form>
