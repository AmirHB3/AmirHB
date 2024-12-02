<?php
include 'components/header.php';
include 'components/navbar.php';
?>

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
<section id="skills" class="py-5 bg-light fade-in">
                <div class="container">
                    <h2 class="text-center mb-5">مهارت‌های من</h2>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="skill-card">
                                <i class="bi bi-code-slash skill-icon"></i>
                                <h3 class="h5">HTML/CSS</h3>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="skill-card">
                                <i class="bi bi-braces skill-icon"></i>
                                <h3 class="h5">Python</h3>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="skill-card">
                                <i class="bi bi-code skill-icon"></i>
                                <h3 class="h5">Django</h3>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
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
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="تصویر مقاله">
                                <div class="card-body">
                                    <h3 class="card-title h5">نام مقاله ۱</h3>
                                    <p class="card-text">توضیح مختصری درباره مقاله.</p>
                                    <a href="components/ArticlePage.php" class="btn btn-primary">مشاهده مقاله</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card project-card">
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="تصویر مقاله">
                                <div class="card-body">
                                    <h3 class="card-title h5">نام مقاله ۲</h3>
                                    <p class="card-text">توضیح مختصری درباره مقاله.</p>
                                    <a href="components/ArticlePage.php" class="btn btn-primary">مشاهده مقاله</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card project-card">
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="تصویر مقاله">
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
