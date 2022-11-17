const listItems = Array.from(document.querySelectorAll('#categories-side-bar ul li'));
const items = Array.from(document.querySelectorAll('#catalogue .product'));
var selectedCategory = 'filters';
// var shopWindow = document.querySelector('.shop-window')
function filterItems(){
    items.forEach((item)=>{
        if(item.classList.contains(selectedCategory)){
            item.classList.remove('list-item-hide');
            item.classList.add('list-item-display');
        }else{
            item.classList.remove('list-item-display');
            item.classList.add('list-item-hide');
        }
    })
}
// var darkOverlay = document.querySelector('.dark-overlay');
// function popUpWindow(){
//     darkOverlay.classList.remove('dark-overlay-hide');
//     darkOverlay.style.top=`${window.pageYOffset}px`;
//     document.body.classList.add('freeze-scroll');
// }
// items.forEach((item)=>{
//     item.addEventListener('click',(e)=>{
//         let clickedItem = e.currentTarget.querySelector('h3').innerText;
//         console.log(clickedItem);
//         let formData = new FormData();
//         formData.append("product_name",clickedItem);
//         fetch("http://localhost/coffee-website/blah.php",{
//             method:"POST",
//             mode:"no-cors",
//             body:formData
//         })
//             .then(function(result) {
//                 return result.json();
//             }).then((result)=>{
//                 shopWindow.classList.remove('disappear');
//                 shopWindow.classList.add('appear');
//                 shopWindow.querySelector('.item-image img').setAttribute('src',`images/shop/${result['product_name'].toLowerCase().replaceAll(' ','-')}.jpg`);
//                 let desc= shopWindow.querySelector('.item-description h4').innerText=result['description'];
//                 console.log(desc);
//                 // document.body.innerHTML=`<h3> ${result['description']}  ${result['product_name']} ${result['price']}</h3>`;
//                 console.log("error",e);
//             })
//     let productClicked = e.currentTarget.querySelector('h3').innerText;
//     popUpWindow(productClicked);
//     });
// })
listItems.forEach((listItem)=>{
    listItem.addEventListener('click',(e)=>{
          selectedCategory = e.target.classList[0];
           filterItems();
       })
})
window.addEventListener('load',filterItems);
window.addEventListener('scroll',()=>{
    console.log(window.pageYOffset)
})

