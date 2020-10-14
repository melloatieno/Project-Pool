<?php    
require "header.php";

require_once "dbconfig.php";

$sql ="SELECT * FROM projectsubmitted";

$result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/projectpool.css">
    <!-- end of web manifest -->
</head>

<body>
      <div id="mywith">
        <div style="text-align: center">
          <table id="tholder1">
            <table id="001" cellspacing="0" cellpadding="3" rules="all" >
                <thead>
                   <th>Year</th>
                   <th>Category</th>
                   <th>Title</th>
                   <th>Student Name</th>
                   <th>Registration Number</th>
                   <th>Supervisor Name</th>
                   <th>Project Document</th>
                   <th>Project Link</th>
                   <th>University</th>
                </thead>
                  <?php
                     while($row = mysqli_fetch_assoc($result)){
                       $year = $row['yr'];
                       $category = $row['category'];
                       $title = $row['title'];
                       $student = $row['student'];
                       $regnumber = $row['regnumber'];
                       $supervisor = $row['supervisor'];
                       $document = $row['document'];
                       $link = $row['link'];
                     
                  ?>
                <tbody>
                  <tr>
                    <td> <?php echo $year; ?></td>
                    <td> <?php echo $category; ?></td>
                    <td> <?php echo $title; ?></td>
                    <td> <?php echo $student; ?></td>
                    <td> <?php echo $regnumber; ?></td>
                    <td> <?php echo $supervisor; ?></td>
                    <td> <?php echo $document; ?></td>
                    <td> <?php echo $link; ?></td>
   
                  </tr>
                  <?php
                     }
                  ?>
                </tbody>
              
            </table>
          
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
            <tr>
              <td colspan="2" style="backgroundcolor: #CCCCF;">
                <br>
                <strong>
                <em>
                <strong style="color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(221, 221, 221);">
                    ©Copyright 2020 - Project-Pool - All Rights Reserved 
                </strong>
                </em>
              </td>
            </tr>
            </tbody>
          </table>
        </div>   
      </div>
    </form> 

</body>
<script src="js/projectpool.js"></script>
</html>