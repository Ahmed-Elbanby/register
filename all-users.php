<?php session_start(); ?>
<?php include('inc/header.php'); ?>

<?php require 'inc/db.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center display-4 border p-3 my-5 "> All Users </h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'classes/users.php'; ?>

                    <?php foreach(user::getAllUsers() as $row) : ?>
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->mobile; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>