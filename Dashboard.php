<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">CodingLab</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Like</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Cari Disini">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Aktivitas Terbaru</span>
                </div>

            <!-- batas 1 -->
            <div class="activity-data">
                <div class="data names">
                    <?php
                    $query = "SELECT name FROM nama_tabel";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<span class='data-list'>" . $row['name'] . "</span>";
                    }
                    mysqli_free_result($result);
                    ?>
                </div>
            </div>

            <!-- batas 2 -->
            <div class="activity-data">
                <div class="data email">
                    <?php
                    $query = "SELECT email FROM nama_tabel";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<span class='data-list'>" . $row['email'] . "</span>";
                    }
                    mysqli_free_result($result);
                    ?>
                </div>
            </div>

            <!-- batas 3 -->
            <div class="activity-data">
                <div class="data joined">
                    <?php
                    $query = "SELECT joined_date FROM nama_tabel";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<span class='data-list'>" . $row['joined_date'] . "</span>";
                    }
                    mysqli_free_result($result);
                    ?>
                </div>
            </div>

            <!-- batas 4 -->
            <div class="activity-data">
                <div class="data type">
                    <?php
                    $query = "SELECT user_type FROM nama_tabel";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<span class='data-list'>" . $row['user_type'] . "</span>";
                    }
                    mysqli_free_result($result);
                    ?>
                </div>
            </div>

            <!-- batas 5 -->
            <div class="activity-data">
                <div class="data status">
                    <?php
                    $query = "SELECT user_status FROM nama_tabel";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<span class='data-list'>" . $row['user_status'] . "</span>";
                    }
                    mysqli_free_result($result);
                    ?>
                </div>
            </div>

                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>