# PHPdasar

<!-- markdown  -->


## variabel

variabel adalah tempat untuk menyimpan data sehingga bisa kita gunakan lagi di kode program selanjutnya
di php variabel bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data 
untuk membuat variabel kita bisa menggunakan tanda $(dolar) diikuti dengan nama variabelnya
penamaan variabel tidak boleh mengandung spasi

## variabel variables

- php memliki kemampuan variable varriables, yaitu membuat variable dari string value string
- walaupun  fitur ini ada, tapi fitur ini sangat membingungkan jika digunakan secara luas, jadi disarankan untuk tidak menggunakan fiturr ini kecuali memang diperlukan
- untuk membuat variable dari value variable kita bsa menggunakan $$ diikuti dengan nama variabelnya.

## contant
- variabel di php sifatnya mutable, artinya bisa dirubah
- jika kita ingin membuat  variable yang immutable (tidak bisa dirubah), maka tidak bisa kita lakukan di php
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