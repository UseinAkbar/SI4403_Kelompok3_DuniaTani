<!DOCTYPE html>
<html lang="en">
    @include('partial.header')
<body>
    <div class="app">
        @include('partial.navbar')
        <div class="dashboard setting">
            @include('partial.sidebar-user')

            <div class="setting-box dashboard-box">
                <h1>Setting</h1>
                <p>Enter valid information to make the learning process easier</p>
                <form action="" class="dashboard-form">
                    @csrf
                    <div class="setting-subtle dashboard-subtle">
                        <img src="../asset/edit.svg" alt="">
                        Edit Profile
                    </div>
                    <img src="../asset/user.png" alt="">
                    <input type="file" name="photo" id="photo" class="setting-photo" accept="image/*" placeholder="Change photo" class="setting-edit-photo">

                    <div class="setting-input-grup dashboard-input-grup">
                        <label for="username">Username (Max. 50 characters)</label>
                        <input type="text" name="username" id="username" value="" placeholder="Enter your username">
                    </div>
                    <div class="setting-input-grup dashboard-input-grup">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="" placeholder="Enter your email">
                    </div>
                    <div class="setting-input-grup dashboard-input-grup">
                        <label for="pass">New Password (at least 6 characters)</label>
                        <input type="password" name="pass" id="pass" value="" placeholder="Enter your password">
                    </div>
                    <div class="setting-input-grup dashboard-input-grup">
                        <label for="new-pass">Confirm New Password</label>
                        <input type="password" name="new-pass" id="new-pass" value="" placeholder="Confirm your password">
                    </div>
                    <button class="setting-cta cta" type="submit">Save Profile</button>
                </form>
            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>