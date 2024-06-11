<!-- header.php -->
<header>
    <div class="logo">
        <a href="index.php"><img src="assets/images/logo.png"/></a>
    </div>
    <div class="site-title">
        NATIOPNAL POLYTECHNIC UNIVERSITY INSTITUTE BAMENDA <br>
        <small style="font-size:15px;">
            <?php if (isset($_SESSION['username'])) : ?>
                Logged in as <?php echo $_SESSION['username']; ?>
                <a href="logout.php">Logout</a>
            <?php else : ?>
                <a href="login.php">Login</a> | <a href="signup.php">Sign Up</a>
            <?php endif; ?>
        </small>
    </div>
</header>
