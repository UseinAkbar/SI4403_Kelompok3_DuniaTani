<!DOCTYPE html>
<html lang="en">
    @include('partial.header')
<body>
    <div class="app">
        @include('partial.navbar')
        <div class="dashboard addclass">
            @include('partial.sidebar-guru')

            <div class="addclass-box dashboard-box">
                <h1>Add Course</h1>
                <p>Add a new course and get paid from what you thought</p>
                <form action="" class="dashboard-form">
                    @csrf
                    <div class="addclass-subtle dashboard-subtle">
                        <img src="../asset/edit.svg" alt="">
                        Add Course
                    </div>

                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="course">Course Name</label>
                        <input type="text" name="course" id="course" value="" placeholder="Enter course name" required>
                    </div>
                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="title">Course Title</label>
                        <input type="text" name="title" id="title" value="" placeholder="Enter course title" required>
                    </div>
                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="description">Course Description</label>
                        <input type="text" name="description" id="description" value="" placeholder="Enter course description" required>
                    </div>
                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="harga">Course Price</label>
                        <input type="number" name="harga" id="harga" min="0" value="" placeholder="Enter course price" required>
                    </div>
                    <div class="addclass-input-grup dashboard-input-grup">
                        <label for="course-vid">Course Video</label>
                        <input type="file" name="course-vid" id="course-vid" class="addclass-video" class="" accept="image/*" class="setting-edit-photo" required>
                    </div>
                    <button class="addclass-cta cta" type="submit">Submit</button>
                </form>
            </div>
        </div>

        @include('partial.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>