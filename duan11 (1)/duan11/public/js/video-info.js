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
