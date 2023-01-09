<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')

        <header class="header-community">
            <div class="community-box">
                <h2>DUNIA TANI COMMUNITY</h2>
                <h1>Your impact starts here</h1>
                <p>
                    Dunia Tani Community is a community 
                    where agricultural enthusiasts and experts
                    in Indonesia gather to share and develop 
                    future agricultural talents. It doesn't matter what 
                    your starting point is, we aim to support every idea and 
                    create a big impact, and it starts with you.
                </p>
                <a href="" class="cta community-cta">Explore Community</a>
            </div>
            <img src="../asset/com-banner.png" alt="" class="community-banner">
        </header>
        <section class="community-feature">
            <h2>FIND YOUR COMMUNITY</h2>
            <h1>Grow together with the community</h1>
            <div class="community-feature-box">
                <div class="community-card">
                    <img src="../asset/connecting.svg" alt="">
                    <h1>Start connecting</h1>
                    <p>Expand your network by interacting with thousands of agricultural enthusiasts throughout Indonesia.</p>
                </div>
                <div class="community-card">
                    <img src="../asset/learn.svg" alt="">
                    <h1>Learn Agriculture</h1>
                    <p>Exclusive invitations to events and summits to learn about best agricultural practices and discuss with experts.</p>
                </div>
                <div class="community-card">
                    <img src="../asset/people.svg" alt="">
                    <h1>Start connecting</h1>
                    <p>Get exclusive content straight from the Farming World Academy, which you can discuss and share with your community.</p>
                </div>
            </div>
        </section>
        <section class="community-find community-feature">
            <h2>FIND YOUR COMMUNITY</h2>
            <h1>
                Thousands of fans of the world of 
                agriculture are waiting for you
            </h1>
            <p>
                The best opportunity is always now. Make a 
                difference to create a better future for yourself
                and everyone around you, starting here
            </p>
            <div class="community-find-box community-feature-box">
                <div class="community-find-card">
                    
                </div>
                <div class="community-find-card">
                    
                </div>
                <div class="community-find-card">
                    
                </div>
            </div>
        </section>
    </div>


    @include('partial.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>