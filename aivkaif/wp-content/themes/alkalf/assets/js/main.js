const countdownDate = new Date();
countdownDate.setHours(countdownDate.getHours() + 4);

// Находим все элементы .timer strong
const timerElements = document.querySelectorAll('.timer strong');

function updateCountdown() {
  const now = new Date();
  const diff = countdownDate - now;

  if (diff <= 0) {
    timerElements.forEach(el => el.textContent = "Акція завершилась");
    clearInterval(intervalId);
    return;
  }

  const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
  const minutes = Math.floor((diff / (1000 * 60)) % 60);
  const seconds = Math.floor((diff / 1000) % 60);

  const timeText = `${hours} год. ${minutes} хв. ${seconds < 10 ? '0' + seconds : seconds} сек.`;

  timerElements.forEach(el => el.textContent = timeText);
}

const intervalId = setInterval(updateCountdown, 1000);
updateCountdown();









  // const swiperOne = new Swiper('.swiper-one', {
  //   slidesPerView: 3,
  //   centeredSlides: true,
  //   spaceBetween: 25,
  //   loop: true,
  //   pagination: {
  //       el: '.swiper-pagination-one',
  //       clickable: true,
  //     },
  // });




  const swiperOne = new Swiper('.swiper-one', {
    slidesPerView: 2.3,
  centeredSlides: true,
  // spaceBetween: 20,
  loop: true,
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
        // 480: {
        //   slidesPerView: 1,
        //   spaceBetween: 20
        // },
        // 640: {
        //   slidesPerView: 2,
        //   spaceBetween: 20
        // },
        // 1024: {
        //   slidesPerView: 3,
        //   spaceBetween: 20
        // }
      }
});

// const swiperOne = new Swiper('.swiper-one', {
//   slidesPerView: 1,
//   spaceBetween: 20,
//   loop: true,
//   pagination: {
//     el: '.swiper-pagination-one',
//     clickable: true,
//   },
//   navigation: {
//     nextEl:'.swiper-button-next-one' ,
//     prevEl:'.swiper-button-prev-one',
//   },
//   breakpoints: {
//     480: {
//       slidesPerView: 1,
//       spaceBetween: 20
//     },
//     640: {
//       slidesPerView: 2,
//       spaceBetween: 20
//     },
//     1024: {
//       slidesPerView: 3,
//       spaceBetween: 20
//     }
//   }
// });




  const swipertwo = new Swiper('.swiper-two', {
    centeredSlides: true,
    loop: true,
    pagination: {
        el: '.swiper-pagination-two',
        clickable: true,
      },
      breakpoints: {
            480: {
              slidesPerView: 1,
              spaceBetween: 20
            },
            640: {
              slidesPerView: 2,
              spaceBetween: 20
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 20
            }
          }
  });


  // Скрол к нужной секции
  document.getElementById('why').addEventListener('click', ()=> {
    document.getElementById('about').scrollIntoView({behavior: 'smooth'})
})

document.getElementById('programa').addEventListener('click', ()=> {
  document.getElementById('cludes').scrollIntoView({behavior: 'smooth'})
})

document.getElementById('feedback-header').addEventListener('click', ()=> {
  document.getElementById('feedback').scrollIntoView({behavior: 'smooth'})
})   



//Бургер меню
document.addEventListener('DOMContentLoaded', () => {
  const burger = document.getElementById('burger');
  const menu = document.getElementById('menu');
  const closeBtn = document.getElementById('close');

  burger.addEventListener('click', () => {
      menu.classList.add('active');
  });

  closeBtn.addEventListener('click', () => {
      menu.classList.remove('active');
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
        // Закрываем все кроме текущего
        items.forEach(i => {
          if (i !== item) i.classList.remove('active');
        });
        item.classList.toggle('active');
      };

      day.addEventListener('click', toggle);
      icon.addEventListener('click', (e) => {
        e.stopPropagation(); // чтобы не сработал двойной клик
        toggle();
      });
    });
  }
});



