new Glider(document.querySelector('.carousel__lista'), {
    slidesToShow: 1,
    slidesToScroll: 1,
    breakpoints: {
      800: {
        perView: 2
      },
      480: {
        perView: 1
      }
    },
    arrows: {
      prev: '.carousel__anterior',
      next: '.carousel__siguiente'
    },
    dots: '.carousel__indicadores',
    responsive:[
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }

        },{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        }
    ]
  })

const glider = new Glider(document.getElementById('glider'));

function sliderAuto(slider, miliseconds) {
  const slidesCount = slider.track.childElementCount;
  let slideTimeout = null;
  let nextIndex = 1;

  function slide () {
    slideTimeout = setTimeout(
      function () {
        if (nextIndex >= slidesCount ) {
          nextIndex = 0;
        }
        slider.scrollItem(nextIndex++);
      },
      miliseconds
    );
  }

  slider.ele.addEventListener('glider-animated', function() {
    window.clearInterval(slideTimeout);
    slide();
  });

  slide();
}
  
sliderAuto(glider, 10000)

