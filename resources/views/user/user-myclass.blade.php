<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')
        <div class="dashboard order">
            @include('partial.sidebar-user')

            <div class="class-box dashboard-box">
                <h1>My Class</h1>
                <p>List of class that you have purchased</p>
                <div class="class-subtle dashboard-subtle">
                    <img src="../asset/edit.svg" alt="">
                    My Class
                </div>

                <div class="class-container">
                    @foreach ($order as $ord)
                    @if($ord->status == "Verified")
                    <div class="class-card">
                        <img src="{{ asset('storage/thumbnails/products/'. $ord->cover) }}" alt="">
                        <h1>{{ $ord->title }}</h1>
                        <p>{{ $ord->created_at }}</p>
                        <a href="/course-video" class="class-cta cta">Start Learn</a>
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>