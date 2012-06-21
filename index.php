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

        <div class="container">
            <div class="mt_top row-fluid">
                <div class="span6">
                    <jdoc:include type="modules" name="mt-top"/>
                </div>
                <div class="span6">
                    <jdoc:include type="modules" name="mt-login"/>
                </div>
            </div>
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
                <div class="mt_sidebar span3">
                    <div class="sidebar-nav">
                        <jdoc:include type="modules" name="mt-sidebarnav"/>
                    </div>
                    <jdoc:include type="modules" name="left"/>
                </div>

                <div class="mt_content_wrapper span9">
                    <jdoc:include type="modules" name="mt-breadcrumbs"/>
                    <jdoc:include type="message" style="xhtml"/>
                    <jdoc:include type="modules" name="toolbar"/>
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
