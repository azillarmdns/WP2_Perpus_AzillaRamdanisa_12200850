<section>
    <h1><?php echo $judul ?></h1>
    <p align='justify'>Pada pengertian codeigniter di atas tadi di jelaskan bahwa codeigniter menggunakan metode MVC. 
              Apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar codeigniter.</p>
    <p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view dan controller.</p>
        <ol type="1">
        <li>Model</li>
    <p align='justify'>Model adalah kelas yang merepresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi.
    Model juga dapat didefinisikan sebagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database.
    Seperti misalnya mengambil data dari database, menginput dan pengolahan database lainnya. Semua instruksi atau fungsi 
    yang berhubungan dengan pengolahan database diletakkan di dlam model. Sebagai contoh, jika ingin membuat aplikasi untuk
    menghitung luas dan keliling lingkaran, maka dapat memodelkan objek lingkaran sebagai model.</p>
    <p align='justify'>Sebagai catatan, semua model harus disimpan di dalam folder application\models</p>
    <li>view</li> 
    <p align='justify'>View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada browser).
    Tampilan dar user interface di kumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer
    dalam melakukan pengembangan tampilan halaman website.</p>
    <li>Controller</li>
    <p align='justify'>Controller merupakan kumpulan instruksi aksi yang menghubungkan model dan view, jadi user tidak akan
    berhubungan dengan model secara langsung, inti nya data yang tersimpan di database (model) di ambil oleh controller dan kemudian
    controller pula yang menampilkan nya ke view. Jadi controller lah yang mengolah instruksi.</p>
    <p align='justify'>Dari penjelasan tentang model view dan controller di atas dapat di simpulkan
    bahwa controller sebagai penghubung view dan model. Misalnya ada aplikasi yang menampilkan data dengan menggunakan metode konsep mvc,
    controller memanggil instruksi pada model yang mengambil data pada database, kemudian controller yang meneruskannya pada view untuk di tampilkan.
    Jadi jelas dan sudah sangat mudah dalam pengembangan aplikasi dengan cara mvc ini karena web designer atau front-end developer 
    tidak perlu lagi berhubungan dengan controller, dia hanya perlu berhubungan dengan view untuk mendesign tampilan aplikasi, karena 
    back-end developer yang menangani bagian controller dan modelnya. Jadi pembagian tugas pun menjadi mudah dan pengembangan
    aplikasi dapat di lakukan dengan cepat dan terstruktur.</p>
        </section>