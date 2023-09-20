// Temukan semua hyperlink yang memiliki atribut href yang dimulai dengan tanda "#"
const anchorLinks = document.querySelectorAll('a[href^="#"]');

// Tambahkan event listener untuk setiap hyperlink
anchorLinks.forEach((anchorLink) => {
  anchorLink.addEventListener("click", function (e) {
    e.preventDefault();

    // Dapatkan ID elemen target dari atribut href hyperlink
    const targetId = this.getAttribute("href").substring(1);

    // Temukan elemen target
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      // Gulir ke elemen target dengan efek scroll halus
      targetElement.scrollIntoView({
        behavior: "smooth",
      });
    }
  });
});

// Definisikan elemen-elemen section
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll("nav a");

// Tambahkan event listener untuk scroll
window.onscroll = () => {
  sections.forEach((sec) => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 150;
    let height = sec.offsetHeight;
    let id = sec.getAttribute("id");

    if (top >= offset && top < offset + height) {
      navLinks.forEach((links) => {
        links.classList.remove("active");
        document
          .querySelector("header nav a[href*=" + id + "]")
          .classList.add("active");
      });
    }
  });

  let header = document.querySelector("header");

  header.classList.toggle("sticky", window.scrollY > 20);
};

document.addEventListener("DOMContentLoaded", function () {
  const toTop = document.querySelector(".footer .to-top");

  toTop.onclick = () => {
    window.scrollTo(0, 0);
  };
});
