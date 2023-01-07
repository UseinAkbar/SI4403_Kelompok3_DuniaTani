<!DOCTYPE html>
<html lang="en">
    @include('partial.header')
<body>
    <div class="app">
        @include('partial.navbar')
        <div class="dashboard order">
            @include('partial.sidebar-user')

            <div class="order-box dashboard-box">
                <h1>My Orders</h1>
                <p>List of class that you have purchased</p>
                <div class="order-subtle dashboard-subtle">
                    <img src="../asset/edit.svg" alt="">
                    Order Status
                </div>
                <table class="order-table">
                    <thead>
                        <tr>
                            <td>#ID</td>
                            <td>Cover</td>
                            <td>Name</td>
                            <td>Type</td>
                            <td>Price</td>
                            <td>Date</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="../asset/kelas-1.png" class="order-cover" alt=""></td>
                            <td class="order-name">Pentingnya Penggunaan Teknologi Pertanian</td>
                            <td>Premium</td>
                            <td>Rp200.000</td>
                            <td>2022-01-10</td>
                            <td><span class="bg-warning text-white order-status">on check</span></td>
                            <td class="order-action">
                                {{-- <a href="" class="order-action-cta cta">Go to class</a> --}}
                                <a href="" class="order-action-cta order-action-cta-secondary cta">Detail class</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="../asset/kelas-2.png" class="order-cover" alt=""></td>
                            <td class="order-name">Pupuk Yang Tepat Untuk perkembangan tanaman</td>
                            <td>Premium</td>
                            <td>Rp200.000</td>
                            <td>2022-01-16</td>
                            <td><span class="bg-success text-white order-status">verified</span></td>
                            <td class="order-action">
                                <a href="/user/class" class="order-action-cta cta">Go to class</a>
                                <a href="" class="order-action-cta order-action-cta-secondary cta">Detail class</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>