if (!window.timerConfig.disable) {
  let countdownDate;

  if (window.timerConfig.customDate) {
    countdownDate = new Date(window.timerConfig.customDate);
  } else {
    const now = new Date();
    countdownDate = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1);
  }

  const timerElements = document.querySelectorAll('.timer strong');
  const timerBlocks = document.querySelectorAll('.timer-block');

  function updateCountdown() {
    const now = new Date();
    const diff = countdownDate - now;

    if (diff <= 0) {
      timerBlocks.forEach(block => {
        block.style.display = "none";
      });
      clearInterval(intervalId);
      return;
    }

    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((diff / (1000 * 60)) % 60);
    const seconds = Math.floor((diff / 1000) % 60);

    let timeText = '';
    if (days > 0) {
      timeText += `${days} д. `;
    }
    timeText += `${hours} год. ${minutes} хв. ${seconds < 10 ? '0' + seconds : seconds} сек.`;

    timerElements.forEach(el => {
      el.textContent = timeText;
    });
  }

  const intervalId = setInterval(updateCountdown, 1000);
  updateCountdown();
} else {
  const timerBlocks = document.querySelectorAll('.timer-block');
  timerBlocks.forEach(block => {
    block.style.display = "none";
  });
}


const swiperOne = new Swiper('.swiper-one', {
  slidesPerView: 2.3,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination-one',
    clickable: true,
  },
  effect: 'coverflow',
  coverflowEffect: {
    rotate: 0,
    stretch: -10,
    depth: 100,
    modifier: 1,
    slideShadows: false,
    scale: 0.85,
  },
  breakpoints: {
  }
});



const swipertwo = new Swiper('.swiper-two', {
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination-two',
    clickable: true,
  },
  // Поведение по умолчанию (меньше 767px)
  slidesPerView: 3,
  direction: 'vertical',

  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
      direction: 'vertical',
    },
    769: {
      slidesPerView: 2,
      direction: 'horizontal',
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 3,
      direction: 'horizontal',
      spaceBetween: 40,
    }
  }
});

//Бургер меню
document.addEventListener('DOMContentLoaded', () => {
  const burger = document.getElementById('burger');
  const menu = document.getElementById('menu');
  const closeBtn = document.getElementById('close');
  const menuLinks = document.querySelectorAll('.menu__link');

  burger.addEventListener('click', () => {
    menu.classList.add('active');
  });

  closeBtn.addEventListener('click', () => {
    menu.classList.remove('active');
  });

  menuLinks.forEach(link => {
    link.addEventListener('click', () => {
      menu.classList.remove('active');
    });
  });
});




// аккордеон 
document.addEventListener("DOMContentLoaded", () => {
  if (window.innerWidth <= 767) {
    const items = document.querySelectorAll('.program__item');

    items.forEach(item => {
      const day = item.querySelector('.program__item-day');
      const icon = item.querySelector('.toggle-icon');

      const toggle = () => {
        items.forEach(i => {
          if (i !== item) i.classList.remove('active');
        });
        item.classList.toggle('active');
      };

      day.addEventListener('click', toggle);
      icon.addEventListener('click', (e) => {
        e.stopPropagation(); 
        toggle();
      });
    });
  }
});

// Скрол к нужной секции
document.getElementById('why').addEventListener('click', () => {
  document.getElementById('about').scrollIntoView({ behavior: 'smooth' })
})

document.getElementById('programa').addEventListener('click', () => {
  document.getElementById('cludes').scrollIntoView({ behavior: 'smooth' })
})

document.getElementById('feedback-header').addEventListener('click', () => {
  document.getElementById('feedback').scrollIntoView({ behavior: 'smooth' })
})

