<?php
    include "script/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Navatel</title>
</head>
<body>
    <?php
        include 'components/header.php';
    ?>
    <div class="shadow-lg max-w-5xl mx-auto my-10 p-4 rounded-lg bg-white dark:bg-slate-900">
        <h2 class="font-semibold text-3xl text-center text-zinc-50">Daftar Pemesan Hotel Navatel</h2>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Pemesan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor Identitas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Kelamin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tipe Kamar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Durasi Penginapan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Discount
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Bayar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "select * from `Pesanan`";
                        $result = mysqli_query($con, $sql);

                        if ($result) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $nama_pemesan = $row['nama_pemesan'];
                                $nomor_identitas = $row['nomor_identitas'];
                                $email = $row['email'];
                                $jenis_kelamin = $row['jenis_kelamin'];
                                $tipe_kamar = $row['tipe_kamar'];
                                $durasi_penginapan = $row['durasi_penginapan'];
                                $discount = $row['discount'];
                                $total_bayar = $row['total_bayar'];

                                echo '
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            '.$id.'
                                        </th>
                                        <td class="px-6 py-4">
                                            '.$nama_pemesan.'
                                        </td>
                                        <td class="px-6 py-4">
                                            '.$nomor_identitas.'
                                        </td>
                                        <td class="px-6 py-4">
                                            '.$email.'
                                        </td>
                                        <td class="px-6 py-4">
                                            '.$jenis_kelamin.'
                                        </td>
                                        <td class="px-6 py-4">
                                            '.$tipe_kamar.'
                                        </td>
                                        <td class="px-6 py-4">
                                            '.$durasi_penginapan.'
                                        </td>
                                        <td class="px-6 py-4">
                                            '.$discount.' %
                                        </td>
                                        <td class="px-6 py-4">
                                            Rp. '.$total_bayar.'
                                        </td>
                                    </tr>
                                ';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
        include 'components/footer.php';
    ?>
</body>
</html>