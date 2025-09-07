// order.html button js
    console.log("entered order.js file")
setTimeout(() => {
    // document.getElementById('orderButn').addEventListener('click',function(event){
    //     event.preventDefault();
    //     console.log("order.php submit button clicked");
    //     window.location.href="/code/index.php";
    // });
    const orderHidButn= document.getElementById("orderHidButn");
    const para=document.getElementById("para");
    orderHidButn.addEventListener('click',(event)=>{
        event.preventDefault();
        if (para.style.display==='block') {
            para.style.display='none';
        }else{
            para.style.display='block';
        }
    });
}, 3000);