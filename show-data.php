<?php session_start(); ?>
<?php include('inc/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center display-4 border my-5 "> Data</h1>
            <?php if (isset($_SESSION['id'])): ?>
                <div>
                    <h2> Name : <?php echo $_SESSION['name']; ?> </h2>
                    <h2> Email : <?php echo $_SESSION['email']; ?></h2>
                    <h2> Mobile : <?php echo $_SESSION['mobile']; ?></h2>
                </div>
            <?php else: ?>
                <h3 class="bg-danger text-white display-3 p-2"> Ther is No Data Found </h3>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>