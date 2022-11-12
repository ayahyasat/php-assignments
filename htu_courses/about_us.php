<?php
require './header.php'; ?>

<main class="m-auto my-3">

<h1 class="text-center ">About Us Page</h1>
<hr class="w-50 m-auto my-3">
<div class="text-center">
<p>Some text about who we are and what we do.</p>
<p>Resize the browser window to see that this page is responsive by the way.</p>
</div>
<div class="mt-5 row">


<h2 style="text-align:center">Our Team</h2>


<div class="grid text-center">
  <div class="g-col-4">
  <div class="card border bg-light">
      <img src="./assets/images/download.png" alt="Jane" style="width:120px">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me </p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
      </div>
  </div>
  <div class="g-col-4">
  <div class="card  border bg-light">
    <img src="./assets/images/download.png" alt="Mike" style="width:120px">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me </p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
      </div>
  <div class="g-col-4">
  <div class="card  border bg-light">
    <img src="./assets/images/download.png" alt="john" style="width:120px">
        <h2>john Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me </p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
      </div>
</div>
</main>
<?php require './footer.php'; ?>