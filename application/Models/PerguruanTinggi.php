<?php
    namespace App;
    require_once("Dosen.php");
  

    class PerguruanTinggi extends Dosen

    {
        public $id;
        public $namaPT;
        protected $akreditasi;

        function __construct($id, $namaPT, $akreditasi){
            $this->id = $id;
            $this->namaPT = $namaPT;
            $this->akreditasi = $akreditasi;
        
        }
        public function regisMaba()
        {
            return $this->login;
        }

    }


?> 