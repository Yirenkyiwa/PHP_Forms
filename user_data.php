<?php
//line 3-7 stores users data into thei respective variables
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$country = $_POST['country'];

//line 10-24 opens and stores user data into 'userdata.csv' file
$file_open = fopen("userdata.csv","a");
$no_rows = count(file("userdata.csv"));
if($no_rows > 1)
 {
  $no_rows = ($no_rows - 1) + 1;
 }
$form_data = array(
 'name'  => $name,
 'email'  => $email,
 'dob' => $dob,
 'gender' => $gender,
 'country' => $country
);

fputcsv($file_open, $form_data);


//line 28 displays user input on the browser
print_r($_POST);
?>