<!DOCTYPE html>
<html lang="en">
    @include('partial.header')
<body>
    <div class="app">
        @include('partial.navbar')

        <header class="header">
            <img src="asset/course-detail-banner.png" alt="" class="header__banner">
            <div class="header__box header__box-course">
                <h1 class="header__title header__title-course">Course Detail</h1>
            </div>
        </header>
        <section class="course-detail">
            <iframe class="header__preview header__course-preview" width="500" height="300" src="https://www.youtube.com/embed/nYSDcGhYy-0">
            </iframe>
            <div class="course-detail-box">
                <div class="course-detail-desc">
                    <h2 class="course-detail-subtle">COURSE DETAIL</h2>
                    <h1 class="course-detail-title">Monitor Hasil Pertanian Menggunakan Teknologi</h1>
                    <img src="asset/course-detail.png" alt="">
                    <p>
                        Teknologi merupakan penerapan maupun pengembangan dari sebuah ilmu alat mesin. Dimana alat-alat tersebut dibuat dan didesain sedemikian rupa sehingga dapat membantu manusia mengelola ataupun menyelesaikan permasalahan kehidupan yang ada.Sedangkan pertanian sendiri digambarkan sebagai usaha manusia dalam menghasilkan bahan pangan, ternak, maupun produk lahan yang memanfaatkan sumber daya alam, baik dari tumbuhan maupun hewan yang sudah tersedia. 
                    </p>
                </div>
                <div class="course-detail-feature">
                    <h1>Courses Features</h1>
                    <div>
                        <span>Duration</span>
                        <span>15 hour</span>
                    </div>
                    <div>
                        <span>Skill Level</span>
                        <span>All Level</span>
                    </div>
                    <div>
                        <span>Language</span>
                        <span>English</span>
                    </div>
                    <div>
                        <span>Instructur</span>
                        <span>Rachmat Effendi</span>
                    </div>
                    <div>
                        <span>Rating</span>
                        <span>4.7 / 5</span>
                    </div>
                    <div>
                        <span>Price</span>
                        <span class="course-detail-price">Rp125.000</span>
                    </div>
                    <a href="" class="course-detail-cta cta">Enroll Now</a>
                </div>
            </div>
        </section>
        <section class="course-relate">
            <h1 class="course-relate-title">Related Course</h1>
            <div class="course-relate-box">
                <a href="" class="course-relate-link">
                    <div class="course-relate-card">
                        <img src="asset/kelas-2.png" alt="" class="course-relate-img">
                        <div class="course-relate-desc">
                            <h1>Pupuk Yang Tepat Untuk perkembangan tanaman</h1>
                            <p>Kualitas pupuk juga memiliki manfaat bagi pertumbuhan tanaman...</p>
                        </div>
                    </div>
                </a>
                <a href="" class="course-relate-link">
                    <div class="course-relate-card">
                        <img src="asset/kelas-3.png" alt="" class="course-relate-img">
                        <div class="course-relate-desc">
                            <h1>Monitor Hasil Pertanian Menggunakan Teknologi</h1>
                            <p>Memudahkan melihat hasil pertanian dengan menggunakan...</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </div>


    @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>