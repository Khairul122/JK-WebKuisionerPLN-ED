<!-- Fixed navbar -->
<nav class="navbar  navbar-fixed-top" style="background-color: #3498db;">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" style="color: white;">Selamat datang di Kuesioner Pengunjung</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="accordion"><a href="?page=utama" style="color: white;">Home</a></li>

                <?php if (isset($_SESSION['level']) && $_SESSION['level'] == 1) { ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Master Data <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="?page=tamu&actions=tampil">Data Tamu</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Reports <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="?page=tamu&actions=report">Laporan Tamu</a></li>
                            <li><a href="?page=feedback&actions=report">Laporan Feedback</a></li>
                        </ul>
                    </li>
                    <li><a href="?page=user&actions=tampil" style="color: white;">User</a></li>
                <?php } else { ?>
                    <li><a href="?page=feedback&actions=tampil" style="color: white;">Feedback</a></li>
                <?php } ?>

                <li><a href="?page=about&actions=tampil" style="color: white;">About</a></li>
                <li><a href="?page=kontak&actions=tampil" style="color: white;">Contact</a></li>

                <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php" style="color: white;">Logout</a></li>
                <?php } ?>
            </ul>

        </div>
    </div>
</nav>