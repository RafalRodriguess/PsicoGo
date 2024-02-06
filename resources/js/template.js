let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};

function toggleNavigation() {
  var navigation = document.querySelector('.navigation');
  navigation.style.display = (navigation.style.display === 'none' || navigation.style.display === '') ? 'block' : 'none';
}