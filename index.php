<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html>
    <head>
        <?php $this->setGenerator('Joomla! 2.5 Template by MagicThemes.com'); ?>
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1 " />
        <jdoc:include type="head" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- styles -->
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/mcced.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/css/bootstrap-responsive.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/google-code-prettify/prettify.css" type="text/css" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- fav and touch icons -->
        <link rel="shortcut icon" href="themes/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/ico/apple-touch-icon-57-precomposed.png">
    </head>
    <body data-spy="scroll" data-target=".subnav" data-offset="50">

        <div class="container">

            <!-- Navigation -->
            <div class="mt_mainnav navbar">
                <div class="navbar-inner">
                    <div class="container">

                        <a class="brand" href="./">MCCED</a>

                        <div class="nav-collapse">
                            <ul class="nav">
                                <li class="active"><a href="./">Home</a></li>
                                <li class=""><a href="#">Accounts</a></li>
                                <li class=""><a href="#">Reports</a></li>
                                <li class=""><a href="#">Links</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="mt_toolbar span12">
                    <div class="row-fluid mt_admin_toolbar">
                        <div class="span9">
                            <div class="page-header">
                                <h1>Accounts <small>Manage user accounts for student or staff</small></h1>
                            </div>
                        </div>

                        <div class="span3">
                            <div class="btn-toolbar" style="margin-top: 20px !important;">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i> New</a>
                                    <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Student</a></li>
                                        <li><a href="#">Teacher</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-danger"><i class="icon-trash icon-white"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mt_aside span3">
                        <div class="sidebar-nav">
                            <ul class="nav nav-list">
                                <li class="nav-header">Filters</li>
                                <li class="active"><a href="#"><i class="icon-home"></i>Students</a></li>
                                <li><a href="#"><i class="icon-book"></i>Teachers</a></li>
                                <li><a href="#"><i class="icon-pencil"></i>Others</a></li>
                                <li class="nav-header">Programs</li>
                                <li><a href="#"><i class="icon-user"></i>FLES</a></li>
                                <li><a href="#"><i class="icon-book"></i>Big Learning</a></li>
                                <li><a href="#"><i class="icon-cog"></i>Hands On Science</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt_content span9">
                        <table class="table table-condensed table-striped">
                            <thead>
                                <tr>
                                    <th width="3%"><input type="checkbox" name="checkAll" /></th>
                                    <th width="50%">
                                        <span>Name</span>
                                        <br/>
                                        <small>(Job Title)</small>
                                    </th>
                                    <th width="5%">Age</th>
                                    <th width="15%">Nickname</th>
                                    <th width="5%">Employee</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="check" value="thisID" />
                                    </td>
                                    <td>Lorem</td>
                                    <td>30</td>
                                    <td>ipsum</td>
                                    <td style="text-align: center;"><i class="icon-ok-sign"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="check" value="thisID" />
                                    </td>
                                    <td>Lorem</td>
                                    <td>30</td>
                                    <td>ipsum</td>
                                    <td style="text-align: center;"><i class="icon-minus-sign"></i></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pagination pagination-centered">
                            <ul>
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer">
                <p class="pull-right"><a href="#">Back to top</a></p>
            </footer>
        
        </div><!-- end container -->

        <!-- Javascript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/jquery.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/google-code-prettify/prettify.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/bootstrap-transition.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/bootstrap-alert.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/bootstrap-modal.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/bootstrap-dropdown.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/bootstrap-scrollspy.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/bootstrap-tab.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/bootstrap-tooltip.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/bootstrap-popover.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/bootstrap-button.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/bootstrap-collapse.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/bootstrap-carousel.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/bootstrap-typeahead.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/application.js"></script>

    </body>
</html>
