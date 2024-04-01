<?php include 'includes/header.php'; ?>
<?php include 'includes/shapes.php'; ?>
<section class="space">
    <div class="container">
        <div class="error-img"><img style="width: 250px;margin-top: -100px;" src="assets/img/error.png" alt="404 image"></div>
        <style>
            @media screen and (max-width: 768px) {
                .error-img {
                    margin-top: 100px !important;
                }

            }
        </style>
        <div style="margin-top: -50px;" class="error-content">
            <h2 class="error-title"><span class="text-theme">OooPs!</span> Page Not Found</h2>
            <p class="error-text">Oops! The page you are looking for does not exist. It might have been moved or
                deleted.</p><a href="/index.php" class="th-btn"><i class="fal fa-home me-2"></i>Back To Home</a>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>