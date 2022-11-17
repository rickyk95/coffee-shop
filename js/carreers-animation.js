const feature = document.querySelector('.feature');
console.log(feature)

window.onload=function(){
        setTimeout(()=>{
                feature.classList.remove('feature-hidden');
                feature.classList.add('feature-shown');
        },100)
}

