<?php session_start(); ?>
<?php  include('inc/header.php');  ?> 

<?php if(isset($_SESSION['id'])){ header('Location:index.php'); } ?>
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1 class="text-center display-4 border my-5 p-2"> Register</h1>
                <?php if (isset($_SESSION['unsuccessful_change'])): ?>
                <h6 class="alert alert-danger text-center fade show" id="Message"> Old Password Is Incorrect </h6>
                <?php unset($_SESSION['unsuccessful_change']); ?>
            <?php endif; ?>
            </div>
            
            <div class="col-sm-6 mx-auto">
                <div class="border p-5 my-3">
                    <form action="handler/change-password.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="oldPassword" placeholder="Old Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="reNewPassword" placeholder="Rewrite New Password">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function () {
            var message = document.getElementById("Message");
            message.classList.remove("show");
            message.style.opacity = "0";
            setTimeout(function () {
                message.remove();
            }, 300);
        }, 3000);
    </script>

<?php  include('inc/footer.php');  ?> 
