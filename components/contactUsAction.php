<?php
?>
<!-- Contact Section -->
<section id="contact" class="py-5 bg-light fade-in">
    <div class="container">
        <h2 class="text-center mb-5">ارتباط با من</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form id="contact-form" action="../index.php" method="post">
                    <!-- Name Field -->
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="نام شما" required>
                    </div>

                    <!-- Email Field -->
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="ایمیل شما" required>
                    </div>

                    <!-- Message Field -->
                    <div class="mb-3">
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="پیام شما" required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">ارسال</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>