<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body class="antialiased">

	<?php do_action('icait_site_before'); ?>

	<?php do_action('icait_header'); ?>

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
							// Periksa apakah $args->theme_location sesuai dengan menu yang dimaksud
							if (isset($args->theme_location) && $args->theme_location === 'primary') {
								// Tambahkan class pada tag <a>
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
								'link_class'        => 'group inline-flex h-10 w-max items-center justify-center rounded-md bg-background px-4 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground focus:outline-none disabled:pointer-events-none disabled:opacity-50 data-[active]:bg-accent/50 data-[state=open]:bg-accent/50 bg-san-juan-600/0 text-sm text-slate-50 hover:bg-san-juan-600 hover:text-slate-50',
								'fallback_cb'     => false,
							)
						);
						?>
					</div>
					<div class="absolute left-0 top-full flex justify-center"></div>
				</nav>
			</div>
			<button
				class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:shrink-0 h-10 py-2 lg:hidden hover: px-0 text-slate-50 hover:bg-white/10 hover:text-slate-50 [&_svg]:size-8"
				type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:Rrb:" data-state="closed">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
					stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
					class="lucide lucide-menu">
					<line x1="4" x2="20" y1="12" y2="12"></line>
					<line x1="4" x2="20" y1="6" y2="6"></line>
					<line x1="4" x2="20" y1="18" y2="18"></line>
				</svg>
				<span class="sr-only">Toggle Menu</span>
			</button>
		</div>
	</header>

	<div id="content" class="site-content flex-grow">

		<?php do_action('icait_content_start'); ?>

		<main>