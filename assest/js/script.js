// window.onscroll = function() {
//   scrollFunction();
// };

// function scrollFunction() {
//   var navbar = document.getElementById("navbar");
//   var logo = document.getElementById("logo");
//   var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
  
//   if (scrollTop > 80) {
//     navbar.style.padding = "10px";
//     navbar.style.backgroundColor = "#F5F5F5";
//     logo.style.fontSize = "25px";
    
//   } else {
//     navbar.style.padding = "10px";
//     navbar.style.backgroundColor = "#fff";
//     logo.style.fontSize = "35px";
//   }
// }


// ================mobile=nav================


document.querySelector(".menu-bar").addEventListener("click", () => {
  console.log("hello")
    document.querySelector(".main-mobile-bg").classList.toggle('toggle');
});

document.querySelector(".crose").addEventListener("click", () => {
    document.querySelector(".color").classList.remove('toggle');
});






