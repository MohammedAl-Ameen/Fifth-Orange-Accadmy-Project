<?php session_start(); ?>


<div class="navbar-bg"style='background-color:#F28123'></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                </form>

                    <ul class="navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle mr-1">
                                <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $_SESSION["name"]?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="features-profile.html" class="dropdown-item has-icon">
                                    <i class="far fa-user"></i> Profile
                                </a>
                                <!-- <a href="features-activities.html" class="dropdown-item has-icon">
                                    <i class="fas fa-bolt"></i> Activities
                                </a> -->
                                <a href="features-settings.html" class="dropdown-item has-icon">
                                    <i class="fas fa-cog"></i> Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="../library-origin/logout.php" class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2" tabindex="1" style="overflow: hidden; outline: none;">
                <aside id="sidebar-wrapper" style="height: 100vh;">
                    <div class="sidebar-brand">
                        <a href="../index.php">Library</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="../index.php">LB</a>
                    </div>
                    <ul class="sidebar-menu" style="height: 90vh;display: flex;flex-direction: column;justify-content: space-evenly;">



            