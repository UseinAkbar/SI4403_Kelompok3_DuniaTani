<div class="sidebar-gurutani sidebar">
    <div class="sidebar-gurutani-profile sidebar-profile">
        {{-- <img src="../asset/user.png" alt="gurutani image"> --}}
        <h1>{{ Auth()->user()->name }}</h1>
        <p>Guru Tani</p>
    </div>
    <nav class="sidebar-gurutani-nav sidebar-nav">
        <a href="/gurutani/inbox">
            <img src="../asset/price.svg" alt="">
            My Inbox
        </a>
        <a href="/gurutani/myclass">
            <img src="../asset/kelas.svg" alt="">
            My Classes
        </a>
        <a href="/gurutani/addclass">
            <img src="../asset/video.svg" alt="">
            Add Class
        </a>
        <a href="/gurutani/setting">
            <img src="../asset/setting.svg" alt="">
            Setting
        </a>
    </nav>
</div>