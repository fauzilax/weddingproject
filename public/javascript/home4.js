// --------------------------------- CAROUSEL --------------------------------//
//                                                                            //
//--------------------------------- SECTION 4 --------------------------------//
//----------------------------------------------------------------------------//

let bullets = document.querySelectorAll('.sec4Card .bullet');
let bulletsP = document.querySelectorAll('.sec4CardP .bullet');
let bulletsG = document.querySelectorAll('.sec4CardG .bullet');

let sec4Card = document.querySelector('.sec4Card') ;
let imgBasic = document.querySelector('.sec4Card .imgBasic');
let imgPrem = document.querySelector('.sec4CardP .imgPrem');
let imgGold = document.querySelector('.sec4CardG .imgGold');
   
// -------------------------- IMAGE SLIDESHOW ----------------------------//

let imgBShow = document.querySelector('.imgBShow');
let imgB = document.querySelectorAll('.imgB');
let imgPShow = document.querySelector('.sec4CardP .imgPShow');
let imgP = document.querySelectorAll('.sec4CardP .imgP');
let imgGShow = document.querySelector('.sec4CardG .imgGShow');
let imgG = document.querySelectorAll('.sec4CardG .imgG');

setInterval(slideShowImgB,8000);
function slideShowImgB() {    
    
    let bullet = document.querySelector('.sec4Card .activeBullet');
    
    let bn = parseFloat(bullet.id) + 1;
    if (bn == parseFloat(bullets.length)+1) {
        bn = 1;        
    }
    if (bullet.parentNode.nextSibling.nextSibling != null){
        bullet.className = 'bullet';
        bullet.parentNode.nextSibling.nextSibling.querySelector('.sec4Card .bullet').className = 'bullet activeBullet';
        imgBasic.innerHTML = '<img class="imgBShow" src="img/paket'+bn+'.jpg" alt="">';

    }else{
        let bullets= document.querySelectorAll('.bullet');
        bullet.className = 'bullet';
        bullets[0].className = 'bullet activeBullet';
        imgBasic.innerHTML = '<img class="imgBShow" src="img/paket'+bn+'.jpg" alt="">';
    }
    
}
setInterval(slideShowImgP,7000);
function slideShowImgP() {        
    
    let bulletP = document.querySelector('.sec4CardP .activeBullet');
    let pn = parseFloat(bulletP.id) + 1;
    if (pn == parseFloat(bulletsP.length)+1) {
        pn = 1;        
    }
    
    if (bulletP.parentNode.nextSibling.nextSibling != null){
        bulletP.className = 'bullet';
        bulletP.parentNode.nextSibling.nextSibling.querySelector('.sec4CardP .bullet').className = 'bullet activeBullet';
        imgPrem.innerHTML = '<img class="imgPShow" src="img/paket'+pn+'.jpg" alt="">';

    }else{
        let bulletsP= document.querySelectorAll('.sec4CardP .bullet');
        bulletP.className = 'bullet';
        bulletsP[0].className = 'bullet activeBullet';
        imgPrem.innerHTML = '<img class="imgPShow" src="img/paket'+pn+'.jpg" alt="">';
    }
    
}

setInterval(slideShowImgG,6000);
function slideShowImgG() {        
    
    let bulletG = document.querySelector('.sec4CardG .activeBullet');
    let gn = parseFloat(bulletG.id) + 1;
    if (gn == parseFloat(bulletsG.length)+1) {
        gn = 1;        
    }
    
    if (bulletG.parentNode.nextSibling.nextSibling != null){
        bulletG.className = 'bullet';
        bulletG.parentNode.nextSibling.nextSibling.querySelector('.sec4CardG .bullet').className = 'bullet activeBullet';
        imgGold.innerHTML = '<img class="imgGShow" src="img/paket'+gn+'.jpg" alt="">';

    }else{
        let bulletsG= document.querySelectorAll('.sec4CardG .bullet');
        bulletG.className = 'bullet';
        bulletsG[0].className = 'bullet activeBullet';
        imgGold.innerHTML = '<img class="imgGShow" src="img/paket'+gn+'.jpg" alt="">';
    }
    
}

// -----------------------CLICK BULLETS---------------------//
bullets.forEach(function(e){
    e.addEventListener('click',function(ev){
        if (ev.target.className == 'bullet') {
            bullets.forEach(function(bullet){
                bullet.className = 'bullet';
            }); 
            ev.target.classList.add("activeBullet");
            imgBasic.innerHTML = '<img class="imgBShow" src="img/paket'+ev.target.id+'.jpg" alt="">';
        }
    });
});
bulletsP.forEach(function(e){
    e.addEventListener('click',function(ev){
        if (ev.target.className == 'bullet') {
            bulletsP.forEach(function(bullet){
                bullet.className = 'bullet';
            }); 
            ev.target.classList.add("activeBullet");
            imgPrem.innerHTML = '<img class="imgPShow" src="img/paket'+ev.target.id+'.jpg" alt="">';
        }
    });
});
bulletsG.forEach(function(e){
    e.addEventListener('click',function(ev){
        if (ev.target.className == 'bullet') {
            bulletsG.forEach(function(bullet){
                bullet.className = 'bullet';
            }); 
            ev.target.classList.add("activeBullet");
            imgGold.innerHTML = '<img class="imgGShow" src="img/paket'+ev.target.id+'.jpg" alt="">';
        }
    });
});

// ------------------------------RIGHT AND LEFT BUTTON ---------------------------------------------------------------------//
let right = document.querySelector('.sec4Card .right');
let left = document.querySelector('.sec4Card .left');
let rightP = document.querySelector('.sec4CardP .right');
let leftP = document.querySelector('.sec4CardP .left');
let rightG = document.querySelector('.sec4CardG .right');
let leftG = document.querySelector('.sec4CardG .left');

// ------------------RIGHT------------------//
right.addEventListener('click',function(e){ 
    let b = document.querySelectorAll('.sec4Card .activeBullet');
    b.forEach(function(bullet){
        let re = parseFloat(bullet.id) + 1 ;
        if (re == parseFloat(bullets.length)+1){
            re = 1;
        }
        if (bullet.parentNode.nextSibling.nextSibling != null){
            bullet.className = 'bullet';
            bullet.parentNode.nextSibling.nextSibling.querySelector('.sec4Card .bullet').className = 'bullet activeBullet';
            imgBasic.innerHTML = '<img class="imgBShow" src="img/paket'+re+'.jpg" alt="">';

        }else{
            let bullets= document.querySelectorAll('.sec4Card .bullet');
            bullet.className = 'bullet';
            bullets[0].className = 'bullet activeBullet';
            imgBasic.innerHTML = '<img class="imgBShow" src="img/paket'+re+'.jpg" alt="">';
        }
    })    
});  
rightP.addEventListener('click',function(e){ 
    let b = document.querySelectorAll('.sec4CardP .activeBullet');
    b.forEach(function(bullet){
        let re = parseFloat(bullet.id) + 1 ;
        if (re == parseFloat(bulletsP.length)+1){
            re = 1;
        }
        if (bullet.parentNode.nextSibling.nextSibling != null){
            bullet.className = 'bullet';
            bullet.parentNode.nextSibling.nextSibling.querySelector('.sec4CardP .bullet').className = 'bullet activeBullet';
            imgPrem.innerHTML = '<img class="imgPShow" src="img/paket'+re+'.jpg" alt="">';

        }else{
            let bulletsP= document.querySelectorAll('.sec4CardP .bullet');
            bullet.className = 'bullet';
            bulletsP[0].className = 'bullet activeBullet';
            imgPrem.innerHTML = '<img class="imgPShow" src="img/paket'+re+'.jpg" alt="">';
        }
    })    
}); 
rightG.addEventListener('click',function(e){ 
    let b = document.querySelectorAll('.sec4CardG .activeBullet');
    b.forEach(function(bullet){
        let re = parseFloat(bullet.id) + 1 ;
        if (re == parseFloat(bulletsG.length)+1){
            re = 1;
        }
        if (bullet.parentNode.nextSibling.nextSibling != null){
            bullet.className = 'bullet';
            bullet.parentNode.nextSibling.nextSibling.querySelector('.sec4CardG .bullet').className = 'bullet activeBullet';
            imgGold.innerHTML = '<img class="imgGShow" src="img/paket'+re+'.jpg" alt="">';

        }else{
            let bulletsP= document.querySelectorAll('.sec4CardG .bullet');
            bullet.className = 'bullet';
            bulletsG[0].className = 'bullet activeBullet';
            imgGold.innerHTML = '<img class="imgGShow" src="img/paket'+re+'.jpg" alt="">';
        }
    })    
}); 



// ------------------LEFT------------------//

left.addEventListener('click',function(e){
    let b = document.querySelectorAll('.sec4Card .activeBullet');
    b.forEach(function(bullet){ 
        let le = parseFloat(bullet.id) - 1 ;
        if (le == 0){
            le = bullets.length;
        }
        if (bullet.parentNode.previousSibling.previousSibling != undefined||null){
            bullet.className = 'bullet';
            bullet.parentNode.previousSibling.previousSibling.querySelector('.sec4Card .bullet').className = 'bullet activeBullet';
            imgBasic.innerHTML = '<img class="imgBShow" src="img/paket'+le+'.jpg" alt="">';

        }else{
            let bullets= document.querySelectorAll('.sec4Card .bullet');
            let xb =bullets.length - 1;
            bullet.className = 'bullet';
            bullets[xb].className = 'bullet activeBullet';
            imgBasic.innerHTML = '<img class="imgBShow" src="img/paket'+le+'.jpg" alt="">';
        }
    });   
});    
leftP.addEventListener('click',function(e){
    let b = document.querySelectorAll('.sec4CardP .activeBullet');
    b.forEach(function(bullet){ 
        let le = parseFloat(bullet.id) - 1 ;
        if (le == 0){
            le = bulletsP.length;
        }
        if (bullet.parentNode.previousSibling.previousSibling != undefined||null){
            bullet.className = 'bullet';
            bullet.parentNode.previousSibling.previousSibling.querySelector('.sec4CardP .bullet').className = 'bullet activeBullet';
            imgPrem.innerHTML = '<img class="imgPShow" src="img/paket'+le+'.jpg" alt="">';

        }else{
            let bulletsP= document.querySelectorAll('.sec4CardP .bullet');
            let xp =bulletsP.length - 1;
            bullet.className = 'bullet';
            bulletsP[xp].className = 'bullet activeBullet';
            imgPrem.innerHTML = '<img class="imgPShow" src="img/paket'+le+'.jpg" alt="">';
        }
    });   
});    
leftG.addEventListener('click',function(e){
    let b = document.querySelectorAll('.sec4CardG .activeBullet');
    b.forEach(function(bullet){ 
        let le = parseFloat(bullet.id) - 1 ;
        if (le == 0){
            le = bulletsG.length;
        }
        if (bullet.parentNode.previousSibling.previousSibling != undefined||null){
            bullet.className = 'bullet';
            bullet.parentNode.previousSibling.previousSibling.querySelector('.sec4CardG .bullet').className = 'bullet activeBullet';
            imgGold.innerHTML = '<img class="imgGShow" src="img/paket'+le+'.jpg" alt="">';

        }else{
            let bulletsG= document.querySelectorAll('.sec4CardG .bullet');
            let xg =bulletsG.length - 1;
            bullet.className = 'bullet';
            bulletsG[xg].className = 'bullet activeBullet';
            imgGold.innerHTML = '<img class="imgGShow" src="img/paket'+le+'.jpg" alt="">';
        }
    });   
});    