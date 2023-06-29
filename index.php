<?php include "admin/config.php";
session_start();
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
        box-shadow:  7px 7px 14px #d0d0d0,
        -7px -7px 14px #f0f0f0;
            }

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

        .buy-txt{
              color:#31C832;
            }
        .sell-txt{
          color:#D22B2B;
        }
    </style>
</head>
<body class="h-screen bg-[#0F172A]">
<div class="w-full">
  <div class="container mx-auto">
      <p class="text-2xl text-white md:text-4xl xl:text-7xl  font-bold pt-3 flex justify-center items-center md:pb-5 md:pt-5">Sunny Bureau de Change</p>
      <p class="text-center text-white text-2xl md:text-3xl xl:text-4xl font-bold">Today's Foreign Exchange Rates:</p>
  </div>
</div>

  <!-- currency starts -->
<div class="container mx-auto p-2 md:p-5 mt-7">
    
  <div class="relative overflow-x-auto shadow-box">
      <table class="w-full text-sm text-left">
          <thead class="text-xs uppercase">
              <tr class="border-b border-gray-200">
                  <th scope="col" class="px-6 py-3 font-extrabold text-white text-4xl xl:text-5xl bg-[#0F172A] w-2/5">
                  Currency
                  </th>
                  <th scope="col" class="px-6 py-3 font-extrabold text-4xl buy-txt xl:text-5xl bg-[#0F172A] text-center">
                      We buy
                  </th>
                  <th scope="col" class="px-6 py-3 font-extrabold text-4xl sell-txt xl:text-5xl bg-[#0F172A] text-center">
                      We sell
                  </th>
              </tr>
          </thead>
          <tbody>
              <tr class="border-b border-gray-200">
                  <th scope="row" class="px-6 pt-4 flex font-medium text-gray-900 whitespace-nowrap bg-[#0F172A] items-center">
                  <div class="flex items-center h-full">
                      <img src="img/british.webp" class="w-20 lg:w-32 xl:w-44" alt="GBP" srcset="">
                      <span class="font-bold text-4xl lg:text-7xl xl:text-[7rem] text-white md:pl-6 mx-auto flex justify-center md:mx-0 lg:pl-12 xl:pl-20">GBP</span>
                  </div>
                  </th>
                  <td class="px-6 py-4 text-center font-semibold text-6xl xl:text-[7rem] buy-txt border border-white" id="buy-price-gbp">
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
                  
                  <td class="px-6 py-4 text-center font-semibold text-6xl xl:text-[7rem] sell-txt" id="sell-price-gbp">
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
                  <th scope="row" class="px-6 pt-4 col flex font-medium text-gray-900 whitespace-nowrap bg-[#0F172A] items-center">
                  <div class="flex items-center h-full">
                      <img src="img/usa.webp" class="w-20 lg:w-32 xl:w-44" alt="USD" srcset="">
                      <span class="font-bold text-4xl lg:text-7xl xl:text-[7rem] text-white md:pl-6 mx-auto flex justify-center md:mx-0 lg:pl-12 xl:pl-20">USD</span>
                  </div>
                  </th>
                  <td class="px-6 py-4 text-center font-semibold text-6xl xl:text-[7rem] buy-txt border border-white" id="buy-price-usd">
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
              
                  <td class="px-6 py-4 text-center font-semibold text-6xl xl:text-[7rem] sell-txt" id="sell-price-usd">
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
                  <th scope="row" class="px-6 pt-4 col flex font-medium text-gray-900 whitespace-nowrap bg-[#0F172A] items-center">
                  <div class="flex items-center h-full">
                      <img src="img/europe.webp" class="w-20 lg:w-32 xl:w-44" alt="EUR" srcset="">
                      <span class="font-bold text-4xl lg:text-7xl xl:text-[7rem] text-white md:pl-6 mx-auto flex justify-center md:mx-0 lg:pl-12 xl:pl-20">EUR</span>
                  </div>
                  </th>
                  <td class="px-6 py-4 text-center font-semibold text-6xl xl:text-[7rem] buy-txt border border-white" id="buy-price-eur">
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
                
                  <td class="px-6 py-4 text-center font-semibold text-6xl xl:text-[7rem] sell-txt" id="sell-price-eur">
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
                  <th scope="row" class="px-6 pt-4 col flex font-medium text-gray-900 whitespace-nowrap bg-[#0F172A] items-center">
                    <div class="flex items-center h-full">
                       <img src="img/south-africa.webp" class="w-20 lg:w-32 xl:w-44" alt="ZAR" srcset="">
                       <span class="font-bold text-4xl lg:text-7xl xl:text-[7rem] text-white md:pl-6 mx-auto flex justify-center md:mx-0 lg:pl-12 xl:pl-20">ZAR</span>
                    </div>
                  </th> 
                  <td class="px-6 py-4 text-center font-semibold text-6xl xl:text-[7rem] buy-txt border border-white" id="buy-price-zar">
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
                
                  <td class="px-6 py-4 text-center font-semibold text-6xl xl:text-[7rem] sell-txt" id="sell-price-zar">
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
      <span id="current-date" class="text-3xl text-white font-bold justify-end flex pr-5 py-1"></span>
  </div>

</div>
  <!-- currency ends -->
  <div class="w-full bg-[#0F172A] p-4 bottom-0 ">
    <p class="text-white text-xl text-center font-medium">Copyright 2023 &copy; Sunny Group of Companies</p>
    <p class="text-white text-xl text-center font-medium">Powered by <a href="https://unicybers.com/" class="text-blue-500">Unicybers</a></p> 
  </div>


  <script>
document.addEventListener('DOMContentLoaded', function() {
    function updatePrices() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var priceData = JSON.parse(xhr.responseText);

                    // Check if price data exists in the response
                    if (priceData && priceData.GBPbuyPrice && priceData.GBPsellPrice) {
                        // Update the price elements with the received data
                        document.getElementById('buy-price-gbp').innerText = priceData.GBPbuyPrice;
                        document.getElementById('sell-price-gbp').innerText = priceData.GBPsellPrice;
                    }

                    if (priceData && priceData.USDbuyPrice && priceData.USDsellPrice) {
                        document.getElementById('buy-price-usd').innerText = priceData.USDbuyPrice;
                        document.getElementById('sell-price-usd').innerText = priceData.USDsellPrice;
                    }
                    if (priceData && priceData.EURbuyPrice && priceData.EURsellPrice) {
                        document.getElementById('buy-price-eur').innerText = priceData.EURbuyPrice;
                        document.getElementById('sell-price-eur').innerText = priceData.EURsellPrice;
                    }
                    if (priceData && priceData.ZARbuyPrice && priceData.ZARsellPrice) {
                        document.getElementById('buy-price-zar').innerText = priceData.ZARbuyPrice;
                        document.getElementById('sell-price-zar').innerText = priceData.ZARsellPrice;
                    }
                } else {
                    console.error('Error: ' + xhr.status);
                }
            }
        };
        xhr.open('GET', 'admin/price.json?timestamp=' + new Date().getTime(), true);
        xhr.send();
    }

    updatePrices();
    setInterval(updatePrices, 5000);
});

// display current date
var currentDate = new Date();

var day = currentDate.getDate();
var month = currentDate.toLocaleString('default', { month: 'long' });
var year = currentDate.getFullYear();

var dayWithSuffix = day + getDaySuffix(day);

var formattedDate = dayWithSuffix + ' ' + month + ' ' + year;
document.getElementById("current-date").textContent = formattedDate;

function getDaySuffix(day) {
  var suffix = "th";
  if (day === 1 || day === 21 || day === 31) {
    suffix = "st";
  } else if (day === 2 || day === 22) {
    suffix = "nd";
  } else if (day === 3 || day === 23) {
    suffix = "rd";
  }
  return suffix;
}
</script>


</body>
</html>