<?php snippet('header') ?>
<br>
<br>
<br>
<br>

<main>

<h1>hoi</h1>

  <div class="row align-items-center">
    <div class="col-12 col-lg-6">
      <h1><?= $page->introductiontitle() ?></h1>
      <p class="lead"><?= $page->introductiontext() ?></p>
      <a href="<?= $site->page('projects') ?>" class="btn btn-primary" role="button" aria-pressed="true">Bekijk mijn werk</a>
      <a href="<?= $site->page('about') ?>" class="btn btn-outline-primary" role="button" aria-pressed="true">Meer over mij</a>
    </div>
    <div class="col-12 col-lg-6">
      <img src="<?= $page->image()->url(); ?>" class="img-fluid" alt="<?= $page->image()->title(); ?>" />
      
    </div> 
  </div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="mijnwerk">
  <h1>Mijn werk</h1>
</div>
<br>
<br>

<div class="row">
<div class="column">
  <div class="flip-card">
    <a href="http://192.168.64.2/projects/designing-the-perfect-onboarding-process">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="/img/mocupnrc.png" alt="Avatar" style="width:310px;height:350px;">
    </div>
    <div class="flip-card-back">
      <h1>Achter de schermen</h1>
      <p>School opdracht nrc</p>
      <p>Project bekijken</p>
    </div>
  </div>
</div>
</div>

<div class="column">
<div class="flip-card">
    <a href="../../site/templates/project2.php">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="/img/mockupodp.png" alt="Avatar" style="width:300px;height:350px;">
    </div>
    <div class="flip-card-back">
      <h1>Care for the future</h1>
      <p>School opdracht Online department</p>
      <p>Project bekijken</p>
    </div>
  </div>
</div>

</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


  
  <?php snippet('footer') ?>
 
  <?php
  

    
    
  
 

 


