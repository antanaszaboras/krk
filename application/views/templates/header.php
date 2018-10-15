<?php
$this->load->helper('url');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Karkasai - CLOCKSYWORKS.IO</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/cs-skin-elastic.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/gfont.css'); ?>"  type="text/css">
    <script src="<?php echo base_url('assets/js/jquery-3.2.1.slim.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    

</head>


        <!-- Left Panel -->

    <aside id="contentLeft" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button id="" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><h3>CLOCKSYWORKS.IO</h3></a>
            </div>

            <div id="" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">PERSONS</h3><!-- /.menu-title -->
                    <li>
                        <a href="users"> <i class="menu-icon fa fa-users"></i>Users</a>
                    </li>
                    <li>
                        <a href="clients"> <i class="menu-icon fa fa-address-book-o"></i>Clients</a>
                    </li>
                    <h3 class="menu-title">ACTIONS</h3><!-- /.menu-title -->
                    <li>
                        <a href="jobs"> <i class="menu-icon fa fa-check-square-o"></i>Jobs</a>
                    </li>
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="contentLeftButton" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <?php 
                            //if(isset($top_title)) 
                            echo "<h4>$title</h4>";
                            if(isset($action_buttons_top)) echo $action_buttons_top; 
                        ?>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="https://picsum.photos/64/64/?random"" alt="User Avatar">
                        </a>
                    </div>
                </div>
            </div>

        </header><!-- /header -->