<!DOCTYPE html>
<html lang="en">
    @include('partial.header')
<body>
    <div class="app">
        @include('partial.navbar')
        <header class="course-header">
            <h2>#LearnFromExpert</h2>
            <h1>Learning to farm online has never been easier!</h1>
            <p>We try to always make it easy for farmers in Indonesia to be able to access learning about the world of farming</p>
        </header>
        <section class="course-container">
            <form action="" method="" class="course-input-box">
                <img src="asset/search.svg" alt="">
                <input type="text" class="course-input" name="search" value="" autocomplete="off" placeholder="Search course">
            </form>
            <div class="course-box">
                <div class="course-sideFilter">
                    <div class="course-sort">
                        <h2>Sort</h2>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="new release" name="new-release" id="new-release">
                            <label class="form-check-label" for="new-release">New Release</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="popular" name="popular" id="popular">
                            <label class="form-check-label" for="popular">Popular</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="on promo" name="on-promo" id="on-promo">
                            <label class="form-check-label" for="on-promo">On Promo</label>
                        </div>
                    </div>
                    <div class="course-type">
                        <h2>Type</h2>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="starter" name="starter" id="starter">
                            <label class="form-check-label" for="starter">Starter (Rp 0)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="freemium" name="freemium" id="freemium">
                            <label class="form-check-label" for="freemium">Freemium (Rp 0)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="premium" name="premium" id="premium">
                            <label class="form-check-label" for="premium">Premium</label>
                        </div>
                    </div>
                </div>
                <div class="course-content">
                    <div class="course__card">
                        <img src="asset/kelas-1.png" alt="" class="course__img">
                        <h1>Pentingnya Penggunaan Teknolgi Pertanian</h1>
                        <p>Menambahan wawasan mengenai pentingnya menggunakan teknologi pada pertanian untuk memudahkan petani</p>
                        <div class="course__gutter"></div>
                        <div class="course__card-transaksi">
                            <div class="course__harga">
                                <span class="course__harga-coret">Rp150.000</span>
                                <h2 class="course__harga-asli">Rp125.000</h2>
                            </div>
                            <a href="" class="course__card-cta cta">Buy Class</a>
                        </div>
                    </div>
                    <div class="course__card">
                        <img src="asset/kelas-2.png" alt="" class="course__img">
                        <h1>Monitor Hasil Pertanian Menggunakan Teknologi</h1>
                        <p>Memudahkan melihat hasil pertanian dengan menggunakan aplikasi yang terbaik di ciptakan oleh anak bangsa</p>
                        <div class="course__gutter"></div>
                        <div class="course__card-transaksi">
                            <div class="course__harga">
                                <span class="course__harga-coret">Rp150.000</span>
                                <h2 class="course__harga-asli">Rp125.000</h2>
                            </div>
                            <a href="" class="course__card-cta cta">Buy Class</a>
                        </div>
                    </div>
                    <div class="course__card">
                        <img src="asset/kelas-3.png" alt="" class="course__img">
                        <h1>Pupuk Yang Tepat Untuk perkembangan tanaman</h1>
                        <p>Kualitas pupuk juga memiliki manfaat bagi pertumbuhan tanaman dan menutrisi tanaman agar tumbuh subur</p>
                        <div class="course__gutter"></div>
                        <div class="course__card-transaksi">
                            <div class="course__harga">
                                <span class="course__harga-coret">Rp150.000</span>
                                <h2 class="course__harga-asli">Rp125.000</h2>
                            </div>
                            <a href="" class="course__card-cta cta">Buy Class</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>