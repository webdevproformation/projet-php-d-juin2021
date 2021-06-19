<div class="row text-center">
    <div class="col mt-5">
        <h1>Accéder au back office</h1>
    </div>
</div>
<section class="row">
    <div class="col-4 offset-4">
        <form action="<?= WWW ?>login" method="post">
            <div class="form-group">
                <label for="login">login</label>
                <input type="text" name="login" class="form-control" id="login">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="text" name="password" class="form-control" id="password">
            </div>
            <div  class="form-group d-flex justify-content-center mt-3">
                <input type="submit" class="btn btn-info">
            </div>
        </form>
    </div>
</section>