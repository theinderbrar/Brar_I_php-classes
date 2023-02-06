<?php
include("student.php");
include("courses.php");
include("programs.php");

// created student
$ram = new Student();
$raj = new Student();

echo "------------- Creating Student  ----------------- \n";
$ram-> setDetails(1,'Ram','Mohan','ram.jpg');
$ram -> getStudentDetails();

$raj-> setDetails(2,'Raj','AK','raj.jpg');
$raj -> getStudentDetails();

echo "\n \n ------------After Updating student Name ---------------\n";
$ram -> updateName("Ramu", "Mohan");
$ram -> getStudentDetails();


echo "\n\n ------------Creting Registered Student  -----------------\n";
$sam = new RegisterdStudent();
// setting properties
$sam -> setDetails(2,'Sam','George','sam.png', 1,1);

// getting properties
$sam-> getStudentDetails();
$sam -> getProgramDetails();

echo "\n\n ----------------Creating Program -------------------------- \n";
$ids =  new Programs();
$ims = new Programs();
// setting properties
$ids ->  setProgramDetails(1, 'IDS-1', 'Two year diploma program in Interactive Media');
$ims ->  setProgramDetails(2, 'IMS', 'Third Year specialization Program in coding');
// getting properties
$ids->getProgram();
$ims->getProgram();

// updating property
echo "\n\n ----------------Updated Program Name-------------------------- \n";
$ids -> updateName('IDS');
$ids->getProgram();


echo "\n\n ----------------Creating Courses -------------------------- \n";
$course1 = new Courses();
$course2 = new Courses();
$course3 = new Courses();
$course4 = new Courses();

$course1->setDetails(1,'PHP',6005,'MVC PHP Frameworks');
$course2->setDetails(2,'MERN Stack',6000,'Server side javaScript course');
$course3->setDetails(3,'javaScript',6002,'Core javascript course');
$course4->setDetails(4,'UI Designing',6002,'Designing the UIs');



// using static property in Student class to count the no: of student objects
echo "\n\n Count of Students :".Student::$count. "\n";

// using static property in Program class to count the no: of programs
echo "\nCount of Programs :".Programs::$programCount. "\n";

// using static property in Courses class to count the no: of courses
echo "\nCount of Courses :".Courses::$courseCount. "\n";
?>