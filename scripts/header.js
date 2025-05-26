// const spinner = document.querySelector('.spinner');
// let rotation = 0;
// let spinning = false;
// let animationFrame;

// spinner.addEventListener('mouseenter', () => {
//   spinning = true;
//   spinFast();
// });

// spinner.addEventListener('mouseleave', () => {
//   spinning = false;
//   slowDown();
// });

// function spinFast() {
//   cancelAnimationFrame(animationFrame);
//   function rotate() {
//     rotation += 30;
//     spinner.style.transform = `rotate(${rotation}deg)`;
//     if (spinning) {
//       animationFrame = requestAnimationFrame(rotate);
//     }
//   }
//   rotate();
// }

// function slowDown() {
//   cancelAnimationFrame(animationFrame);
//   let speed = 30;
//   function decelerate() {
//     rotation += speed;
//     spinner.style.transform = `rotate(${rotation}deg)`;
//     speed *= 0.95;
//     if (speed > 0.1) {
//       animationFrame = requestAnimationFrame(decelerate);
//     }
//   }
//   decelerate();
// }
