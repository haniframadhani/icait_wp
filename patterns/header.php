<?php

/**
 * Title: Header
 * Slug: icait/header
 */
?>
<header class="fixed top-0 z-50 w-full bg-san-juan-800 text-slate-50 transition-transform duration-300 translate-y-0">

  <div class="mx-auto flex max-w-screen-xl items-center justify-between px-6 py-4">
    <a href="<?php echo get_bloginfo('url'); ?>/#hero" class="text-3xl font-bold uppercase">
      <?php echo get_bloginfo('name'); ?>
    </a>
    <div class="hidden lg:block">
      <nav aria-label="Main" data-orientation="horizontal" dir="ltr"
        class=" relative z-10 flex max-w-max flex-1 items-center justify-start">
        <div style="position:relative">
          <?php
          function add_link_class($atts, $item, $args)
          {
            if (isset($args->theme_location) && $args->theme_location === 'primary') {
              $atts['class'] = 'group inline-flex h-10 w-max items-center justify-center rounded-md bg-background px-4 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground focus:outline-none disabled:pointer-events-none disabled:opacity-50 data-[active]:bg-accent/50 data-[state=open]:bg-accent/50 bg-san-juan-600/0 text-sm text-slate-50 hover:bg-san-juan-600 hover:text-slate-50';
            }
            return $atts;
          }
          add_filter('nav_menu_link_attributes', 'add_link_class', 10, 3);
          wp_nav_menu(
            array(
              'container' => false,
              'menu_class'      => 'group flex flex-1 list-none items-center justify-center space-x-1',
              'theme_location'  => 'primary',
              'fallback_cb'     => false,
            )
          );
          ?>
        </div>
      </nav>
    </div>
    <button
      class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:shrink-0 h-10 py-2 lg:hidden hover: px-0 text-slate-50 hover:bg-white/10 hover:text-slate-50 [&_svg]:size-8"
      type="button" id="nav-button">
      <i data-lucide="menu"></i>
      <span class="sr-only">Toggle Menu</span>
    </button>
    <div class="absolute lg:hidden bg-san-juan-800 w-full left-0 -top-[20rem] flex justify-center" id="nav-mobile">
      <nav aria-label="Main" data-orientation="horizontal" dir="ltr"
        class=" relative z-10 flex max-w-max flex-1 items-center justify-center">
        <div style="position:relative">
          <?php
          function add_link_class_sm($atts, $item, $args)
          {
            if (isset($args->theme_location) && $args->theme_location === 'primary') {
              $atts['class'] = 'group inline-flex h-10 w-max items-center justify-center rounded-md bg-background px-4 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground focus:outline-none disabled:pointer-events-none disabled:opacity-50 data-[active]:bg-accent/50 data-[state=open]:bg-accent/50 bg-san-juan-600/0 text-sm text-slate-50 hover:bg-san-juan-600 hover:text-slate-50 nav-mobile';
            }
            return $atts;
          }
          add_filter('nav_menu_link_attributes', 'add_link_class_sm', 10, 3);
          wp_nav_menu(
            array(
              'container' => false,
              'menu_class'      => 'group flex flex-col flex-1 list-none items-center justify-center space-x-1',
              'theme_location'  => 'primary',
              'fallback_cb'     => false,
            )
          );
          ?>
        </div>
      </nav>
    </div>
  </div>
</header>