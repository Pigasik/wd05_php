<?php

class Worker{
    public $name;
    public $age;
    public $salaly;

    public function __construct ($name, $age, $salaly){
        $this->age = $age;
        $this->name = $name;
        $this->salaly = $salaly;
    }
}

// 2. Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и следующие public 
// методы setName, getName, setAge, getAge, setSalary, getSalary.
// Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
// Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

class Worker
	{
		private $name;
		private $age;
		private $salary;

		public function setName($name) {
			$this->name = $name;
		}

		public function setAge($age) {
			$this->age = $age;
		}

		public function setSalary($salary) {
			$this->salary = $salary;
		}

		public function getName() {
			return $this->name;
		}

		public function getAge() {
			return $this->age;
		}

		public function getSalary() {
			return $this->salary;
		}
	}

// 3. Дополните класс Worker из предыдущей задачи private методом checkAge, который будет 
// проверять возраст на корректность (от 1 до 100 лет). 
//Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).
class Worker
	{
		private $name;
		private $age;
		private $salary;

		public function setName($name) {
			$this->name = $name;
		}

		public function setAge($age) {
			$this->age = $age;

			if ( !$this->checkAge() ) {
				echo "Неккоректный возраст '$this->name'<br>";
			}
		}

		public function setSalary($salary) {
			$this->salary = $salary;
		}

		public function getName() {
			return $this->name;
		}

		public function getAge() {
			return $this->age;
		}

		public function getSalary() {
			return $this->salary;
		}

		private function checkAge() {

			if ( $this->age >= 1 && $this->age <= 100 ) {
				return true;
			} else {
				return false;
			}
		}
	}

// 4. Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). 
// Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ). 
// Сделайте также public методы getName, getSalary.
// Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.
class Worker
	{
		private $name;
		private $age;
		private $salary;

		public function __construct($name, $age, $salary) {
			$this->name = $name;
			$this->age = $age;
			$this->salary = $salary;
		}

		public function getName() {
			return $this->name;
		}

		public function getAge() {
			return $this->age;
		}

		public function getSalary() {
			return $this->salary;
		}
	}