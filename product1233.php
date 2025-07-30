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
        <img src="image/air-cooler/01.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="active">

                      </div>
                    </div><div  class="carousel-item"  id="" style="max-height:400px; min-height: 400px;" >
                      <div class="d-flex " style="height: 400px;" >
                        <img src="image/air-cooler/01-1.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="">

                      </div>
                    </div><div  class="carousel-item"  id="" style="max-height:400px; min-height: 400px;" >
                      <div class="d-flex " style="height: 400px;" >
                        <img src="image/air-cooler/01-2.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="">

                      </div>
                    </div><div  class="carousel-item"  id="" style="max-height:400px; min-height: 400px;" >
                      <div class="d-flex " style="height: 400px;" >
                        <img src="image/air-cooler/01-3.jpg" class="d-block img-fluid m-auto" alt="Product Image" id="">

                      </div>
                    </div><button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button><button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button></div><div class="text-start mt-3 "><h6 class="fw-bold">Select Color</h6><div class="d-flex"><div class="p-3 text-center me-2" id="images" onclick="changecolor(this)" data-color="0" style="border: 1px solid; border-radius: 0.6rem; max-width: 100px; box-shadow: 1px 1px 2px #4185fbc9; border-color:#4185fbc9;">
                              <img class="img-fluid mb-2" style="max-width: 70px;" id="0" src="image/air-cooler/01.jpg" alt="">
                              <p class="mb-0">White</p>
                          </div><div class="p-3 text-center me-2" id="images" onclick="changecolor(this)" data-color="1" style="border: 1px solid; border-radius: 0.6rem; max-width: 100px; box-shadow: 1px 1px 2px #4185fbc9; ;">
                              <img class="img-fluid mb-2" style="max-width: 70px;" id="1" src="image/air-cooler/01-04.jpg" alt="">
                              <p class="mb-0"> ACGC</p>
                          </div></div></div></div></div></div>
              
              <div class="row p-2 my-2 bg-white">
                <p class=" " style="font-weight: 100;">Crompton 40 L Room/Personal Air Cooler  (White, ACGC - MARVEL NEO40</p>
                <div class="d-flex">
                  <h5 class="me-2 fw-bold " style="">₹389</h5>
                  <h5 class="me-2 text-muted fw-bold text-decoration-line-through " style="">₹6999</h5>

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


                    

              </div><div class="row  mt-2"><div class="col bg-white border p-3"><p class="fw-bold">Product Detail</p><p>In The Box 1 Air Cooler
General
Brand
Crompton
Model Name
ACGC - MARVEL NEO40
Color
White
Type
Room/Personal
Number of Speeds
3
Blower/Fan
Blower
Water Tank Capacity
40 L
Cooling and Heating
No
Remote Support
No
Performance Features
Cooling Coverage Area
153 sq.ft
Speed Control
3 Speed Settings
Operating Mode
Cool Mode, Swing Mode
Air Throw Distance
26 ft
Air Deflection
4 Way
Body And Design Features
Body Material
Plastic
Blower/Fan Material
Plastic
Castor Wheels
Yes
Number of Castor Wheels
4
Convenience Features
Dust Filter
Yes
Other Convenience Features
Mosquito Net, This air cooler comes with a 3-speed control that helps manage and direct the airflow as per your requirement and comfort.
Power Features
Power Requirement
165W
Power Consumption - Heating
165 W
Other Power Features
The air cooler's corrosion-free, designed thermoplastic body assures that it will last for an extended period.
Additional Features
Cooler Location
Indoor
Other Features
Very silent, Sound less, No unwanted noise
Dimensions
Width x Height x Depth
38 cm x 92 cm x 49 cm
Warranty
Warranty Summary
1 Year Warranty for Manufacturing Defects
Covered in Warranty
Electrical Parts and Components Only
Not Covered in Warranty
Plastic Body, Transport Damage
Warranty Service Type
Onsite, After Sales Service for Peace of Mind, Contact Crompton's Customer Care on Toll Free Number: 1800-419-0505, Monday to Saturday (9AM to 7PM)
Domestic Warranty
1 Year</p></div></div>

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
     <a href="cart.php?item=18&amp;price=199&amp;originalPrice=3399&amp;title=Crompton%2040%20L%20Room%2FPersonal%20Air%20Cooler%20(White%2C%20ACGC%20-%20MARVEL%20NEO40)&amp;image=image/air-cooler/01.jpg" id="cart" class="stretched-link"></a>
     
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