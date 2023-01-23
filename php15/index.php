<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab15</title>
</head>
<body>

    <?php 
    //1
        class Student{// klass 
            private $name; //polya
            public $age;
            public $group;
            public function setName($name){
                $this->name = $name;
            }
            public function getName()
            {return $this->name;
            }
        }
        $Vany = new Student();//obiekti
    $Vany->setName('Ваня');
        $Vany->age = 19;
        $Vany->group = 3;

        
        $Vasy = new Student();
        $Vasy->setName('Ваcя');
                $Vasy->age = 20;
        $Vasy->group = 4;

        $sum = $Vany->age + $Vasy->age;

        echo "Иван - {$Vany->getName()}<br>";
        echo "Вася - {$Vasy->group}<br>";
        echo "Сумма возрастов - {$sum}<br>";


    //2
        class Student2{//klass
            private $name;//polya
            private $age;
            private $group;
            public function setName($name){//metodi
                $this->name = $name;
            }
            public function getName()
            {return $this->name;
            }
            
            public function setAge($age){
                if($this->checkAge($age)){
                    $this->age = $age;
                }
            }
            public function getAge(){
                return $this->age;
            }
            
            public function setGroup($group){
                $this->group = $group;
            }
            public function getGroup(){
                return $this->group;
            }
            private function checkAge($age){
                return $age >= 1 && $age <=100;
            }

        }
        
        $Vany2 = new Student2();//obiekt klassa
        $Vany2->setName('Иван');
        $Vany2->setAge(19);
        $Vany2->setGroup(3);
        
        $Vasy2 = new Student2();
        $Vasy2->setName('Вася');
        $Vasy2->setAge(20);
        $Vasy2->setGroup(4);

        $sum2 = $Vany2->getAge() + $Vasy2->getAge();

        echo "Иван - {$Vany2->getGroup()}<br>";
        echo "Вася - {$Vasy2->getGroup()}<br>";
        echo "Сумма возрастов - {$sum2}<br>";

    //3
        class User{
            public function __construct($name, $age){//konstruktor
                $this->name = $name;
                $this->age = $age;
            }
            protected $name;
            protected $age;
            
            public function setName($name){
                $this->name = $name;
            }
            public function getName(){
                return $this->name;
            }
            
            public function setAge($age)
            {$this->age = $age;
            }
            public function getAge(){
                return $this->age;
            }
        }

        class Worker extends User{//worker nasleduet ot user
            public function __construct($name, $age, $salary){//dop pole salary
                parent::__construct($name, $age);
                $this->salary = $salary;
            }
            private $salary;
            public function setSalary($salary){
                $this->salary = $salary;
            }
            public function getSalary(){
                return $this->salary;
            }
        }

        class Student3 extends User{
            public function __construct($name, $age, $stependy, $cours){
                parent::__construct($name, $age);
                $this->stependy = $stependy;
                $this->cours = $cours;
            }
            
            private $stependy;
            public function setStependy($stependy){
                $this->stependy = $stependy;
            }
            public function getStependy(){
                return $this->stependy;
            }

            
            private $cours;
            public function setCours($cours){
                $this->cours = $cours;
            }
            public function getCours(){
                return $this->cours;
            }

        }

        class Driver extends Worker{//driver nasleduetsya ot worker
            public function __construct($name, $age, $salary, $stage, $category){
                parent::__construct($name, $age, $salary);
                $this->stage = $stage;
                $this->category = $category;
            }
            
            private $stage;
            public function setStage($stage){
                $this->stage = $stage;
            }
            public function getStage(){
                return $this->stage;
            }
            
            private $category;
            public function setCategory($category){
                if($category == 'A' || $category == 'B' || $category == 'C') {
                    $this->category = $category;
                }
            }
            public function getCategory(){
                return $this->category;
            }

        }

        $Vany3 = new Worker('Иван', 25, 1000);
        $Vasy3 = new Worker('Вася', 26, 2000);

        $sum3 = $Vany3->getSalary() + $Vasy3->getSalary();

        echo "Сумма зарплат - {$sum3}<br>";

    var_dump(mail('vladisakov28@mail.ru', 'TEst', 'TEst TEst Test'));
    ?>
</body>
</html>