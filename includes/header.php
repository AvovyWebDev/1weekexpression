<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?></title>
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/footer.css">
  <?= $additionalStyles ?? '' ?>
  
  <link rel="icon" type="image/x-icon" href="images/1weekexpression.png">
</head>
<body>

<header>
  <div class="hd-top">
    <a class="hd-logo" href="./" aria-label="Logo, click to go to homepage">
      <img src="images/1weekexpression-full.png" alt="">
    </a>
    <main class="hd-profile">
      <img class="hd-profile-picture spinner" src="images/dog.jpeg" alt="Profile picture">
      <div class="hd-profile-name">
        <h5>TeściksUCH</h5>
        <p class="small">@teściksuch</p>
      </div>
    </main>
  </div>
  <h1 class="hd-countdown">04:15:54:23</h1>
  <nav class="hd-nav">
    <a href="./"><h6>Home</h6></a>
    <a href="information.php"><h6>What's this about?</h6></a>
    <a href="#"><h6>Rules & privacy</h6></a>
    <a href="#"><h6>FAQ</h6></a>
    <a href="profile.php"><h6>Profile</h6></a>
    <a href="#"><h6>Rankings</h6></a>
    <a href="#"><h6>Statistics</h6></a>
    <a href="#"><h6>Contact</h6></a>
  </nav>
  <a class="hd-add-expression" href="" aria-label="Add a new Expression">
    <img class="icon" src="images/svg/pen.svg" alt="Pen icon">
    Add a new Expression
  </a>
</header>