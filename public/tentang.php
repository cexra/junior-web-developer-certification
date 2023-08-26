<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Kami</title>

    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <?php
      include 'components/header.php';
    ?>

    <section>
      <div class="relative w-full">
        <img
          src="images/navatel-tentang-kami.jpg"
          alt="navatel-hero"
          loading="lazy"
          class="object-cover"
        />
        <section class="absolute left-0 right-0 top-1/4">
          <h2 class="font-bold text-7xl text-zinc-50 text-center">Navatel</h2>
          <p class="font-semibold text-4xl text-zinc-50 text-center">
            Temukan Kenyamanan
          </p>
        </section>
      </div>

      <div class="max-w-6xl mx-auto p-4 my-16">
        <p class="font-medium text-xl text-center">
          Navatel adalah sebuah hotel yang menyediakan berbagai macam fasilitas
          untuk memberikan kenyamanan bagi anda. Anda dapat memilih kamar yang
          cocok bagi anda sehingga anda tidak perlu khawatir dan tentunya anda
          akan puas
        </p>
      </div>

      <div class="max-w-6xl p-4 mx-auto">
        <h2 class="text-lg font-semibold text-center">HUBUNGI KAMI</h2>
        <address class="not-italic text-xl text-center">
          Jl. Kapten Abdul Haq Gg. Masjid Albarokah No. 77, Kedamaian, Bandar
          Lampung 351452
        </address>
        <p class="font-medium text-xl text-center">Telp : 0821-8005-7777</p>
        <p class="font-medium text-xl text-center">customer@navatel.com</p>
      </div>
    </section>

    <?php
      include 'components/footer.php';
    ?>
  </body>
</html>
