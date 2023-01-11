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
                <img src="{{ asset('storage/thumbnails/products/'.$course->thumbnail) }}" alt="" class="course__img">
                <h1>{{ $course->title }}</h1>
                <p>{{ $course->description }}</p>
                <div class="course__gutter"></div>
                <div class="course__card-transaksi">
                    <div class="course__harga">
                        <span class="course__harga-coret">Rp100000</span>
                        <h2 class="course__harga-asli">Rp{{ $course->price }}</h2>
                    </div>
                    <img src="asset/star.png" alt="" class="checkout-rating">
                </div>
            </div>
            <div class="checkout-confirm">
                <h1>Payment details</h1>
                <form action="/course-payment/{{ $course->id }}" class="checkout-confirm-form" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $course->guruTani_id }}" name="guruTani_id">
                    <input type="hidden" value="{{ $course->id }}" name="course_id">
                    <input type="hidden" value="{{ $course->thumbnail }}" name="cover">
                    <input type="hidden" value="{{ $course->title }}" name="title">
                    <input type="hidden" value="{{ $course->type }}" name="type">
                    <input type="hidden" value="{{ $course->price }}" name="price">
                    <div class="input-grup">
                        <label for="ktp">Evidence of identity card :</label>
                        <div class="input-group mb-3">
                            <input type="file" name="ktp" id="ktp" accept="image/*" class="form-control" required>
                        </div>
                    </div>
                    <div class="input-grup">
                        <label for="evidence">Evidence of transfer :</label>
                        <div class="input-group mb-3">
                            <input type="file" name="evidence" id="evidence" accept="image/*" class="form-control"
                                required>
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