<?php session_start(); ?>
<?php include('inc/header.php'); ?>

<?php if (!isset($_SESSION['id'])) {
    header('Location:index.php');
} ?>
<div class="container">
    <div class="row">
        <div class="col-12 ">
            <h1 class="text-center display-4 border my-5 p-2"> Register</h1>

        </div>

        <div class="col-sm-6 mx-auto">
            <?php if (isset($_SESSION['unsuccessful_change'])): ?>
                <h6 class="alert alert-danger text-center fade show" id="Message"> Old Password Is Incorrect </h6>
                <?php unset($_SESSION['unsuccessful_change']); ?>
            <?php endif; ?>
            <div class="border p-5 my-3">
                <form action="handler/change-password.php" method="POST" onsubmit="return validateForm();">
                    <div class="form-group">
                        <input type="password" class="form-control" name="oldPassword" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="newPassword" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="rePassword" name="reNewPassword"
                            placeholder="Rewrite New Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-block btn-primary" value="Change">
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
<script>
    function checkPasswords(password, rePassword) {
        if (password !== rePassword) {
            alert("Passwords do not match.");
            return false;
        } else {
            return true;
        }
    }

    function validateForm() {
        var password = document.getElementById("password").value;
        var rePassword = document.getElementById("rePassword").value;

        if (!checkPasswords(password, rePassword)) {
            return false;
        } else {
            // Form is valid, proceed with submission
            return true;
        }
    }
</script>

<?php include('inc/footer.php'); ?>