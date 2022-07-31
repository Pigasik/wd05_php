<?php

//6. Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи. 
//Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).

class Driver extends Worker
	{
		private $experience;
		private $category;

		public function __construct($experience, $category) {
			$this->experience = $experience;
			$this->category = $category;
		}

		public function setExperience() {
			$this->experience = $experience;
		}

		public function setCategory() {
			$this->category = $category;
		}

		public function getExperience() {
			return $this->experience;
		}

		public function getCategory() {
			return $this->category;
		}
	}