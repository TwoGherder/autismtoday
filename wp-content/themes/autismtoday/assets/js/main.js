const toggleButton = document.querySelector(".toggle-icon");

toggleButton.addEventListener("click", () => {
  const navArea = document.querySelector("body");

  navArea.classList.toggle("show");
  console.log("hello");
});
