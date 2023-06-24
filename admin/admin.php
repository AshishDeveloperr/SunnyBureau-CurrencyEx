<?php
include "config.php";
session_start();

// check user loggedin or not
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}



if (isset($_POST['GBPbuybtn'])) {
  $GBPbuyPrice = $_POST['gbp-buyPrice'];
  $GBPsellPrice = $_POST['gbp-sellPrice'];

  // Store the updated GBP price values in session variables
  $_SESSION['GBPbuyPrice'] = $GBPbuyPrice;
  $_SESSION['GBPsellPrice'] = $GBPsellPrice;
}

if (isset($_POST['USDbuybtn'])) {
  $USDbuyPrice = $_POST['usd-buyPrice'];
  $USDsellPrice = $_POST['usd-sellPrice'];

  // Store the updated USD price values in session variables
  $_SESSION['USDbuyPrice'] = $USDbuyPrice;
  $_SESSION['USDsellPrice'] = $USDsellPrice;
}

// Create an associative array with the price data
$priceData = [
  'GBPbuyPrice' => $_SESSION['GBPbuyPrice'] ?? '',
  'GBPsellPrice' => $_SESSION['GBPsellPrice'] ?? '',
  'USDbuyPrice' => $_SESSION['USDbuyPrice'] ?? '',
  'USDsellPrice' => $_SESSION['USDsellPrice'] ?? '',
];

// Convert the price data to JSON format
$jsonData = json_encode($priceData);

// Store the JSON data in the price.json file
file_put_contents('price.json', $jsonData);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Admin - Sunny Bureau de Change</title>
    <style>
    *{
    font-family: 'Poppins', sans serif;
      }
      .neo{
        border-radius: 24px;
        /* background: #e0e0e0; */
        box-shadow:  7px 7px 14px #d0d0d0,
        -7px -7px 14px #f0f0f0;
            }
    </style>
    <title>Welcome</title>
</head>
<body>
    <!-- header starts -->
    <div class="w-full flex justify-center pb-5">
      <div class="container"><a href="../index.php" class=" flex justify-center md:block md:justify-start">
        <img src="../img/sunny.jpg" alt="logo" class="w-32 pt-8 md:w-36 md:pb-0  md:justify-start"></a>
        <p class="text-2xl md:text-3xl font-bold pt-3 pl-3 flex justify-center items-center md:-mt-16 md:pb-7">Sunny Bureau de Change</p>
      </div>
  </div>
  <!-- edit price starts -->
  <!-- currency starts -->
  <div class="container mx-auto pt-8">
      <div class="flex flex-col md:flex-row  gap-8 p-5">
        <div class="p-8 w-full md:w-1/2 neo rounded-xl flex flex-col md:flex-row items-center">
          <div class="w-2/3">
            <img src="../img/british.png" alt="british" class="w-44 mx-auto md:mx-0">
            <p class="text-xl font-semibold pt-3 pb-3 text-center md:text-start text-[#187CA5]">GBP</p>
          </div>
          <div class="w-full md:w-1/1 flex flex-row  justify-center items-center md:gap-3 gap-0">

          <!-- update php -->
              <?php
                if(isset($_POST['GBPbuybtn'])){
                $GBPbuyPrice = $_POST['gbp-buyPrice'];
                $GBPsellPrice = $_POST['gbp-sellPrice'];
                $sql = " UPDATE `currency` SET `buyprice` = '$GBPbuyPrice' , `sellprice` = '$GBPsellPrice' WHERE `sno` = 1";
                $result = mysqli_query($conn, $sql);
                if($result){
                  echo "Success updated the Price";
                }
                else{
                  echo "error";
                }
              }
              ?>
            <form action="" method="POST" class="md:w-2/3 flex flex-col mx-auto">
              <div class="flex pb-4">
                <input required placeholder="
                <?php $sql = 'SELECT `buyprice` FROM `currency`  WHERE `sno` = 1';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['buyprice'];
                }
                else{
                  echo 'error';
                } ?>" 
                type="text" id="british-buy" name="gbp-buyPrice" class="mr-3 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-3">
                
                
                <input required placeholder="<?php $sql = 'SELECT `sellprice` FROM `currency`  WHERE `sno` = 1';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['sellprice'];
                }
                else{
                  echo 'error';
                } ?>"
                type="text" id="british-sell" name="gbp-sellPrice" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-3">
              </div>
              <button name="GBPbuybtn" class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-10 border border-green-700 rounded text-center mx-auto">
                UPDATE
              </button>
            </form>
          </div>
        </div>
        <!-- card 2 starts -->
        <div class="p-8 w-full md:w-1/2 neo rounded-xl flex flex-col md:flex-row items-center">
          <div class="w-2/3">
            <img src="../img/usa.png" alt="british" class="w-44 mx-auto md:mx-0">
            <p class="text-xl font-semibold pt-3 pb-3 text-center md:text-start text-[#187CA5]">USD</p>
          </div>
          <div class="w-full md:w-1/1 flex flex-row  justify-center items-center md:gap-3 gap-0">

          <!-- update php -->
              <?php
              // if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST['USDbuybtn'])){
                $USDbuyPrice = $_POST['usd-buyPrice'];
                $USDsellPrice = $_POST['usd-sellPrice'];
                $sql = " UPDATE `currency` SET `buyprice` = '$USDbuyPrice' , `sellprice` = '$USDsellPrice' WHERE `sno` = 2";
                $result = mysqli_query($conn, $sql);
                if($result){
                  echo "Success updated the Price";
                }
                else{
                  echo "error";
                }
              }
              // }
              ?>
            <form action="" method="POST" class="md:w-2/3 flex flex-col mx-auto">
              <div class="flex pb-4">
                <input required placeholder="
                <?php $sql = 'SELECT `buyprice` FROM `currency`  WHERE `sno` = 2';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['buyprice'];
                }
                else{
                  echo 'error';
                } ?>" 
                type="text" id="british-buy" name="usd-buyPrice" class="mr-3 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-3">
                
                
                <input required placeholder="<?php $sql = 'SELECT `sellprice` FROM `currency`  WHERE `sno` = 2';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['sellprice'];
                }
                else{
                  echo 'error';
                } ?>"
                type="text" id="british-sell" name="usd-sellPrice" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-3">
              </div>
              <button name="USDbuybtn" class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-10 border border-green-700 rounded text-center mx-auto">
                UPDATE
              </button>
            </form>
          </div>
        </div>
    </div>
  </div>
  <!-- card 3 starts -->
  <div class="container mx-auto ">
      <div class="flex flex-col md:flex-row  gap-8 p-5">
        <div class="p-8 w-full md:w-1/2 neo rounded-xl flex flex-col md:flex-row items-center">
          <div class="w-2/3">
            <img src="../img/europe.png" alt="british" class="w-44 mx-auto md:mx-0">
            <p class="text-xl font-semibold pt-3 pb-3 text-center md:text-start text-[#187CA5]">EUR</p>
          </div>
          <div class="w-full md:w-1/1 flex flex-row  justify-center items-center md:gap-3 gap-0">

          <!-- update php -->
              <?php
              // if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST['EURbuybtn'])){
                $EURbuyPrice = $_POST['eur-buyPrice'];
                $EURsellPrice = $_POST['eur-sellPrice'];
                $sql = " UPDATE `currency` SET `buyprice` = '$EURbuyPrice' , `sellprice` = '$EURsellPrice' WHERE `sno` = 3";
                $result = mysqli_query($conn, $sql);
                if($result){
                  echo "Success updated the Price";
                }
                else{
                  echo "error";
                }
              }
              // }
              ?>
            <form action="" method="POST" class="md:w-2/3 flex flex-col mx-auto">
              <div class="flex pb-4">
                <input required placeholder="
                <?php $sql = 'SELECT `buyprice` FROM `currency`  WHERE `sno` = 3';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['buyprice'];
                }
                else{
                  echo 'error';
                } ?>" 
                type="text" id="british-buy" name="eur-buyPrice" class="mr-3 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-3">
                
                
                <input required placeholder="<?php $sql = 'SELECT `sellprice` FROM `currency`  WHERE `sno` = 3';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['sellprice'];
                }
                else{
                  echo 'error';
                } ?>"
                type="text" id="british-sell" name="eur-sellPrice" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-3">
              </div>
              <button name="EURbuybtn" class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-10 border border-green-700 rounded text-center mx-auto">
                UPDATE
              </button>
            </form>
          </div>
        </div>
        <!-- card 4 starts -->
        <div class="p-8 w-full md:w-1/2 neo rounded-xl flex flex-col md:flex-row items-center">
          <div class="w-2/3">
            <img src="../img/south-africa.png" alt="british" class="w-44 mx-auto md:mx-0">
            <p class="text-xl font-semibold pt-3 pb-3 text-center md:text-start text-[#187CA5]">ZAR</p>
          </div>
          <div class="w-full md:w-1/1 flex flex-row  justify-center items-center md:gap-3 gap-0">

          <!-- update php -->
              <?php
              // if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST['ZARbuybtn'])){
                $ZARbuyPrice = $_POST['zar-buyPrice'];
                $ZARsellPrice = $_POST['zar-sellPrice'];
                $sql = " UPDATE `currency` SET `buyprice` = '$ZARbuyPrice' , `sellprice` = '$ZARsellPrice' WHERE `sno` = 4";
                $result = mysqli_query($conn, $sql);
                if($result){
                  echo "Success updated the Price";
                }
                else{
                  echo "error";
                }
              }
              // }
              ?>
            <form action="" method="POST" class="md:w-2/3 flex flex-col mx-auto">
              <div class="flex pb-4">
                <input required placeholder="
                <?php $sql = 'SELECT `buyprice` FROM `currency`  WHERE `sno` = 4';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['buyprice'];
                }
                else{
                  echo 'error';
                } ?>" 
                type="text" id="british-buy" name="zar-buyPrice" class="mr-3 w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-3">
                
                
                <input required placeholder="<?php $sql = 'SELECT `sellprice` FROM `currency`  WHERE `sno` = 4';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['sellprice'];
                }
                else{
                  echo 'error';
                } ?>"
                type="text" id="british-sell" name="zar-sellPrice" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out mt-3">
              </div>
              <button name="ZARbuybtn" class="bg-blue-700 hover:bg-blue-600 text-white font-bold py-2 px-10 border border-green-700 rounded text-center mx-auto">
                UPDATE
              </button>
            </form>
          </div>
        </div>
    </div>
    <span class="text-2xl font-bold justify-end flex pr-5 pt-7"><?php $date = date("dS F Y"); echo "$date" ?></span> 
  </div>
</body>
<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

</script>

</html>