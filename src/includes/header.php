<?php
global $current_page;
?>

<!--
    __                   __         
   / /_  ___  ____ _____/ /__  _____
  / __ \/ _ \/ __ `/ __  / _ \/ ___/
 / / / /  __/ /_/ / /_/ /  __/ /    
/_/ /_/\___/\__,_/\__,_/\___/_/     -->

<header id="header-desktop" class="pt-6 px-5 relative z-50">
  <div class="container mx-auto flex items-center justify-between">
    <div id="logo-container" class="w-3/12">
      <div class="w-40"><a href="index.php"><img src="images/logo/logo-main.png" alt="main logo"></a></div>
    </div>
    <div id="header-menu" class="w-8/12">
      <div class="xl:flex hidden justify-end xl:flex-wrap flex-auto leading-none  pb-5">
        <div class="px-5 hover:text-grey-700 group relative pb-5 transition-all">
          <a href="about-us.php" class="my-6 tracking-wider font-cursive text-lg text-cyan-600 hover:text-cyan-800">
            About
            <ul class="hidden group-hover:block absolute bg-cyan-600 top-10 w-60 filter drop-shadow-lg backdrop-blur">
              <li><a href="about-us.php" class="transition-all tracking-wider text-lg text-cyan-600 bg-gray-300 hover:bg-white hover:text-cyan-800 p-3 block filter drop-shadow-lg">About Us</a></li>
              <li><a href="#" class="transition-all tracking-wider text-lg text-cyan-600 bg-gray-300 hover:bg-white hover:text-cyan-800 p-3 block filter drop-shadow-lg">Our Work</a></li>
            </ul>
          </a>
        </div>
        <div class="px-5 hover:text-grey-700">
          <a href="contact.php" class="my-6 tracking-wider font-cursive text-lg text-cyan-600 hover:text-cyan-800">Contact Us</a>
        </div>
      </div>

      <div x-data="{ open: false }" class="xl:hidden md:block sm:block xs:block text-none leading-none">

        <a href="#" @click.prevent="open = true" :class="{ 'opened': open }" class="xl:hidden md:block">
          <svg class="block w-12 h-12 stroke-black ml-auto" width="100" height="100" viewBox="0 0 100 100">
            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
            <path class="line line2" d="M 20,50 H 80" />
            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
          </svg>
        </a>
        <div x-show="open" x-transition @click.away="open = false" class="absolute w-full left-0 top-52 z-50">
          <div class="container md:block justify-center text-center 2xl:flex-wrap leading-none text-gray-500 text-base py-5 bg-gray-700">
            <div class="py-3 text-white hover:opacity-70 font-bold">
              <a href="index.php" class="my-6">Home</a>
            </div>
            <div class="py-3 text-white hover:opacity-70"><a href="contact.php" class="my-6 tracking-wider">Contact Us</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header> <!-- header-desktop -->