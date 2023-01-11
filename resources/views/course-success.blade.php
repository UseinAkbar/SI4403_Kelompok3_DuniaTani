<!DOCTYPE html>
<html lang="en">
    @include('partial.header')
<body>
    <div class="app">
        @include('partial.navbar')

        <section class="checkout-success">
            <img src="asset/success_checkout.svg" alt="">
            <h1>Checkout Successful!</h1>
            <p>Your items can be accessed after being verified by your mentor</p>
            <a href="/user/order" class="cta">Go to My Orders</a>
            <a href="/" class="cta checkout-success-cta-back">Back to homepage</a>
        </section>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>