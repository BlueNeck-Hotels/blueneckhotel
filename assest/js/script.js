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
  console.log("hello");
  document.querySelector(".color").classList.toggle("toggle");
});

document.querySelector(".crose").addEventListener("click", () => {
  document.querySelector(".color").classList.remove("toggle");
});

// ========================date=picker==========================

let nowTemp = new Date();
let now = new Date(
  nowTemp.getFullYear(),
  nowTemp.getMonth(),
  nowTemp.getDate(),
  0,
  0,
  0,
  0
);

let checkin = $("#dp1")
  .datepicker({
    beforeShowDay: function (date) {
      return date.valueOf() >= now.valueOf();
    },
    autoclose: true,
  })
  .on("changeDate", function (ev) {
    if (
      ev.date.valueOf() > checkout.datepicker("getDate").valueOf() ||
      !checkout.datepicker("getDate").valueOf()
    ) {
      let newDate = new Date(ev.date);
      newDate.setDate(newDate.getDate() + 1);
      checkout.datepicker("update", newDate);
    }
    $("#dp2")[0].focus();
  });

let checkout = $("#dp2")
  .datepicker({
    beforeShowDay: function (date) {
      if (!checkin.datepicker("getDate").valueOf()) {
        return date.valueOf() >= new Date().valueOf();
      } else {
        return date.valueOf() > checkin.datepicker("getDate").valueOf();
      }
    },
    autoclose: true,
  })
  .on("changeDate", function (ev) {});

// =============form=value==========================

// const form=document.getElementById("form");
// const where= document.getElementById("where");
// const checkin=document.getElementById("dp1");
// const checkout=document.getElementById("dp2");
// const guest=document.getElementById("add-guest");

// form.addEventListener('submit',function(e){
//   e.preventDefault();
//  const whereval= where.value;
//  const checkinval= checkin.value;
//  const checkoutval= checkout.value;
//  const guestval= guest.value;

//  localStorage.setItem('where-val' ,whereval);
//  localStorage.setItem('checkin-val' ,checkinval);
//  localStorage.setItem('checkout-val' ,checkoutval);
//   localStorage.setItem('guest-val' ,guestval);

//   window.location.href="hotel-listing.html"
// })

document.getElementById("form").addEventListener("submit", function (e) {
  e.preventDefault();

  localStorage.setItem("where-val", document.getElementById("where").value);
  localStorage.setItem("checkin-val", document.getElementById("dp1").value);
  localStorage.setItem("checkout-val", document.getElementById("dp2").value);
  localStorage.setItem("guest-val", document.getElementById("add-guest").value);

  window.location.href = "hotel-listing.html";
});

// ======================readmore=================================

function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}

// ====================input===============

