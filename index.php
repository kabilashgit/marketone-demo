<?php
$data = [
  'meta' =>  [
    'title' => 'Home',
    'page_desc' => '',
    'page_image' => ''
  ]
]
?>
<?php include "includes/meta-info.php" ?>

<div class="container px-0">
  <?php include "includes/navigation.php" ?>
</div>

<div class="container py-4">
  <div class="row">
    <div class="col-md-8">
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem blanditiis corporis cupiditate debitis deleniti dignissimos earum et expedita incidunt nam nisi odio quaerat quia quibusdam quis reiciendis, rem repudiandae tempora totam ut veritatis
        <a href="javascript:void(0);">vitae voluptate</a>. At atque beatae dicta dignissimos doloribus enim esse facilis fuga, fugit maxime, omnis placeat quae quaerat quia quibusdam sit tenetur totam vitae voluptatem voluptates. Accusantium ea libero nulla omnis sapiente tempore vel veniam.</p>


      <div class="row no-gutters pt-3">
        <div class="col-md-6 profile">
          <div class="row">
            <div class="col-auto">
              <img src="assets/images/profile_1.jpg" alt="" class="img-fluid">
            </div>
            <div class="col">
              <h3>Profile Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi blanditiis commodi delectus, deleniti dolor dolore doloribus dolorum ducimus enim et ex facere, facilis hic incidunt iusto laboriosam magni mollitia necessitatibus nemo neque nihil nobis, nulla perspiciatis praesentium quam quas quos sunt tempora tempore velit voluptas voluptatem voluptates. At, error.</p>

              <a href="javascript:void(0);" class="font-weight-bold">Read More <img src="assets/images/cta_arrow-2.png" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 profile">
          <div class="row">
            <div class="col-auto">
              <img src="assets/images/profile_2.jpg" alt="" class="img-fluid">
            </div>
            <div class="col">
              <h3>Profile Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi blanditiis commodi delectus, deleniti dolor dolore doloribus dolorum ducimus enim et ex facere, facilis hic incidunt iusto laboriosam magni</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cumque ipsum, iste labore nulla velit?</p>

              <a href="javascript:void(0);" class="font-weight-bold">Read More <img src="assets/images/cta_arrow-2.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <form method="post" id="form" class="form">
        <div class="form-group">
          <label for="firstName">First Name *</label>
          <input type="text" id="firstName" name="firstName" placeholder="" class="form-control">
        </div>
        <div class="form-group">
          <label for="lastName">Last Name *</label>
          <input type="text" id="lastName" name="lastName" placeholder="" class="form-control">
        </div>
        <div class="form-group">
          <label for="title">Title *</label>
          <input type="text" id="title" name="title" placeholder="" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email *</label>
          <input type="text" id="email" name="email" placeholder="" class="form-control">
        </div>
        <div class="form-group">
          <label for="phone">Phone *</label>
          <input type="tel" id="phone" name="phone" placeholder="" class="form-control">
        </div>
        <div class="form-group">
          <label for="select" class="form-label">Already A Client *</label>
          <select class="form-control" id="select" name="select">
            <option value=""> - Please Select - </option>
            <option value="Option-1">Option-1</option>
            <option value="Option-2">Option-2</option>
            <option value="Option-3">Option-3</option>
          </select>
        </div>
        <div class="form-group">
          <button class="btn btn-lg bg--blue" type="submit">Contact Us</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include "includes/footer-assets.php"; ?>
