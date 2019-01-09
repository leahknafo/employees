<?php 
    class EmployeeModel{
        private $employee_id;
        private $employee_name;
        private $start_of_work_date;

        function __construct($arr) {
            $this->employee_id = $arr['employee_id'];
            $this->employee_name = $arr['employee_name'];
            $this->start_of_work_date = $arr['start_of_work_date'];
           
            
        }
        function getEmployeeId() {
            return $this->employee_id;
        }
        function getEmployeeName() {
            return $this->employee_name;
        }
        function getStartOfWorkDate() {
            return $this->start_of_work_date;
        } 
        function setEmployeeName($en) {
            $this->employee_name = $en;
        }
        function setStartOfWorkDate($sd) {
            $this->start_of_work_date = $sd;
        } 
    
      
      
       

        
    }
?>