<div class="flex items-center justify-between flex-col w-full z-50" x-data="{open: false}">
    <div x-show="open" x-transition.origin.bottom.right class="w-full flex p-5 justify-between md:hidden  h-[400px] bg-[#309f42] text-slate-100 shadow-xl  ">
        <div class=" w-[250px] h-full  ">
            <div class="flex">
                <div class="w-[50px] h-[50px] mr-2 border-2 flex items-center justify-center rounded-full"><i class="bx bx-user text-3xl"></i></div>
                <p class="mt-2">$siswa</p>
            </div>
            <div class="flex  flex-col ml-[10px] mt-5 gap-4">
                <div class="flex items-center gap-2 text-center">
                    <i class="bx bx-user text-3xl"></i>
                    <a href="">profil</a>
                </div>
                <div class="flex items-center gap-2 text-center">
                    <i class="bx bx-wallet text-3xl"></i>
                    <a href="">tagihan</a>
                </div>
                <div class="flex items-center gap-2 text-center">
                    <i class="bx bx-money text-3xl"></i>
                    <a href="">pembayaran</a>
                </div>
                <div class="flex items-center gap-2 text-center">
                    <i class="bx bx-history text-3xl"></i>
                    <a href="">riwayat pembayaran</a>
                </div>
                <div class="flex items-center gap-2 text-center">
                    <i class="bx bx-headphone text-3xl"></i>
                    <a href="">hubungi kami</a>
                </div>
            </div>
        </div>

        <i @click="open = !open" class='bx bx-x text-3xl cursor-pointer'></i>
    </div>
    <div x-show="open" @click="open = !open"  x-transition.origin.top.right class=" w-full hidden md:block h-screen bg-[#30ae45 bg-opacity-20 backdrop-blur-sm fixed right-0 z-10">
        <div @click.stop  class="flex float-right   w-[400px] h-full bg-[#30ae45] flex-col p-5 text-slate-200   right-0">
            <div class=" text-xl p-5 ">
                <div class=" text-center">
                    <div class="w-[150px] h-[150px] bg-purple-200 rounded-full m-auto mb-5"></div>
                    <p>$siswa</p>
                </div>

                <div class="flex items-center gap-2 text-center mt-16 hover:text-slate-300">
                    <i class="bx bx-user text-3xl "></i>
                    <a href="">profil</a>
                </div>
                <div class="flex items-center gap-2 text-center mt-5 hover:text-slate-300">
                    <i class="bx bx-wallet text-3xl "></i>
                    <a href="">tagihan</a>
                </div>
                <div class="flex items-center gap-2 text-center mt-5 hover:text-slate-300">
                    <i class="bx bx-money text-3xl"></i>
                    <a href="">pembayaran</a>
                </div>
                <div class="flex items-center gap-2 text-center mt-5 hover:text-slate-300">
                    <i class="bx bx-history text-3xl"></i>
                    <a href="">riwayat pembayaran</a>
                </div>
                <div class="flex items-center gap-2 text-center mt-5 hover:text-slate-300">
                    <i class="bx bx-headphone text-3xl"></i>
                    <a href="">hubungi kami</a>
                </div>
            </div>
            <i @click="open = !open" class='bx bx-x text-3xl cursor-pointer absolute right-0 top-0 '></i>
        </div>
    </div>
    <div class=" flex justify-between w-11/12 mx-5 mt-5">
        <div class="flex items-center justify-around">
            <div class="w-[50px] h-[50px] bg-[#30ae45]"></div>
            <p class="ml-5">smk amaliah 1&2 ciawi</p>
        </div>
        <div class="flex items-center relative justify-around"> 
            <i class='bx bx-bell text-3xl mr-5 text-slate-500 hover:animate-wiggle cursor-pointer'></i>
            <i @click="open = !open" class='bx bx-menu text-3xl text-slate-500 cursor-pointer'></i>
    
        </div>
    </div>
</div>