<?php session_start(); ?>
<?php include('inc/header.php'); ?>

<?php require_once('inc/db.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center display-4 border p-3 my-5 "> All Users </h1>


            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
            </table>



        </div>
    </div>
</div>

<script>
    let table = new DataTable('#example');

    table.on('click', 'tbody tr', function () {
        let data = table.row(this).data();

        alert('You clicked on ' + data[0] + "'s row");
    });
</script>

<?php include('inc/footer.php'); ?>