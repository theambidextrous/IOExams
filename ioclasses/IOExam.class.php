<?php 
class IOExam{
    private $examid;
    private $studentid;
    private $step;
    private $app_root;

    function __construct($examid, $studentid, $step, $app_root){
        $this->examid = $examid;
        $this->studentid = $studentid;
        $this->step = $step;
        $this->app_root = $app_root;
    }
    function GetStep(){
        switch($this->step){
            case 'step-1':
                return array('My Exams', $this->app_root.'step-1.php');
            break;
            case 'step-2':
                return array('My Exams', $this->app_root.'step-2.php');
            break;
        }
    }
    function ShowExamID(){
        print($this->examid);
        return $this->examid;
    }
}
?>