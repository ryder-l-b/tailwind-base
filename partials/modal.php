<div id="modal" class="z-40 overflow-hidden" x-show="showModal" @keyup.enter="alert('Submitted!')" x-transition>
  <div x-transition.opacity class="w-full z-50 flex justify-center items-center h-screen bg-black bg-opacity-70 transition-all fixed">

    <div x-transition.opacity class="bg-white z-60 w-10/12 lg:w-3/6 h-10/12 lg:h-3/6 lg:mx-64 lg:my-96 relative flex flex-wrap">


      <div x-ref="siteimage" x-show="inVideoMode === false" class="w-full lg:w-2/3 xl:w-1/2 min-h-[380px] overflow-y-hidden modal-anim " :class="'bg-site_'+siteDisplay">
        <div class="w-full max-h-[400px] overflow-auto touch-pan-y text-left">
          <p class=" absolute text-shaded">swipe to see</p>
          <img x-show="siteDisplay === 1" class="drop-shadow-md z-70 block xl:hidden w-full" src="images/sites/tilbrook-full-a.png" alt="">
          <img x-show="siteDisplay === 2" class="drop-shadow-md z-70 block xl:hidden w-full" src="images/sites/goliath-full-a.png" alt="">
          <img x-show="siteDisplay === 3" class="drop-shadow-md z-70 block xl:hidden w-full" src="images/sites/classicsportscar-full-a.png" alt="">
          <img x-show="siteDisplay === 4" class="drop-shadow-md z-70 block xl:hidden w-full" src="images/sites/tailored-full-a.png" alt="">
          <img x-show="siteDisplay === 5" class="drop-shadow-md z-70 block xl:hidden w-full" src="images/sites/aldgatevalley-full-a.png" alt="">
          <img x-show="siteDisplay === 6" class="drop-shadow-md z-70 block xl:hidden w-full" src="images/sites/jennyandgerrys-full-a.png" alt="">
        </div>
      </div>


      <div x-ref="videoplayer" x-show="inVideoMode === true" class="w-full min-h-[380px]">
        <div class="w-full ">
          <p class=" absolute text-shaded">swipe to see</p>
          <video x-show="videoDisplay === 1" poster="images/videos/AutoAds-Thumb.png" class="drop-shadow-md" src="images/videos/AutoAds-Video_1.mp4" type="video/mp4" controls alt=""></video>
          <video x-show="videoDisplay === 2" poster="images/videos/Agile-Award.png" class="drop-shadow-md" src="images/videos/AWARD_5_web_1.mp4" type="video/mp4" controls alt=""></video>
          <!-- <video x-show="siteDisplay === 2" class="drop-shadow-md z-70 block xl:hidden w-full" src="images/videos/goliath-full-a.png" alt="">
          <video x-show="siteDisplay === 3" class="drop-shadow-md z-70 block xl:hidden w-full" src="images/videos/classicsportscar-full-a.png" alt="">
          <video x-show="siteDisplay === 4" class="drop-shadow-md z-70 block xl:hidden w-full" src="images/videos/tailored-full-a.png" alt="">
          <video x-show="siteDisplay === 5" class="drop-shadow-md z-70 block xl:hidden w-full" src="images/videos/aldgatevalley-full-a.png" alt="">
          <video x-show="siteDisplay === 6" class="drop-shadow-md z-70 block xl:hidden w-full" src="images/videos/jennyandgerrys-full-a.png" alt=""> -->
        </div>
      </div>


      <div class="w-full my-auto p-3 space-y-1 bg-white " :class="{'lg:w-1/3 xl:w-1/2': inVideoMode === false}">
        <h4 class="font-bold" x-text="modalTitle">Modal Title</h4>
        <h5 class="font-light text-sm text-slate-600" x-text="modalSubtitle">Subheading 1 | Subheading 2</h5>
        <p class="font-light text-sm text-justify" x-text="siteCopy">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque minima, ea, quae sint distinctio hic, beatae amet veniam labore aliquid architecto enim dignissimos repudiandae? Iusto enim in repellat nihil neque qui ipsum quo fugiat eius dignissimos iste molestias nemo totam ipsa, aut maxime exercitationem maiores? Laborum soluta maxime at eos.
        </p>
        <!-- <button @click="showModal = false">Close Modal</button> -->

      </div>


      <div class="relative cursor-pointer" @click="showModal = false, console.log('Modal Closed')">
        <div class="absolute -right-4 -top-4 rounded-full bg-black aspect-square w-[40px] text-center items-center py-1 border-4 border-white">
          <button @click="showModal = 'false'" class=" text-white"><i class="fa-solid fa-xmark"></i></button>
        </div>
      </div>


    </div>

  </div>
</div>