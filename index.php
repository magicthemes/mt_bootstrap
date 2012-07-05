<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html>
    <head>
        <?php $this->setGenerator('Joomla! 2.5 Template by MagicThemes.com'); ?>

        <meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1 " />
        <? /*<jdoc:include type="head" />*/ ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- styles -->
        <?php $headData     = $this->getHeadData(); ?>
        <?php $styleSheets  = $headData['styleSheets']; ?>
        <?php $styles       = $headData['style']; ?>

        <?php foreach ($styleSheets as $styleSrc => $styleAttr): ?>
        <link rel="stylesheet" href="<?php echo $styleSrc;?>" />
        <?php endforeach; ?>

        <?php foreach ($styles as $styleType => $styleContent): ?>
        <style type="<?php echo $styleType;?>">
            <?php echo $styleContent; ?>
        </style>
        <?php endforeach; ?>

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

        <!-- Navigation -->
        <div class="mt_mainnav navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <div class="nav-collapse">
                            <ul class="nav">
                                <li><a href="index.php?option=com_mcced&view=dashboard">Dasboard</a></li>
                                <li><a href="index.php?option=com_mcced&view=accounts">People</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sites <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.php?option=com_mcced&view=site"><i class="icon-plus"></i> Create a Site</a></li>
                                        <li><a href="index.php?option=com_mcced&view=site&layout=import"><i class="icon-upload"></i> Import sites from spreadsheet</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-search"></i> Search Site</a></li>
                                        <li><a href="index.php?option=com_mcced&view=sites"><i class="icon-list"></i> List Sites</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Classes <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.php?option=com_mcced&view=catalogs"><i class="icon-plus"></i> Create a Class</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-search"></i> Search Classes</a></li>
                                        <li><a href="index.php?option=com_mcced&view=classes"><i class="icon-list"></i> List Classes</a></li>
                                        <li class="nav-header">Catalog Entries</li>
                                        <li><a href="index.php?option=com_mcced&view=catalog"><i class="icon-plus"></i> New Catalog Entry</a></li>
                                        <li><a href="#"><i class="icon-search"></i> Search Catalog</a></li>
                                        <li><a href="index.php?option=com_mcced&view=catalogs"><i class="icon-list"></i> List Catalog Entries</a></li>
                                        <li class="nav-header">Programs</li>
                                        <li><a href="index.php?option=com_mcced&view=program"><i class="icon-plus"></i> New Program</a></li>
                                        <li><a href="#"><i class="icon-search"></i> Search Program</a></li>
                                        <li><a href="index.php?option=com_mcced&view=programs"><i class="icon-list"></i> List Programs</a></li>
                                    </ul>
                                <li>
                                <li><a href="index.php?option=com_mcced&view=accounting">Accounting</a></li>
                                <li><a href="index.php?option=com_mcced&view=calendar">Calendar</a></li>
                            </ul>
                            <div class="nav pull-right">
                                <form class="navbar-search pull-left" action="">
                                    <input type="text" class="search-query span2" placeholder="Search">
                                </form>
                                <ul class="nav">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#accounts">
                                            <i class="icon-user icon-white"></i> Profile <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="accounts/new_account.html">Edit Profile</a></li>
                                            <li><a href="#change-password" data-toggle="modal">Change Password</a></li>
                                            <li><a href="login.html">Logout <i class="icon-off"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <section>
                <div class="row">
                    <div class="mt_sidebar span3">
                        <div class="sidebar-nav">
                            <jdoc:include type="modules" name="mt-sidebarnav"/>
                        </div>
                    </div>

                    <div class="mt_content_wrapper span9">
                        <jdoc:include type="modules" name="mt-breadcrumbs"/>
                        <jdoc:include type="message" style="xhtml"/>
                        <jdoc:include type="modules" name="toolbar"/>
                        <jdoc:include type="component" />
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer class="footer">
                <p class="pull-right">MCCPTA Educational Programs, Inc.</p>
            </footer>
        </div><!-- end container -->

        <!-- Javascript -->
        <!--<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>-->
        <?php /*<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/themes/bootstrap/js/widgets.js"></script>*/?>
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

        <script>jQuery.noConflict();</script>

        <? $scripts     = $headData['scripts']; ?>
        <? $script      = $headData['script']; ?>

        <?php foreach ($scripts as $strSrc => $strAttr): ?>
        <script src="<?php echo $strSrc;?>"></script>
        <?php endforeach; ?>

        <?php foreach($script as $scriptType => $scriptContent): ?>
        <script type="<?php echo $scriptType;?>">
            <?php echo $scriptContent; ?>
        </script>
        <?php endforeach; ?>

    </body>
</html>
