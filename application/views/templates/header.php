<?php
$this->load->helper('url');
$this->load->helper('date');

include_once "head.php";
?>

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
                    
                    <h3 class="menu-title">ACTIONS</h3><!-- /.menu-title -->
                    <li>
                        <a href="/jobs"> <i class="menu-icon fa fa-check-square-o"></i>Jobs</a>
                    </li>
                    <h3 class="menu-title">My Data</h3><!-- /.menu-title -->
                    <li>
                        <a href="/contacts"> <i class="menu-icon fa fa-address-book"></i>Contacts</a>
                    </li>
                    <li>
                        <a href="/clients"> <i class="menu-icon fa fa-building"></i>Clients</a>
                    </li>
                     <h3 class="menu-title">ADMINISTRATOR</h3><!-- /.menu-title -->
                    <li>
                        <a href="/users"> <i class="menu-icon fa fa-users"></i>Users</a>
                    </li>
                    <h3 class="menu-title"></h3>
                    <li>
                        <a href="#"> 
                            <i class="menu-icon fa fa-clock-o"></i>
                            <?php echo mdate('%Y-%m-%d %H:%i', now('Europe/Vilnius'));?> 
                        </a>
                </span>
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
                            echo "<h4>$title</h4>";
                            if(isset($action_buttons_top)) echo $action_buttons_top; 
                        ?>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="col-12">
                       
                        <div class="user-area dropdown float-right">
                            <div class="d-inline-block" tabindex="0" data-toggle="tooltip" title="<?php echo $this->session->userdata('logged_in')['name'] . ' ' . $this->session->userdata('logged_in')['surname'];?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="user-avatar rounded-circle" src="https://picsum.photos/64/64/?random" alt="User Avatar">
                                </a>
                                <div class="user-menu dropdown-menu">
                                     <a class="nav-link" href="/logout"><span class="col-4 p-2"><i class="fa fa-power-off"></i></span>Logout</a>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->