<div class="container mx-auto p-8 h-screen">
        <div class="bg-white text-white p-4 rounded-lg mb-8">
            <h1 class="text-2xl pl-5 bg-green-700 rounded-lg py-3 font-semibold">Cek Data Pembayaran Siswa</h1>
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

        <!-- Informasi Siswa -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4 bg-green-700 text-white rounded-md py-2 px-2">Informasi Siswa</h2>
            <table class="table-auto w-full text-left text-sm">
                <tbody>
                    <tr class="bg-gray-200 w-full rounded-md">
                        <td class="py-2">NIS:</td>
                        <td class="py-2 ">{{$nis}}</td>
                    </tr>
                    <tr>
                        <td class="py-2">Nama:</td>
                        <td class="py-2">{{$nama}}</td>
                    </tr>
                    <tr class="bg-gray-200 w-full rounded-md"></tr>
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
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="mb-4 flex justify-between">
                <h2 class="text-xl font-semibold">Pembayaran</h2>
                <button
                    class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
                    Hapus Semua Data
                </button>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full table-auto text-sm">
                    <thead>
                        <tr class="bg-green-600 text-white">
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
                                <button href="" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded-lg mr-2">Edit</button>
                                <button href="" class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded-lg">Hapus</button>
                            </td>
                        </tr>
                        <!-- Tambahkan data lain sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
