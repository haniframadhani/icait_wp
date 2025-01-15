<?php

/**
 * Title: Footer
 * Slug: icait/footer
 */
?>
<footer id="contact" class="bg-gradient-to-br from-saffron-400 to-saffron-500 px-6 pb-36 pt-6 text-slate-900 md:p-6">
  <?php do_action('icait_footer'); ?>
  <div class="mx-auto max-w-screen-xl">
    <div class="flex flex-col justify-between gap-3 md:flex-row">
      <div>
        <!-- wp:heading {"level":3, "className":"mb-3 text-2xl font-medium capitalize"} -->
        <h3 class="mb-3 text-2xl font-medium capitalize">Contact</h3>
        <!-- /wp:heading -->
        <!-- wp:list {"className":"flex flex-col gap-1"} -->
        <ul class="flex flex-col gap-1">
          <!-- wp:list-item {"className":"flex items-center gap-2"} -->
          <li class="flex items-center gap-2">
            <!-- wp:html -->
            <i data-lucide="mail"></i>
            <!-- /wp:html -->
            <!-- wp:html -->
            <a href="mailto:icait@tif.uad.ac.id" class="no-underline hover:underline">icait@tif.uad.ac.id</a>
            <!-- /wp:html -->
          </li>
          <!-- /wp:list-item -->
          <!-- wp:list-item {"className":"flex items-center gap-2"} -->
          <li class="flex items-center gap-2">
            <!-- wp:html -->
            <i data-lucide="phone"></i>
            <!-- /wp:html -->
            <!-- wp:html -->
            <a href="tel:6285868576374" class="no-underline hover:underline">+6285868576374</a>
            <!-- /wp:html -->
          </li>
          <!-- /wp:list-item -->
          <!-- wp:list-item {"className":"flex items-center gap-2"} -->
          <li class="flex items-center gap-2">
            <!-- wp:html -->
            <i data-lucide="phone"></i>
            <!-- /wp:html -->
            <!-- wp:html -->
            <a href="tel:6287700653586" class="no-underline hover:underline">+6287700653586</a>
            <!-- /wp:html -->
          </li>
          <!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
      </div>
      <div>
        <!-- wp:heading {"level":3, "className":"mb-3 text-2xl font-medium capitalize"} -->
        <h3 class="mb-3 text-2xl font-medium capitalize">Location</h3>
        <!-- /wp:heading -->
        <!-- wp:html -->
        <iframe
          src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63245.92841422938!2d110.33342608689586!3d-7.803529014607482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x21723fd4d3684f71!2sYogyakarta%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1735287464009!5m2!1sid!2sid'
          width='300' height='300' loading='lazy' referrerPolicy='no-referrer-when-downgrade'></iframe>
        <!-- /wp:html -->
      </div>
      <div>
        <span
          class="mb-2 block text-8xl font-extrabold tracking-wider uppercase"><?php echo get_bloginfo('name'); ?></span>
        <span class="mb-1 block text-base">Started in</span>
        <?php include 'countdown.php' ?>
      </div>
    </div>
  </div>
</footer>
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  lucide.createIcons();
</script>