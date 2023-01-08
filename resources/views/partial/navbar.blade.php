<nav class="nav">
    <img src="../asset/logo.svg" alt="Dunia Tani" class="nav__logo">
    <div class="nav__box">
        <a href="/" class="nav__link">Home</a>
        <a href="" class="nav__link">Events</a>
        <a href="" class="nav__link">Community</a>
        <a href="/course" class="nav__link">Courses</a>
        <a href="/gurutani/login" class="nav__link nav-redirect">Become a Guru Tani</a>
        @auth
        <div class="dropdown" id="">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="asset/avatar.png" alt="">
                {{ auth()->user()->username }}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="">My Order</a></li>
                <li><a class="dropdown-item" href="">My Course</a></li>
                <li><a class="dropdown-item" href="">Edit Profile</a></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf

                        <button type='submit' class='dropdown-item'>
                            <i>Logout</i>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        @else
        <a href="/login" class="nav__link nav-btn">Login</a>
        @endauth

    </div>
</nav>