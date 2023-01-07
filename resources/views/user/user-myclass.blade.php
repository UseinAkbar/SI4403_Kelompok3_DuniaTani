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
                    <div class="class-card">
                        <img src="../asset/kelas-2.png" alt="">
                        <h1>Pupuk yang tepat Untuk perkembangan tanaman</h1>
                        <span>Progress learn :</span>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20%" aria-valuemin="0" aria-valuemax="100">20%</div>
                        </div>
                        <a href="" class="class-cta cta">Continue Learn</a>
                    </div>
                    <div class="class-card">
                        <img src="../asset/kelas-1.png" alt="">
                        <h1>Pentingnya Penggunaan Teknologi Pertanian</h1>
                        <span>Progress learn :</span>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0%" aria-valuemin="0" aria-valuemax="100">0%</div>
                        </div>
                        <a href="" class="class-cta cta">Start Learn</a>
                    </div>
                </div>
                
            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>