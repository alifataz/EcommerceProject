
  const scroll = document.getElementById("scroll-up");
const footer = document.getElementById("footer");

function checkFooterVisibility() {
  const footerRect = footer.getBoundingClientRect();
  const isVisible = footerRect.top < window.innerHeight && footerRect.bottom > 0;

  scroll.style.display = isVisible ? "block" : "none";
}

window.addEventListener("scroll", checkFooterVisibility);
window.addEventListener("resize", checkFooterVisibility);

// Tambahkan event listener untuk klik
scroll.addEventListener('click', () => {
  // Ambil elemen <main id="top">
  const topElement = document.getElementById('top');
  
  // Scroll ke elemen top dengan efek smooth
  topElement.scrollIntoView({ behavior: 'smooth' });
});