<html>
    <style>
 body {
    width: 600px;
    margin: 40px auto;
    font-family: 'trebuchet MS', 'Lucida sans', Arial;
    font-size: 14px;
    color: #444;
}

table {
    *border-collapse: collapse; /* IE7 and lower */
    border-spacing: 5;
    width: 150%;    
}

.bordered {
    border: solid #ccc 1px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 1px 1px #ccc; 
    -moz-box-shadow: 0 1px 1px #ccc; 
    box-shadow: 0 1px 1px #ccc;         
}

.bordered tr:hover {
    background: #fbf8e9;
    -o-transition: all 0.1s ease-in-out;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;     
}    
    
.bordered td, .bordered th {
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
    padding: 10px;
    text-align: left;    
}

.bordered th {
    background-color: #dce9f9;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ebf3fc), to(#dce9f9));
    background-image: -webkit-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:    -moz-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:     -ms-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:      -o-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:         linear-gradient(top, #ebf3fc, #dce9f9);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
    border-top: none;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
}

.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}

.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}

.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}



/*----------------------*/

.zebra td, .zebra th {
    padding: 10px;
    border-bottom: 1px solid #f2f2f2;    
}

.zebra tbody tr:nth-child(even) {
    background: #f5f5f5;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
}

.zebra th {
    text-align: left;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
    border-bottom: 1px solid #ccc;
    background-color: #eee;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#eee));
    background-image: -webkit-linear-gradient(top, #f5f5f5, #eee);
    background-image:    -moz-linear-gradient(top, #f5f5f5, #eee);
    background-image:     -ms-linear-gradient(top, #f5f5f5, #eee);
    background-image:      -o-linear-gradient(top, #f5f5f5, #eee); 
    background-image:         linear-gradient(top, #f5f5f5, #eee);
}

.zebra th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;  
}

.zebra th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.zebra th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.zebra tfoot td {
    border-bottom: 0;
    border-top: 1px solid #fff;
    background-color: #f1f1f1;  
}

.zebra tfoot td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.zebra tfoot td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}

.zebra tfoot td:only-child{
    -moz-border-radius: 0 0 6px 6px;
    -webkit-border-radius: 0 0 6px 6px
    border-radius: 0 0 6px 6px
}
    </style>
    
    <h1 name="top">Unofficial Transcript</h1>
    <p>This is NOT an official transcript. Courses which are in  progress may also be included on this transcript</p>
    <h2>Transcript Data</h2>
    
    <h3>STUDENT INFORMATION</h3>
    
<?php

require('connectivity.php');
@session_start();

$sql = "SELECT * FROM STUDENT WHERE student_id ='".$_SESSION['idnum']."'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<h4> Name: </h4> " . $row["student_fname"]. " " . $row["student_mi"] . " " . $row["student_lname"] . " <h4> Student ID: </h4> " . $row["student_id"]. "\n";
    }
} else {
    echo "0 result";
}
echo date("m/d/y") ."<br>";
?>
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
echo "<thead>";
echo "<tr><th>Transfer Code</th><th>Name</th><th>Subject</th><th>Title</th><th>Grade</th><th>Credit Hours</th></tr> \n";
echo "</thead>";
echo "<tbody>";
while ($row = mysqli_fetch_array($result)){
    echo "<tr><td>" . $row['type_code'] . ""."</td><td>" . $row['type_name']."</td><td>". $row['course_id'] . "</td><td>" . $row['course_title'] . "</td><td>" . $row['tc_grade'] . "</td><td>" . $row['course_crd_hrs'] . "</td></tr>";
}
echo "</tbody>";
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
$sql = "SELECT INSTITUTION_CREDITS.term_id, TERM.term_season, TERM.term_year, MAJOR.m_major, MAJOR.m_college
FROM INSTITUTION_CREDITS, STUDENT, TERM, MAJOR
WHERE INSTITUTION_CREDITS.student_id=STUDENT.student_id
AND INSTITUTION_CREDITS.term_id=TERM.term_id
AND INSTITUTION_CREDITS.m_major=MAJOR.m_major
AND INSTITUTION_CREDITS.student_id= '".$_SESSION['idnum']."'
GROUP BY term_id
ORDER BY TERM.term_year, TERM.term_id desc";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
         echo "<table>";
         echo "<thead>";
     echo "<tr>
     <th>Term</th>
     <th>College</th>
     <th>Major</th>
     </tr>";
     echo "</thead>";
     echo "<tbody>";
        echo  "<tr>
        <td>" . $row["term_season"] . " " . $row["term_year"] . "</td>
        <td>" . $row["m_college"] . "</td>
        <td>" . $row["m_major"] . "</td>
        </tr>";
        echo "</tbody>";
        "\n";
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
        echo "<thead>";
        echo "<tr><th>Subject</th><th>Title</th><th>Grade</th><th>Credit Hours</th><th>Quality Points</th></tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_array($inner_result)){
            echo "<tr><td>" . $row['course_id'] . "</td><td>" . $row['course_title'] . "</td><td>". $row['ic_grade'] . "</td><td>" . $row['course_crd_hrs'] . "</td><td>" . $row['quality_points'] . "</td></tr>";
        }
        echo "</tbody>";
            echo "</table>"; }
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>
</br>
<h4>Term GPAs and Credits</h4>
<?php
$sql = "SELECT (SUM(INSTITUTION_CREDITS.ic_grade_num*COURSES.course_crd_hrs))/(SUM(COURSES.course_crd_hrs)) AS GPA, 
(INSTITUTION_CREDITS.ic_grade_num*COURSES.course_crd_hrs) AS QP,
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
        echo "<thead>";
        echo "<tr><th>Term</th><th>Attempted Hours</th><th>Passed Hours</th><th>Earned Hours</th><th>GPA Hours</th><th>Quality Points</th><th>GPA</th></tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tr><td>" . $row['term_id'] . "</td><td>" . $row2['AHOURS'] . "</td><td>". $row['EHOURS'] . "</td><td>" . $row['EHOURS'] . "</td><td>" . $row['EHOURS'] . "</td><td>" . $row['QP'] . "</td><td>" . $row['GPA'] . "</td></tr>";
        echo "</tbody>";
        echo "</table>";}
}
?>
<h4>Cumulative GPAs and Credits</h4>
<?php
$sql = "SELECT (SUM(INSTITUTION_CREDITS.ic_grade_num*COURSES.course_crd_hrs))/(SUM(COURSES.course_crd_hrs)) AS GPA, 
SUM(INSTITUTION_CREDITS.ic_grade_num*COURSES.course_crd_hrs) AS QP,
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
        echo "<thead>";
        echo "<tr><th>Attempted Hours</th><th>Passed Hours</th><th>Earned Hours</th><th>GPA Hours</th><th>Quality Points</th><th>GPA</th></tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tr><td>" . $row2['AHOURS'] . "</td><td>". $row['EHOURS'] . "</td><td>" . $row['EHOURS'] . "</td><td>" . $row['EHOURS'] . "</td><td>" . $row['QP'] . "</td><td>" . $row['GPA'] . "</td></tr>";
        echo "</tbody>";
        echo "</table>";}
}
?>
<p><a href="home.html">back</a></p>
</html>