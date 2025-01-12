<?php

/**
 * Title: Hero
 * Slug: icait/hero
 */
?>
<div class="h-screen w-full" id="hero">
  <div class="h-full w-full bg-cover bg-center bg-no-repeat"
    style="background-image: url('<?= bloginfo('template_directory') ?>/assets/images/heroimage.webp')">
    <div class="h-full w-full place-content-center bg-black/20">
      <div class="mx-auto mt-[4.5rem] grid max-w-screen-xl">
        <div class="text-center">
          <p class="mb-2 text-sm text-slate-50 md:text-base">10-11 September 2025, Yogyakarta, Indonesia
            &#40;Hybrid&#41;</p>
          <h1 class="mb-2 text-3xl font-bold leading-tight tracking-wide text-slate-50 md:text-4.5xl">The
            1<sup>st</sup> International Conference on Artificial Intelligence Technology (ICAIT) 2025</h1>
          <p class="mb-4 text-base italic tracking-wide text-slate-50 md:text-xl">&#34;Artificial Intelligence:
            Driving
            Prosperity and Sustainability in the Modern World&#34;</p>
          <p class="mb-1 text-sm text-slate-50 md:text-base">Started in</p>
          <?php
          function add_mx_auto_to_countdown()
          {
            ob_start();
            include('countdown.php');
            $content = ob_get_clean();

            $content = str_replace(
              'class="countdown rounded-lg text-card-foreground shadow-sm relative w-fit overflow-clip border-0 bg-san-juan-950',
              'class="countdown rounded-lg text-card-foreground shadow-sm relative w-fit overflow-clip border-0 bg-san-juan-950 mx-auto',
              $content
            );

            echo $content;
          }
          add_mx_auto_to_countdown();
          ?>
          <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground h-10 px-4 py-2 mt-6 bg-san-juan-700 hover:bg-san-juan-700/90"
            href="https://bit.ly/ICAIT2025-registration" target="_blank" rel="noopener noreferer">Registration
            Here</a>
        </div>
      </div>
    </div>
  </div>
</div>