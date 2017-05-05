<html>
    <style>
        body {
  background-color: #3e94ec;
  font-family: "Roboto", helvetica, arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}
    </style>
    <h1 name="top">Unofficial Transcript</h1>
    <p>This is NOT an official transcript. Courses which are in  progress may also be included on this transcript</p>
<?php

require('connectivity.php');
session_start();


$sql = "SELECT * FROM STUDENT WHERE student_id ='".$_SESSION['idnum']."'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Student Code: " . $row["student_id"]. " Name: " . $row["student_fname"]. " " . $row["student_mi"]. ". " . $row["student_lname"]."<br>";
    }
} else {
    echo "0 results";
}
echo date("m/d/y") ."<br>";
echo date("h:ia");
?>
    <h2>Transcript Data</h2>
    <h3>STUDENT INFORMATION</h3>
    <h4>Curriculum Information</h4>
    <h5>Current Program</h5>
    <h6>***Transcript type: WEB is NOT Official ***</h6>
    <h3>TRANSFER CREDITS ACCEPTED BY INSTITUTION</h3>
    
    <?php
    $sql = "SELECT 
TRANSFER_CREDITS.type_code, 
TRANSFER_CREDITS.student_id,
TRANSFER_CRD_TYPE.type_name, 
TRANSFER_CREDITS.course_id,
COURSES.course_title,
TRANSFER_CREDITS.tc_grade,
COURSES.course_crd_hrs
    FROM TRANSFER_CREDITS 
INNER JOIN 
TRANSFER_CRD_TYPE ON TRANSFER_CREDITS.type_code=TRANSFER_CRD_TYPE.type_code INNER JOIN COURSES ON TRANSFER_CREDITS.course_id=COURSES.course_id WHERE student_id ='".$_SESSION['idnum']."'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result)  > 0){
echo "<table>";
echo "<tr><th>Transfer Code</th><th>Name</th><th>Subject</th><th>Title</th><th>Grade</th><th>Credit Hours</th></tr>";
while ($row = mysqli_fetch_array($result)){
    echo "<tr><td>" . $row['type_code'] . ""."</td><td>" . $row['type_name']."</td><td>". $row['course_id'] . "</td><td>" . $row['course_title'] . "</td><td>" . $row['tc_grade'] . "</td><td>" . $row['course_crd_hrs'] . "</td></tr>";
}
echo "</table>"; }
else
{
    echo "No transfer credits <br>";
}
?>
</br>
<?php
$sql = "SELECT SUM(COURSES.course_crd_hrs) FROM COURSES INNER JOIN TRANSFER_CREDITS ON COURSES.course_id=TRANSFER_CREDITS.course_id WHERE student_id ='".$_SESSION['idnum']."'";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Attempted Hours: " . $row["SUM(COURSES.course_crd_hrs)"]. " Earned Hours: " . $row ["SUM(COURSES.course_crd_hrs)"] . " Quality Points: 0.00" . " GPA: 0.00 ";
    }
} else {
    echo "0 results";
}
?>
    <h3>INSTITUTION CREDITS</h3> 
<?php
$sql = "SELECT INSTITUTION_CREDITS.term_id, TERM.term_season, TERM.term_year
FROM INSTITUTION_CREDITS, STUDENT, TERM
WHERE INSTITUTION_CREDITS.student_id=STUDENT.student_id
AND INSTITUTION_CREDITS.term_id=TERM.term_id
AND INSTITUTION_CREDITS.student_id= '".$_SESSION['idnum']."'
GROUP BY term_id
ORDER BY TERM.term_year, TERM.term_id desc";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  "<h4> Term: " . $row["term_season"] . " " . $row["term_year"] . "</h4>";
        $inner_sql = "SELECT 
         TERM.term_season,
         TERM.term_year,
         TERM.term_id,
         COURSES.course_id, 
         COURSES.course_title, 
         INSTITUTION_CREDITS.ic_grade, 
         COURSES.course_crd_hrs, 
         (INSTITUTION_CREDITS.ic_grade_num*COURSES.course_crd_hrs) AS quality_points 
        FROM TERM
        INNER JOIN
        INSTITUTION_CREDITS ON TERM.term_id=INSTITUTION_CREDITS.term_id
        INNER JOIN 
        COURSES on INSTITUTION_CREDITS.course_id=COURSES.course_id
        WHERE student_id ='".$_SESSION['idnum']."' 
        AND INSTITUTION_CREDITS.term_id='".$row["term_id"]."'
        ORDER BY term_year, term_season";
            $inner_result = mysqli_query($con, $inner_sql);
            if (mysqli_num_rows($result)  > 0){
        echo "<table>";
        echo "<tr><th>Subject</th><th>Title</th><th>Grade</th><th>Credit Hours</th><th>Quality Points</th></tr>";
        while ($row = mysqli_fetch_array($inner_result)){
            echo "<tr><td>" . $row['course_id'] . "</td><td>" . $row['course_title'] . "</td><td>". $row['ic_grade'] . "</td><td>" . $row['course_crd_hrs'] . "</td><td>" . $row['quality_points'] . "</td></tr>";
        }
            echo "</table>"; }
    }
} else {
    echo "0 results";      }
?>
</br>
<h4>Term GPAs and Credits</h4>
<?php
$sql = "SELECT (SUM(INSTITUTION_CREDITS.ic_grade_num*COURSES.course_crd_hrs))/(SUM(COURSES.course_crd_hrs)) AS GPA, 
INSTITUTION_CREDITS.term_id,
SUM(COURSES.course_crd_hrs) AS EHOURS,
TERM.term_year
FROM
INSTITUTION_CREDITS
INNER JOIN
COURSES ON INSTITUTION_CREDITS.course_id=COURSES.course_id
INNER JOIN
TERM ON INSTITUTION_CREDITS.term_id=TERM.term_id
WHERE ic_grade != 'W' 
AND student_id ='".$_SESSION['idnum']."'
GROUP BY term_id
ORDER BY TERM.term_year, term_id desc";
$sql2 = "SELECT 
INSTITUTION_CREDITS.term_id,
SUM(COURSES.course_crd_hrs) AS AHOURS
FROM
INSTITUTION_CREDITS
INNER JOIN
COURSES ON INSTITUTION_CREDITS.course_id=COURSES.course_id
WHERE student_id ='".$_SESSION['idnum']."'
GROUP BY term_id desc";
$result = mysqli_query($con,$sql);
$result2 = mysqli_query($con,$sql2);
if (mysqli_num_rows($result) && mysqli_num_rows($result2)> 0) {
    // output data of each row
    while ($row2 = mysqli_fetch_assoc($result2))
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<table>";
        echo "<tr><th>Term</th><th>Attempted Hours</th><th>Passed Hours</th><th>Earned Hours</th><th>GPA Hours</th><th>Quality Points</th><th>GPA</th></tr>";
        echo "<tr><td>" . $row['term_id'] . "</td><td>" . $row2['AHOURS'] . "</td><td>". $row['EHOURS'] . "</td><td>" . $row['EHOURS'] . "</td><td>" . $row['EHOURS'] . "</td><td>" . $row['QP'] . "</td><td>" . $row['GPA'] . "</td></tr>";
        echo "</table>";}
}
?>
<h4>Cumulative GPAs and Credits</h4>
<?php
$sql = "SELECT (SUM(INSTITUTION_CREDITS.ic_grade_num*COURSES.course_crd_hrs))/(SUM(COURSES.course_crd_hrs)) AS GPA, 
SUM(COURSES.course_crd_hrs) AS EHOURS
FROM
INSTITUTION_CREDITS
INNER JOIN
COURSES ON INSTITUTION_CREDITS.course_id=COURSES.course_id
WHERE ic_grade != 'W' 
AND student_id ='".$_SESSION['idnum']."'";
$sql2 = "SELECT 
SUM(COURSES.course_crd_hrs) AS AHOURS
FROM
INSTITUTION_CREDITS
INNER JOIN
COURSES ON INSTITUTION_CREDITS.course_id=COURSES.course_id
WHERE student_id ='".$_SESSION['idnum']."'";
$result = mysqli_query($con,$sql);
$result2 = mysqli_query($con,$sql2);
if (mysqli_num_rows($result) && mysqli_num_rows($result2)> 0) {
    // output data of each row
    while ($row2 = mysqli_fetch_assoc($result2))
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<table>";
        echo "<tr><th>Attempted Hours</th><th>Passed Hours</th><th>Earned Hours</th><th>GPA Hours</th><th>Quality Points</th><th>GPA</th></tr>";
        echo "<tr><td>" . $row2['AHOURS'] . "</td><td>". $row['EHOURS'] . "</td><td>" . $row['EHOURS'] . "</td><td>" . $row['EHOURS'] . "</td><td>" . $row['QP'] . "</td><td>" . $row['GPA'] . "</td></tr>";
        echo "</table>";}
}
?>


</html>