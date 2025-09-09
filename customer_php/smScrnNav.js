// setTimeout(() => {
//     let linkImg2=document.getElementById("barImg");
//     let linkImg=document.getElementById("barImg2");
//     let lnkCls= document.getElementById("abAfterblink");
//         function imgtest() {
//             console.log("bar icon clicked");
//             console.log(lnkCls);
//             if (lnkCls.classList.contains("active")) {
//             lnkCls.classList.remove("active");
//               linkImg.innerHTML="<img src='icon/bars-solid.svg' alt='no bar image'>";
//               document.body.style.overflowX = "hidden";
                
//             } else {
//             lnkCls.classList.add("active");
//               linkImg.innerHTML="<img src='icon/xmark-solid.svg' alt='no xmark image'>";
//               document.body.style.overflowX = "hidden"; 
//             }
//               console.log("exit img test function");
              
//         }
//         linkImg2.addEventListener('click',imgtest);

        
//     }, 3000);

    function openSideBar() {
      const openSnav=document.getElementById("abAfterblink");
      openSnav.classList.remove("active");
    }
    function closeSideBar() {
      const openSnav=document.getElementById("abAfterblink");
      openSnav.classList.add("active");
    }