// document.querySelector('#plumb').addEventListener("click",function() {
//     window.location.href='../subCategory/plumbing.php';
// });
// document.querySelector('#electric').addEventListener("click",function() {
//     window.location.href='../subCategory/electrical.php';
// });
// document.querySelector('#paint').addEventListener("click",function() {
//     window.location.href='../subCategory/paint.php';
// });
// document.querySelector('#clean').addEventListener("click",function() {
//     window.location.href='../subCategory/cleaning.php';
// });
// document.querySelector('#pest').addEventListener("click",function() {
//     window.location.href='../subCategory/pestControl.php';
// });
// document.querySelector('#kitchen').addEventListener("click",function() {
//     window.location.href='../subCategory/kitchen.php';
// });
// document.querySelector('#lundry').addEventListener("click",function() {
//     window.location.href='../subCategory/lundry.php';
// });
// document.querySelector('#ac').addEventListener("click",function() {
//     window.location.href='../subCategory/conditioner.php';
// });
// document.querySelector('#photVideo').addEventListener("click",function() {
//     window.location.href='../subCategory/photography.php';
// });
// document.querySelector('#event').addEventListener("click",function() {
//     window.location.href='../subCategory/eventManage.php';
// });
// document.querySelector('#compMob').addEventListener("click",function() {
//     window.location.href='../subCategory/compMob.php';
// });
// document.querySelector('#moveShift').addEventListener("click",function() {
//     window.location.href='../subCategory/shifting.php';
// });

let categoryPages=['plumbing.php','electrical.php','paint.php','cleaning.php','pestControl.php','kitchen.php','lundry.php','conditioner.php','photography.php','eventManage.php','compMob.php','shifting.php']
let ckd=document.querySelectorAll('.tryi');
if (ckd.length === 0) {
    console.error("Navigation links not found! Ensure header is loaded.");
}

console.log("✅ Navigation links detected:", ckd.length);

ckd.forEach(link => {
    link.addEventListener('click', function (event) {
        console.log('clicked');
        event.preventDefault();
        let elemntIndex = parseInt(this.getAttribute('data-new'), 10);

        // if (elemntIndex >= 0 && elemntIndex < categoryPages.length) {
            let catUrl=window.location.href;
            let baseUrls=(catUrl.includes("/code/index.php") || catUrl.includes("/code/"))?"/code/subCategory/":"../subCategory/";


        if (link ) {
            // let baseUrls='../subCategory/';
            let targetUrl = baseUrls + categoryPages[elemntIndex];
            console.log("Navigating to:", targetUrl);
            window.location.href = targetUrl;
        } else {
            console.error("Invalid path index:", elemntIndex);
        }
    });
});