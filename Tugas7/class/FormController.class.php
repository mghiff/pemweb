<?php

	class FormController{

		private $displayIndex;
		private $displayDataform;
		private $ujian;

		public function getHalamanIndex(){

				$this->displayIndex = new VisualView();
				$this->displayIndex->HalamanIndex();
		}
		public function getHalamanDataform(){
			
				$this->ujian = new FormModel();
				$nomerUjian = $this->ujian->noujianrandom();

				$this->displayDataform = new VisualView();
				$this->displayDataform->HalamanDataform($nomerUjian);
		}
	}
?>
