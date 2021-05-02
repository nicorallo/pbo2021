<?php 

	class Pegawai
	{
		public $nama;

		public function sapa()
		{
			echo "Halo " . $this->nama . "posisi anda saat ini adalah pegawai";
		}

		public function masuk()
		{
			echo "Anda masuk kerja pada tanggal " . date('Y-m-d') . "\n";
		}
	}




	class KetuaJurusan extends Pegawai
	{
		public function sapa()
		{
			echo 'Hei ' . $this->nama . 'anda itu kan ketua jurusan ya';
		}

		public function parentSapa()
		{
			return parent::sapa();
		}
	}

$budi = new KetuaJurusan();
$budi->nama = 'Budi Saja ';
$budi->parentsapa();
$budi->masuk();
 ?> 