function check16Digit(input) {
  // Regular expression pattern for matching exactly 16 digits
  const digitPattern = /^\d{16}$/;

  if (!digitPattern.test(input.value)) {
    alert("Isian salah! Data harus 16 digit");
    return;
  }
}

function checkNumber(input) {
  const number = /^\d+$/;

  if (!number.test(input.value)) {
    alert("Harus isi angka");
    return;
  }
}

function clearInput() {
  document.getElementById("nama").value = "";
  document.getElementById("nomor-identitas").value = "";
  document.getElementById("harga").value = "";
  document.getElementById("durasi").value = "";
  document.getElementById("tanggal").value = "";
}

function hitungtotalbayar() {
  let durasi = document.getElementById("durasi").value;
  let tipe_kamar = document.getElementById("tipe-kamar");
  let breakfast = document.getElementById("breakfast");
  let selectedValue = tipe_kamar.options[tipe_kamar.selectedIndex].value;

  let total_bayar = 0;
  let harga;

  if (selectedValue === "standard") {
    harga = 1000000;
  } else if (selectedValue === "deluxe") {
    harga = 2000000;
  } else if (selectedValue === "executive") {
    harga = 3000000;
  }

  total_bayar = harga * durasi;

  if (durasi > 3) {
    total_bayar = total_bayar - total_bayar / 10;
  }

  if (breakfast.checked) total_bayar += 80000 * durasi;

  document.getElementById("total-bayar").value = total_bayar;
  document.getElementById("submit").disabled = false;
}

function changeHarga() {
  let tipe_kamar = document.getElementById("tipe-kamar");
  let selectedValue = tipe_kamar.options[tipe_kamar.selectedIndex].value;

  if (selectedValue == "standard") {
    document.getElementById("harga").value = "Rp. 1.000.000";
  }

  if (selectedValue == "deluxe") {
    document.getElementById("harga").value = "Rp. 2.000.000";
  }

  if (selectedValue == "executive") {
    document.getElementById("harga").value = "Rp. 3.000.000";
  }
}
