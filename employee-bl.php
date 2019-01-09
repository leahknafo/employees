<?php
    require_once 'bl.php';
    require_once './model.php';
    class BusinessLogicEmployee extends BusinessLogic{
        public function get()
        {
            $q = 'SELECT * FROM `employee`';
            $results = $this->dal->select($q);
            $resultsArray = [];
            while ($row = $results->fetch()) {
                array_push($resultsArray, new EmployeeModel($row));
            }
            return $resultsArray;   
        }


        public function set($f)
        {   
            $query = "INSERT INTO `employee`(`employee_id`, `employee_name`, `start_of_work_date`) VALUES (:ei, :en, :sow)";
            $params = array(
                "ei" => $f->getEmployeeId(),
                "en" => $f->getEmployeeName(),
                "sow" => $f->getStartOfWorkDate()
            );
           $this->dal->insert($query, $params); 
        }


        public function getOne($id)
        {
            $q = 'SELECT * FROM `employee` WHERE employee_id= :ei';  
            $results = $this->dal->select($q, [
                'ei' => $id
            ]);
            $row = $results->fetch();
            return new EmployeeModel($row);
        }


        public function getByEmployee($eid)
        {
            $q = 'SELECT * FROM `employee` WHERE employee_id=?';
            
            $params = array(
                $eid
            );
            $results = $this->dal->select($q, $params);
            $resultsArray = [];
    
            while ($row = $results->fetch()) {
                array_push($resultsArray, new EmployeeModel($row));
            }
    
            return $resultsArray;
        }


        public function delete($id) {
            $query = "DELETE FROM `employee` WHERE employee_id = :a";
            $params = array(
                "a" => $id
            );
            $this->dal->delete($query, $params);
        }

        
        public function update($f) {
            $query = "UPDATE `employee` SET `employee_name`=?,`start_of_work_date`=? WHERE `employee_id`=?";
            $params = array(
                $f->getEmployeeName(),
                $f->getStartOfWorkDate(),
                $f->getEmployeeId()
            );
            $this->dal->update($query, $params);
        }
     
       
    }

    ?>
   