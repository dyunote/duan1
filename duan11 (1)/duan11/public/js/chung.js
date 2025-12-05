/* hader */
document.addEventListener('DOMContentLoaded', function () {
  const accountWrapper = document.querySelector('.account-wrapper');
  if (!accountWrapper) return;

  accountWrapper.addEventListener('click', function (e) {
    e.stopPropagation(); 
    accountWrapper.classList.toggle('open');
  });

  document.addEventListener('click', function () {
    accountWrapper.classList.remove('open');
  });
});



/* video,info */
document.addEventListener("DOMContentLoaded", function () {
    const newsList = document.querySelector(".news-list");
    if (!newsList) return;

    let isAnimating = false;

    function slideNewsDown() {
        if (isAnimating) return;
        const firstItem = newsList.firstElementChild;
        if (!firstItem) return;

        const styles = window.getComputedStyle(newsList);
        const gap = parseInt(styles.rowGap || styles.gap || 0, 10) || 0;
        const itemHeight = firstItem.offsetHeight + gap;

        isAnimating = true;

        newsList.style.transition = "transform 0.5s ease";
        newsList.style.transform = `translateY(-${itemHeight}px)`;

        setTimeout(() => {
            newsList.style.transition = "none";
            newsList.appendChild(firstItem);
            newsList.style.transform = "translateY(0)";
            isAnimating = false;
        }, 500);
    }

    setInterval(slideNewsDown, 3000);
});



/* banner */
let slideIndex = 1;
const slides = document.getElementsByClassName("slide-item");
const dots = document.getElementsByClassName("dot");
let timeoutId = null;

function showSlides(n) {
    let i;
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    if (dots.length > 0) {
        dots[slideIndex - 1].className += " active";
    }
}

function plusSlides(n) {
    clearTimeout(timeoutId); 
    showSlides(slideIndex += n);
    autoSlides(); 
}

function currentSlide(n) {
    clearTimeout(timeoutId);
    showSlides(slideIndex = n);
    autoSlides();
}

function autoSlides() {
    timeoutId = setTimeout(() => {
        plusSlides(1); 
    }, 4000); 
}

document.addEventListener("DOMContentLoaded", function() {
  
    if (slides.length > 0) {
         showSlides(slideIndex);
         autoSlides();
    }

   
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    
    if (prevBtn && nextBtn) {
        prevBtn.addEventListener('click', () => plusSlides(-1));
        nextBtn.addEventListener('click', () => plusSlides(1));
    }

    
    for (let i = 0; i < dots.length; i++) {
        dots[i].addEventListener('click', () => currentSlide(i + 1));
    }
});














document.addEventListener("DOMContentLoaded", function() {
    const track = document.querySelector('.category-list-track');
    if (!track) return; 

    
    const itemWidth = 270; 
    let position = 0;
    const speed = 0.5; 
    let animationFrameId;


    let isDown = false; 
    let startX;         
    let scrollLeft;     

   
    function startScroll() {
        if (isDown) return; 
        
        const trackWidth = track.scrollWidth; 
        
        
        if (position <= -trackWidth / 2) { 
            position = 0; 
        }
        
        position -= speed;
        track.style.transform = `translateX(${position}px)`;

        animationFrameId = requestAnimationFrame(startScroll);
    }

  

    
    track.addEventListener('mousedown', (e) => {
        isDown = true;
        track.style.cursor = 'grabbing';
        cancelAnimationFrame(animationFrameId); 
        const style = window.getComputedStyle(track);
        const matrix = new DOMMatrixReadOnly(style.transform);
        scrollLeft = matrix.m41; 
        startX = e.pageX - track.offsetLeft;
    });

    
    const stopDrag = () => {
        if (isDown) {
            isDown = false;
            track.style.cursor = 'grab';
            
            
            position = scrollLeft;
            
            
            startScroll(); 
        }
    };

    track.addEventListener('mouseup', stopDrag);
    track.addEventListener('mouseleave', stopDrag); 

   
    track.addEventListener('mousemove', (e) => {
        if (!isDown) return; 
        e.preventDefault();
        
        const x = e.pageX - track.offsetLeft;
        const walk = (x - startX); 
        
        
        scrollLeft = scrollLeft + walk; 
        track.style.transform = `translateX(${scrollLeft}px)`;

        
        startX = e.pageX - track.offsetLeft;
    });
    
    
    track.style.cursor = 'grab'; 
    startScroll(); 
});