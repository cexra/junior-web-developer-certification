<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produk Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="bg-slate-50">
    <?php 
      include 'components/header.php';
    ?>

    <section class="min-h-screen flex flex-col gap-8 sm:gap-16 py-8 sm:py-16">
      <h1
        class="font-bold text-4xl sm:text-6xl text-center mb-auto text-slate-900"
      >
        Produk Kami
      </h1>
      <section class="flex flex-col sm:flex-row gap-8 sm:gap-4 mx-4 sm:mx-8 justify-center">
        <figure
          class="flex flex-col border border-slate-200 rounded-lg shadow-lg bg-slate-100 hover:bg-slate-100/50"
        >
          <img
            class="rounded-t-lg w-96 h-96 object-cover"
            src="images/navatel-standard.jpg"
            alt="Standard Room"
          />
          <figcaption
            class="font-semibold text-lg sm:text-2xl text-center my-2 text-slate-700 hover:text-slate-700/50"
          >
            Standard Room
          </figcaption>
        </figure>
        <figure
          class="flex flex-col border border-slate-200 rounded-lg shadow-lg bg-slate-100 hover:bg-slate-100/50"
        >
          <img
            class="rounded-t-lg w-96 h-96 object-cover"
            src="images/navatel-deluxe.jpg"
            alt="Deluxe Room"
          />
          <figcaption
            class="font-semibold text-lg sm:text-2xl text-center my-2 text-slate-700 hover:text-slate-700/50"
          >
            Deluxe Room
          </figcaption>
        </figure>
        <figure
          class="flex flex-col border border-slate-200 rounded-lg shadow-lg bg-slate-100 hover:bg-slate-100/50"
        >
          <img
            class="rounded-t-lg w-96 h-96 object-cover"
            src="images/navatel-family.jpg"
            alt="Executive Room"
          />
          <figcaption
            class="font-semibold text-lg sm:text-2xl text-center my-2 text-slate-700 hover:text-slate-700/50"
          >
            Executive Room
          </figcaption>
        </figure>
      </section>
    </section>

    <?php
      include 'components/footer.php';
    ?>
  </body>
</html>
