<?php /* Smarty version 2.6.25, created on 2014-07-26 03:51:26
         compiled from C:%5Cxampp%5CRoom404/themes/Bootstrap/views/default.master.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'asset', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 8, false),array('function', 't', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 25, false),array('function', 'link', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 30, false),array('function', 'logo', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 30, false),array('function', 'categories_link', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 35, false),array('function', 'discussions_link', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 36, false),array('function', 'activity_link', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 37, false),array('function', 'module', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 41, false),array('function', 'profile_link', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 44, false),array('function', 'inbox_link', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 45, false),array('function', 'bookmarks_link', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 46, false),array('function', 'dashboard_link', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 47, false),array('function', 'signinout_link', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 48, false),array('function', 'breadcrumbs', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 64, false),array('function', 'searchbox', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 66, false),array('function', 'event', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 93, false),array('modifier', 'date_format', 'C:\\xampp\\Room404/themes/Bootstrap/views/default.master.tpl', 81, false),)), $this); ?>
<!DOCTYPE html>
<html lang="en" class="sticky-footer-html">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php echo smarty_function_asset(array('name' => 'Head'), $this);?>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body id="<?php echo $this->_tpl_vars['BodyID']; ?>
" class="<?php echo $this->_tpl_vars['BodyClass']; ?>
 sticky-footer-body">

    <nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"><?php echo smarty_function_t(array('c' => 'Toggle navigation'), $this);?>
</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo smarty_function_link(array('path' => 'home'), $this);?>
"><?php echo smarty_function_logo(array(), $this);?>
</a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php echo smarty_function_categories_link(array(), $this);?>

            <?php echo smarty_function_discussions_link(array(), $this);?>

            <?php echo smarty_function_activity_link(array(), $this);?>

          </ul>
          <?php if ($this->_tpl_vars['User']['SignedIn']): ?>
            <ul class="nav navbar-nav navbar-right hidden-xs">
              <?php echo smarty_function_module(array('name' => 'MeModule'), $this);?>

            </ul>
            <ul class="nav navbar-nav navbar-right visible-xs">
              <?php echo smarty_function_profile_link(array(), $this);?>

              <?php echo smarty_function_inbox_link(array(), $this);?>

              <?php echo smarty_function_bookmarks_link(array(), $this);?>

              <?php echo smarty_function_dashboard_link(array(), $this);?>

              <?php echo smarty_function_signinout_link(array(), $this);?>

            </ul>
          <?php else: ?>
            <ul class="nav navbar-nav navbar-right">
              <li><?php echo smarty_function_link(array('path' => "entry/register",'text' => 'Register','target' => 'current'), $this);?>
</li>
              <li><?php echo smarty_function_link(array('path' => 'signin','text' => 'Sign In','target' => 'current'), $this);?>
</li>
            </ul>
          <?php endif; ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <section class="container">
      <div class="row">

        <main class="page-content" role="main">
          <?php echo smarty_function_breadcrumbs(array(), $this);?>

          <?php if (InSection ( array ( 'CategoryList' , 'CategoryDiscussionList' , 'DiscussionList' ) )): ?>
            <div class="well search-form"><?php echo smarty_function_searchbox(array(), $this);?>
</div>
          <?php endif; ?>
          <?php echo smarty_function_asset(array('name' => 'Content'), $this);?>

        </main>

        <aside class="page-sidebar" role="complementary">
          <?php echo smarty_function_asset(array('name' => 'Panel'), $this);?>

        </aside>

      </div>
    </section>

    <footer class="page-footer sticky-footer">
      <div class="container">
        <div class="clearfix">
          <p class="pull-left"> &copy; Room 404 <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
 </p>
          <!-- <p class="pull-right hidden-xs"><?php echo smarty_function_t(array('c' => 'Built with'), $this);?>
 <i class="InformSprite Heart"></i> <?php echo smarty_function_t(array('c' => 'and'), $this);?>
 <a href="http://getbootstrap.com">Bootstrap</a>
            <!-- A lot of time was put into this project - a "Follow" and a "Star" would be most appreciated! 
            <iframe src="http://ghbtns.com/github-btn.html?user=kasperisager&type=follow" allowtransparency="true" frameborder="0" scrolling="0" width="145" height="20" style="vertical-align:top;margin-left:20px;"></iframe>
            <iframe src="http://ghbtns.com/github-btn.html?user=kasperisager&repo=vanilla-bootstrap&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="80" height="20" style="vertical-align:top;"></iframe>
          </p> -->
          <p class="pull-right hidden-xs">Created with <a href="http://vanillaforums.org" target="_blank"><img src="http://vanillaforums.org/applications/dashboard/design/images/vanilla-forums-light-bg-70x33.png" alt="Vanilla Forums" width="35"></a>
        </div>
        <?php echo smarty_function_asset(array('name' => 'Foot'), $this);?>

      </div>
    </footer>

    <?php echo smarty_function_event(array('name' => 'AfterBody'), $this);?>


  </body>
</html>