<!-- NAVIGATION -->
<nav class="fixed min-h-[50px] w-full top-0 bg-[#04062a] uppercase py-[10px] font-bold border border-[#6b6b6b] shadow-lg shadow-black-500/50 opacity-[95%] 
            sm:
            md:max-h-[20px]
            lg:absolute lg:mt-[30px] lg:ml-[10%] lg:w-[80%] lg:rounded-[5px]"
>
    <!-- Burger menu -->
    <input class="block relative h-[35px] w-[35px] z-[5] opacity-0 peer cursor-pointer ml-[10px]
                  sm:
                  md:hidden
                  lg:hidden" 
                  type="checkbox"
    >
    <span class="block h-[3px] w-[27px] absolute z-[2] top-[15px] rounded-[10px] bg-white origin-[0%_0%] duration-[0.4s] peer-checked:rotate-[51deg] ml-[10px]
                sm:
                md:hidden
                lg:hidden"
    ></span>
    <span class="block h-[3px] w-[27px] absolute z-[2] top-[25px] rounded-[10px] bg-white duration-[0.2s] peer-checked:scale-y-0 ml-[10px]
                sm:
                md:hidden
                lg:hidden"
    ></span>
    <span class="block h-[3px] w-[27px] absolute z-[2] top-[35px] rounded-[10px] bg-white origin-[0%_100%] duration-[0.4s] peer-checked:rotate-[-51deg] ml-[10px]
                sm:
                md:hidden
                lg:hidden"
    ></span>
    <!-- LINKS -->
    <div class="hidden peer-checked:flex flex-col peer-checked:h-screen
                sm:
                md:flex md:flex-row md:mt-[0px] md:text-[13px]
                lg:text-[15px]"
    > 
        <a class="px-[10px] text-white hover:text-[#7a7a7a] flex hover:pl-[20px] hover:duration-200 border-t border-[#6b6b6b] p-[30px] mt-[10px]
                sm: 
                md:block md:navSpacing md:hover:pl-[10px] md:py-[5px] md:border-none md:mt-[0px]
                lg:" 
            href=<?= Route::GetRouteByName("home")->link ?> 
        >
            <img src="/resources/images/content/arrow.png" height="20px" width="20px" alt="arrow"
                  class="mr-[10px]
                  sm:
                  md:hidden
                  lg:"
            />
            accueil
        </a>
        <a class="px-[10px] text-white hover:text-[#7a7a7a] flex hover:pl-[20px] hover:duration-200 border-t border-[#6b6b6b] p-[30px] 
                sm: 
                md:block md:navSpacing md:hover:pl-[10px] md:py-[5px] md:border-none 
                lg:" 
            href=<?= Route::GetRouteByName("contact")->link ?> 
        >
            <img src="/resources/images/content/arrow.png" height="20px" width="20px" alt="arrow"
                  class="mr-[10px]
                  sm:
                  md:hidden
                  lg:"
            />
            contact
        </a>
        <a class="px-[10px] text-white hover:text-[#7a7a7a] flex hover:pl-[20px] hover:duration-200 border-t border-[#6b6b6b] p-[30px] 
                sm: 
                md:block md:navSpacing md:hover:pl-[10px] md:py-[5px] md:border-none 
                lg:" 
            href=<?= Route::GetRouteByName("contact")->link ?> 
        >
            <img src="/resources/images/content/arrow.png" height="20px" width="20px" alt="arrow"
                  class="mr-[10px]
                  sm:
                  md:hidden
                  lg:"
            />
            serveurs
        </a>
        <a class="px-[10px] text-white hover:text-[#7a7a7a] flex hover:pl-[20px] hover:duration-200 border-t border-[#6b6b6b] p-[30px] 
                sm: 
                md:block md:navSpacing md:hover:pl-[10px] md:py-[5px] md:border-none 
                lg:" 
            href=<?= Route::GetRouteByName("contact")->link ?> 
        >
            <img src="/resources/images/content/arrow.png" height="20px" width="20px" alt="arrow"
                  class="mr-[10px]
                  sm:
                  md:hidden
                  lg:"
            />
            mods
        </a>
        <a class="px-[10px] text-white hover:text-[#7a7a7a] flex hover:pl-[20px] hover:duration-200 border-t border-[#6b6b6b] p-[30px] 
                sm: 
                md:block md:navSpacing md:hover:pl-[10px] md:py-[5px] md:border-none 
                lg:" 
            href=<?= Route::GetRouteByName("contact")->link ?> 
        >
            <img src="/resources/images/content/arrow.png" height="20px" width="20px" alt="arrow"
                  class="mr-[10px]
                  sm:
                  md:hidden
                  lg:"
            />
            forum
        </a>
        <a class="px-[10px] text-white hover:text-[#7a7a7a] flex hover:pl-[20px] hover:duration-200 border-t border-[#6b6b6b] p-[30px] 
                sm: 
                md:block md:navSpacing md:hover:pl-[10px] md:py-[5px] md:border-none 
                lg:" 
            href=<?= Route::GetRouteByName("contact")->link ?> 
        >
            <img src="/resources/images/content/arrow.png" height="20px" width="20px" alt="arrow"
                  class="mr-[10px]
                  sm:
                  md:hidden
                  lg:"
            />
            blog
        </a>
        <a class="px-[10px] text-white hover:text-[#7a7a7a] flex hover:pl-[20px] hover:duration-200 border-t border-b border-[#6b6b6b] p-[30px] 
                sm: 
                md:block md:hover:pl-[10px] md:py-[5px] md:border-none 
                lg:" 
            href=<?= Route::GetRouteByName("contact")->link ?> 
        >
            <img src="/resources/images/content/arrow.png" height="20px" width="20px" alt="arrow"
                  class="mr-[10px]
                  sm:
                  md:hidden
                  lg:"
            />
            utilisateurs
        </a>
        <p class="flex-1"></p>
        <a class="px-[10px] text-white hover:text-[#7a7a7a] flex hover:pl-[20px] hover:duration-200 border-t border-[#6b6b6b] p-[30px] 
                sm: 
                md:block md:navSpacing md:hover:pl-[10px] md:py-[5px] md:border-none 
                lg:" 
            href=<?= Route::GetRouteByName("contact")->link ?> 
        >
            <img src="/resources/images/content/arrow.png" height="20px" width="20px" alt="arrow"
                  class="mr-[10px]
                  sm:
                  md:hidden
                  lg:"
            />
            connexion
        </a>
        <a class="px-[10px] text-white hover:text-[#7a7a7a] flex hover:pl-[20px] hover:duration-200 border-t border-[#6b6b6b] p-[30px] 
                sm: 
                md:block md:navSpacing md:hover:pl-[10px] md:py-[5px] md:border-none 
                lg:" 
            href=<?= Route::GetRouteByName("contact")->link ?> 
        >
            <img src="/resources/images/content/arrow.png" height="20px" width="20px" alt="arrow"
                  class="mr-[10px]
                  sm:
                  md:hidden
                  lg:"
            />
            inscription
        </a>
    </div>
</nav>