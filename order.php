<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="order.css">
</head>
<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="img/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="foods.html">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="order.php">Order Now</a>
                    </li>
                    <li>
    
                        <a href="login.php">Customer</a>
                </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>

    <!--Page header & Title-->
    <section id="order-form" class="order-page">
      <div class="container order_form padding">
        <div class="row">
          <div class="col-md-12 appointment_form">
            <h2 class="heading">Online Order</h2>
            <hr class="heading_space">
          <div class="row">  
           <div class="col-md-8">
           <form onSubmit="return false" id="order_form" class="callus">
                <div class="row">
                <div class="form-group col-md-12">
                <div id="result" class="text-center"></div></div></div>
                 <div class="row">
                 <div class="form-group col-md-12">
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                </div></div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name"  name="name" id="name"  required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                       <input type="email" class="form-control" placeholder="Email address" name="email" id="email" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone No" name="phone" id="phone" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
    
                       <select class="form-control" id="deal" name="deal">
                           <option> Select Deal </option>
                           <option> Deal One ($200) </option>
                           <option> Deal Two ($500) </option>
                           <option> Deal Three ($900) </option>
                           <option> Deal Four ($1300) </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea placeholder="Order Details"  id="message" name="message" required></textarea>
                      </div>
                      <div class="form-group">
                         <div class="btn-submit btn-common-white">
                        <input type="submit" value="Place &nbsp; Order" id="btn_order_submit" />
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </form>
               </div> 
               </div>
          </div>
          <div class="col-md-3">
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </section>
    