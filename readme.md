Vocomfest 2016

Nama database : vocomfest

Table :

- Users
	-> code:
		1. Jika regitrasi akan mengenerate kode sepanjang 30 angka untuk aktivasi email,
		2. Hanya ketua yang memiliki kode,
		3. Jika sudah di aktivasi maka code akan menjadi 1,
		3. Jika team sudah melakukan pembayaran maka kode akan menjadi 2

- Files
	-> status
			Code:
			0 = file belum didownload ke server,
			1 = file sudah didownload ke server


- Teams
	-> kategori
			Code:
			1 = MADC,
			2 = WDC

- Semnas
	-> kategori
			Code:
			0 = Mahasiswa,
			1 = Pelajar,
			2 = Umum
