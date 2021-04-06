document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.querySelector(".menu-btn");
  const closeMenuBtn = document.querySelector(".close-btn");
  const menu = document.querySelector(".menu");

  menuBtn.addEventListener("click", () => {
    menu.style.display = "flex";
  });

  closeMenuBtn.addEventListener("click", () => {
    menu.style.display = "none";
  });
});
