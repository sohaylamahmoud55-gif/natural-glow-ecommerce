@extends('layouts.app')
@section('content')

<div class="skincare">
    <section class="test-header text-center py-4">
        <div class="container pt-4">
            <i class="fa-solid fa-spa test-icon"></i>
            <h1 class="mt-3">
                Discover Your Skin Type
            </h1>
            <p>
                Answer a few simple questions and we'll recommend
                the perfect skincare products for you.
            </p>
        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <video class="test-video" controls muted poster="{{ asset('images/video/skin-test-cover.jpg') }}">
                        <source src="{{ asset('videos/skin-care.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>

    <!-- Questions -->
    <div class="container py-5">
        <h1 class="text-center fw-bold mb-3">
            Skin Type Test
        </h1>
        <p class="text-center mb-5">
            Answer a few questions to discover your skin type.
        </p>
        <form action="{{ route('skin.test.result') }}" method="POST">
            @csrf
            <div class="card shadow-sm p-4 mb-4">
                <h4>
                    1. How does your skin feel after washing?
                </h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="dry" required>
                    <label class="form-check-label"> Tight and dry </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="normal">
                    <label class="form-check-label"> Comfortable</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="oily">
                    <label class="form-check-label">Oily</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="combination">
                    <label class="form-check-label">Oily only in T-Zone</label>
                </div>
            </div>
            <div class="card shadow-sm p-4 mb-4">
                <h4>2. How shiny does your face become during the day?</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="dry" required>
                    <label class="form-check-label">Never shiny</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="normal">
                    <label class="form-check-label">Slightly shiny</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="oily">
                    <label class="form-check-label">Very shiny</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="combination">
                    <label class="form-check-label">Only T-Zone is shiny</label>
                </div>

            </div>
            <div class="card shadow-sm p-4 mb-4">

                <h4>3. How large are your pores?</h4>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="dry" required>
                    <label class="form-check-label">Very small</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="normal">
                    <label class="form-check-label">Normal</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="oily">
                    <label class="form-check-label">Large</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="combination">
                    <label class="form-check-label">Large only in T-Zone</label>
                </div>

            </div>
            <div class="card shadow-sm p-4 mb-4">

                <h4>4. Does your skin become irritated easily?</h4>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="sensitive" required>
                    <label class="form-check-label">Yes, very easily</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="dry">
                    <label class="form-check-label">Sometimes</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="normal">
                    <label class="form-check-label">Rarely</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="oily">
                    <label class="form-check-label">Never</label>
                </div>

            </div>
            <div class="card shadow-sm p-4 mb-4">

                <h4>
                    5. How often do you get pimples?
                </h4>

                <div class="form-check">
                    <input class="form-check-input"
                        type="radio"
                        name="q5"
                        value="dry"
                        required>

                    <label class="form-check-label">
                        Almost never
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input"
                        type="radio"
                        name="q5"
                        value="normal">

                    <label class="form-check-label">
                        Rarely
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input"
                        type="radio"
                        name="q5"
                        value="combination">

                    <label class="form-check-label">
                        Sometimes
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input"
                        type="radio"
                        name="q5"
                        value="oily">

                    <label class="form-check-label">
                        Frequently
                    </label>
                </div>

            </div>
            <div class="card shadow-sm p-4 mb-4">

                <h4>
                    6. How does your skin react to new skincare products?
                </h4>

                <div class="form-check">
                    <input class="form-check-input"
                        type="radio"
                        name="q6"
                        value="sensitive"
                        required>

                    <label class="form-check-label">
                        It becomes irritated easily
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input"
                        type="radio"
                        name="q6"
                        value="dry">

                    <label class="form-check-label">
                        Feels dry
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input"
                        type="radio"
                        name="q6"
                        value="normal">

                    <label class="form-check-label">
                        No reaction
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input"
                        type="radio"
                        name="q6"
                        value="oily">

                    <label class="form-check-label">
                        Feels greasy
                    </label>
                </div>

            </div>
            <button class="btn btn-success">Next</button>
        </form>
    </div>
</div>
@endsection