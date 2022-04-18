function myFunction() {
  const months = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
  ];
  const days = ["Minngu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

  let date = new Date();

  jam = date.getHours();
  tanggal = date.getDate();
  hari = days[date.getDay()];
  bulan = months[date.getMonth()];
  tahun = date.getFullYear();

  if (jam >= 4 && jam <= 10) {
    document.getElementById("text").innerHTML = "Selamat Pagi Admin";
  } else if (jam >= 11 && jam <= 14) {
    document.getElementById("text").innerHTML = "Selamat Siang Admin";
  } else if (jam >= 15 && jam <= 18) {
    document.getElementById("text").innerHTML = "Selamat Sore Admin";
  } else {
    document.getElementById("text").innerHTML = "Selamat Malam Admin";
  }

  let h = date.getHours();
  let m = date.getMinutes();
  let s = date.getSeconds();
  m = checkTime(m);
  s = checkTime(s);

  document.getElementById(
    "date"
  ).innerHTML = `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
  setTimeout(myFunction, 1000);
}

function checkTime(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}
