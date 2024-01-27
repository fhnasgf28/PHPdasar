# PHPdasar

<!-- markdown  -->

## variabel

variabel adalah tempat untuk menyimpan data sehingga bisa kita gunakan lagi di kode program selanjutnya
di php variabel bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data
untuk membuat variabel kita bisa menggunakan tanda $(dolar) diikuti dengan nama variabelnya
penamaan variabel tidak boleh mengandung spasi

## variabel variables

- php memliki kemampuan variable varriables, yaitu membuat variable dari string value string
- walaupun fitur ini ada, tapi fitur ini sangat membingungkan jika digunakan secara luas, jadi disarankan untuk tidak menggunakan fiturr ini kecuali memang diperlukan
- untuk membuat variable dari value variable kita bsa menggunakan $$ diikuti dengan nama variabelnya.

## contant

- variabel di php sifatnya mutable, artinya bisa dirubah
- jika kita ingin membuat variable yang immutable (tidak bisa dirubah), maka tidak bisa kita lakukan di php
- sebagai gantinya, terdapat fitur yang namanya constant
- constant adalah tempat untuk meyimpan dta yang tidak bisa dirubah lagi setelah di deklarasikan
- untuk membuat konstant kita bisa menggunakan function define()
- best praktik pembuatan nama constant adalah menggunakan UPPER_CASE

## Data Null

- Nilai NUll merepresentasikan sebuah variabel tanpa nilai
- saat kita membuat variabel , lalu ingin menghapus data yang terdapat di variabel tersebut, kita bisa mennggunakan NULL untuk mengosongkan variabel tersebut
- untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case Sensitivf)
- untuk mengecek apakah sebuah data bernilai NULL, kita bisa menggunakan funtion is_null($variable)

## Data Array

- array adalah tipe data yang berisikan kosong atau banyak data
- array di PHP bisa berisikan data dengan jenis yang berbeda beda
- array di PHP memiliki panjang dinamis, artinya kita bisa menambahkan data ke array sebanyak-banyaknya, tidak dibatasi kapasitasnya.

## Operator aritmatika

## operator penugasan

-operator penugasan diPHP sama seperti bahasa pemrograman lain, yaitu dengan menggunakan karakter = (sama dengan);

- operator penugasan sudah sering kita gunakan, terutama ketika mengubah value sebuah variabel
- namun selain itu, operasi penugasan juga bisa digunakan untuk operasi aritmatika

## operator perbandingan

- operator perbandingan, seperti namanya,digunakan untuk membandingkan dua buah value
- hasil dri operator perbandingan adalah boolean, true jika perbandingannya benar, false jika perbandingan adalah salah.

## Operator Logika

- operator Logika adalah operator untuk membandingkan dua nilai boolean
- hasil dari operator logika adalah boolean lagi

## Increment dan Decrement

- PHP mendukung gaya bahasa pemrograman C untuk menaikkan dan menurunkann data numbe sejumlah 1 angka
- ini bisa mempersingkat kita ketika ingin menaikkan data

## Operator Array

- Di PHP, array memiliki operator khusus
- Mungkin terlihat mirip dengan operator - operator sebelumnya, tapi cara kerjanya sedikit berbeda

## Expression, Statement & Block

### expression adalah bagian terpenting PHP

- di PHP, hampir semua kode yang kita tulis adalah sebuah expression
- secara sederhana, expression adalah apapun yannng memiliki nilai atau value

### statement bisa dibilang kalimat lengkap dalam bahasa indonesia

- sebuah statement berisikan execution komplit, biasanya diakhiri dengan koma

### Block

- block adalah kumpulan statement yang terdiri dari nol atau lebih statement
- block diawali dan diakhiri dengan kurung kurawal {}

## Dot Operator

- Dot(titik) operatoryang bisa kita gunakan untuk menambahkann strinng denngan data lain (bisa string atau tipe data lainnya)
- sebenarnya kita bisa menggunakan +(plus) untuk menambahkan string, namun jika kita coba tambahkan string dengan tipe data number, maka akan terjadi error. Oleh karena itu direkomendasikan menggunakan .(dot) untuk menambahkan string dengan data lain.
  ### konnversi ke Number dan sebaliknya
- kadang kita sering melakukan konversi tipe data dari stringn ke number (int/float) atau sebaliknya
- di PHP untuk melakukan konversi cukup mudah, kita hanya perlu menggunakan tanda kurung(tipe data)
- Tipe data untuk string adalah string, untuk number bisa menggunakan innt untuk integer dan float unntuk floating point

### Mengakses Karakter

- String di PHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku.
- sama seperti di array, inndex pertama dimulai dari 0
- jika kita mengakses index melebihi karakter di string, maka akan terjadi error.

### Variable Parsing

- khusus string menggunakann double quote atau heredoc, kita bisa menggunakan karakter $unnntuk menngakses variable
- ini memudahkan ketika kita ingin menggabungkan string dengan variabel
- cara penggunaanya adalah dengan menggunakan karakter $ lalu diikuti dengan nama variabelnnya.

## If Statement

- dalam PHP, if adalah salah satu kata kunci yang digunakan untuk percabangan
- percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi
- hampir di semua bahasa pemrogramann mendukung if expression
  ### Syntax Alternatif
  - Selain menggunakan {} (kurung kurawal), PHP juga menyediakan syntax alternatif untuk menggunakann if, yaitu dengan mennggunakan :(titik dua)
  - Namun untuk menggunakan ini, kita harus menggunakan kata kunci endif

## Swtich Statement

- Perintah Switch di gunakan untuk memeriksa kebenaran suatu nilai dengan memiliki banyak pemilihan atau nilai pengecekannya.

## Ternary Operator

- kadang ada kaasus kita butuh melakukan pengecekan kondisi menggunakan if statement, lalu jika benar kita ingin memberi nilai terhadap variabel dengan nilai X dan jika salah dengan nilai Y
- penggunaan if statement pada kasus seperti ini bisa dipersingkat dengan menggunakan ternary operator
- ternary operator menggunakan kata kunci ? dan :

## For Loop

- for adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan
- blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi

### sintak perulangan for

- init statement akan dieksekusi hanya sekali di awal sebelum perulangan
- kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti.
  -post statement akan dieksekusi setiap kali diakhir perulangan
- init statement, kondisi dan post statement tidak wajib diisi, jika kondisi tidak diisi, berarti kondisi selalu bernilai true.

### while loop

- while loop adalah versi perulangan yang lebih sederhana dibanding for loop
- di while loop, hanya terdapat kondisi perulangan, tannpa ada init statement dan post statement.

