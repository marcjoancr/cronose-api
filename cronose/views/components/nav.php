<div class="row " style="margin-left: 0; margin-right: 0">

<?php if (isset($_SESSION['user'])):?>

<nav class="vertical-nav">
  <button onclick="toogleNav()"><i class="fas fa-bars"></i></button>

</nav>

<?php else :?>

<div class="col-12 p-0">
  <nav id ="horizontalMenu" class="navbar navbar-expand-md navbar-dark bg-primary">
    <a class="navbar-brand order-0 order-md-0" href="/<?=$displayLang;?>/home"><strong>CRONOSE</strong></a>

    <button class="order-2 order-md-3 navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3 order-md-1" id="language">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="btn" href="/<?=$displayLang;?>/about-us"><i class="fa fa-address-card"></i> <?=strtoupper($lang[$displayLang]['aboutUs']);?></a>
        </li>
        <li class="nav-item">
          <a class="btn" href="/<?=$displayLang;?>/home"><i class="fas fa-map-pin"></i> <?=strtoupper($lang[$displayLang]['howWorks']);?></a>
        </li>
        <li class="nav-item">
          <a class="btn" href="/<?=$displayLang;?>/home"><i class="fas fa-map-pin"></i> <?=strtoupper($lang[$displayLang]['contact']);?></a>
        </li>
        <li class="nav-item">
          <a class="btn" href="/<?=$displayLang;?>/home"><i class="fas fa-map-pin"></i> FAQ</a>
        </li>
        <li class="nav-item">
          <a class="btn" href="/<?=$displayLang;?>/market"><i class="fas fa-map-pin"></i> <?=strtoupper($lang[$displayLang]['market']);?></a>
        </li>
      </ul>
      <div class="dropdown-divider"></div>
      <ul class="navbar-nav" id="language_selector" name="lang">
        <li class="nav-item" value="es" id="es">
          <a href="/es/<?= $auxUriString; ?>" class="nav-link">ES <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item" value="ca" id="ca">
          <a href="/ca/<?= $auxUriString; ?>" class="nav-link">CA</a>
        </li>
        <li class="nav-item" value="en" id="en">
          <a href="/en/<?= $auxUriString; ?>" class="nav-link">EN</a>
        </li>
      </ul>
    </div>
    <div class="order-1 order-md-2">
      <a class="login-btn" href="/login"><?=$lang[$displayLang]['logIn'];?></a>
      <a href="/register"><button type="button" class="btn btn-secondary btn-lg register"><?=$lang[$displayLang]['register'];?></button></a>

    </div>
  </nav>

<?php endif ?>

<script>
  $(document).ready(function(){

    $('#language_selector .nav-item').each(function(index) {
      const target = $(this);
      if (target.attr('value') == '<?= $displayLang ?? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) ?>') {
        target.addClass('active');
      }
    });
  });
</script>
