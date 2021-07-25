<!-- <header>
    <a class="logo" href="<?php echo BASE_URL . '/index.php'; ?>">
        <h1 class="logo-text"><span>Awa</span>Inspires</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        <?php if (isset($_SESSION['username'])): ?>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username']; ?>
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                    <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</header> -->

<div class="header">
            <div class="logo">
                <h1 class="logo-text">AwaInspires</h1>
            </div>
            <i class="fa fa-bars menu-toggle"></i>
           

            <ul class="nav">
            <?php if (isset($_SESSION['username'])): ?>

                <li><a href="index.php">Manage Posts</a></li>
                <li><a href="../users/index.php">Manage Users</a></li>
                <li><a href="../topics/index.php">Manage Topics</a></li>
                <!-- <li><a href="#">Sign Up</a></li>
                <li><a href="#">Login</a></li> -->
                <li>
                  <a href="#">
                    <i class="fa fa-user"></i>
                    Awa Melvine
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                  </a>
                  <ul>
                    <!-- <li><a href="#">Dashboard</a></li> -->
                    <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
                  </ul>
                </li>
                <?php endif; ?>
              </ul>
        </div>