<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulation</title>
</head>
<body>
    <?php
        class employee {
            private $name, $role, $salary;
            public function __construct($name, $role)
            {
                $this->name = $name;
                $this->role = $role;
            }

            public function setSalary($salary)
            {
                if(is_numeric($salary) && $salary > 0){
                    $this->salary = $salary;
                } else{
                    throw new Exception("Invalid amount");
                }
            }
            public function getSalary()
            {
                return $this->salary;
            }

            public function getEmployeeDetails()
            {
                return $this->name . "<br>" . $this->role;
            }
        }

        $employee = new Employee("Avilash Saha", "Junior Software Developer");
        $employee->setSalary(25000);
        echo $employee->getEmployeeDetails() . "<br>";
        echo "Salary: " . $employee->getSalary() . " BDT" . "<br>";  
    ?>
</body>
</html>