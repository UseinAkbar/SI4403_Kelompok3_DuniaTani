<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')

        <div class="video-container">
            <div class="sidebar-video">
                <div class="sidebar-box">
                    <div class="sidebar-title">
                        <img src="../asset/fasilitas.svg" alt="">
                        <h1>Fasilitas Kelas</h1>
                    </div>
                    <a href="" class="sidebar-cta">
                        <img src="../asset/join.svg" alt="">
                        Join Group Konsultasi
                    </a>
                    <a href="../asset/video.mp4" download="" class="sidebar-cta">
                        <img src="../asset/download.svg" alt="">
                        Download Materi
                    </a>
                </div>

                <a href="/user/class" class="sidebar-redirect">View all classes</a>
            </div>
            
            <div class="video-box">
                <div class="video-src">
                    <video
                        id="my-video"
                        class="video-js"
                        controls
                        preload="auto"
                        width="auto"
                        height="264"
                        poster="../asset/course-banner.png"
                        data-setup="{}"
                    >
                        <source src="../asset/video.mp4" type="video/mp4" />
                    </video>
                </div>
                <div class="video-desc">
                    <h1>Pentingnya Penggunaan Teknologi Pertanian</h1>
                    <div class="video-gutter"></div>
                    <p>Memudahkan melihat hasil pertanian dengan menggunakan aplikasi yang terbaik di ciptakan oleh anak bangsa</p>
                </div>
            </div>
        </div>


    @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://vjs.zencdn.net/7.20.3/video.min.js"></script>
</body>

</html>