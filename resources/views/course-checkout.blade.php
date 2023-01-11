<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')

        <header class="checkout-header">
            <h1>Class Checkout</h1>
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
                    <img src="../asset/star.png" alt="" class="checkout-rating">
                </div>
            </div>
            <div class="checkout-details">
                <div class="checkout-benefit">
                    <h1 class="checkout-benefit-title checkout-title">Benefits for You</h1>
                    <div class="checkout-benefit-box">
                        <img src="../asset/benefit-1.svg" alt="" class="checkout-benefit-icon">
                        <div class="checkout-benefit-tile">
                            <p>Study Discussion Group</p>
                            <span>Bonus from us</span>
                        </div>
                        <img src="../asset/checklist.svg" alt="" class="checkout-benefit-check">
                    </div>
                    <div class="checkout-benefit-box">
                        <img src="../asset/benefit-2.svg" alt="">
                        <div class="checkout-benefit-tile">
                            <p>Graduation Certificate</p>
                            <span>Bonus from us</span>
                        </div>
                        <img src="../asset/checklist.svg" alt="">
                    </div>
                </div>

                <div class="checkout-payment">
                    <h1 class="checkout-payment-title checkout-title">Select Payment Method</h1>
                    <h2 class="checkout-subtitle">Manual Transfer</h2>
                    <div class="checkout-promo">
                        <img src="../asset/ticket-discount.svg" alt="">
                        <p>Use promos to save more</p>
                        <img src="../asset/chevron-right.svg" alt="">
                    </div>
                    <div class="checkout-payment-detail">
                        <h1>Payment Details</h1>
                        <div>
                            <p>Normal Price</p>
                            <p class="checkout-payment-coret">Rp100000</p>
                        </div>
                        <div>
                            <p>Class Price <span>Discount</span></p>
                            <p>Rp{{ 100000 - $course->price }}</p>
                        </div>
                        <div>
                            <p>Total Price</p>
                            <p class="checkout-payment-hargaAsli">Rp{{ $course->price }}</p>
                        </div>
                    </div>
                    <div class="checkout-payment-bank">
                        <h1>Payment Transfer</h1>
                        <div class="checkout-payment-bank-box">
                            <img src="../asset/bni.svg" alt="bank bni">
                            <p>PT Dunia Tani Indonesia (a/n Kemal Aziz)</p>
                            <span>0280256315</span>
                        </div>
                        <div class="checkout-payment-bank-box">
                            <img src="../asset/mandiri.svg" alt="bank mandiri">
                            <p>PT Dunia Tani Indonesia (a/n Rafid Fadhil)</p>
                            <span>0280256315</span>
                        </div>
                        <p class="checkout-payment-ask">Already made payment?</p>
                        <a href="/course-payment/{{ $course->id }}" class="checkout-payment-bank-cta cta">Verification
                            Payment</a>
                    </div>
                    <div class="checkout-information">
                        <div>
                            <h1>Important information</h1>
                            <p>
                                The class payment confirmation process will take around 20 minutes (from the WhatsApp
                                message sent) if using the manual payment method. Please wait patiently and thank you.
                            </p>
                        </div>
                        <div>
                            <h1>Need help? Contact us :</h1>
                            <a href="/course-payment/{{ $course->id }}" class="checkout-information-cta cta">Contact
                                Admin</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partial.footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>