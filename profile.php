<?php
$pageTitle = "Profile";

ob_start();
?>

<link rel="stylesheet" href="styles/profile.css">

<?php
$additionalStyles = ob_get_clean();
require_once "includes/header.php";
?>

<h1 class="page-title">Profile</h1>

<section class="profile tile">
  <img src="images/dog.jpeg" alt="">
  <div class="profile-name">
    <div>
      <h2>TeściksUCH</h2>
      <button>
        <img src="images/svg/pen.svg" alt="" class="icon">
      </button>
    </div>
    <div>
      <h4>@tesciksuch</h4>
    </div>
    <button class="btn-primary">Change password</button>
  </div>
</section>

<main class="container">
  <article class="tile">
    <h6>This week's like amount</h6>
    <section>
      <h1>27</h1>
    </section>
  </article>
  <article class="tile">
    <h6>Total like amount</h6>
    <section>
      <h1>124</h1>
    </section>
  </article>
  <article class="tile">
    <h6>Liked Expressions this week</h6>
    <section>
      <h1>7</h1>
    </section>
  </article>
  <article class="tile">
    <h6>Total liked expressions</h6>
    <section>
      <h1>46</h1>
    </section>
  </article>
  <article class="tile">
    <h6>Expressions this week</h6>
    <section>
      <h1>3</h1>
    </section>
  </article>
  <article class="tile">
    <h6>Expressions total</h6>
    <section>
      <h1>14</h1>
    </section>
  </article>
</main>

<div class="main-tiles">
  <article class="tile">
    <h6>Total score</h6>
    <section>
      <h1>270</h1>
    </section>
  </article>
  <article class="tile">
    <h6>Leaderboard place</h6>
    <section>
      <h1>#26</h1>
    </section>
  </article>
</div>

<section class="profile-settings"></section>


<?php require_once "includes/footer.php" ?>