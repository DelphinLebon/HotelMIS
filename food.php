<?php include('partials/menu.php'); ?>

<section>
    <div class="container wrapper">

        <h2>Manage Food</h2>
                    <br>
        <a class="btn btn-danger" href="#">Add Food</a>
        <br><br>

        <div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-primary">Edit data</button>
                            <button type="button" class="btn btn-sm btn-secondary">Delete data</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-primary">Edit data</button>
                            <button type="button" class="btn btn-sm btn-secondary">Delete data</button>
                        </td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                    <td>
                            <button type="button" class="btn btn-sm btn-primary">Edit data</button>
                            <button type="button" class="btn btn-sm btn-secondary">Delete data</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    
</section>
<br>
<section>

</section>
<?php include('partials/footer.php'); ?>