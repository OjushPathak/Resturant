<!DOCTYPE html>
<html lang="en">

  <head>
  <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    </head>
    
    <body>
    
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="" class="logo">
                            <img src="assets/images/klassy-logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            <li class="scroll-to-section btn btn-primary text-light">
                                
                            @auth
                            <a href="{{url('showcart',Auth::user()->id)}}" class="text-light">
                            Cart[{{$count}}]
                            </a>

                            @endauth

                            @guest

                            Cart

                            @endguest
                        
                        
                        </li> 
                          
                                

                            @if (Route::has('login'))
                
                    @auth
                       <li>

                        <x-app-layout>
                        </x-app-layout>
                        
                       </li>
                    @else
                    
                        <li><a href="{{ route('login') }}" class="ml-5" >Log in</a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}" class="">Register</a></li>
                        @endif
                      
                    @endauth
                </div>
            @endif

                            </li>
                        </ul>        
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->









    
<div id="top"> 
  <table style="border:1px solid; width: 100%;">
    <thead>
      <tr>
        <th style="padding-top:10px;">Food Name</th>
        <th style="padding-top:20px;">Price</th>
        <th style="padding-top:20px;">Quantity</th>
        <th>Action</th>
      </tr>
    </thead>

    <form action="{{url('orderconfirm')}}" method="post">
        @csrf


    @foreach ($data as $data)

    
                <tr>
                    <td style="padding-top:20px;">
                    <input type="text" name="foodname[]" value=" {{$data->title}}" hidden="">
                    {{$data->title}}</td>
                    <td style="padding-top:20px;">
                    <input type="text" name="price[]" value=" {{$data->price}}" hidden="">
                    Rs. {{$data->price}}/-</td>
                    <td style="padding-top:20px;" >
                    <input type="text" name="quantity[]" value=" {{$data->quantity}}" hidden="">
                    {{$data->quantity}}</td>
                </tr>
        
        
      

    @endforeach
    

    

    @foreach ($data2 as $data2)

                <tr style="position:relative; top:-100px; right:-1230px">
                <td><a href="{{url('remove',$data->id)}}" class="btn btn-warning"> Remove </a> </td>
                </tr>

    @endforeach
    </table>


                <div class="" align="center" style="padding: 10px;">
                <button type="button" class="btn btn-primary" id="order">Order Now</button>
                </div>



        <div id="apear" align="center" style="padding: 10px; display:none;" >


                    <div class="" style="padding: 10px;">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" placeholder="Name">
                    </div>


                    <div class="" style="padding: 10px;">
                        <label for="">Phone</label>
                        <input type="text" name="phone" id="" placeholder="Phone Number">
                    </div>




                    <div class="" style="padding: 10px;">
                        <label for="">Address</label>
                        <input type="text" name="address" id="" placeholder="Address">
                    </div>


                    <div class="" style="padding: 10px;">
                        
                        <input type="submit" class="btn btn-success"value="Order Confirm">
                        <button id="close" type="button" class="btn btn-danger">Close</button>
                    </div>

        </div>

</form>







    </div>     


  


























<script type="text/javascript">

$("#order").click(

    function(){
        $("#apear").show();
    }
);

$("#close").click(

    function(){
        $("#apear").hide();
    }
);



</script>


        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/slick.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });

</script>
</body>
</html>