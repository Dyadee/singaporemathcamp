<div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Register Here</h5>

                        <form class="form-signin" action="register.php" method="POST">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label for="schedule">Schedule:</label>
                                <input type="datetime-local" id="schedule" name="schedule" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="register" class="btn btn-primary">Register</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>