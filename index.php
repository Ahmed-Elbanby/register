<?php session_start(); ?>
<?php include('inc/header.php'); ?>

<?php require_once('inc/db.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php if (isset($_SESSION['successful_login'])): ?>
                <h6 class="alert alert-success text-center fade show" id="successMessage"> You Have Logged In </h6>
                <?php unset($_SESSION['successful_login']); ?>
            <?php endif; ?>
            <h1 class="text-center display-4 border p-3 my-5 "> Login System Using PHP </h1>
        </div>
    </div>
</div>

<script>
    setTimeout(function () {
        var message = document.getElementById("successMessage");
        message.classList.remove("show");
        message.style.opacity = "0";
        // message.remove();
        setTimeout(function () {
            message.remove();
        }, 300);
    }, 3000);
</script>

<?php include('inc/footer.php'); ?>