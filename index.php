<?php
include 'components/header.php';
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
            <div class="container">
                <a class="navbar-brand d-none d-lg-block mt-1" href="#home">AmirHB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger-icon hamburger-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <a class="navbar-brand d-lg-none mx-auto mt-1" href="#home">AmirHB</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">خانه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components/loginAction.php">ورود</a>
                        </li>
                        <span class="nav-item nav-divider mt-2 fw-bold d-none d-lg-block">|</span>
                        <li class="nav-item">
                            <a class="nav-link" href="components/registerAction.php">ثبت نام</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">درباره من</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">مهارت‌ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">مقاله ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">تماس</a>
                        </li>
                    </ul>
                </div>
                <button id="darkModeToggle" class="btn btn-outline-secondary" aria-label="تغییر حالت تاریک/روشن">
                    <i id="darkModeIcon" class="bi bi-moon-fill"></i>
                </button>
            </div>
        </nav>
<!-- About Section -->
<section id="about" class="py-5 fade-in">
                <div class="container">
                    <h2 class="text-center mb-5">درباره من</h2>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <img src="assets/img/programmer.png" alt="تصویر من" class="img-fluid rounded-circle mx-auto d-block profile-img">
                        </div>
                        <div class="col-md-6">
                            <p class="lead">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                            <a href="#" class="btn btn-outline-primary">دانلود رزومه</a>
                        </div>
                    </div>
                </div>
            </section>

<!-- Skills Section -->
<section id="skills" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">مهارت‌های من</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-code-slash skill-icon"></i>
                            <h3 class="card-title h5">HTML/CSS</h3>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-braces skill-icon"></i>
                            <h3 class="card-title h5">Python</h3>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-code skill-icon"></i>
                            <h3 class="card-title h5">Django</h3>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Articles Section -->
<section id="projects" class="py-5 fade-in">
                <div class="container">
                    <h2 class="text-center mb-5">مقاله های من</h2>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card project-card">
                                <img src="https://placehold.co/300x200" class="card-img-top" alt="تصویر مقاله">
                                <div class="card-body">
                                    <h3 class="card-title h5">نام مقاله ۱</h3>
                                    <p class="card-text">توضیح مختصری درباره مقاله.</p>
                                    <a href="components/ArticlePage.php" class="btn btn-primary">مشاهده مقاله</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card project-card">
                                <img src="https://placehold.co/300x200" class="card-img-top" alt="تصویر مقاله">
                                <div class="card-body">
                                    <h3 class="card-title h5">نام مقاله ۲</h3>
                                    <p class="card-text">توضیح مختصری درباره مقاله.</p>
                                    <a href="components/ArticlePage.php" class="btn btn-primary">مشاهده مقاله</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card project-card">
                                <img src="https://placehold.co/300x200" class="card-img-top" alt="تصویر مقاله">
                                <div class="card-body">
                                    <h3 class="card-title h5">نام مقاله ۳</h3>
                                    <p class="card-text">توضیح مختصری درباره مقاله.</p>
                                    <a href="components/ArticlePage.php" class="btn btn-primary">مشاهده مقاله</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- Contact Section -->
<section id="contact" class="py-5 bg-light fade-in">
        <div class="container">
            <h2 class="text-center mb-5">ارتباط با من</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form id="contact-form">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" placeholder="نام شما" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="ایمیل شما" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="message" rows="5" placeholder="پیام شما" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">ارسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </section>
<?php
include 'components/footer.php';
?>