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
      @font-face {
            font-family: digital-font;
            src: url(font/font-theme.ttf);
        }

      .neo{
        border-radius: 24px;
        /* background: #e0e0e0; */
        box-shadow:  7px 7px 14px #d0d0d0,
        -7px -7px 14px #f0f0f0;
            }

          /* .digital{
              font-family:'digital-font';
            } */

            .neon-sell {
                animation: neonAnim 2.5s alternate-reverse infinite;
                color: #D22B2B;
                font-family:'digital-font';
            }
            @keyframes neonAnim {
                from {
                    text-shadow:
                      0 0 34px rgba(210, 43, 43, .7),
                      0 0 64px rgba(210, 43, 43, .7),
                      0 0 124px rgba(210, 43, 43, .7);
                  }
                  to {
                    text-shadow:
                      0 0 29px rgba(210, 43, 43, .7),
                      0 0 44px rgba(210, 43, 43, .7),
                      0 0 84px rgba(210, 43, 43, .7);
                  }
            }

            .neon-buy {
                animation: neonAnimation 2s alternate-reverse infinite;
                color: #32CD32;
                font-family:'digital-font';
            }
            @keyframes neonAnimation {
            from {
                text-shadow:
                  0 0 34px rgba(50, 205, 50, .7),
                  0 0 64px rgba(50, 205, 50, .7),
                  0 0 124px rgba(50, 205, 50, .7);
              }
              to {
                text-shadow:
                  0 0 29px rgba(50, 205, 50, .7),
                  0 0 44px rgba(50, 205, 50, .7),
                  0 0 84px rgba(50, 205, 50, .7);
              }
        }

        .shadow-box{
          border-radius: 10px;
          background: #0F172A;
          box-shadow:  8px 8px 16px #070b15,
             -8px -8px 16px #17233f;
        }
    </style>
</head>
<body class="h-screen bg-[#0F172A]">
<div class="w-full py-2">
  <div class="grid grid-cols-4">
      <div class="col-span-4 md:col-span-1 px-10 flex justify-center md:justify-normal"><img src="img/logo-transparent.png" alt="logo" class="w-52"></div>
      <div class="flex col-span-4 md:col-span-3 px-1 justify-center md:justify-normal md:pt-24"> <p class="text-2xl text-white md:text-4xl xl:text-5xl  font-bold pt-3 flex justify-center items-center md:-mt-16 md:pb-1 2xl:pl-36">Sunny Bureau de Change</p></div>
  </div>
  <div class="container mx-auto">
      <p class="text-center text-white text-2xl md:text-5xl xl:text-5xl font-bold lg:-mt-7">TODAYS FOREIGN EXCHANGE RATES:</p>
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
<div class="container mx-auto p-2 md:p-8 mt-5">
    
  <div class="relative overflow-x-auto shadow-box">
      <table class="w-full text-sm text-left">
          <thead class="text-xs uppercase">
              <tr class="border-b border-gray-200">
                  <th scope="col" class="px-6 py-3 font-extrabold text-white text-4xl bg-[#0F172A] w-2/5">
                  Currency
                  </th>
                  <th scope="col" class="px-6 py-3 font-extrabold text-4xl text-white bg-[#0F172A] text-center">
                      Buy
                  </th>
                  <th scope="col" class="px-6 py-3 font-extrabold text-4xl text-white bg-[#0F172A] text-center">
                      Sell
                  </th>
              </tr>
          </thead>
          <tbody>
              <tr class="border-b border-gray-200">
                  <th scope="row" class="px-6 py-4 md:flex font-medium text-gray-900 whitespace-nowrap bg-[#0F172A]">
                      <img src="img/british.png" class="w-32" alt="" srcset="">
                      <span class="font-bold text-3xl text-white md:p-6 mx-auto flex justify-center md:mx-0">GBP</span>
                  </th>
                  <td class="px-6 py-4 text-center font-light text-5xl neon-buy border border-white">
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
                  
                  <td class="px-6 py-4 text-center font-light text-5xl neon-sell">
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
                  <th scope="row" class="px-6 py-4 col md:flex font-medium text-gray-900 whitespace-nowrap bg-[#0F172A]">
                  <img src="img/usa.png" class="w-32" alt="" srcset="">
                      <span class="font-bold text-3xl text-white md:p-6 mx-auto flex justify-center md:mx-0">USD</span>
                  </th>
                  <td class="px-6 py-4 text-center font-light text-5xl neon-buy border border-white">
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
              
                  <td class="px-6 py-4 text-center font-light text-5xl neon-sell">
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
                  <th scope="row" class="px-6 py-4 col md:flex font-medium text-gray-900 whitespace-nowrap bg-[#0F172A]">
                  <img src="img/europe.png" class="w-32" alt="" srcset="">
                      <span class="font-bold text-3xl text-white md:p-6 mx-auto flex justify-center md:mx-0">EUR</span>
                  </th>
                  <td class="px-6 py-4 text-center font-light text-5xl neon-buy border border-white">
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
                
                  <td class="px-6 py-4 text-center font-light text-5xl neon-sell">
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
                  <th scope="row" class="px-6 py-4 col md:flex font-medium text-gray-900 whitespace-nowrap bg-[#0F172A]">
                  <img src="img/south-africa.png" class="w-32" alt="" srcset="">
                      <span class="font-bold text-3xl text-white md:p-6 mx-auto flex justify-center md:mx-0">ZAR</span>
                  </th>
                  <td class="px-6 py-4 text-center font-light text-5xl neon-buy border border-white">
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
                
                  <td class="px-6 py-4 text-center font-light text-5xl neon-sell">
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
      <span class="text-3xl text-white font-bold justify-end flex pr-5 py-6"><?php $date = date("dS F Y"); echo "$date" ?></span> 
  </div>

</div>
  <!-- currency ends -->
  <div class="w-full bg-[#0F172A] p-5   bottom-0 ">
    <p class="text-white text-xl text-center font-semibold">Sunny Group Of Companies(c) Copyright-2023</p> 
  </div>

</body>
</html>