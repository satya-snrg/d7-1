   <div class="login">
      <div class="g-fixed">
        <div class="g-ui--sckity d-flex">
          <div class="container g-ui--sckity d-flex">
            <div class="d-flex align-items-center g-ui--sckity">
              <div class="login__form g-box">
                <div class="pb-4">
                  <img src="images/logo.png" alt="Devs">
                  <p class="title">API Portal</p>
                  <span class="bajada">Jueves 31 de Julio de 2019 10:06 a.m.</span>
                </div>
                <!--div>
                  <div class="g-alert g-alert--error">
                    <i class="icon">X</i>
                    <p class="info">Usuario o clave inválida.<br>Inténtelo nuevamente.</p>
                    <span class="close">x</span>
                  </div>
                </div-->
                <!--div class="pb-3 pt-4">
                  <div class="g-input g-input--icon">
                    <div class="block-input">
                      <input id="name" class="input" type="text" pattern=".+" required />
                      <label class="label" for="name">Usuario</label>
                    </div>
                    <i class="icon">ico</i>
                  </div>
                  <div class="text-right">
                    <a class="g-link" href="">¿Olvidó su usuario?</a>
                  </div>
                </div-->
                <!--div class="pb-5">
                  <div class="g-input g-input--icon">
                    <div class="block-input">
                      <input id="password" class="input" type="text" pattern=".+" required />
                      <label class="label" for="password">Clave</label>
                    </div>
                    <i class="icon">ico</i>
                  </div>
                  <div class="text-right">
                    <a class="g-link" href="">¿Olvidó su clave?</a>
                  </div>
                </div-->
                <!--div>
                  <button class="g-btn g-btn--primary">Continuar</button>
                </div-->
				<?php if ($content = render($page['content'])): ?>
            <div id="content">
              <?php print $content; ?>
            </div>
          <?php endif; ?>
              </div>
              <div class="login__img">
                <img class="bkg-login" src="/sites/all/themes/mxperu-api_portal-1934e52bd394/themes/bancolombia_theme/images/bkg-login.png" alt="background">
                <img class="bkg-login--user" src="/sites/all/themes/mxperu-api_portal-1934e52bd394/themes/bancolombia_theme/images/bkg-login--user.png" alt="background">
              </div>
            </div>
          </div>
        </div>
        <div class="login__footer align-items-center">
          <div class="container">
            <div class="d-flex flex-column flex-lg-row justify-content-md-between pt-5 pb-2 h-bb--gray">
              <span class="listado">Conversor SAP / PAB     ·     Formato de novedades</span>
              <span class="listado">Contáctenos    ·    DemoSVE   ·     Aprenda sobre seguridad    ·    Preguntas frecuentes     ·    Política de privacidad</span>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-md-between pt-2 pb-4">
              <div class="d-flex align-items-center">
                <img class="iso" src="images/iso.png" alt="">
                <span class="label">2020 Grupo Bancolombia</span>
              </div>
              <span class="label">Dirección IP: 190.144.71.250</span>
            </div>
          </div>
        </div>
      </div>
    </div>

<div id="page" class="container <?php print $classes; ?>">

  <?php print render($page['top_menu']); ?>

  <header id="header" class="clearfix" role="banner">

    <?php if ($site_logo || $site_name || $site_slogan): ?>
      <!-- start: Branding -->
      <div id="branding" class="branding-elements clearfix">

        <?php if ($site_logo): ?>
          <div id="logo">
            <?php print $site_logo; ?>
          </div>
        <?php endif; ?>

        <?php if ($site_name || $site_slogan): ?>
          <!-- start: Site name and Slogan hgroup -->
          <div <?php print $hgroup_attributes; ?>>

            <?php if ($site_name): ?>
              <h1 <?php print $site_name_attributes; ?>><?php print $site_name; ?></h1>
            <?php endif; ?>

            <?php if ($site_slogan): ?>
              <h2 <?php print $site_slogan_attributes; ?>><?php print $site_slogan; ?></h2>
            <?php endif; ?>

          </div><!-- /end #name-and-slogan -->

        <?php endif; ?>

      </div><!-- /end #branding -->
    <?php endif; ?>

    <?php print render($page['header']); ?>
    <?php print render($page['menu_bar']); ?>

  </header>

  <div id="columns" <?php print $page['menu_bar'] ? 'class="no-menu-bar"' : ''; ?>>
    <div class="columns-inner clearfix">

      <?php print $messages; ?>
      <?php print render($page['help']); ?>
      <?php print render($page['secondary_content']); ?>

      <?php if (
        $page['three_33_top'] ||
        $page['three_33_first'] ||
        $page['three_33_second'] ||
        $page['three_33_third'] ||
        $page['three_33_bottom']
      ): ?>
        <!-- Three column 3x33 Gpanel -->
        <div class="at-panel gpanel panel-display three-3x33 clearfix">
          <?php print render($page['three_33_top']); ?>
          <?php print render($page['three_33_first']); ?>
          <?php print render($page['three_33_second']); ?>
          <?php print render($page['three_33_third']); ?>
          <?php print render($page['three_33_bottom']); ?>
        </div>
      <?php endif; ?>

      <?php if ($breadcrumb): print $breadcrumb; endif; ?>

      <div id="content-column">
        <div class="content-inner">

          <?php print render($page['highlighted']); ?>

          <<?php print $tag; ?> id="main-content" role="main">

          <?php print render($title_prefix); ?>
          <?php if ($title || $primary_local_tasks || $secondary_local_tasks || $action_links = render($action_links)): ?>
            <header id="main-content-header">

              <?php if ($title): ?>
                <h1 id="page-title"<?php print $attributes; ?>>
                  <?php// print $title; ?>
                </h1>
              <?php endif; ?>

              <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
                <div id="tasks">

                  <?php if ($primary_local_tasks): ?>
                    <ul class="tabs primary clearfix"><?php // print render($primary_local_tasks); ?></ul>
                  <?php endif; ?>

                  <?php if ($secondary_local_tasks): ?>
                    <ul class="tabs secondary clearfix"><?php print render($secondary_local_tasks); ?></ul>
                  <?php endif; ?>

                  <?php if ($action_links = render($action_links)): ?>
                    <ul class="action-links clearfix"><?php print $action_links; ?></ul>
                  <?php endif; ?>

                </div>
              <?php endif; ?>

            </header>
          <?php endif; ?>
          <?php print render($title_suffix); ?>

          <!-- region: Main Content -->
          

          <?php print $feed_icons; ?>

        </<?php print $tag; ?>>

        <?php print render($page['content_aside']); ?>

      </div>
    </div>

    <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?>
    <?php print render($page['tertiary_content']); ?>

  </div>
</div>

<?php if (
  $page['footer'] ||
  $page['four_first'] ||
  $page['four_second'] ||
  $page['four_third'] ||
  $page['four_fourth']
): ?>
  <footer role="contentinfo">
    <?php if (
      $page['four_first'] ||
      $page['four_second'] ||
      $page['four_third'] ||
      $page['four_fourth']
    ): ?>
      <!-- Four column Gpanel -->
      <div class="at-panel gpanel panel-display four-4x25 clearfix">
        <div class="panel-row row-1 clearfix">
          <?php print render($page['four_first']); ?>
          <?php print render($page['four_second']); ?>
        </div>
        <div class="panel-row row-2 clearfix">
          <?php print render($page['four_third']); ?>
          <?php print render($page['four_fourth']); ?>
        </div>
      </div>
    <?php endif; ?>
    <?php if ($page['footer']): print render($page['footer']); endif; ?>
  </footer>
<?php endif; ?>

</div><!-- //End #page, .container -->

<?php if ($collapsible = render($page['collapsible'])): ?>
  <section id="section-collapsible" class="section-collapsible clearfix">
    <h2 class="collapsible-toggle"><span class="togglebg"><a href="#"
                                                             title="<?php print t('Toggle collapsible region'); ?>"><?php print t('Toggle collapsible region'); ?></a></span>
    </h2>
    <?php print $collapsible; ?>
  </section>
<?php endif; ?>