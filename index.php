<?php get_header(); ?>
<div class="font-[family-name:var(--font-plus-jakarta-sans)]">
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
							include 'countdown.php';
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
  <section class="p-6" id="about">
    <div class="mx-auto max-w-screen-xl">
      <div class="flex gap-1 mb-6 text-slate-900">
        <div class="w-4 h-10 bg-gradient-to-b from-saffron-500 to-saffron-900 rounded-lg"></div>
        <h2 class="text-4xl font-medium">About Conference</h2>
      </div>
      <div class="flex w-full flex-col items-center gap-5 md:flex-row">
        <div class="md:w-[40%] lg:w-[30%]">
          <img src="<?= bloginfo('template_directory') ?>/assets/images/edwin-andrade-4V1dC_eoCwg-unsplash.webp"
            alt="conference" loading="lazy" width="360" height="450" decoding="async" data-nimg="1"
            class="aspect-[4/5] h-auto w-full object-cover md:h-[400px] md:w-auto lg:h-[450px]"
            style="color:transparent">
        </div>
        <div class="flex flex-col md:w-[60%] lg:w-[70%]">
          <p class="text-base font-normal md:text-xl">Welcome to the first International Conference on Artificial
            Intelligence Technology &#40;ICAIT 2025&#41;&#33;
          </p>
          <p class="mt-7 text-base font-normal md:text-xl">The International Conference on Artificial Intelligence
            Technology &#40;ICAIT&#41; is a venue dedicated to showcase the recent advancements, research, and
            applications in
            the field of Artificial Intelligence &#40;AI&#41;. This conference aspires to bring together academics,
            researchers,
            and professionals to share thoughts, promote collaborations, and inspire innovative solutions to real-world
            challenges.</p>
          <p class="mt-7 text-base font-normal md:text-xl">The 1<sup>st</sup> ICAIT &#40;ICAIT2025&#41; will be held in
            the
            vibrant city,
            Yogyakarta, Indonesia on September 10<sup>th</sup> and 11<sup>th</sup>, 2025. It is hosted by the Artificial
            Intelligence Research
            Group of the Informatics Department, Faculty of Industrial Technology, Universitas Ahmad Dahlan, Indonesia.
            The 1<sup>st</sup> ICAIT is held under the theme of &#34;Artificial Intelligence: Driving Prosperity and
            Sustainability in
            the Modern World&#34;</p>
          <p class="mt-7 text-base font-normal md:text-xl">Yogyakarta, Indonesia, is a city known for its rich cultural
            heritage and academic nuance, provides the perfect backdrop for this event. Participants will have the
            opportunity to immerse themselves in a city that seamlessly blends tradition and modernity, making ICAIT2025
            not just a professional milestone but also a memorable cultural experience.
          </p>
          <p class="mt-7 text-base font-normal md:text-xl">Join us at ICAIT2025 as we explore the transformative
            potential of AI in shaping a better future for society.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gradient-to-br from-san-juan-800 to-san-juan-950 p-6 text-slate-50" id="speaker">
    <div class="mx-auto max-w-screen-xl">
      <div class="flex gap-1 mb-6 text-slate-50">
        <div class="w-4 h-10 bg-gradient-to-b from-saffron-500 to-saffron-900 rounded-lg"></div>
        <h2 class="text-4xl font-medium">Conference Speaker</h2>
      </div>
      <div class="flex flex-wrap items-start justify-evenly gap-4">
        <div
          class="border bg-card text-card-foreground shadow-sm mx-auto flex max-w-[260px] flex-col items-center rounded-xl border-none bg-gradient-to-b from-saffron-400 to-saffron-400 p-4 transition-colors duration-300 ease-out hover:from-saffron-400 hover:to-saffron-800 hover:text-slate-50">
          <div class="mb-2 w-full">
            <img src="<?= bloginfo('template_directory') ?>/assets/images/speaker-1.webp"
              alt="Prof. Dr-Ing. Hendro Wicaksono" loading="lazy" width="232" height="330" decoding="async"
              data-nimg="1" class="h-[350px] rounded-lg object-cover" style="color:transparent">
          </div>
          <div class="self-start text-left">
            <h3 class="text-lg font-medium">Prof. Dr-Ing. Hendro Wicaksono</h3>
            <p class="text-sm">Constructor University, Germany</p>
          </div>
        </div>
        <div
          class="border bg-card text-card-foreground shadow-sm mx-auto flex max-w-[260px] flex-col items-center rounded-xl border-none bg-gradient-to-b from-saffron-400 to-saffron-400 p-4 transition-colors duration-300 ease-out hover:from-saffron-400 hover:to-saffron-800 hover:text-slate-50">
          <div class="mb-2 w-full">
            <img src="<?= bloginfo('template_directory') ?>/assets/images/speaker-2.webp"
              alt="Prof. Drs. Ir. Abdul Fadlil, M.T., PhD." loading="lazy" width="232" height="330" decoding="async"
              data-nimg="1" class="h-[350px] rounded-lg object-cover" style="color:transparent">
          </div>
          <div class="self-start text-left">
            <h3 class="text-lg font-medium">Prof. Drs. Ir. Abdul Fadlil, M.T., PhD.</h3>
            <p class="text-sm">Universitas Ahmad Dahlan, Indonesia</p>
          </div>
        </div>
        <div
          class="border bg-card text-card-foreground shadow-sm mx-auto flex max-w-[260px] flex-col items-center rounded-xl border-none bg-gradient-to-b from-saffron-400 to-saffron-400 p-4 transition-colors duration-300 ease-out hover:from-saffron-400 hover:to-saffron-800 hover:text-slate-50">
          <div class="mb-2 w-full">
            <img src="<?= bloginfo('template_directory') ?>/assets/images/speaker-3.webp"
              alt="Assoc. Prof. Dr. Amelia Ritahani Bt. Ismail" loading="lazy" width="232" height="330" decoding="async"
              data-nimg="1" class="h-[350px] rounded-lg object-cover" style="color:transparent">
          </div>
          <div class="self-start text-left">
            <h3 class="text-lg font-medium">Assoc. Prof. Dr. Amelia Ritahani Bt. Ismail</h3>
            <p class="text-sm">International Islamic University of Malaysia, Malaysia</p>
          </div>
        </div>
        <div
          class="border bg-card text-card-foreground shadow-sm mx-auto flex max-w-[260px] flex-col items-center rounded-xl border-none bg-gradient-to-b from-saffron-400 to-saffron-400 p-4 transition-colors duration-300 ease-out hover:from-saffron-400 hover:to-saffron-800 hover:text-slate-50">
          <div class="mb-2 w-full">
            <img src="<?= bloginfo('template_directory') ?>/assets/images/speaker-1.jpeg" alt="john doe" loading="lazy"
              width="232" height="330" decoding="async" data-nimg="1" class="h-[350px] rounded-lg object-cover"
              style="color:transparent">
          </div>
          <div class="self-start text-left">
            <h3 class="text-lg font-medium">John Doe</h3>
            <p class="text-sm">Univ A</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-6" id="callforpaper">
    <div class="mx-auto max-w-screen-xl">
      <div class="flex gap-1 mb-6 text-slate-900">
        <div class="w-4 h-10 bg-gradient-to-b from-saffron-500 to-saffron-900 rounded-lg"></div>
        <h2 class="text-4xl font-medium">Call for Paper</h2>
      </div>
      <div class="flex gap-1 mb-2 text-slate-900">
        <div class="w-4 h-[30px] bg-gradient-to-b from-san-juan-500 to-san-juan-950 rounded-lg"></div>
        <h3 class="text-2xl font-medium">Conference Tracks</h3>
      </div>
      <p class="mb-4">We invite researchers to submit high-quality and unpublished research papers in the following
        topics:</p>
      <ul class="grid list-none grid-cols-2 gap-y-3 text-base font-medium">
        <li>AI in Agriculture, Plantation, and Forestry</li>
        <li>AI in Education and Learning System</li>
        <li>AI in Linguistics</li>
        <li>AI in Marine and Fishery</li>
        <li>AI in Networks and Security</li>
        <li>AI in Smart Home and Smart City</li>
        <li>AI in Social Computation</li>
        <li>AI in Robotic</li>
        <li>AI in Business, e-Commerce, and Finance</li>
        <li>AI in Health, Medicine, and Healthcare Technology</li>
        <li>AI in Logistics and Supply Chain</li>
        <li>AI in Manufacture</li>
        <li>AI in Natural Science (Biology, Chemistry, and Physics)</li>
        <li>AI in Software Engineering</li>
        <li>AI in Transportation and Automotive</li>
        <li>AI in Disaster Mitigation</li>
        <li>AI Applications in Various Domains</li>
      </ul>
      <p class="mt-4">Accepted papers will be submitted for inclusion into IEEE Xplore subject to meeting IEEE Xplores
        scope and quality requirements.</p>
    </div>
  </section>
  <section class="p-6" id="forauthor">
    <div class="mx-auto max-w-screen-xl">
      <div class="flex gap-1 mb-6 text-slate-900">
        <div class="w-4 h-10 bg-gradient-to-b from-saffron-500 to-saffron-900 rounded-lg"></div>
        <h2 class="text-4xl font-medium">For Author</h2>
      </div>
      <div class="flex flex-col gap-8 md:flex-row">
        <div class="w-full md:w-2/5">
          <div class="flex gap-1 mb-2 text-slate-900">
            <div class="w-4 h-[30px] bg-gradient-to-b from-san-juan-500 to-san-juan-950 rounded-lg"></div>
            <h3 class="text-2xl font-medium">Timeline</h3>
          </div>
        </div>
        <div class="w-full space-y-8 md:w-3/5">
          <div class="space-y-2">
            <div class="flex gap-1 mb-2 text-slate-900">
              <div class="w-4 h-[30px] bg-gradient-to-b from-san-juan-500 to-san-juan-950 rounded-lg"></div>
              <h3 class="text-2xl font-medium">Paper Preparation</h3>
            </div>
            <ol class="w-full list-decimal pl-6 text-base md:text-lg">
              <li class="overflow-wrap break-words">Prospective authors are invited to submit complete source papers of
                maximum 6 pages (including figures, tables, and references in LaTeX or doc/docx format) according to the
                IEEE conference template standards which can be found in the following link:
                <!-- --> <a class="underline"
                  href="https://www.ieee.org/conferences/publishing/templates.html.">https://www.ieee.org/conferences/publishing/templates.html.</a>
              </li>
              <li>Please submit your paper via EDAS. New users are required to register with EDAS before paper
                submission.
              </li>
            </ol>
          </div>
          <div class="space-y-2">
            <div class="flex gap-1 mb-2 text-slate-900">
              <div class="w-4 h-[30px] bg-gradient-to-b from-san-juan-500 to-san-juan-950 rounded-lg"></div>
              <h3 class="text-2xl font-medium">No Show Policy</h3>
            </div>
            <p class="text-base md:text-lg">Please take note that IEEE has a strict policy on No-Show. Therefore, if
              your paper is accepted, one of the authors OR their representatives MUST PRESENT their paper at the
              conference. Papers with no-show participants without a valid reason will not be submitted to IEEExplore.
              NO REFUND of the paid fees may be claimed by the no-show authors.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-6" id="committee">
    <div class="mx-auto max-w-screen-xl">
      <div class="flex gap-1 mb-6 text-slate-900">
        <div class="w-4 h-10 bg-gradient-to-b from-saffron-500 to-saffron-900 rounded-lg"></div>
        <h2 class="text-4xl font-medium">Steering Committee</h2>
      </div>
      <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
        <div class="w-full">
          <h2 class="mb-2 text-2xl font-medium">Steering Committee</h2>
          <div class="space-y-2">
            <div class="flex flex-col gap-0.5 font-medium md:flex-row md:gap-1">
              <p class="text-sm md:text-base">Dr. Dewi Pramudi Ismi, S.T., M.Sc., M.Comp.Sc
                &#40;Universitas Ahmad Dahlan, Indonesia&#41;
              </p>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h2 class="mb-2 text-2xl font-medium">General Chair</h2>
          <div class="space-y-2">
            <div class="flex flex-col gap-0.5 font-medium md:flex-row md:gap-1">
              <p class="text-sm md:text-base">Dr. Dewi Pramudi Ismi, S.T., M.Sc., M.Comp.Sc
                &#40;Universitas Ahmad Dahlan, Indonesia&#41;
              </p>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h2 class="mb-2 text-2xl font-medium">Publication Chair</h2>
          <div class="space-y-2">
            <div class="flex flex-col gap-0.5 font-medium md:flex-row md:gap-1">
              <p class="text-sm md:text-base">Andri Pranolo, S.T., M.Cs., PhD
                &#40;Universitas Ahmad Dahlan, Indonesia&#41;
              </p>
            </div>
          </div>
        </div>
        <div class="w-full">
          <h2 class="mb-2 text-2xl font-medium">Program Committee</h2>
          <div class="space-y-2">
            <div class="flex flex-col gap-0.5 font-medium md:flex-row md:gap-1">
              <p class="text-sm md:text-base">Sheraton Prawestri, S.Kom., M.Cs.
                &#40;Universitas Ahmad Dahlan, Indonesia&#41;
              </p>
            </div>
          </div>
          <div class="space-y-2">
            <div class="flex flex-col gap-0.5 font-medium md:flex-row md:gap-1">
              <p class="text-sm md:text-base">Ninda Khairunnisa, S.T., M.Sc.
                &#40;Universitas Ahmad Dahlan, Indonesia&#41;
              </p>
            </div>
          </div>
          <div class="space-y-2">
            <div class="flex flex-col gap-0.5 font-medium md:flex-row md:gap-1">
              <p class="text-sm md:text-base">Jihad Rahmawan, S.T., M.Sc.
                &#40;Universitas Ahmad Dahlan, Indonesia&#41;
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-6" id="registration">
    <div class="mx-auto max-w-screen-xl">
      <div class="flex gap-1 mb-6 text-slate-900">
        <div class="w-4 h-10 bg-gradient-to-b from-saffron-500 to-saffron-900 rounded-lg"></div>
        <h2 class="text-4xl font-medium">Registration</h2>
      </div>
      <div class="space-y-8">
        <div>
          <div class="flex gap-1 mb-2 text-slate-900">
            <div class="w-4 h-[30px] bg-gradient-to-b from-san-juan-500 to-san-juan-950 rounded-lg"></div>
            <h3 class="text-2xl font-medium">Registration Fee</h3>
          </div>
          <div class="rounded-md border border-gray-300 mt-2">
            <div class="relative w-full overflow-auto">
              <table class="w-full caption-bottom text-sm">
                <thead class="[&_tr]:border-b">
                  <tr
                    class="transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted border-b border-gray-300">
                    <th
                      class="px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 h-12 border-r border-gray-300"
                      rowspan="2"></th>
                    <th
                      class="px-4 align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 h-12 text-center"
                      colspan="2">Student</th>
                    <th
                      class="px-4 align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 h-12 text-center"
                      colspan="2">Professional</th>
                  </tr>
                  <tr
                    class="transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted border-b border-gray-300">
                    <th
                      class="px-4 align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 h-12 border-r border-gray-300 text-center">
                      International</th>
                    <th
                      class="px-4 align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 h-12 border-r border-gray-300 text-center">
                      Local</th>
                    <th
                      class="px-4 align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 h-12 border-r border-gray-300 text-center">
                      International</th>
                    <th
                      class="px-4 align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0 h-12 text-center">
                      Local</th>
                  </tr>
                </thead>
                <tbody class="[&_tr:last-child]:border-0">
                  <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 border-r border-gray-300 font-medium">
                      Non
                      IEEE Member</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 border-r border-gray-300 text-center">
                      250
                      USD</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 border-r border-gray-300 text-center">
                      4,000,000 IDR</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 border-r border-gray-300 text-center">
                      350
                      USD</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 text-center">5,500,000 IDR</td>
                  </tr>
                  <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 border-r border-gray-300 font-medium">
                      IEEE
                      Member</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 border-r border-gray-300 text-center">
                      200
                      USD</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 border-r border-gray-300 text-center">
                      3,000,000 IDR</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 border-r border-gray-300 text-center">
                      250
                      USD</td>
                    <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 text-center">4,000,000 IDR</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="flex justify-center">
          <a href="https://bit.ly/ICAIT2025-registration" target="_blank" rel="noopener noreferer">
            <button
              class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 text-primary-foreground h-11 rounded-md px-8 bg-san-juan-700 hover:bg-san-juan-700/90">Register
              Here</button>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>
<?php
// if (have_posts()) {
// 	while (have_posts()) {
// 		the_post();
// 		get_template_part('template-parts/content', get_post_format());
// 	}
// }
?>

<?php
get_footer();