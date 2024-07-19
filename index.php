<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zalooda</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
.open-button {
  background:transparent;
  border: none;
  cursor: pointer;
  opacity: 0.8;
}
.form-pop  h1{
   font-style:bold;
}
.form-pop  p{
   font-family:"Lucida Console", Monaco, monospace;
   font-size:45px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 200px;
  right: 35%;
  border: 3px solid black;
  border-radius:20px;
  background-image: linear-gradient(to right, #434343 0%, black 100%);
  color:white;
  z-index:9;
  text-align:center;
  padding:100px;
}
/* CSS */
.cancel {
  width:60%;
  font-size:25px;
  padding: 0.6em 2em;
  border: none;
  outline: none;
  color: rgb(255, 255, 255);
  background: #111;
  cursor: pointer;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.cancel:before {
  content: "";
  background: linear-gradient(
    45deg,
    #ff0000,
    #ff7300,
    #fffb00,
    #48ff00,
    #00ffd5,
    #002bff,
    #7a00ff,
    #ff00c8,
    #ff0000
  );
  position: absolute;
  top: -2px;
  left: -2px;
  background-size: 400%;
  z-index: -1;
  filter: blur(5px);
  -webkit-filter: blur(5px);
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  animation: glowing-button-85 20s linear infinite;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

@keyframes glowing-button-85 {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.cancel:after {
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #222;
  left: 0;
  top: 0;
  border-radius: 10px;
}
    </style>
</head>
<body>
     <div id="container" class="container">
           <div id="menu">
               <div class="brand-logo">
                <img src="logo.png" alt="logo image">
               </div> 
               <div class="menu-item">
                    <a href="about.html">About</a>
                    <a href="reviews.html">Reviews</a>
                    
                    <a href="catering.html">Catering Events</a>
                    <a href="mailto:helpcenter@gmail.com">Help</a>
               </div>
           </div>
           <div id="food-container">
                <div id="header">
                    <div class="add-box">
                       
                    </div>
                    <div class="util">
                     
                     <i class="fa fa-tags"><a href="discount.html" style="text-decoration:none;color:#ff8c00;">Offers</a></i>
                     <i class="fa fa-cart-plus" id="cart-plus"> 0 Items</i> 
                    </div>
                </div>
                <div id="food-items" class="food-items" >
                    <div id="briCake" class="d-biryani">
                       <p id="category-name"> Cakes </p> 
                    </div>
                    <div id="chicken" class="d-chicken">
                        <p id="category-name"> Cupcakes </p>
                        
                     </div>
                     <div id="panner" class="d-paneer">
                        <p id="category-name"> Muffins</p>
                        
                     </div>
                     <div id="Vegetable" class="d-vegetable">
                        <p id="category-name"> Brownies </p>
                        
                     </div>
                     <div id="chinese" class="d-chinese">
                        <p id="category-name"> Cookies </p>
                       
                     </div>
                     <div id="south-indian" class="d-south-indian">
                        <p id="category-name"> Custard </p>
                     </div>
                </div>
                <div id="cart-page" class="cart-toggle">
                  <p id="cart-title">Cart Items</p>
                  <p id="m-total-amount">Total Amount :$30</p>
                  <table>
                     <thead>
                        <td>Item
                        </td>
                        <td>Name
                        </td>
                        <td>Quantity
                        </td>
                        <td>Price
                        </td>
                     </thead>
                    <tbody id="table-body">
                     <tr>
                        <td>
                           <img src="ferrero-rocher-cake.jpg">
                        </td>
                        <td>
                         <p >ferrero rocher cake</p>  
                        </td>
                        <td>
                           <button class="decrease-item">-</button>
                           <span>1</span>
                           <button class="increase-item">+</button>
                        </td>
                        <td>30</td>
                     </tr>
                     
                    </tbody> 
                  </table>
                  <div class="btn-box">
                     
                  </div>
                </div>
           </div>
           <div id="cart">
                <div class="taste-header">
                  <div class="user">
                     <i class=" fa fa-user-circle">
                             <button id="account_detail" class="open-button" style="text-decoration: none; color:#ff8c00;" onclick="openForm()">Account</button></i>
                             <div class="form-popup" id="myForm">
                            
    <h1 style="text-transform:uppercase;margin-bottom:50px;">details</h1>
    <?php
   $con=mysqli_connect('localhost','root','','db_users');
$sql="SELECT * FROM `tb_exist`";
$rs=mysqli_query($con,$sql);
if($rs){
          $result=mysqli_fetch_assoc($rs);
      
      
    }
  ?>
   <p style="font-size:30px;">YOUR ADDRESS : <?php echo $result['address'];?></p><br>
   <p style="font-size:30px;">YOUR EMAIL ID : <?php echo $result['email'];?></p><br>
   <p style="font-size:30px;">YOUR ID : <?php echo $result['id'];?>YTXDE</p><br>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
</div>


 </div>
 <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
                </div>
                <div id="category-list">
                     <p class="item-menu"> Donut worry,be happy! </p>
                            <div class="border"></div> 
                              <div class="list-card">
                                 <img src="Fruit-cake.jpeg">
                                 <a href ="#briCake" class="list-name">Cakes</a>
                              </div>
                              <div class="list-card">
                                 <img src="Red-Velvet-Cupcakes-min-280x420.jpg">
                                 <a href ="#chicken" class="list-name">Cupcakes</a>
                              </div>
                              <div class="list-card">
                                 <img src="Blueberry-Cream-Muffins.jpg">
                                 <a href ="#panner" class="list-name">Muffins</a>
                              </div>
                              <div class="list-card">
                                 <img src="9-caramel-pretzel-nutella-brownie.jpg">
                                 <a href ="#Vegetable" class="list-name">Brownies</a>
                              </div>
                              <div class="list-card">
                                 <img src="best-chocolate-chip-cookiees.webp">
                                 <a href ="#chinese" class="list-name">Cookies</a>
                              </div>
                              <div class="list-card">
                                 <img src="portuguese-custard.jpg">
                                 <a href ="#south-indian" class="list-name">Custard</a>
                              </div>
                            
                  </div>
                  <div id="checkout"   class="checkin">
                     <p id="total-item">Total Item : 0</p>
                     <p id="total-price">Total Price : $30</p>
                     <p id="delivery">Free Delievery above $30</p>
                    <button class="cart-btn"> <a href="checkout.html" style="text-decoration: none;color:whitesmoke;">checkout</a></button>
                  </div>
           </div>
     </div>
     
     <script src="index.js"></script>
</body>
</html>