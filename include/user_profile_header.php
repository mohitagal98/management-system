<h3 class="text-center heading" xmlns="">Maharaja College Student Corner</h3>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container float-right">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="admin_login.php">Admin Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="chat_index.php">Chat</a>
            </li>
            </li>
            <form action="profile.php" method="get">
                <input type="submit" name="sign_out" value="Sign Out" class="nav-link bg-dark border-0 btn">
            </form>

        </ul>
        <h6 class="text-light"><?php echo $_SESSION['full_name']?></h6>
    </div>
</nav>
<div class="gap"></div>