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
    <title>Currency Excahnge</title>
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

  <!-- header starts -->
  <div class="w-full flex justify-center">
      <div>
        <img src="img/currency.png" alt="logo" class="w-80">
        <span class="text-xl font-bold justify-center flex -mt-14"><?php $date = date("dS F Y"); echo "$date" ?></span> 
      </div>
  </div>
  <!-- currency starts -->
  <div class="container mx-auto pt-8">
      <div class="flex flex-col md:flex-row  gap-8 p-5">
        <div class="p-8 w-full md:w-1/2 neo rounded-xl flex flex-col md:flex-row items-center">
          <div class="w-2/3">
            <img src="img/british.png" alt="british" class="w-44 mx-auto md:mx-0">
            <p class="text-xl font-semibold pt-3 pb-3 text-center md:text-start text-[#187CA5]">CURRENCY - GBP</p>
          </div>
          <div class="w-full md:w-1/2 flex flex-row  justify-center items-center md:gap-3 gap-0">
            <div class="w-1/2 flex flex-col mx-auto">
              <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-10 border border-green-700 rounded text-center mx-auto">
                BUY
              </button>
              <h1 class="text-black text-2xl font-bold py-2 mx-auto">
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
              </h1>
            </div>
            <div class="w-1/2 flex flex-col mx-auto">
              <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-10 border border-red-700 rounded text-center mx-auto">
                SELL
            </button>
            <h1 class="text-black text-2xl font-bold py-2 mx-auto">
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
              </h1>
            </div>
          </div>
        </div>
        <!-- card 2 starts -->
        <div class="p-8 w-full md:w-1/2 neo rounded-xl flex flex-col md:flex-row items-center">
          <div class="w-2/3">
            <img src="img/usa.png" alt="british" class="w-44 mx-auto md:mx-0">
            <p class="text-xl font-semibold pt-3 pb-3 text-center md:text-start text-[#187CA5]">CURRENCY - USD</p>
          </div>
          <div class="w-full md:w-1/2 flex flex-row  justify-center items-center md:gap-3 gap-0">
            <div class="w-1/2 flex flex-col mx-auto">
              <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-10 border border-green-700 rounded text-center mx-auto">
                BUY
              </button>
              <h1 class="text-black text-2xl font-bold py-2 mx-auto">
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
              </h1>
            </div>
            <div class="w-1/2 flex flex-col mx-auto">
              <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-10 border border-red-700 rounded text-center mx-auto">
              SELL
            </button>
            <h1 class="text-black text-2xl font-bold py-2 mx-auto">
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
              </h1>
            </div>
          </div>
        </div>
    </div>
  </div>
  <!-- card 3 starts -->
  <div class="container mx-auto ">
      <div class="flex flex-col md:flex-row  gap-8 p-5">
        <div class="p-8 w-full md:w-1/2 neo rounded-xl flex flex-col md:flex-row items-center">
          <div class="w-2/3">
            <img src="img/europe.png" alt="british" class="w-44 mx-auto md:mx-0">
            <p class="text-xl font-semibold pt-3 pb-3 text-center md:text-start text-[#187CA5]">CURRENCY - EUR</p>
          </div>
          <div class="w-full md:w-1/2 flex flex-row  justify-center items-center md:gap-3 gap-0">
            <div class="w-1/2 flex flex-col mx-auto">
              <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-10 border border-green-700 rounded text-center mx-auto">
                BUY
              </button>
              <h1 class="text-black text-2xl font-bold py-2 mx-auto">
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
              </h1>
            </div>
            <div class="w-1/2 flex flex-col mx-auto">
              <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-10 border border-red-700 rounded text-center mx-auto">
              SELL
            </button>
            <h1 class="text-black text-2xl font-bold py-2 mx-auto">
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
              </h1>
            </div>
          </div>
        </div>
        <!-- card 4 starts -->
        <div class="p-8 w-full md:w-1/2 neo rounded-xl flex flex-col md:flex-row items-center">
          <div class="w-2/3">
            <img src="img/south-africa.png" alt="british" class="w-44 mx-auto md:mx-0">
            <p class="text-xl font-semibold pt-3 pb-3 text-center md:text-start text-[#187CA5]">CURRENCY - ZAR</p>
          </div>
          <div class="w-full md:w-1/2 flex flex-row  justify-center items-center md:gap-3 gap-0">
            <div class="w-1/2 flex flex-col mx-auto">
              <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-10 border border-green-700 rounded text-center mx-auto">
                BUY
              </button>
              <h1 class="text-black text-2xl font-bold py-2 mx-auto">
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
              </h1>
            </div>
            <div class="w-1/2 flex flex-col mx-auto">
              <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-10 border border-red-700 rounded text-center mx-auto">
              SELL
            </button>
            <h1 class="text-black text-2xl font-bold py-2 mx-auto">
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
              </h1>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="w-full bg-black p-5 lg:absolute bottom-0">
    <p class="text-white text-xl text-center">Copyright-2023</p> 
  </div>

</body>
</html>