<?php
include_once "./includes/header.php";
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Contact</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" />
                        </div>
                        <div class="form-group">
                            <label for="email-address">Email</label>
                            <input type="email" class="form-control" id="email-address" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label for="textarea-1">Message</label>
                            <textarea class="form-control" id="textarea-1" rows="3" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include_once "./includes/footer.php";
?>
</body>

</html>