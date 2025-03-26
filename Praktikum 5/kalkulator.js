// Objek untuk menyimpan operasi matematika dengan arrow functions
const kalkulator = {
  tambah: (...angka) => angka.reduce((acc, num) => acc + num, 0),
  kurang: (...angka) => angka.reduce((acc, num) => acc - num),
  kali: (...angka) => angka.reduce((acc, num) => acc * num, 1),
  bagi: (...angka) =>
    angka.includes(0)
      ? "Tidak bisa membagi dengan nol"
      : angka.reduce((acc, num) => acc / num),
  modulus: (a, b) => (b === 0 ? "Tidak bisa modulus dengan nol" : a % b),
};

// Fungsi utama untuk menjalankan operasi berdasarkan operator yang dipilih
const hitung = (operator, ...angka) => {
  const operasi = {
    "+": kalkulator.tambah,
    "-": kalkulator.kurang,
    "*": kalkulator.kali,
    "/": kalkulator.bagi,
    "%": kalkulator.modulus,
  };

  return operasi[operator]
    ? operasi[operator](...angka)
    : "Operator tidak valid";
};

// Contoh penggunaan dengan angka yang berbeda
console.log(`Hasil Penjumlahan: ${hitung("+", 8, 12, 6)}`);
console.log(`Hasil Pengurangan: ${hitung("-", 100, 45, 15)}`);
console.log(`Hasil Perkalian: ${hitung("*", 4, 3, 5)}`);
console.log(`Hasil Pembagian: ${hitung("/", 81, 9, 3)}`);
console.log(`Hasil Modulus: ${hitung("%", 35, 6)}`);
console.log(`Hasil Modulus dengan nol: ${hitung("%", 15, 0)}`);
