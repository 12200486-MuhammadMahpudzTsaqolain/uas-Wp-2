<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- banner -->
<section class="banner">
  <div class="container">
    <div class="banner-left">
      <h1>
      Selamat datang di<br />
        Iphone Second 69
      </h1>
      <p>Berbagai jenis iphone dengan harga terbaik</p>
    </div>
  </div>
</section>
<!-- produk -->
<section id="product">
  <div class="container">
    <h3>List Harga</h3>
    <hr>
    <?php foreach ($item as $i) { ?>
      <div class="col-4">
        <a href="">
          <img src="img/<?= $i['img'] ?>" />
          <h2><?= $i['harga'] ?></h2>
          <span><?= $i['nama'] ?></span>
        </a>
      </div>
    <?php } ?>
</section>
</div>
<?= $this->endSection(); ?>