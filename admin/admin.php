<?php
include "config.php";
session_start();

// check user loggedin or not
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
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
    <title>Admin - Currency Excahnge</title>
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
      <div><a href="../index.php">
        <img src="../img/currency.png" alt="logo" class="w-80"></a>
        <span class="text-xl font-bold justify-center flex -mt-14"><?php $date = date("dS F Y"); echo "$date" ?></span> 
      </div>
  </div>
  <!-- edit price starts -->
  <!-- currency starts -->
  <div class="container mx-auto pt-8">
      <div class="flex flex-col md:flex-row  gap-8 p-5">
        <div class="p-8 w-full md:w-1/2 neo rounded-xl flex flex-col md:flex-row items-center">
          <div class="w-2/3">
            <img src="../img/british.png" alt="british" class="w-44 mx-auto md:mx-0">
            <p class="text-xl font-semibold pt-3 pb-3 text-center md:text-start text-[#187CA5]">CURRENCY - GBP</p>
          </div>
          <div class="w-full md:w-1/1 flex flex-row  justify-center items-center md:gap-3 gap-0">

          <!-- update php -->
              <?php
              // if($_SERVER["REQUEST_METHOD"] == "POST"){
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
              // }
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
            <p class="text-xl font-semibold pt-3 pb-3 text-center md:text-start text-[#187CA5]">CURRENCY - USD</p>
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
            <p class="text-xl font-semibold pt-3 pb-3 text-center md:text-start text-[#187CA5]">CURRENCY - EUR</p>
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
            <p class="text-xl font-semibold pt-3 pb-3 text-center md:text-start text-[#187CA5]">CURRENCY - ZAR</p>
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
  </div>
</body>
<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

</script>
</html>