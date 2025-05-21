// Fungsi untuk menghasilkan deret Fibonacci
const fibonacci = (n) => {
  let sequence = [0, 1];

  if (n <= 0) return [];
  if (n === 1) return [0];
  if (n === 2) return sequence;

  for (let i = 2; i < n; i++) {
    sequence.push(sequence[i - 1] + sequence[i - 2]);
  }

  return sequence;
};

// Contoh penggunaan
const jumlahDeret = 10;
const deretFibonacci = fibonacci(jumlahDeret);

console.log(`Deret Fibonacci pertama ${jumlahDeret} angka:`);
console.log(deretFibonacci.join(", "));
