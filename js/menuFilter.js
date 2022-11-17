const menuButtons = Array.from(document.querySelectorAll('.menu-switcher-container button'));
menuButtons.forEach((menuButton)=>{
    menuButton.addEventListener('click',(e)=>{
        selectedCategory = e.target.value;
        sortItems();
    })
})
const menuItems = Array.from(document.querySelectorAll('.menu-container .menu-item'));
var actualIndex = 0;
var rowCounter = 0;
var selectedCategory = 'md';
var currentItem;
var columnGap = 6.66;
var rowGap = 4;
var maxColumns = 2;
var itemWidth = 40;
function resetParameters(){
    console.log("Rest Parameters Called");
    actualIndex=0;
    rowCounter=0;
    menuItems.forEach((item)=>{
        item.style.top="0% !important";
        item.style.left="0% !important";
    })
    if(window.innerWidth <= 612){
        columnGap = 0;
        rowGap = 3;
        maxColumns = 1;
        itemWidth = 100;
        console.log("inner width less than 612")
        sortItems();
    }else{
        console.log("Width is greater than 612");
        itemWidth = 40;
        columnGap = 6.66;
        rowGap = 4;
        maxColumns = 2;
        columnGap = 6.66;
        rowGap = 3;
        maxColumns = 2;
        itemWidth = 40;
        sortItems();
    }
    resizeCounter = 0;
}
function sortItems(){
    for(let i = 0; i < menuItems.length;i++){    
         currentItem = menuItems[i];
         console.log("this is my item",currentItem);
        if(!currentItem.classList.contains(selectedCategory)){
            currentItem.style.display="none";
            currentItem.style.position="absolute";
            currentItem.style.top="0px";
            currentItem.style.left="0px";
        }else{
            currentItem.style.display="flex";
            currentItem.style.position="absolute";
            setTimeout(itemOffset,100,currentItem);
        }
    }
    setTimeout(()=>{
        actualIndex=0;
        rowCounter=0;
    },100)
}
//Menu switcher event listener
// menuSwitcher.addEventListener('change',(e)=>{
//     selectedCategory = e.target.value;
//     sortItems();
// })
var itemOffsetCounter = 0;
function itemOffset(currentItem){
    // console.log(rowCounter,'rowCounter');
    console.log(actualIndex,'actualIndex');
    itemOffsetCounter++;
    if(actualIndex === maxColumns){
        startNewRow(currentItem);
    }else{
        staySameRow(currentItem);
    }      
}
function startNewRow(currentItem){
    rowCounter++;
    actualIndex=0;
    currentItem.style.top=`${(rowCounter * 24) + (rowGap)}%`;
    currentItem.style.left=`${columnGap}%`;
    actualIndex++;
}
function staySameRow(currentItem){
    // currentItem.style.display="inline-block";
    rowCounter === 0 ? currentItem.style.top=`${rowGap}%` : currentItem.style.top=`${(rowCounter * 24)+(rowGap)}%`;  
    actualIndex === 0 ? currentItem.style.left=`${columnGap}%` : currentItem.style.left=`${actualIndex * itemWidth + ((actualIndex+1) * columnGap)}%`;
    actualIndex++; 
}

 window.addEventListener('load',()=>{
    resetParameters();
 })

window.addEventListener('resize',()=>{
    resetParameters();
})