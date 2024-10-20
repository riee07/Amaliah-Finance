<div class="flex items-center justify-between w-full py-5 px-7 md:px-16 fixed z-50" x-data="{open: false}">
    <div class="flex items-center justify-around">
        <div class="w-[50px] h-[50px] bg-[#3AD354]"></div>
        <p class="ml-5">smk amaliah 1&2 ciawi</p>
    </div>
    <div class="flex items-center relative justify-around">
        <i class='bx bx-bell text-3xl mr-5 text-slate-500 hover:animate-wiggle cursor-pointer'></i>
        <i @click="open = !open" class='bx bx-menu text-3xl text-slate-500 cursor-pointer'></i>

        <div x-show="open" x-transition.origin.top.right class="w-[300px] flex p-5 rounded-md  h-[400px] bg-[#3AD354] text-slate-100 shadow-xl absolute right-[-22px] top-[-21.5px]  ">
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

    </div>
</div>