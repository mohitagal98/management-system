<h3 class="text-center heading" >Admin Panel</h3>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container float-right">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="admin_work.php">Admin Panel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Student Login</a>
            </li>
            </li>
            <form action="admin_work.php" method="get">
                <input type="submit" name="sign_out" value="Sign Out" class="nav-link bg-dark border-0 btn">
            </form>

        </ul>
        <h6 class="text-light"><?php echo $_SESSION['admin_name']?></h6>
    </div>
</nav>
<div class="gap"></div>