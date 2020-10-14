<?php    
require "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="projectpool.css">
    <!-- end of web manifest -->
</head>

<body>

   <form name="instregForm" onsubmit="javascript:return WebForm_OnSubmit()" id="instrefForm">
      <div>
        <input type="hidden" name="_EVENTTARGET" id="_EVENTTARGET" value>
        <input type="hidden" name="_EVENTARGUMENT" id="_EVENTARGUMENT" value>
        <input type="hidden" name="_VIEWSTATE" id="_VIEWSTATE" value>
      </div>
      <!--div>
        <input type="hidden" name="_VIEWSTATEGENERATOR" id="_VIEWSTATEGENERATOR" value="3D2D5B14">
        <input type="hiden" name="_EVENTVALIDATION" id="_EVENTVALIDATION" value>
      </div>
      <center-->
      <div id="mywith">
        <div style="text-align: center">
          <table id="tholder1">
            <tbody>
             <tr>
              <td style="backgraound-color: CCCCFF;">
               <span id="ct100_lblDate"></span>
              </td>
              <td style="text-align: right; height: 21px">
              <a id="ct100_LinkButton10" href="D:\New folder\Landing page.html">Go to Home Page</a>
               &nbsp; |
                 You are logged in as:"
                 <span id=""><span>
                   &nbsp;
                     "
              </td>
             </tr>
            <table id="001" cellspacing="0" cellpadding="3" rules="all" >
              <tbody>
                <tr>
                  <td colspan="9">
                   <span></span>
                  </td>
                </tr>

                <tr id="r001">
                   <td>##</td>
                   <td>Year</td>
                   <td>Category</td>
                   <td>Title</td>
                   <td>Student Name</td>
                   <td>Supervisor Name</td>
                   <td>Project Document</td>
                   <td>Project Link</td>
                   <td>Action</td>
                </tr>
              <form action="listing.php" method="post">
              <?php
              $sql = "INSERT INTO projects (year, category, title, student, supervisor, document, link)
              VALUES ('$_POST[year]','$_POST[Category]','$_POST[Title]','$_POST[Student]','$_POST[Supervisor]','$_POST[Document]','$_POST[Link]')";
              
              if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
              
              ?>
                <tr>
                   <td>
                     &nbsp;
                    </td>
                   <td>
                     <select class="form-control" id="sel1" name="year" required="">
                     <option value="">Select Year</option>
                     <option value="2019">2019</option>
                     <option value="2018">2018</option>
                     <option value="2017">2017</option>
                     <option value="2016">2016</option>
                     <option value="2015">2015</option>
                     <option value="2014">2014</option>
                     <option value="2013">2013</option>
                     <option value="2012">2012</option>
                     <option value="2011">2011</option>
                     <option value="2010">2010</option>
                     <option value="2009">2009</option>
                     <option value="2008">2008</option>
                     <option value="2007">2007</option>
                     <option value="2006">2006</option>
                     <option value="2005">2005</option>
                     <option value="2004">2004</option>
                     <option value="2003">2003</option>
                     <option value="2002">2002</option>
                     <option value="2001">2001</option>
                     <option value="2000">2000</option>
                     <option value="1999">1999</option>
                     <option value="1998">1998</option>
                     <option value="1997">1997</option>
                     <option value="1996">1996</option>
                     <option value="1995">1995</option>
                     <option value="1994">1994</option>
                     <option value="1993">1993</option>
                     <option value="1992">1992</option>
                     <option value="1991">1991</option>
                     <option value="1990">1990</option>
                     <option value="1989">1989</option>
                     <option value="1988">1988</option>
                     <option value="1987">1987</option>
                     <option value="1986">1986</option>
                     <option value="1985">1985</option>
                     <option value="1984">1984</option>
                     <option value="1983">1983</option>
                     <option value="1982">1982</option>
                     <option value="1981">1981</option>
                     <option value="1980">1980</option>
                     <option value="1979">1979</option>
                     <option value="1978">1978</option>
                     <option value="1977">1977</option>
                     <option value="1976">1976</option>
                     <option value="1975">1975</option>
                     <option value="1974">1974</option>
                     <option value="1973">1973</option>
                     <option value="1972">1972</option>
                     <option value="1971">1971</option>
                     <option value="1970">1970</option>
                     <option value="1969">1969</option>
                     <option value="1968">1968</option>
                     <option value="1967">1967</option>
                     <option value="1966">1966</option>
                     <option value="1965">1965</option>
                     <option value="1964">1964</option>
                     <option value="1963">1963</option>
                     <option value="1962">1962</option>
                     <option value="1961">1961</option>
                     <option value="1960">1960</option>
                     <option value="1959">1959</option>
                     <option value="1958">1958</option>
                     <option value="1957">1957</option>
                     <option value="1956">1956</option>
                     <option value="1955">1955</option>
                     <option value="1954">1954</option>
                     <option value="1953">1953</option>
                     <option value="1952">1952</option>
                     <option value="1951">1951</option>
                   </td>
                   <td>
                     <select name="Category" id="Project_category">
                       <option value="99">Select One</option>
                       <option>Mechanical Engineering</option>
                       <option>EEE Light</option>
                       <option>EEE Heavy</option>
                       <option>Mechatronics Engineering</option>
                       <option>Civil Engineering</option>
                       <option>GEGIS</option>
                       <option>GIS</option>
                       <option>Industrial Chemistry</option>
                       <option>Leather Technology</option>
                       <option>Geology</option>
                       <option>Food Science</option>
                       <option>Nutrition and Dietectics</option>
                       <option>CS and IT</option>
                       <option>Accounting</option>
                       <option>Finance</option>
                       <option>Human Resource</option>
                       <option>Project Management</option>
                       <option>Statistics</option>
                     </select>
                    </td>
                    <td>
                      <input type="text" name="Title" id="Project_title">
                    </td>
                    <td>
                      <input type="text" name="Student" id="std_Name">
                    </td>
                    <td>
                      <input type="text" name="Supervisor" id="sup_Name">
                    </td>
                    <td>
                      <input name="Document" id="document" input name="uploadedfile" type="file" value="Browse" 
		                style="font-size:16px;width:350px">
                    </td>
                    <td>
                      <input type="text" name="Link" id="link">
                    </td>
                    <td>
                        <button type="submit" class="signup">Submit</button>
                    </td>
                </tr>
                </form>
                <tr>
                  <td colspan="9">
                   <span></span>
                  </td>
                </tr>
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
<script src="projectpool.js"></script>
</html>