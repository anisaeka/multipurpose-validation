<?php include "components/header.php" ?>

<div class="content">
    <div class="container text-light">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-6 border rounded border-light">
                <h5 class="text-center initial">Login</h5>
                <form>
                    <div class="form-group">
                        <label for="username">Username or Gmail</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-danger btn-block">Submit</button>
                    </div>
                    <div class="form-group text-center">
                        <a class="text-decoration-none text-warning" href="http://localhost/validation/register.php">Don't have account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "components/footer.php" ?>