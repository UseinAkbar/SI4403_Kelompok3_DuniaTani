<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')
        <header class="course-header">
            <h2>#LearnFromExpert</h2>
            <h1>Learning to farm online has never been easier!</h1>
            <p>We try to always make it easy for farmers in Indonesia to be able to access learning about the world of
                farming</p>
        </header>
        <section class="course-container">
            <form action="" method="" class="course-input-box">
                <img src="asset/search.svg" alt="">
                <input type="text" class="course-input" name="search" value="" autocomplete="off"
                    placeholder="Search course">
            </form>
            <div class="course-box">
                <div class="course-sideFilter">
                    <div class="course-type">
                        <h2>Type</h2>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="starter" name="starter" id="starter">
                            <label class="form-check-label" for="starter">Starter (Rp 0)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="freemium" name="freemium"
                                id="freemium">
                            <label class="form-check-label" for="freemium">Freemium (Rp 0)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="premium" name="premium" id="premium">
                            <label class="form-check-label" for="premium">Premium</label>
                        </div>
                    </div>
                </div>
                <div class="course-content">
                    @foreach ($course as $crs)
                        <a href="/course/{{ $crs->id }}" class="course__card-link">
                            <div class="course__card">
                                <img src="{{ asset('storage/thumbnails/products/'.$crs->thumbnail) }}" alt="thumbnail"
                                    class="course__img">
                                <h1>{{ $crs->title }}</h1>
                                <p>{{ Str::limit($crs->description) }}</p>
                                <div class="course__gutter"></div>
                                <div class="course__card-transaksi">
                                    <div class="course__harga">
                                        <span class="course__harga-coret">Rp100000</span>
                                        <h2 class="course__harga-asli">Rp{{ $crs->price }}</h2>
                                    </div>
                                    <a href="/course-checkout/{{ $crs->id }}" class="course__card-cta cta">Buy Class</a>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        @include('partial.footer')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>