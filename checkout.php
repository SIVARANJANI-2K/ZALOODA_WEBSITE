<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        span{
            font-size: 50px;
            font-family: sans-serif;
            font-weight: 1000;
            position: relative;
            color: white;
            -webkit-text-stroke: 2px black;
        }
        span::before{
            position: absolute;
            content: "ZALOODA";
            color: #ff8c00;
            animation: filling 2s linear infinite;
            border-right: 3px solid #ff8c00;
            overflow: hidden;
        }
        @keyframes filling{
            0% {width:0%}
            50% {width:100%}
            100% {width:0%}
        }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="py-5 text-center">
           <span id="text"> ZALOODA</span>
      </div>
    </div>
    <div class="container">
    <h4 class="mb-3">Billing Address</h4>
    <form novalidate>
           <div class="row g-3">
             <div class="col-sm-6">
             <label for="firstName" class="form-label">Firstname</label>
    <input id="firstName" type="text" class="form-control" placeholder="Sindhuja" required>
    <div class="invalid-feedback">
        valid first name is required.
    </div>
             </div>
             <div class="col-sm-6">
             <label for="lastName" class="form-label">Lastname</label>
    <input id="lastName" type="text" class="form-control" placeholder="Gopal" required>
    <div class="invalid-feedback">
        valid last name is required.
    </div>
             </div>
             <div class="col-md-5 ">
                <label for="country" class="form-label"> Country</label>
                <select name="country" id="country" class="form-control">
                    <option disabled>choose...</option>
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                    <option value="Australia">Australia</option>
                </select>

            </div>
            <div class="col-md-4">
            <label for="state" class="form-label"> State</label>
                <select name="state" id="state" class="form-control">
                    <option disabled>choose...</option>
                    <option value="tamilnadu">TamilNadu</option>
                    <option value="kerala">Kerala</option>
                    <option value="ap">Andhra Pradesh</option>
                </select>
            </div>
           <div class="col-md-3">
               <label for="postcode" class="form-label">Postcode</label>
               <input type="postcode" class="form-control" placeholder="123" required >
           </div>
           <hr class="my-4">
           <h4 class="mb-3">Payments</h4>
           <div class="form-check">
            <input type="radio" name="paymentmethod" id="creditcard" class="form-check-input" required>
            <label for="creditcard">Credit Card</label>
           </div>

           <div class="form-check">
            <input type="radio"name="paymentmethod" id="debitcard" class="form-check-input" required>
            <label for="debitcard">Debit Card</label>
           </div>

           <div class="form-check">
            <input type="radio"name="paymentmethod" id="paypal" class="form-check-input" required>
            <label for="paypal">Paypal</label>
           </div>
           <div class="row my-3 gy-3">
              <div class="col-md-6">
                 <label for="fullname" class="form-label">Name on Card</label>
                 <input type="text" class="form-control">
                 <small class="text-muted"> Full name as displayed on card</small>
              </div>
              <div class="col-md-6">
                 <label for="creditNumber" class="form-label">Credit Card Number</label>
                 <input type="text" class="form-control">
              </div>
           </div>
           <div class="col-md-3">
             <label for="cv-expiration" class="form-label">Expiration</label>
             <input type="text" class="form-control">
    
           </div>

           <div class="col-md-3">
             <label for="cv-cvv" class="form-label">cvv</label>
             <input type="text" class="form-control">
    
           </div>

           </div>
           <hr class="my-4">
           <button class=" btn-primary btn-lg w-100">Continue to Shipping</button>
    </form>
    </div>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>