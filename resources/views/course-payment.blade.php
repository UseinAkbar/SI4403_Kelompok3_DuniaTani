<!DOCTYPE html>
<html lang="en">
    @include('partial.header')
<body>
    <div class="app">
        @include('partial.navbar')

        <header class="checkout-header">
            <h1>Payment Confirmation</h1>
            <h2>
                Join us in Premium class and build 
                an excellent farm
            </h2>
        </header>
        <section class="checkout-box">
            <div class="checkout-card course__card">
                <img src="asset/kelas-3.png" alt="" class="course__img">
                <h1>Monitor Hasil Pertanian Menggunakan Teknologi</h1>
                <p>Memudahkan melihat hasil pertanian dengan menggunakan aplikasi yang terbaik di ciptakan oleh anak bangsa</p>
                <div class="course__gutter"></div>
                <div class="course__card-transaksi">
                    <div class="course__harga">
                        <span class="course__harga-coret">Rp150.000</span>
                        <h2 class="course__harga-asli">Rp125.000</h2>
                    </div>
                    <img src="asset/star.png" alt="" class="checkout-rating">
                </div>
            </div>
            <div class="checkout-confirm">
                <h1>Payment details</h1>
                <form action="" class="checkout-confirm-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-grup">
                        <label for="ktp">Evidence of identity card :</label>
                        <div class="input-group mb-3">
                            <input type="file" name="ktp" id="ktp" accept="image/*" class="form-control" required>
                        </div>
                    </div>
                    <div class="input-grup">
                        <label for="evidence">Evidence of transfer :</label>
                        <div class="input-group mb-3">
                            <input type="file" name="evidence" id="evidence" accept="image/*" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="checkout-confirm-cta cta">Upload & Konfirmasi</button>
                </form>
            </div>
        </section>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>