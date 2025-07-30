<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="image/small-logo.png">
      <title>Online Shopping Site for Mobiles, Electronics, Furniture, Grocery, Lifestyle, Books & More. Best Offers!</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
      <link rel="stylesheet" href="public/style.css">
   </head>
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400&amp;display=swap');
   </style>
   <style>
      .share-icon {
      display: block;
      background-color: #fff;
      border-radius: 18px;
      position: absolute;
      right: 0;
      border: 1px solid #eee;
      padding: 10px;
      border-radius: 50%;
      z-index: 1;
      }
      .d-flex {
      cursor: pointer;
      }
      .btn-check {
      display: none;
      }
      .btn {
      border: 2px solid #ccc;
      /* Default border color */
      max-width: 100px;
      color: rgb(51, 51, 51);
      transition: background-color 0.3s, color 0.3s;
      /* Add transition for smooth effect */
      }
      .btn:hover {
      background-color: transparent;
      color: #2874F0;
      }
      .btn-check:checked+label,
      .btn-check.active+label {
      border-color: #4184FB;
      /* Primary border color when checked or active */
      box-shadow: none;
      /* Remove box shadow */
      color: #2874F0;
      /* Text color for highlighted button */
      }
   </style>
   <body style="font-family: 'Inter', sans-serif; font-weight: 400; background-color: #F1F2F4;">
       <nav class="navbar navbar-light " style="background-color: #2874F0;">
         <div class="container">
            <a class="navbar-brand">
               <div class="d-flex">
                  <i class="fa-solid fa-bars text-white m-auto me-2" style="font-size: 1.1rem;"></i>
                  
                  <img src="public/brand.png" width="70px" title="Flipkart">
               </div>
            </a>
            <div class="d-flex">
               <div class="ms-auto">
                  <i class='fas fa-cart-arrow-down'></i>
               </div>
            </div>
            <form class="w-100">
               <input type="text" style="border: none; border-radius: 2px;" class="form-control" placeholder="Search for Products, Brands and More" aria-label="Username" aria-describedby="addon-wrapping">
            </form>
         </div>
      </nav>
      <div class="container-fluid">
         <div class="row border p-1 bg-white">
            <div id="carouselExampleControls"  class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner" >
                  <div  class="carousel-item active"  id="first" style="max-height:400px; min-height: 400px;" >
                     <div class="d-flex " style="height: 400px;" >
                        <img src="image/speaker/jblpartybox310in-jbl.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="active">
                     </div>
                  </div>
                  <div  class="carousel-item"  id="" style="max-height:400px; min-height: 400px;" >
                     <div class="d-flex " style="height: 400px;" >
                        <img src="image/speaker/jblpartybox310in-jbl.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="">
                     </div>
                  </div>
                  <div  class="carousel-item"  id="" style="max-height:400px; min-height: 400px;" >
                     <div class="d-flex " style="height: 400px;" >
                        <img src="image/speaker/jblpartybox310in-jbl-original.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="">
                     </div>
                  </div>
                  <div  class="carousel-item"  id="" style="max-height:400px; min-height: 400px;" >
                     <div class="d-flex " style="height: 400px;" >
                        <img src="image/speaker/jblpartybox310in-jbl-01.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="">
                     </div>
                  </div>
                  <div  class="carousel-item"  id="" style="max-height:400px; min-height: 400px;" >
                     <div class="d-flex " style="height: 400px;" >
                        <img src="image/speaker/8jblpartybox310in-jbl-02.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="">
                     </div>
                  </div>
                  <div  class="carousel-item"  id="" style="max-height:400px; min-height: 400px;" >
                     <div class="d-flex " style="height: 400px;" >
                        <img src="image/speaker/jblpartybox310in-jbl-03.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="">
                     </div>
                  </div>
                  <div  class="carousel-item"  id="" style="max-height:400px; min-height: 400px;" >
                     <div class="d-flex " style="height: 400px;" >
                        <img src="image/speaker/jblpartybox310in-04.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="">
                     </div>
                  </div>
               </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button><button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
        
         <div class="text-start mt-3 ">
            <h6 class="fw-bold">Select Color</h6>
            <div class="d-flex">
               <div class="p-3 text-center me-2" id="images" onclick="changecolor(this)" data-color="0" style="border: 1px solid; border-radius: 0.6rem; max-width: 100px; box-shadow: 1px 1px 2px #4185fbc9; border-color:#4185fbc9;">
                  <img class="img-fluid mb-2" style="max-width: 70px;" id="0" src="image/speaker/jblpartybox310in-jbl-original.jpg" alt="">
                  <p class="mb-0">Black</p>
               </div>
            </div>
         </div>
      </div>
        </div>
      <div class="row p-2 my-2 bg-white">
         <p class=" " style="font-weight: 100;">JBL Partybox 310 - 18Hrs Playtime, JBL Pro Sound, Dynamic Light Show, IPX4 Portable 240 W Bluetooth Soundbar  (Black, Stereo Channel)</p>
         <div class="d-flex">
            <h5 class="me-2 fw-bold " style="">₹349</h5>
            <h5 class="me-2 text-muted fw-bold text-decoration-line-through " style="">₹46999</h5>
            <h5 class="me-1 fw-bold " style="color:#008C00">99% off</h5>
         </div>
      </div>
      <div class="row bg-white d-flex p-3 mb-1 mt-2 border ">
         <img class="m-auto" src="public/pay-latter.webp" alt="pay-latter">
      </div>
      <div class="row py-2 bg-white border mt-1 ">
         <div class="col-4  d-flex flex-column text-center" >
            <img class="m-auto mb-2"  width="30px" src="public/replacement.webp">
            <p class="m-0" style="font-size: 0.6rem;">7 days Replacement</p>
         </div>
         <div class="col-4  d-flex flex-column text-center" >
            <img class="m-auto mb-2"  width="30px" src="public/non-cod.webp">
            <p class="m-0" style="font-size: 0.6rem;">No Cash On Delivery</p>
         </div>
         <div class="col-4  d-flex flex-column text-center" >
            <img class="m-auto" width="70px" src="public/plue-fassured.webp">
            <p class="m-0" style="font-size: 0.6rem;">Plus (F-Assured)</p>
         </div>
      </div>
      <div class="row  mt-2">
         <div class="col bg-white border p-3">
            <p class="fw-bold">Product Detail</p>
            <p>Power Output(RMS): 240 W
               Power Source: AC Adapter
               Battery life: 18 hrs | Charging time: 3.5 hrs
               Bluetooth Version: 5.1
               Wireless range: 10 m
               Wireless music streaming via Bluetooth
               Mesmerize your friends with a cool, dynamic lightshow that syncs to the beat. With subtle pulsing and powerful strobing effects, there's a setting for every party.
               Built-in rechargeable battery for up to 18 hours of playtime. With a telescopic handle and built-in smooth-glide wheels, it's easy to take the party anywhere.
               IPX4 splashproof protection keeps your JBL PartyBox310 safe when your party gets a little wet
               Have even more fun with built-in sound effects or just blast the airhorn to get the dance floor jumping. Add some creativity to the mix via dual mic and guitar inputs. The sound control panel has backlighting that activates in the dark. You'll be able to keep the party going, with no need for a flashlight.
               General
               Sales Package
               1 x JBL party speaker, 1 x Quick-start guide, 1 x Warranty card, 1 x Safety sheet, 1 x AC power code (AC plug varies by region)
               Model Number
               JBLPARTYBOX310IN
               Model Name
               Partybox 310 - 18Hrs Playtime, JBL Pro Sound, Dynamic Light Show, IPX4 Portable
               Type
               Soundbar
               Bluetooth
               Yes
               Memory Card Slot
               No
               Configuration
               Stereo
               Power Source
               AC Adapter
               Power Output (RMS)
               240 W
               Frequency Response
               45 - 18000 Hz
               Color
               Black
               Wired/Wireless
               Wired & Wireless
               Wall Mountable Satellite
               No
               Outdoor Usage
               Yes
               Product Details
               Configuration
               Stereo Channel
               Driver Type
               2 Woofers, 2 Tweeters
               Compatible Devices
               Laptop, Tablet, Mobile, Television, Audio Player, DJ, Club House
               Charging Time
               3.5 hrs
               Battery
               Lithium-ion, Use Time 18 hrs
               USB Ports
               1 USB Ports
               Bluetooth
               5.1 withA2DP v1.3, AVRCP 1.6
               Bluetooth Range
               10 m
               Audio Features
               Signal to Noise Ratio
               80 dB
               Tweeter Support
               Yes, 2
               Other Details
               Technology Used
               Party Speaker with Built-in Karaoke Mode
               Controls
               Play, Pause, Volume, Bluetooth Pairing, Power, DJ Control Panel
               Driver Size
               2 x 6.5 inch Woofers, 2 x 2.5 inch Tweeters
               Power Input
               AC 100 - 240 V, 50 - 60 Hz
               Other Features
               Built-in Sound Effects: Clapping, Scratches, Barking, Horn and More, IPX4 Splash Proof Rated
               Dimensions
               Tweeter Diameter
               65 mm
               Width
               39 cm
               Height
               82 cm
               Depth
               39 cm
               Warranty
               Warranty Service Type
               7 Days Service Center Returns
               Warranty Summary
               1 Year Warranty Provided by the Manufacturer from Date of Purchase
               Covered in Warranty
               Manufacturing Defects
               Not Covered in Warranty
               Physical Damage
               Domestic Warranty
               1 Year
            </p>
         </div>
      </div>
      <script></script>
      <div class="fixed-bottom row  " style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.459);">
         <div class="position-relative d-flex">
            <div class="col-6 p-3 d-flex bg-white " >
               <p class="m-auto">Add to Cart</p>
            </div>
            <div class="col-6 p-3 d-flex position-relative" style="background-color:#FFC200" >
               <p class="m-auto">Buy Now</p>
            </div>
           <a href="cart.php?item=4&amp;price=349&amp;originalPrice=46999&amp;title=JBL%20Partybox%20310%20-%2018Hrs%20Playtime,%20JBL%20Pro%20Sound,%20Dynamic%20Light%20Show,%20IPX4%20Portable%20240%20W%20Bluetooth%20Soundbar%20(Black,%20Stereo%20Channel)&amp;image=image/speaker/jblpartybox310in-jbl.jpg" id="cart" class="stretched-link"></a>     
         </div>
      </div>
      <div class="mb-5"></div>
      </div>
      <script>
         var url = document.getElementById('cart').href
         
         var images = document.querySelectorAll('#images');
         var color=images[0].getAttribute('data-color');
         
         document.getElementById('cart').href = url + color;
         
         
         function changecolor(element) {
         
            
           // Get the color from the data-color attribute
           color = element.getAttribute('data-color');
           document.getElementById('active').src = document.getElementById(color).src;
         
         
           var images = document.querySelectorAll('#images');
           for (var i = 0; i < images.length; i++) {
             images[i].style.borderColor = 'gray';
         
           }
         
         
           element.style.borderColor = '#4185fbc9';
         
           // Remove 'active' class from all elements with the class 'carousel-item'
           var carouselItems = document.getElementsByClassName('carousel-item');
           for (var i = 0; i < carouselItems.length; i++) {
               carouselItems[i].classList.remove('active');
               
           }
         
           // Add 'active' class to the first element with the class 'carousel-item'
           document.getElementById('first').classList.add('active');
           document.getElementById('cart').href = url+ color;
         
         }
         
      </script>
      <script>
         // Assuming you have Bootstrap's JavaScript included in your project
         
         // Get all buttons with the class "btn-check"
         var btns = document.querySelectorAll('.btn-check');
         
         // Loop through each button
         btns.forEach(function(btn) {
           // Add a click event listener to each button
           btn.addEventListener('click', function() {
             // Toggle the "active" class on each button
             btns.forEach(function(otherBtn) {
               otherBtn.classList.remove('active');
             });
         
             this.classList.toggle('active');
           });
         });
      </script>
   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
   <script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'},{'ap':'cpsh-oh'},{'server':'sg2plzcpnl493881'},{'dcenter':'sg2'},{'cp_id':'9911385'},{'cp_cl':'8'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script>
   
</html>