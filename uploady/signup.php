<?php
include_once 'session.php';
include_once APP_PATH . 'logic/signupLogic.php';
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8" />
    <?php include_once 'components/header.php'; ?>
    <title>
        <?= $st['website_name'] ?> - Signup
    </title>
    <?php include_once 'components/css.php'; ?>
</head>

<body>

    <?php include_once 'components/navbar.php'; ?>

    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container pb-5 pt-5">
                <div class="row justify-content-center text-center">
                    <div class="col-sm-12 col-md-8 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <b>Signup</b>
                            </div>
                            <div class="card-body">
                                <?php if (isset($error)) : ?>
                                    <?= $utils->alert($error, 'danger', 'times-circle'); ?>
                                <?php endif; ?>
                                <?php if (isset($msg)) : ?>
                                    <?= $utils->alert($msg, 'success', 'check-circle'); ?>
                                <?php endif; ?>
                                <form method="POST">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                                    </div>
                                    <div class="form-check m-3 text-start">
                                        <input type="checkbox" class="form-check-input" id="tos" required>
                                        <label class="form-check-label" for="tos">
                                            I agree to the <a href="terms.php">TOS</a>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Sign up</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer mb-0">
                                <a href="<?= $utils->siteUrl('/login.php'); ?>">
                                    Have an account? Go to login
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'components/footer.php'; ?>

    <?php include_once 'components/js.php'; ?>
</body>

</html>

</html>