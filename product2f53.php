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
    <div class="row border p-1 bg-white"><div id="carouselExampleControls"  class="carousel slide" data-bs-ride="carousel"><div class="carousel-inner" ><div  class="carousel-item active"  id="first" style="max-height:400px; min-height: 400px;" >
                      <div class="d-flex " style="height: 400px;" >
                        <img src="image/headphone/wh-1000xm4-sony-2.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="active">

                      </div>
                    </div><div  class="carousel-item"  id="" style="max-height:400px; min-height: 400px;" >
                      <div class="d-flex " style="height: 400px;" >
                        <img src="image/headphone/wh-1000xm4-sony-3.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="">

                      </div>
                    </div><div  class="carousel-item"  id="" style="max-height:400px; min-height: 400px;" >
                      <div class="d-flex " style="height: 400px;" >
                        <img src="/image/headphone/wh-1000xm4-sony-4.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="">

                      </div>
                    </div><div  class="carousel-item"  id="" style="max-height:400px; min-height: 400px;" >
                      <div class="d-flex " style="height: 400px;" >
                        <img src="image/headphone/wh-1000xm4-sony-5.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="">

                      </div>
                    </div></div><button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button><button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button></div><div class="text-start mt-3 "><h6 class="fw-bold">Select Color</h6><div class="d-flex"><div class="p-3 text-center me-2" id="images" onclick="changecolor(this)" data-color="0" style="border: 1px solid; border-radius: 0.6rem; max-width: 100px; box-shadow: 1px 1px 2px #4185fbc9; border-color:#4185fbc9;">
                              <img class="img-fluid mb-2" style="max-width: 70px;" id="0" src="image/wh-1000xm4-sony-2.jpg" alt="">
                              <p class="mb-0">Black</p>
                          </div><div class="p-3 text-center me-2" id="images" onclick="changecolor(this)" data-color="1" style="border: 1px solid; border-radius: 0.6rem; max-width: 100px; box-shadow: 1px 1px 2px #4185fbc9; ;">
                              <img class="img-fluid mb-2" style="max-width: 70px;" id="1" src="image/headphone/wh-1000xm4-sony-grey.jpg" alt="">
                              <p class="mb-0">Silver</p>
                          </div></div></div></div></div></div>
              
              <div class="row p-2 my-2 bg-white">
                <p class=" " style="font-weight: 100;">SONY WH-1000XM4 Bluetooth Headset  (Black, On the Ear)</p>
                <div class="d-flex">
                  <h5 class="me-2 fw-bold " style="">₹129</h5>
                  <h5 class="me-2 text-muted fw-bold text-decoration-line-through " style="">₹29990</h5>

                  <h5 class="me-1 fw-bold " style="color:#008C00">99% off</h5>


                </div>

              </div>

              <div class="row bg-white d-flex p-3 mb-1 mt-2 border ">
                <img class="m-auto" src="public/pay-latter.webp" alt="pay-latter">
              </div><div class="row py-2 bg-white border mt-1 ">
                
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


                    

              </div><div class="row  mt-2"><div class="col bg-white border p-3"><p class="fw-bold">Product Detail</p><p>You can enjoy an optimised listening experience with the Sony WH-1000XM4 Bluetooth Headphones. With their Digital Noise Cancellation, these headphones allow you to clearly hear every tune, note, and word with clarity despite your surroundings. Additionally, incorporating Dual Noise Sensor technology and featuring up to two microphones on each earcup, these headphones effectively capture ambient sounds and transmit the data to the HD Noise Cancelling Processor QN1. Also, these headphones provide enhanced call quality through their incorporation of up to five inbuilt microphones and sophisticated audio signal processing technology.
Digital Noise Cancellation
Thanks to their Digital Noise Cancellation, the Sony WH-1000XM4 Bluetooth Headphones ensure that you hear every note, word, and tune with clarity irrespective of the environment. Also, equipped with additional microphones, these headphones enhance call clarity by isolating surrounding noise, leading to improved phone call quality and further reduction of high- and mid-frequency sounds.
Dual Noise Sensor Technology
Integrated with Dual Noise Sensor technology and boasting up to two microphones on each earcup, these headphones can efficiently capture surrounding sounds and send the information to the HD Noise Cancelling Processor QN1. Moreover, the HD Noise Cancelling Processor QN1e utilises a new algorithm to apply real-time noise-cancelling processing to a variety of environments.
Enhanced Call Quality
With the combination of up to five inbuilt microphones with sophisticated audio signal processing, these headphones offer improved call quality.
Speak-to-chat Technology
Incorporating Speak-to-chat technology, these headphones can automatically pause music when you speak, thereby allowing you to converse freely.
Inbuilt Amazon Alexa
As these headphones are Alexa-enabled, they ensure hands-free voice access to a variety of music, information, and more.
Ambient Sound Control
Equipped with ambient sound control, these headphones effectively eliminate background noise while enabling important sounds to pass through, ensuring a safe and immersive listening experience while you're on the go.
Quick Attention Mode
Boasting Quick Attention mode, these headphones allow you to quickly have a conversation by simply placing your hand over the right earcup.
Upscale Compressed Digital Music Files
These headphones incorporate Digital Sound Enhancement Engine, co-developed with Sony Music Studios Tokyo, utilising Edge-AI technology to enhance and upscale compressed digital music files for an optimised listening experience.
Improved Sound
Equipped with up to 40 mm drivers and Liquid Crystal Polymer (LCP) diaphragms, these headphones accurately reproduce a wide range of frequencies, delivering exceptional audio performance across the entire spectrum.
Personalised Listening Experience
Owing to their Adaptive Sound Control, these headphones can automatically adjust to your location and behaviour, ensuring a customised listening experience.
Smart Listening
Equipped with SENSE ENGINE's Smart Listening technology, these headphones have the ability to detect your activity and automatically adjust the noise-cancelling levels for optimal balance.
Wearing Detection
Thanks to their innovative wearing detection capability, these headphones intelligently pause playback when removed and seamlessly resume when placed back on.
General
Model Name
WH-1000XM4
Color
Black
Headphone Type
On the Ear
Inline Remote
Yes
Sales Package
1 Headphone, Carrying Case, Plug Adaptor for In-flight Use, Headphone Cable (Approx. 1.2 m), USB Cable Type-C (Approx. 20 cm)
Connectivity
Bluetooth
Headphone Design
Over the Head
Compatible Devices
Laptop, Tablet, Mobile
Product Details
Deep Bass
Yes
With Microphone
Yes
Warranty
Domestic Warranty
1 Year
Warranty Summary
1 Year Warranty Provided by the Manufacturer from Date of Purchase
Covered in Warranty
Manufacturing Defects
Not Covered in Warranty
Physical Damages
</p></div></div>

<script>




  


</script>

      <div class="fixed-bottom row  " style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.459);">
         <div class="position-relative d-flex">
            <div class="col-6 p-3 d-flex bg-white " >
               <p class="m-auto">Add to Cart</p>
            </div>
            <div class="col-6 p-3 d-flex position-relative" style="background-color:#FFC200" >
               <p class="m-auto">Buy Now</p>
            </div>
            <a href="cart.php?item=12&price=129&originalPrice=29990&title=SONY%20WH-1000XM4%20Bluetooth%20Headset%20(Black,%20On%20the%20Ear)&image=image/headphone/wh-1000xm4-sony-2.jpg" id="cart" class="stretched-link"></a>
    
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