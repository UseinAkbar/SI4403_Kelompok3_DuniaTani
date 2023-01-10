<!DOCTYPE html>
<html lang="en">
@include('partial.header')

<body>
    <div class="app">
        @include('partial.navbar')
        <div class="dashboard order">
            @include('partial.sidebar-guru')

            <div class="class-box dashboard-box">
                <h1>My Registered Class</h1>
                <p>List of class that you want to edit</p>
                <div class="class-subtle dashboard-subtle">
                    <img src="../asset/edit.svg" alt="">
                    My Registered Class
                </div>

                <div class="class-container dashboard__guru-myclass">
                    <div class="course__card dashboard__guru-myclass-card">
                        <img src="../asset/kelas-1.png" alt="thumbnail"
                            class="course__img">
                        <h1>Pentingnya Penggunaan Teknolgi Pertanian</h1>
                        <p>Menambahan wawasan mengenai pentingnya menggunakan teknologi pada pertanian untuk memudahkan petani</p>
                        <div class="course__gutter"></div>
                        <div class="course__card-transaksi dashboard__guru-transaksi">
                            <div class="course__harga">
                                <span class="course__harga-coret">Rp150.000</span>
                                <h2 class="course__harga-asli">Rp100.000</h2>
                            </div>
                            <a href="/course/" class="course__card-cta cta">Edit</a>
                            <a href="/course-checkout/" class="course__card-cta dahsboard__guru-delete cta">Delete</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>