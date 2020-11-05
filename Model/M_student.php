<?php
    include_once("../Model/E_student.php");
    class Model_Student{
        public function __construct() {}
        public function getStudentDetail($stid){
            $allStudent = $this->get_all_student();
            return $allStudent[$stid];
        }
        public function get_all_student(){
            $link = mysqli_connect("localhost","root","") or die("can not connect SQL");
            mysqli_select_db($link, "dulieu");
            $sql = "select * from sinhvien";
            $result = mysqli_query($link, $sql);
            $students = [];
            $i = 1;
            while($row = mysqli_fetch_array($result)){
                $id = $row['id'];
                $name = $row['name'];
                $age = $row['age'];
                $university = $row['university'];
                $students[$i] = new Entity_Student($id, $name, $age, $university);
                $i = $i + 1;
            }
            return $students;
        }
        public function insertStudent($id, $name, $age, $university){
            $link = mysqli_connect("localhost", "root", "") or die("can not connect SQL");
            mysqli_select_db($link, "dulieu");
            $sql = "insert into sinhvien values($id, '$name', $age, '$university')";
            $result = mysqli_query($link, $sql);
            mysqli_close($link);
        }

        public function updateStudent($id, $name, $age, $university){
            $link = mysqli_connect("localhost", "root", "") or die("can not connect SQL");
            mysqli_select_db($link, "dulieu");
            $sql = "update sinhvien set name = '".$name."', age = '".$age."', university = '".$university."' where id = '".$id."' ";
            $result = mysqli_query($link, $sql);
            mysqli_close($link);
        }

        public function deleteStudent($id){
            $link = mysqli_connect("localhost", "root", "") or die("can not connect SQL");
            mysqli_select_db($link, "dulieu");
            $sql = "delete from sinhvien where id = $id";
            $result = mysqli_query($link, $sql);
            mysqli_close($link);
        }

        public function studentSearch($check, $textSearch){
            $link = mysqli_connect("localhost","root","") or die("can not connect SQL");
            mysqli_select_db($link, "dulieu");
            $sql = "select * from sinhvien";
            $result = mysqli_query($link, $sql);
            $studentSearch = [];
            $i = 1;
            while($row = mysqli_fetch_array($result)){
                if($row[$check] == $textSearch){
                    $id = $row['id'];
                    $name = $row['name'];
                    $age = $row['age'];
                    $university = $row['university'];
                    $studentSearch[$i] = new Entity_Student($id, $name, $age, $university);
                    $i = $i + 1;
                }
                
            }
            return $studentSearch;
        }

    }
?>