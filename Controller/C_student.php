<?php
    include_once("../Model/M_student.php");
    // include_once("../View/insert.html");
    class Ctrl_Student{
        public function invoke(){
            if(isset($_GET['stid'])) {
                $modelStudent = new Model_Student();
                $student = $modelStudent->getStudentDetail($_GET['stid']);
                include_once("../View/studentDetail.php");
            }
            else if(isset($_POST['form_insert'])){
                $id = $_REQUEST['id'];
                $name = $_REQUEST['name'];
                $age = $_REQUEST['age'];
                $university = $_REQUEST['university'];
                $modelStudent =  new Model_Student();
                $modelStudent->insertStudent($id, $name,  $age, $university);
                header("Location:C_student.php");
            }
            else if(isset($_GET['update'])){
                include_once("../View/update.php");
                if(isset($_POST['form_update'])){
                    $id = $_REQUEST['id'];
                    $name = $_REQUEST['name'];
                    $age = $_REQUEST['age'];
                    $university = $_REQUEST['university'];
                    $modelStudent =  new Model_Student();
                    $modelStudent->updateStudent($id, $name,  $age, $university);
                    header("Location:C_student.php");
                }
            }
            else if(isset($_GET['delete'])){
                $id = $_REQUEST['delete'];
                $modelStudent =  new Model_Student();
                $modelStudent->deleteStudent($id);
                header("Location:C_student.php");
            }
            else if(isset($_POST['form_search'])){
                $check = $_POST['check'];
                $textSearch = $_POST['search'];
                $modelStudent = new Model_Student();
                $studentSearch = $modelStudent->studentSearch($check, $textSearch);
                include_once("../View/studentSearch.php");
            }
            else{
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->get_all_student();
                include_once("../View/studentList.php");
            }
        }
    };
    $C_Student = new Ctrl_Student();
    $C_Student->invoke();
?>