# UAS-BASIS-DATA

NAMA : ALDI SYAFERA

NIM : 312010008

KELAS : TI.20.D.1

Dari Tugas UTS sebelumnya saya membuat sebuah sistem informasi klinik sederhana dimana dalam sistem tersebut saya akan menampilkan

Modul data pasien

![image](https://user-images.githubusercontent.com/103243638/178715821-a4a1941e-a367-4cd7-8623-489e5a9fb349.png)


Dalam tabel pasien saya bisa menambahkan, menghapus dan mengedit data. Contohnya sebagai berikut :

EDIT

![image](https://user-images.githubusercontent.com/103243638/178715889-9b9df4be-a3dc-45ff-90be-b0032c9fd7f2.png)


Saya merubah aldi s menjadi Roger

![image](https://user-images.githubusercontent.com/103243638/178715934-bb0e868b-580c-4acf-b370-793df8ca4079.png)

Tambah Saya juga bisa Menambah data pasien sebagai berikut :

![image](https://user-images.githubusercontent.com/103243638/178715964-370ea52c-f922-443c-8ffc-f1e975ce4538.png)


disini saya menambahakan data baru yaitu daud :

![image](https://user-images.githubusercontent.com/103243638/178716007-04cea763-ea52-4822-b18f-ce85b87327d0.png)


dan untul modul hapus disini saya menghapus data daud :

![image](https://user-images.githubusercontent.com/103243638/178716049-23629f9d-f596-4795-9c09-286f219c5500.png)


Modul data Obat Di dalam modul data obat saya menambahkan Triger

// IMPLEMENTASI TRIGGER

// table untuk trigger

create table log_obat(id_log int(100) auto_increment primary key, id_obat int(10), nobat_lama varchar(100), obat_baru varchar(100), waktu date not null) // trigger

create trigger update_nama_obat before update on obat for each row insert into log_obat set id_obat=old.id_obat, obat_lama = old.nama_obat, obat_baru=new.nama_obat, waktu = now();

// END IMPLEMENTASI TRIGGER

![image](https://user-images.githubusercontent.com/103243638/178713648-8cc08c2d-0eb8-4a8f-8307-b0dc2e1f03a0.png)

![image](https://user-images.githubusercontent.com/103243638/178713777-4eac3b5c-d45b-451d-945b-da3e053950ee.png)

implementasi view // IMPLEMENTASI VIEW

CREATE VIEW viewPenyakit AS SELECT a.id_berobat, b.nama_pasien, b.jenis_kelamin, b.umur, a.keluhan_pasien, a.hasil_diagnosa, a.tgl_berobat, c.nama_dokter FROM berobat a JOIN pasien b ON a.id_pasien=b.id_pasien JOIN dokter c ON a.id_dokter=c.id_dokter WHERE b.jenis_kelamin='L'

// END IMPLEMENTASI VIEW

![image](https://user-images.githubusercontent.com/103243638/178714489-3d34476b-5aa1-45f5-a60e-d844baecdeed.png)




































































