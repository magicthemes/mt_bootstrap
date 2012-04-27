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
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/css/bootstrap-responsive.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/css/docs.css" type="text/css" />
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
                        <a class="brand" href="./">Logo</a>
                        <div class="nav-collapse">
                            <jdoc:include type="modules" name="mt-mainnav"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="mt_sidebar span2">
                    <div class="sidebar-nav">
                        <ul class="nav nav-list">
                            <li><a href="#"><i class="icon-home"></i>Home</a></li>
                        </ul>
                        <jdoc:include type="modules" name="mt-left"/>
                    </div>
                </div>

                <div class="mt_content_wrapper span10">
                    <jdoc:include type="message" />
                    <jdoc:include type="component" />
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer">
                <!--<p class="pull-right"><i class="icon-arrow-up"></i><a href="#">Back to top</a></p>-->
            </footer>
        </div><!-- end container -->

        <!-- Javascript -->
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

        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.equalheights.js"></script>

    </body>
</html>
