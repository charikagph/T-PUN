

<nav class="navbar navbar-dark primary-color-dark">

    <!-- Collapse button-->
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
        <i class="fa fa-bars"></i>
    </button>

    <div class="container">

        <!--Collapse content-->
        <div class="collapse navbar-toggleable-xs" id="collapseEx">
            <!--Navbar Brand-->
            <a class="navbar-brand" href="#" target="_blank">T-Pun</a>
            <!--Links-->
            <ul class="nav navbar-nav">
                <li class="nav-item active" id="drop-li">
                    <a class="nav-link" href="cusHome.php"><i class="fa fa-home" aria-hidden="true"></i></i> Home<span class="sr-only">(current)</span></a>

                </li>

                <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item"></a>
                        <a class="dropdown-item"></a>
                        <a class="dropdown-item"></a>
                    </div>
                </li>
                <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Process</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item"></a>
                        <a class="dropdown-item"></a>
                        
                    </div>
                </li>
                <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item"></a>
                        <a class="dropdown-item"></a>
                        <a class="dropdown-item"></a>
                    </div>
                </li>
                <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact us</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item"></a>
                        <a class="dropdown-item"></a>
                        
                    </div>
                </li>
                <li class="nav-item">
                    <form action="" method="post">
                        <button alignment="right" type="submit" name="logout"> log out</button>
                    </form>
                </li>
            </ul>
            <!--Search form-->
            <form class="form-inline">
                <input class="form-control" type="text" placeholder="Search">
            </form>
        </div>
        <!--/.Collapse content-->

    </div>

</nav>


<?php
if (isset($_POST['logout'])) {

    session_destroy();
    header("Location:log.php");
}
?>







