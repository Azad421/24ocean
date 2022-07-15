@extends('layouts.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/policies.css') }}">
@endsection
@section('content')
<section class="about" id="about">

    <h1 class="heading"> <span>TERMS AND </span>CONDITION</h1>

    <div class="row">

        <div class="content">
            <h3> What Are The Terms and Conditions at 24 Ocean?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
        </div>

    </div>

</section>


<<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> SHOP</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Blogs</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="refund.blade.php"> <i class="fas fa-angle-right"></i> Refund Policy</a>
         <a href="./return.policy"> <i class="fas fa-angle-right"></i> Return Policy</a>
         <a href="./PRIVACY.HTML"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
         <a href="./T&C.HTML"> <i class="fas fa-angle-right"></i> Terms And Condition</a>
         <a href="shipping.blade.php"> <i class="fas fa-angle-right"></i> Shipping Policy</a>
         <a href="disclaimer.blade.php"> <i class="fas fa-angle-right"></i> Disclaimer</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +91 90440 00121</a>
         <a href="#"> <i class="fas fa-envelope"></i> care@24ocean.co </a>
         <a href="#"> <i class="fas fa-map"></i> KANPUR, UTTAR PRADESH, INDIA</a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by LAVANAYA | all rights reserved! </div>

</section>

@endsection
@section('script')
    <script src="{{ asset('assets/js/policy.js'}}" async defer></script>
@endsection

