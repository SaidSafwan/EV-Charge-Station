<?php
require 'config.php';
if(!empty($_SESSION["id"])){
	header("Location: index.php");
}
if(isset($_POST["submit"])){
	$useremail = $_POST["useremail"];
	$password = $_POST["password"];
	$result = mysqli_query($conn,"SELECT * FROM user_table WHERE username ='$useremail' OR email= '$useremail'");
	$row=mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result) > 0){
		if($password == $row['password']){
			$_SESSION["login"] = true;
			$_SESSION["id"] = $row["id"];
			header("Location: index.php");
		}
		else{
			echo "<script> alert('Wrong Password'); </script>";
		}
	}
		else{
			echo "<script> alert('User Not Registered'); </script>";
		}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELECTRIFYINDIA</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- <div class="bgimage">
        <div class="nav">
            <div class="leftnav">
                <h4>ELECTRIFYINDIA</h4>
            </div>
            <div class="rightnav">
                <ul>
                    <li id="firstlist">Home</li>
                    <li>Service</li>
                    <li>About</li>
                    <li>stations</li>
                    <li>Blog</li>
                    <li>work</li>
                    <li>contact</li>
                </ul>
            </div>
        </div>
        <div class="text">
            <h4>GET.SET.CHARGE</h4>
            <h1>FUTURE INDIA IS HERE</h1>
            <h3>DON'T WORRY WHEN ELECTRIFYINDIA IS HERE</h3>
            <BUTton id="fbtn"><a href="#" id="anchor" >SIGN UP</a></BUTton>
            <button id="lbtn">LOG IN</button>
        </div>
    </div> -->
    <div class="bgimage">
      <div class="get">
        
        <!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
      <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
        <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
          <polygon points="50,0 100,0 50,100 0,100" />
        </svg>
  
        <div>
          <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
              <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                  <!-- <a href="#">
                    <span class="sr-only">Workflow</span>
                    <img alt="Workflow" class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg">
                  </a> -->
                  <div class="-mr-2 flex items-center md:hidden">
                    <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                      <span class="sr-only">Open main menu</span>
                      <!-- Heroicon name: outline/menu -->
                      <!-- <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                      </svg> -->
                    </button>
                  </div>
                </div>
              </div>
              <div class=" mr-5 hidden md:block md:ml-10 md:pr-4 md:space-x-8" id="navbar">
                <a href="#sec1" class=" mr-5 navlinks">Home</a>
  
                <a href="#content" class=" mr-5 navlinks">Features</a>
  
                <a href="#steps" class=" mr-5 navlinks">Services</a>
  
                <a href="#maps" class=" mr-5 navlinks">Stations</a>
  
                <!-- <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Log out</a> -->
              </div>
            </nav>
          </div>
  
          <!--
            Mobile menu, show/hide based on menu open state.
  
            Entering: "duration-150 ease-out"
              From: "opacity-0 scale-95"
              To: "opacity-100 scale-100"
            Leaving: "duration-100 ease-in"
              From: "opacity-100 scale-100"
              To: "opacity-0 scale-95"
          -->
          <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
              <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                  <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                </div>
                <div class="-mr-2">
                  <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Close main menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#sec1" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Home</a>
  
                <a href="#content" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Features</a>
  
                <a href="#steps" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Services</a>
  
                <a href="#maps" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Stations</a>
              </div>
              <!-- <a href="#logout" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100"> Log out </a> -->
            </div>
          </div>
        </div>
  
      <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28" id="sec1">
          <div class="sm:text-center lg:text-left">



            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
              <span class="block xl:inline" id="hero-text">Simple. Reliable. Efficient.</span>
              <span class="block text-indigo-600 xl:inline" id="hero-text2">Find Then Get Charge Your Car Fast</span>
            </h1>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">Are you having trouble finding an electric car station near you?
                Don't worry, Electrifyindia has a solution! we have spread all over the world and are officially certified.</p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow">
                <label class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10 show-btn" id="show" onclick="openform()"><a href="signup.php"> Sign Up </a></label>
                <!-- <label for="show" class="show-btn px-8 py-3">SIGN UP</label> -->
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10" onclick="openlogin()"> Log In </a>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
      <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="images/display.jpg" alt="">

        <div class="popup">
            <div class="center" id="login_form">
              <label for="show" class="close-btn" onclick="closelogin()">&times;</label>
                <div class="text"><h2>Log In</h2></div>
                  <form action="#" class="" method="post" autocomplete="off">
                    <div class="data">
                      <label for="useremail">Username or Email : </label>
                      <input type="text/email" name="useremail" id = "useremail" autocomplete="off" required value="" placeholder="Enter Your Username or Email">
                    </div>
                    <div class="data">
                      <label for="password">Password : </label>
                      <input type="password" name="password" id = "password" autocomplete="off" required value="" placeholder="Enter Your Password">
                    </div>
                    <div class="btn">
                      <div class="inner" id="btn"></div>
                      <button type="submit" name="submit">Log In</button>
                    </div>
                  </form>
              </div>
          </div>

       </div>
      </div>

    </div>
  </div>
    <hr>

      <section class="text-gray-600 body-font" id="content" >
        <div class="container px-5 py-24 mx-auto">
          <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20" data-aos="fade-up" data-aos-offset="500">FIND THE CHARGING STATION
            <br class="hidden sm:block">WITH DIFFERENT SOURCES
          </h1>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6 " >
            <div class="p-4 md:w-1/3 flex">
              <!-- <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
              </div> -->
              <div class="flex-grow pl-6"id="cards" data-aos="fade-right" data-aos-offset="500">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">LEVEL 1 CHARGING​​</h2>
                <p class="leading-relaxed text-base">All electric cars come with a cable that connects to the vehicle’s on-board charger and a standard household 120v outlet. One end of the cord has a standard 3-prong household plug. On the other end is a J1772 connector, which plugs into the vehicle.</p><p> Level 1 charging is the least expensive and most convenient charging option, and 120v outlets are readily available.</p>
                <a class="mt-3 text-indigo-500 inline-flex items-center" id="learn">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="p-4 md:w-1/3 flex " >
              <!-- <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                  <circle cx="6" cy="6" r="3"></circle>
                  <circle cx="6" cy="18" r="3"></circle>
                  <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
              </div> -->
              <div class="flex-grow pl-6" id="cards">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">LEVEL 2 CHARGING​​</h2>
                <p class="leading-relaxed text-base">Faster charging occurs via a 240v Level 2 system. This is typically for a single-family home utilizing the same type of plug as a clothes dryer or refrigerator.
                 <p> Level 2 chargers can be up to 80 amp and charging is much faster than Level 1 charging. It provides upwards of 25-30 miles of driving range per hour. That means an 8-hour charge provides 200 miles or more of driving range.</p>
                </p>
                <a class="mt-3 text-indigo-500 inline-flex items-center" id="learn">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="p-4 md:w-1/3 flex ">
              <!-- <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div> -->
              <div class="flex-grow pl-6" id="cards" data-aos="fade-left" data-aos-offset="500">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">DC FAST CHARGING</h2>
                <p class="leading-relaxed text-base">DC Fast Charging (DCFC) is available at rest stops, shopping malls, and office buildings. DCFC is ultra-rapid charging with rates of 125 miles of added range in about 30 minutes or 250 miles in about an hour.</p><p> Many vehicles are capable of getting an 80% charge in about or under an hour using most currently available DC fast chargers.</p>
                <a class="mt-3 text-indigo-500 inline-flex items-center" id="learn3">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
<hr>
    <h2  class="title-font font-medium  flex items-center justify-center" id="steps" data-aos="fade-up" data-aos-offset="500">HOW IT WORKS</h2>
      <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex flex-wrap w-full">
      <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
        <div class="flex relative pb-12">
          <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 1</h2>
            <p class="leading-relaxed">Find The Nearest EV Location Point and Join The Charging Network.</p>
          </div>
        </div>
        <div class="flex relative pb-12">
          <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 2</h2>
            <p class="leading-relaxed">Choose The Suitable Systems/Plugs and Connect It To Your Vehical.</p>
          </div>
        </div>
        <div class="flex relative pb-12">
          <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <circle cx="12" cy="5" r="3"></circle>
              <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
            </svg>
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 3</h2>
            <p class="leading-relaxed">Provide Neccessary Power Consumption Rate and Time Duration For Charging Your Vehical.</p>
            <!-- <p>For Better Experience Use <b>ElectrifyIndia</b> App.</p> -->
          </div>
        </div>
        <div class="flex relative pb-12">
          <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 4</h2>
            <p class="leading-relaxed">Verify Your Authrentication & Complete The Payment Process.</p>
          </div>
        </div>
        <div class="flex relative">
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">FINISH</h2>
            <p class="leading-relaxed">Confirm To <b>Start</b> The Process.</p>
          </div>
        </div>
      </div>
      <img class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12" src="images/station03.jpg" alt="step" data-aos="zoom-in" data-aos-offset="500">
    </div>
  </div>
</section>

<hr>

<section class="text-gray-600 body-font numbers">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4 text-center num">
      <div class="p-4 sm:w-1/4 w-1/2">
        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">240+</h2>
        <p class="leading-relaxed">Charging Ports</p>
      </div>
      <div class="p-4 sm:w-1/4 w-1/2">
        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">140+</h2>
        <p class="leading-relaxed">User Actived</p>
      </div>
      <div class="p-4 sm:w-1/4 w-1/2">
        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">35+</h2>
        <p class="leading-relaxed">Award Winning</p>
      </div>
      <div class="p-4 sm:w-1/4 w-1/2">
        <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">10+</h2>
        <p class="leading-relaxed">Professional Team</p>
      </div>
    </div>
  </div>
</section>

<hr>
<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
      <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30031.52416266066!2d74.81825019127145!3d12.910050383418417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba350a7a1e16793%3A0x4400b021f0d92f01!2sElectric%20Vehicle%20Charging%20Station!5e0!3m2!1sen!2sin!4v1656698557447!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
      <!-- <iframe src="https://www.google.com/maps/d/embed?mid=1jSY9wp9kqbuxMaoRf8PQBdw6qErUtWs&ehbc=2E312F" width="640" height="480"></iframe> -->
      <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
          <p class="mt-1">Maryhill, Bajpe Main Rd, Mary Hill, Ranipura Ulliya, Konchady, Mangaluru, Karnataka</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
          <a class="text-indigo-500 leading-relaxed">ElectrifyIndia@email.com</a>
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
          <p class="leading-relaxed">828-752-4619</p>
        </div>
      </div>
    </div>
    <form action="https://formspree.io/f/xrgjwgey" method="post" autocomplete="off" class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0" id="maps" data-aos="fade-left">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Contact</h2>
      <p class="leading-relaxed mb-5 text-gray-600">Having Trouble? Don't Worry ElectrifyIndia Is Here To Help You Out.</p>
      <div class="relative mb-4" autocomplete="off">
        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required autocomplete="off">
      </div>
      <div class="relative mb-4" autocomplete="off">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required autocomplete="off">
      </div>
      <div class="relative mb-4" autocomplete="off">
        <label for="phone" class="leading-7 text-sm text-gray-600">phone</label>
        <input type="phone" id="phone" name="phone" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required autocomplete="off">
      </div>
      <div class="relative mb-4" autocomplete="off">
        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">SUBMIT</button>
      <p class="text-xs text-gray-500 mt-3">Customer Services Is Our First Priority.</p>
    </form>

  </div>
</section>
<hr>

<section class="text-gray-600 body-font ">
  <h1 id="team" align="center">Team Members</h1>
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="images/elon.jpg">
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">ELON MUSK</h2>
          <p class="text-gray-500">Senior Product Designer</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="images/gates.jpg">
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">BILL GATES</h2>
          <p class="text-gray-500">UI Develeoper</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="images/warren.jpg">
          <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">WARREN BUFFETT</h2>
          <p class="text-gray-500">CTO</p>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>

<footer class="text-gray-600 body-font" id="foot" >
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap md:text-left text-center order-first">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Quick Links</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">About Us</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Services</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">EV Charging</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Contact</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Useful Links</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">Privacy Policy</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Terms and Conditions</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Support</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">FAQ</a>
          </li>
        </nav>
      </div>
      <!-- <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
          </li>
        </nav>
      </div> -->
      <div class="lg:w-1/4 md:w-1/2 w-full px-4 ">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Newsletter</h2>
        <div class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
          <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
            <label for="footer-field" class="leading-7 text-sm text-gray-600"></label>
            <input type="text" id="footer-field" name="footer-field" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Your Email Address">
          </div>
          <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">SUBMIT</button>
        </div>
        <p class="text-gray-500 text-sm mt-2 md:text-left text-center">Stay Connected
          <br class="lg:block hidden">With ElectrifyIndia.
        </p>
      </div>
    </div>
  </div>
  <div class="bg-gray-100" id="footer">
    <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg> -->
        <span class="ml-3 text-xl" id="iconfoot">ELECTRIFYINDIA</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2020 ElectrifyIndia |
        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">All Rights Reserved</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>

<script>

  function openlogin(){
    document.getElementById("login_form").style.display ="block";
  }
  function closelogin(){
    document.getElementById("login_form").style.display ="none";
  }

</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init(
    duration="1500",
    );
</script>

</body>
</html>