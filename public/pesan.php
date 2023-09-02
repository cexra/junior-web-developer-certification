<?php
  include 'script/connect.php';

  if(isset($_POST['submit'])) {
    $nama=$_POST['nama'];
    $jenis_kelamin=$_POST['jenis-kelamin'];
    $nomor_identitas=$_POST['nomor-identitas'];
    $email=$_POST['email'];
    $tipe_kamar=$_POST['tipe-kamar'];
    $tanggal=$_POST['tanggal'];
    $durasi=$_POST['durasi'];
    $breakfast=isset($_POST['breakfast']);
    $total_bayar=$_POST['total-bayar'];

    $discount = 0;

    if ($durasi > 3) {
        $discount = 10;
    }

    $sql = "insert into `Pesanan` (nama_pemesan, nomor_identitas, jenis_kelamin, tipe_kamar, durasi_penginapan, discount, total_bayar, email) values('$nama', '$nomor_identitas', '$jenis_kelamin', '$tipe_kamar', '$durasi', '$discount', '$total_bayar', '$email')";
    $result = mysqli_query($con, $sql);

    if($result) {
      header('location:daftar-pesanan.php');
    }
    else {
      die(mysqli_error($con));
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pesan Kamar Hotel</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <?php
      include 'components/header.php';
    ?>

    <section>
      <section
        class="max-w-6xl mx-auto p-4 shadow-lg rounded-lg my-16 flex items-center justify-center flex-col"
      >
        <h1 class="font-bold text-2xl text-center">Pesan Kamar Hotel</h1>

        <form method="post" class="max-w-sm mt-8">
          <div class="mb-6">
            <label
              for="nama"
              class="block mb-2 text-sm font-medium text-zinc-950"
              >Nama Pemesan</label
            >
            <input
              type="text"
              id="nama"
              name="nama"
              class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Abdul Wahid"
              required
            />
          </div>

          <div class="mb-6">
            <label
              for="jenis-kelamin"
              class="block mb-2 text-sm font-medium text-zinc-950"
              >Jenis Kelamin</label
            >

            <div class="flex">
              <div class="flex items-center mr-4">
                <input
                  id="laki-laki"
                  type="radio"
                  checked
                  value="Laki-Laki"
                  name="jenis-kelamin"
                  class="w-4 h-4 text-blue-600 bg-zinc-100 border-zinc-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-zinc-800 focus:ring-2 dark:bg-zinc-700 dark:border-zinc-600"
                />
                <label
                  for="laki-laki"
                  class="ml-2 text-sm font-medium text-zinc-950"
                  >Laki Laki</label
                >
              </div>
              <div class="flex items-center mr-4">
                <input
                  id="perempuan"
                  type="radio"
                  value="Perempuan"
                  name="jenis-kelamin"
                  class="w-4 h-4 text-blue-600 bg-zinc-100 border-zinc-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-zinc-800 focus:ring-2 dark:bg-zinc-700 dark:border-zinc-600"
                />
                <label
                  for="perempuan"
                  class="ml-2 text-sm font-medium text-zinc-950"
                  >Perempuan</label
                >
              </div>
            </div>
          </div>

          <div class="mb-6">
            <label
              for="nomor-identitas"
              class="block mb-2 text-sm font-medium text-zinc-950"
              >Nomor Identitas</label
            >
            <input
              type="text"
              id="nomor-identitas"
              name="nomor-identitas"
              class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="16 digit"
              required
              onchange="check16Digit(this)"
            />
          </div>

          <div class="mb-6">
            <label
              for="email"
              class="block mb-2 text-sm font-medium text-zinc-950"
              >Email</label
            >
            <input
              type="email"
              id="email"
              name="email"
              class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="name@gmail.com"
              required
            />
          </div>

          <div class="mb-6">
            <label
              for="tipe-kamar"
              class="block mb-2 text-sm font-medium text-zinc-950"
              >Tipe Kamar</label
            >
            <select
              id="tipe-kamar"
              class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              name="tipe-kamar"
              onchange="changeHarga()"
            >
              <option value="default" selected>Pilih</option>
              <option value="standard">Standar</option>
              <option value="deluxe">Deluxe</option>
              <option value="executive">Executive</option>
            </select>
          </div>

          <div class="mb-6">
            <label
              for="harga"
              class="block mb-2 text-sm font-medium text-zinc-950"
              >Harga</label
            >
            <input
              type="text"
              id="harga"
              name="harga"
              class="bg-zinc-200 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Rp. 0"
              disabled
            />
          </div>

          <div class="mb-6">
            <label
              for="tanggal"
              class="block mb-2 text-sm font-medium text-zinc-950"
              >Tanggal Pesan</label
            >
            <input
              type="date"
              id="tanggal"
              name="tanggal"
              class="bg-zinc-200 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              min="<?= date('Y-m-d'); ?>"
              required
            />
          </div>

          <div class="mb-6">
            <label
              for="durasi"
              class="block mb-2 text-sm font-medium text-zinc-950"
              >Durasi Menginap
              <span class="text-blue-500">( Hari )</span></label
            >
            <input
              type="number"
              id="durasi"
              name="durasi"
              class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="0 hari"
              required
              onchange="checkNumber(this)"
            />
          </div>

          <div class="flex items-center mb-6">
            <label
              for="breakfast"
              class="mr-2 text-sm font-medium text-zinc-950"
              >Termasuk Breakfast</label
            >
            <input
              id="breakfast"
              type="checkbox"
              value=""
              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
              name="breakfast"
            />
          </div>

          <div class="mb-6">
            <label
              for="total-bayar"
              class="block mb-2 text-sm font-medium text-zinc-950"
              >Total Bayar</label
            >
            <input
              type="text"
              id="total-bayar"
              name="total-bayar"
              class="bg-zinc-200 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Rp. 0"
            />
          </div>

          <div class="flex items-center justify-center gap-4">
            <button
              type="button"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              onclick="hitungtotalbayar()"
            >
              Hitung Total Bayar
            </button>

            <button
              id="submit"
              type="submit"
              name="submit"
              class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
              disabled
            >
              Simpan
            </button>
            <button
              type="button"
              class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
              onclick="clearInput()"
            >
              Cancel
            </button>
          </div>
        </form>
      </section>
    </section>

    <?php
      include 'components/footer.php';
    ?>

    <script src="script/script.js"></script>
  </body>
</html>
