<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Harga</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="bg-zinc-50">
    <?php
      include 'components/header.php';
    ?>

    <section class="min-h-screen flex flex-col py-8 sm:px-4 py-16">
      <h1
        class="font-bold text-4xl sm:text-6xl text-center mb-16 sm:mb-32 text-slate-900"
      >
        Daftar Harga
      </h1>
      <table class="table-auto mx-auto gap-4 sm:gap-8 py-4">
        <thead class="bg-slate-200">
          <tr>
            <th
              class="font-semibold text-xl sm:text-3xl px-16 py-2"
              scope="col"
            >
              Jenis
            </th>
            <th
              class="font-semibold text-xl sm:text-3xl px-16 py-2"
              scope="col"
            >
              Harga (Rp)
            </th>
          </tr>
        </thead>
        <tbody>
          <tr
            class="bg-slate-100 hover:bg-slate-100/50 text-slate-700 hover:text-slate-700/50"
          >
            <td class="font-normal text-base sm:text-lg text-center px-4 py-1">
              Standard Room
            </td>
            <td class="font-normal text-base sm:text-lg text-center px-4 py-1">
              1.000.000
            </td>
          </tr>
          <tr
            class="bg-slate-100 hover:bg-slate-100/50 text-slate-700 hover:text-slate-700/50"
          >
            <td class="font-normal text-base sm:text-lg text-center px-4 py-1">
              Deluxe Room
            </td>
            <td class="font-normal text-base sm:text-lg text-center px-4 py-1">
              2.000.000
            </td>
          </tr>
          <tr
            class="bg-slate-100 hover:bg-slate-100/50 text-slate-700 hover:text-slate-700/50"
          >
            <td class="font-normal text-base sm:text-lg text-center px-4 py-1">
              Executive Room
            </td>
            <td class="font-normal text-base sm:text-lg text-center px-4 py-1">
              3.000.000
            </td>
          </tr>
        </tbody>
      </table>
    </section>

    <?php
      include 'components/footer.php';
    ?>
  </body>
</html>
