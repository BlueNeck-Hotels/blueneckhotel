window.onscroll = function() {
  scrollFunction();
};

function scrollFunction() {
  var navbar = document.getElementById("navbar");
  var logo = document.getElementById("logo");
  var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
  
  if (scrollTop > 80) {
    navbar.style.padding = "10px";
    navbar.style.backgroundColor = "#F5F5F5";
    logo.style.fontSize = "25px";
    
  } else {
    navbar.style.padding = "10px";
    navbar.style.backgroundColor = "#fff";
    logo.style.fontSize = "35px";
  }
}


// ================mobile=nav================


document.querySelector(".mobile_menu_icon").addEventListener("click", () => {
    document.querySelector(".mobile-nav").classList.toggle('toggle');
});

document.querySelector(".crose").addEventListener("click", () => {
    document.querySelector(".mobile-nav").classList.remove('toggle');
});





// const title=document.getElementById('demo');
// const btn=document.getElementById('btn');
// const url ='https://www.signzy.com/fintech-apis/digilocker-api/#:~:text=With%20our%20API%2C%20customers%20can,data%20being%20retrieved%20from%20Digilocker';


//     let getData = async ()=>{
//         let reponse = await fetch(url);
//         console.log(reponse);
//         let data= await reponse.json();
//     }

//     getData()


// btn.addEventListener("click",()=>{
//     function getData(){
//         fetch(url)
//         .then(response => response.json())
//         .then((data)=>{
//             title.innerText=data[5].title;
//             })
//     }  
//     getData();
// });




// ==================floating=nav===================


