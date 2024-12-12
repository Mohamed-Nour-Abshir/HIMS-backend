<div>
    <div class="container my-5">
        <!-- Course Header -->
        <div class="course-header">
            <h1 class="display-5">Course Name: <span class="" style="color:#e13154">{{ $course->course_name }}</span></h1>
        </div>

        <div class="row g-4">
            <!-- Left Column -->
            <div class="col-lg-6">
                <div class="course-image">
                    <img src="{{ asset('assets/images/courses/'.$course->image) }}" alt="{{ $course->course_name }}">
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6">
                <div class="p-4 card">
                    <h3>Course Details</h3>
                    <p><strong>Duration:</strong> {{ $course->duration }} Months</p>
                    <p><strong>Lectures:</strong> {{ $course->lectures }}</p>
                    <p><strong>Hours:</strong> {{ $course->hours }}</p>
                    <p>
                        <strong>Trainers:</strong>
                        @foreach ((array)json_decode($course->trainers) as $trainer)
                            <span class="" style="color: #e13154">{{ $trainer }}, </span>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>

        <!-- Description Section -->
        <div class="my-5 row">
            <div class="col">
                <h3>Description</h3>
                <p>
                    {!! $course->description !!}
                </p>
            </div>
        </div>

        <!-- Course Module Section -->
        <div class="row">
            <div class="col">
                <h3>Course Modules</h3>
                <div class="course-module">
                    {{ $course->modules }}
                </div>
            </div>
        </div>
    </div>
</div>
