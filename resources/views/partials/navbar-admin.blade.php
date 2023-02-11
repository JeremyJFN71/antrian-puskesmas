<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Logo And Top Menu Items -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <style type="text/css">
        .navbar-inverse .navbar-collapse,
        .navbar-inverse .navbar-form {
            border-color: #fff !important;
        }
    </style>
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/admin/dashboard"><b>Puskesmas -
                Admin</b></a>
    </div>
    <ul class="nav navbar-right top-nav">
        <!--            <li class="dropdown">-->
        <!--                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>-->
        <!--                <ul class="dropdown-menu message-dropdown">-->
        <!--                    <li class="message-preview">-->
        <!--                        <a href="#">-->
        <!--                            <div class="media">-->
        <!--                                    <span class="pull-left">-->
        <!--                                        <img class="media-object" src="http://placehold.it/50x50" alt="">-->
        <!--                                    </span>-->
        <!--                                <div class="media-body">-->
        <!--                                    <h5 class="media-heading"><strong>John Smith</strong>-->
        <!--                                    </h5>-->
        <!--                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>-->
        <!--                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </a>-->
        <!--                    </li>-->
        <!--                    <li class="message-preview">-->
        <!--                        <a href="#">-->
        <!--                            <div class="media">-->
        <!--                                    <span class="pull-left">-->
        <!--                                        <img class="media-object" src="http://placehold.it/50x50" alt="">-->
        <!--                                    </span>-->
        <!--                                <div class="media-body">-->
        <!--                                    <h5 class="media-heading"><strong>--><!--</strong>-->
        <!--                                    </h5>-->
        <!--                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>-->
        <!--                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </a>-->
        <!--                    </li>-->
        <!--                    <li class="message-preview">-->
        <!--                        <a href="#">-->
        <!--                            <div class="media">-->
        <!--                                    <span class="pull-left">-->
        <!--                                        <img class="media-object" src="http://placehold.it/50x50" alt="">-->
        <!--                                    </span>-->
        <!--                                <div class="media-body">-->
        <!--                                    <h5 class="media-heading"><strong>John Smith</strong>-->
        <!--                                    </h5>-->
        <!--                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>-->
        <!--                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </a>-->
        <!--                    </li>-->
        <!--                    <li class="message-footer">-->
        <!--                        <a href="#">Read All New Messages</a>-->
        <!--                    </li>-->
        <!--                </ul>-->
        <!--            </li>-->
        <!--            <li class="dropdown">-->
        <!--                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>-->
        <!--                <ul class="dropdown-menu alert-dropdown">-->
        <!--                    <li>-->
        <!--                        <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>-->
        <!--                    </li>-->
        <!--                    <li>-->
        <!--                        <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>-->
        <!--                    </li>-->
        <!--                    <li>-->
        <!--                        <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>-->
        <!--                    </li>-->
        <!--                    <li>-->
        <!--                        <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>-->
        <!--                    </li>-->
        <!--                    <li>-->
        <!--                        <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>-->
        <!--                    </li>-->
        <!--                    <li>-->
        <!--                        <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>-->
        <!--                    </li>-->
        <!--                    <li class="divider"></li>-->
        <!--                    <li>-->
        <!--                        <a href="#">View All</a>-->
        <!--                    </li>-->
        <!--                </ul>-->
        <!--            </li>-->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;">
                <i class="fa fa-user"></i> admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <!-- <li>
        <a href="/admin/akun"><i class="fa fa-fw fa-user"></i> Profile</a>
    </li> -->
                <li>
                    <a href="/admin/password"><i
                            class="fa fa-fw fa-gear"></i> Password</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="/admin/logout"><i
                            class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul> <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="dashboard">
                <a href="/admin/dashboard"><i
                        class="fa fa-fw fa-dashboard"></i>
                    Dashboard </a>

            </li>
            <li class="data_pasien">
                <a href="/admin/pasien"><i
                        class="glyphicon glyphicon-user"></i>
                    Data Pasien </a>

            </li>
            <li class="poli">
                <a href="/admin/poli"><i
                        class="glyphicon glyphicon-list-alt"></i>
                    Poli </a>

            </li>
            <li class="antrian_poli">
                <a href="/admin/antrian_poli"><i
                        class="glyphicon glyphicon-list"></i>
                    Antrian Poli </a>

            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>