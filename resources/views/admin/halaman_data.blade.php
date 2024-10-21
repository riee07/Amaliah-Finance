<div class="container mx-auto p-8 h-screen">
        <div class="bg-white shadow-lg text-white p-4 rounded-lg mb-8">
            <div class="h1 text-2xl pl-5 bg-green-700 rounded-lg py-3 font-semibold -mx-4 ">Cek Data Pembayaran Siswa</div>
            <div class="mt-4 flex ">
                <input type="text" placeholder="Cari Siswa"
                    class="w-full text-gray-700 p-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 shadow-md"><br>
                <button
                    class="mt-2 bg-green-500 hover:bg-green-700 text-white ml-5 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 ">
                    <i class='bx bx-search text-white text-[20px]'></i>
                    Cari Siswa
                </button>
            </div>
        </div>
<br><br>
        <!-- Informasi Siswa -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-8 border border-gray-500">
            <h2 class="text-xl font-semibold mb-4 bg-green-700 text-white  rounded-md py-2 px-2 -mt-6 -mx-6">Informasi Siswa</h2>
            <table class="table-auto w-full text-left text-sm mt-2">
                <tbody>
                    <tr class="bg-gray-200 rounded-md">
                        <td class="py-2">NIS:</td>
                        <td class="py-2 ">{{$nis}}</td>
                    </tr>
                    <tr>
                        <td class="py-2">Nama:</td>
                        <td class="py-2">{{$nama}}</td>
                    </tr>
                    <tr class="bg-gray-200 w-full"></tr>
                        <td class="py-2">Nama Orang Tua:</td>
                        <td class="py-2">{{$nama_ortu}}</td>
                    </tr>
                    <tr>
                        <td class="py-2">Kelas:</td>
                        <td class="py-2">{{$kelas}}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pembayaran -->
        <div class="bg-white shadow-lg rounded-lg p-6 mx-auto">
            <div class="mb-4 flex justify-between">
                <div class="h1 text-xl pl-5 bg-green-700 rounded-lg py-2 font-semibold text-white w-full">Pembayaran</div>

                
            </div>
            <div class="mt-7">
                <button
                    class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900">
                    + Tambah Data Siswa
                </button>
                <button
                    class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900">
                    <i class='bx bx-file-blank text-md text-white'></i>Upload Excel
                </button>
            </div>
            <br>
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto text-sm">
                    <thead>
                        <tr class="bg-green-700 text-white">
                            <th class="py-3 px-4">No</th>
                            <th class="py-3 px-4">Nama</th>
                            <th class="py-3 px-4">Jenis</th>
                            <th class="py-3 px-4">Nomor Induk</th>
                            <th class="py-3 px-4">Pembayaran</th>
                            <th class="py-3 px-4">Tanggal</th>
                            <th class="py-3 px-4">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <!-- Contoh Data -->
                        <tr>
                            <td class="border px-4 py-2">1</td>
                            <td class="border px-4 py-2">Siti Sahara</td>
                            <td class="border px-4 py-2">Seragam</td>
                            <td class="border px-4 py-2">123456789</td>
                            <td class="border px-4 py-2">Rp 500.000</td>
                            <td class="border px-4 py-2">10-10-2024</td>
                            <td class="border px-4 py-2">
                                <button href="" class="bg-teal-500 hover:bg-blue-700 text-white py-1 px-3 rounded-lg mr-2">Edit</button>
                                <button href="" class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded-lg mt-2">Hapus</button>
                            </td>
                        </tr>
                        <!-- Tambahkan data lain sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>