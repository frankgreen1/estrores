<?php
session_start();
require_once("library.php");
$lib = new processes();
$lib->getConnection();
$errorCode=0;


  if (isset($_POST['upload'])) {
            $prod_name = mysqli_escape_string($lib->con,$_POST["prod_name"]);
            $prod_price = mysqli_escape_string($lib->con,$_POST["prod_price"]);
            $prod_qty = mysqli_escape_string($lib->con,$_POST["prod_qty"]);
            $prod_cate = mysqli_escape_string($lib->con,$_POST["prod_cate"]);
            $prod_desp = mysqli_escape_string($lib->con,$_POST["prod_desp"]);
      $file  = $_FILES['prod_img']['name'];
      $file_tmp = $_FILES['prod_img']['tmp_name'];

          //check for empty values
          //create an array of the values
          $post_array = array($prod_name, $prod_price, $prod_qty, $prod_cate, $prod_desp);

          //craete the field name
          $field_array = array("prod_name", "prod_price", "prod_qty", "prod_cate", "prod_desp");

      for ($i = 0; $i < count($post_array); $i++) {

          if ($lib->validator($post_array[$i], 'empty') === true) {
              $error = $field_array[$i]." is required!";
              header("location:demo.php?error=$error");
              die();
          }
      }
      if(count($file) == 0){
          $error = "Please Upload an Image!";
          header("demo.php?error=$error");
          die();
      }

      if($_FILES['prod_img']['size'][0] < 12111){
          $error = "File size is too large!";
          header("demo.php?error=$error");
          die();
      }

          $upload =$lib-> multipleFileUploader($file,$file_tmp,"product_images/");
          //while unsuccessful upload will return false
          if($upload === false){
              $error = "Image upload failed, Try again!";
              header("location:demo.php?error=$error");
              die();

          }
      $image_names = implode('/', $upload);

          //insert the values into the data base
          $query = "INSERT INTO product_tb(id,prodName,prodPrice,prodQty,prodImg,prodCate,prodDesp) VALUES (null,'".$prod_name."','".$prod_price."','".$prod_qty."','".$image_names."','".$prod_cate."','".$prod_desp."')";

      $result = $lib->query_sql($query);

      if($result === true && $errorCode=0){

          $success = "Your details has been successfully submitted!";
          header("location:demo.php?success=$success");
          die();
      }else{
          $error = "Failed to submit";
          header("location:demo.php?error=$error");
          die();
      }


  }










?>