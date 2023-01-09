<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')

        <header class="header event-header">
            <img src="../asset/event-banner.png" alt="" class="header__banner event-banner">
            <div class="header__box header__box-course event__box">
                <h2>Events to Attend</h2>
                <h1 class="header__title header__title-course">Add relationships by participating in farming events</h1>
                <p>Take the opportunity to dive into invaluable learnings in our latest events.</p>
            </div>
        </header>
        <section class="event-detail">
            <form action="" method="" class="course-input-box">
                <img src="asset/search.svg" alt="">
                <input type="text" class="course-input" name="search" value="" autocomplete="off"
                    placeholder="Search course">
            </form>
            <h1 class="event-subtle">Our Upcoming Events</h1>
            <div class="event-container">
                <a href="" class="event-card-link">
                    <div class="event-card">
                        <img src="asset/event-1.png" alt="">
                        <h1>Pentingnya Penggunaan Teknolgi Pertanian</h1>
                        <p>Menambahan wawasan mengenai pentingnya menggunakan teknologi pada pertanian untuk memudahkan petani</p>
                        <span>Virtual Event</span>
                        <span>21 Jan 2023</span>
                    </div>
                </a>
            </div>
        </section>
    </div>


    @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>