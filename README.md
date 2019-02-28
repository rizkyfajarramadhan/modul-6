# modul-6
SOAL

1. Jelaskan menggunakan bahasa sendiri perbedaan antara cookies dan session!
2. Bagaimana cara menghapus session dan cookies pada sebuah browser! 
3. Berikan contoh kode dari pembuatan dan menghapus cookies dan session!

JAWABAN

1.Cookie dan session kegunaannya sama, yaitu unutuk menyimpan aktivitas user.Perbedaannya adalah jika session bersifat sementara, jadi
  ketika browser ditutup maka session pun akan dihapus sedang untuk cookie masih tetap dapat diakses asal mengetahui ID cookienya
  
2.-Pilih cookie dan tekan tombol delete (tombol delete) untuk menghapus cookie yang dipilih
  -Tekan tombol clear (tombol clear) untuk menghapus semua cookie
  -Klik kanan nilai Domain cookie dan pilih Clear all dari "..." ("..." adalah nama domain) untuk menghapus semua cookie dari domain
   tersebut.
  
3.setcookie('nama_cookie','nilai_cookie') Untuk men-set cookie
  (setcookie('username','', time() - 1 * 3600) Untuk menghapus cookie
  ($_SESSION['test'] = 'value') Untuk men-set session
  (unset($_SESSION['test'])) Untuk menghapus session
  
  LATIHAN 1
  ![alt text](https://github.com/rizkyfajarramadhan/modul-6/blob/master/lat1.png)
  
  LATIHAN 2
  ![alt text](https://github.com/rizkyfajarramadhan/modul-6/blob/master/lat2.png)
  
  LATIHAN 3
  ![alt text](https://github.com/rizkyfajarramadhan/modul-6/blob/master/lat3.png)
  
  LATIHAN 4
  ![alt text](https://github.com/rizkyfajarramadhan/modul-6/blob/master/lat4.png)
  
  LATIHAN 5
  ![alt text](https://github.com/rizkyfajarramadhan/modul-6/blob/master/lat5.png)
  
  LATIHAN 6
  ![alt text](https://github.com/rizkyfajarramadhan/modul-6/blob/master/lat6.png)
  
  PRAKTIKUM
  ![alt text](https://github.com/rizkyfajarramadhan/modul-6/blob/master/praktikum/beranda.png)
  ![alt text](https://github.com/rizkyfajarramadhan/modul-6/blob/master/praktikum/login.png)
