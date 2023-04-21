<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <?= form_open_multipart(base_url() . 'submit'); ?>
    <div class="form-group">
        <label for="formGroupExampleInput">First Name</label>
        <input class="form-control form-control-sm" name="firstName" type="text" placeholder="First Name">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Last Name</label>
        <input class="form-control form-control-sm" name="lastName" type="text" placeholder="Last Name">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <input type="submit" class="btn-primary">
    </div>
    </form>
</div>

<?= $this-> endSection(); ?>