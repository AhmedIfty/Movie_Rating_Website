// carousel.js

document.addEventListener('DOMContentLoaded', function () {
    var carousel = document.getElementById('carousel');
    var items = document.querySelectorAll('.carousel-item');
    var currentItem = 0;
  
    function showItem(index) {
      items[currentItem].classList.remove('opacity-100', 'translate-x-0');
      items[index].classList.add('opacity-100', 'translate-x-0');
      currentItem = index;
    }
  
    setInterval(function () {
      var newIndex = (currentItem + 1) % items.length;
      showItem(newIndex);
    }, 5000); // Change slide every 5 seconds (adjust as needed)
  });
  