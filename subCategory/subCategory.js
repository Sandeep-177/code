// document.querySelectorAll('.catButton').addEventListener('click',function(){
//     window.location.href="../customer_html/order.php";
// })

let x= document.querySelectorAll('.catButton');
x.forEach(function(fu){
    fu.addEventListener('click',function (){
        window.location.href="../customer_php/order.php";
    })
})