<?php
$pageTitle = "1 Week Expression";

ob_start();
?>

<link rel="stylesheet" href="styles/home.css">

<?php
$additionalStyles = ob_get_clean();
require_once "includes/header.php";
?>

<main class="countdown">
  <h3>This week's Expressions will reset in</h3>
  <p>04:15:54:23</p>
</main>

<h3 class="section-title">Latest Expressions</h3>

<section class="expressions">
  <article class="tile">
    <p>TeściksUCH <span class="small">@teściksuch</span></p>
    <h4>Tytuł</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse eius praesentium dolor blanditiis reiciendis aliquam asperiores libero totam ullam quo quaerat quod ipsa, itaque accusantium porro fugit perferendis? Quibusdam sint nulla doloribus adipisci debitis. Natus, pariatur.</p>
  </article>
  <article class="tile">
    <p>TeściksUCH <span class="small">@teściksuch</span></p>
    <h4>Tytuł</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse eius praesentium dolor blanditiis reiciendis aliquam asperiores libero totam ullam quo quaerat quod ipsa, itaque accusantium porro fugit perferendis? Quibusdam sint nulla doloribus adipisci debitis. Natus, pariatur.</p>
  </article>
  <article class="tile">
    <p>TeściksUCH <span class="small">@teściksuch</span></p>
    <h4>Tytuł</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse eius praesentium dolor blanditiis reiciendis aliquam asperiores libero totam ullam quo quaerat quod ipsa, itaque accusantium porro fugit perferendis? Quibusdam sint nulla doloribus adipisci debitis. Natus, pariatur.</p>
  </article>
  <article class="tile">
    <p>TeściksUCH <span class="small">@teściksuch</span></p>
    <h4>Tytuł</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse eius praesentium dolor blanditiis reiciendis aliquam asperiores libero totam ullam quo quaerat quod ipsa, itaque accusantium porro fugit perferendis? Quibusdam sint nulla doloribus adipisci debitis. Natus, pariatur.</p>
  </article>
  <article class="tile">
    <p>TeściksUCH <span class="small">@teściksuch</span></p>
    <h4>Tytuł</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse eius praesentium dolor blanditiis reiciendis aliquam asperiores libero totam ullam quo quaerat quod ipsa, itaque accusantium porro fugit perferendis? Quibusdam sint nulla doloribus adipisci debitis. Natus, pariatur.</p>
  </article>
</section>

<?php require_once "includes/footer.php" ?>