<?php include'inc/heder.php'; ?>
<?php include'inc/footer.php'; ?>
<?php include'inc/nav.php'; ?>



<div class="container my-3 w-5">
    <div class="card text-center p-3 bg-primary my-3 text-white">
        Register
    </div>
    
    <?php if(isset($_SESSION['errors'])): ?>
        <?php foreach($_SESSION['errors'] as $errors): ?>
            <div class="alert alert-danger text-center">
                <?php echo $errors; ?>
            </div>
    
  
    <?php
    endforeach;
    endif;
    unset($_SESSION['errors']);
    ?> 
    <form action="./handerlers/handelRegister.php" method="POST">
        <div class="mb-3">
            <label for="input-name" class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" id="name" >
        </div>
        <div class="mb-3">
            <label for="input-email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" >
        </div>
        <div class="mb-3">
            <label for="input-password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember-me">
            <label class="form-check-label" for="remember-me">remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
