<?php include "admin/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Sunny Bureau de Change</title>
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
</head>
<body class="h-screen">

<div class="w-full py-8 ">
  <div class="grid grid-cols-3">
      <div class="col-span-3 md:col-span-1 px-10 flex justify-center md:justify-normal"><img src="img/sunny.jpg" alt="logo" class="w-56"></div>
      <div class="flex col-span-3 md:col-span-2 px-14 justify-center md:justify-normal md:pt-24"> <p class="text-2xl md:text-4xl font-bold pt-3 pl-3 flex justify-center items-center md:-mt-16 md:pb-7">Sunny Bureau de Change</p></div>
  </div>
</div>


  <!-- header starts -->
  <!-- <div class="w-full flex justify-center pb-5">
      <div class="container"><a href="index.php" class=" flex justify-center md:block md:justify-start">
        <img src="img/sunny.jpg" alt="logo" class="w-32 pt-8 md:w-36 md:pb-0  md:justify-start"></a>
        <p class="text-2xl md:text-3xl font-bold pt-3 pl-3 flex justify-center items-center md:-mt-16 md:pb-7">Sunny Bureau de Change</p>
      </div>
  </div> -->
  <!-- currency starts -->
  <div class="container mx-auto p-8 md:p-8 mt-5">
    
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase">
            <tr class="border-b border-gray-200">
                <th scope="col" class="px-6 py-3 font-semibold text-lg bg-gray-50 w-2/5">
                Currency
                </th>
                <th scope="col" class="px-6 py-3 font-semibold text-lg text-white bg-green-500 text-center">
                    Buy
                </th>
                <th scope="col" class="px-6 py-3 font-semibold text-lg text-white bg-red-500 text-center">
                    Sell
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200">
                <th scope="row" class="px-6 py-4 md:flex font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                    <img src="img/british.png" class="w-32" alt="" srcset="">
                    <span class="font-bold text-xl md:p-6 mx-auto flex justify-center md:mx-0">GBP</span>
                </th>
                <td class="px-6 py-4 text-center font-semibold text-lg">
                <!-- buy price -->
              <?php $sql = 'SELECT `buyprice` FROM `currency`  WHERE `sno` = 1';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['buyprice'];
                }
                else{
                  echo 'error';
                } ?>
                <!-- buy price -->
                </td>
                
                <td class="px-6 py-4 text-center bg-gray-50 font-semibold text-lg">
                    <!-- sell price -->
            <?php $sql = 'SELECT `sellprice` FROM `currency`  WHERE `sno` = 1';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['sellprice'];
                }
                else{
                  echo 'error';
                } ?>
                <!-- sell price -->
                </td>
            </tr>
            <tr class="border-b border-gray-200">
                <th scope="row" class="px-6 py-4 col md:flex font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                <img src="img/usa.png" class="w-32" alt="" srcset="">
                    <span class="font-bold text-xl md:p-6 mx-auto flex justify-center md:mx-0">USD</span>
                </th>
                <td class="px-6 py-4 text-center font-semibold text-lg">
                <!-- buy price -->
              <?php $sql = 'SELECT `buyprice` FROM `currency`  WHERE `sno` = 2';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['buyprice'];
                }
                else{
                  echo 'error';
                } ?>
                <!-- buy price -->
                </td>
             
                <td class="px-6 py-4 text-center bg-gray-50 font-semibold text-lg">
                    <!-- sell price -->
            <?php $sql = 'SELECT `sellprice` FROM `currency`  WHERE `sno` = 2';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['sellprice'];
                }
                else{
                  echo 'error';
                } ?>
                <!-- sell price -->
                </td>
            </tr>
            <tr class="border-b border-gray-200">
                <th scope="row" class="px-6 py-4 col md:flex font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                <img src="img/europe.png" class="w-32" alt="" srcset="">
                    <span class="font-bold text-xl md:p-6 mx-auto flex justify-center md:mx-0">EUR</span>
                </th>
                <td class="px-6 py-4 text-center font-semibold text-lg">
                <!-- buy price -->
              <?php $sql = 'SELECT `buyprice` FROM `currency`  WHERE `sno` = 3';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['buyprice'];
                }
                else{
                  echo 'error';
                } ?>
                <!-- buy price -->
                </td>
              
                <td class="px-6 py-4 text-center bg-gray-50 font-semibold text-lg">
                    <!-- sell price -->
            <?php $sql = 'SELECT `sellprice` FROM `currency`  WHERE `sno` = 3';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['sellprice'];
                }
                else{
                  echo 'error';
                } ?>
                <!-- sell price -->
                </td>
            </tr>
            <tr class="border-b border-gray-200">
                <th scope="row" class="px-6 py-4 col md:flex font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                <img src="img/south-africa.png" class="w-32" alt="" srcset="">
                    <span class="font-bold text-xl md:p-6 mx-auto flex justify-center md:mx-0">ZAR</span>
                </th>
                <td class="px-6 py-4 text-center font-semibold text-lg">
                <!-- buy price -->
              <?php $sql = 'SELECT `buyprice` FROM `currency`  WHERE `sno` = 4';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['buyprice'];
                }
                else{
                  echo 'error';
                } ?>
                <!-- buy price -->
                </td>
               
                <td class="px-6 py-4 text-center bg-gray-50 font-semibold text-lg">
                    <!-- sell price -->
            <?php $sql = 'SELECT `sellprice` FROM `currency`  WHERE `sno` = 4';
                $result = mysqli_query($conn, $sql);
                if($result){
                  $row = mysqli_fetch_assoc($result);
                    echo $row['sellprice'];
                }
                else{
                  echo 'error';
                } ?>
                <!-- sell price -->
                </td>
            </tr>
          
        </tbody>
    </table>
    <span class="text-2xl font-bold justify-end flex pr-5 py-6"><?php $date = date("dS F Y"); echo "$date" ?></span> 
</div>

  </div>
  <!-- currency ends -->
  <div class="w-full bg-gray-100 p-5 absolute bottom-0">
    <p class="text-gray-900 text-xl text-center font-semibold">Sunny Group Of Companies(c) Copyright-2023</p> 
  </div>

</body>
</html>