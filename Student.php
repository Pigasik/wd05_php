<?php

class Student extends Human{
    
    public function sayAnswer(){
        return "I don't know";
    }

    public function sayHelloy(){
        return $this->name." ".$this->age."Проверка!";
    }
}

// 5. Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName, setAge,
// getAge. Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), 
// а также методы public getSalary и setSalary. Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. 
// Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи. Сделайте класс Student, 
// который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.
	class Student extends User
	{
		private $stipend;
		private $course;

		//	SETERS
		public function setStipend($stipend) {
			$this->stipend = $stipend;
		}

		public function setCourse($course) {
			$this->course = $course;
		}

		//	GETERS
		public function getStipend() {
			return $this->stipend;
		}

		public function getCourse() {
			return $this->course;
		}
	}
?>