<?php include 'components/header.php';
      include 'server/functions.php';
      register();
?>

<div class="content">
    <div class="container text-light">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-6 border rounded border-light">
                <h5 class="text-center initial">Register</h5>
                <form action="register.php" method="post">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" name="confirmPassword" class="form-control" id="confirmPassword">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="policy" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Do you accept any terms and condition?</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-danger btn-block">Submit</button>
                    </div>
                    <div class="form-group text-center">
                        <a class="text-decoration-none text-warning" href="http://localhost/validation/login.php">Already have account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>   