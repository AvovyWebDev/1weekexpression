document.addEventListener("DOMContentLoaded", () => {
    const tiles = document.querySelectorAll(".tile");
    tiles.forEach((tile, i) => {
      tile.style.animationDelay = `${i * 0.1}s`;
      tile.classList.add("animate-tile");
    });
  });