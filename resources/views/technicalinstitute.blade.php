   
   @include('layouts.header')
   
   <style>
    @import url(https://fonts.googleapis.com/css?family=Lobster);
* {
  box-sizing: border-box;
}


.banner {
  height: 25em;
  overflow: hidden;
  background:  url("trainings.jpg") no-repeat;
  background-position: 50% 10%;
  background-size: cover;

  
}


@media (max-width: 600px) {
  .banner .heading {
    font-size: 15vmin;
  }
}

.offset-wrap {
  margin: -10em auto 0 auto;
}

.content-card {
  background: #fff;
  width: 75vw;
  max-width: 900px;
  margin: 4em auto;
  padding: 2em;
  border-radius: 5px;
  font-size: 1.1em;
  color: rgba(0, 0, 0, 0.67);
  line-height: 1.6;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
}
.content-card p{
  font-size: 20px;
  font-family: 'popines',sans-serif;
  
}
@media (max-width: 450px) {
  .content-card {
    width: 100%;
    border-radius: 0px;
    box-shadow: none;
  }
}
.content-card h2 {
  margin: 0;
  display: inline-block;
}
.content-card h2:after {
  content: "";
  display: block;
  height: 3px;
  width: 40%;
  background: #DD2E44;
  position: relative;
  bottom: -0.2em;
}


.pricing {
  background: #173251;
  text-align: center;
  padding: 4em 1em;
}
.pricing h1 {
  color: #fff;
  padding: 0.5em;
  font-size: 50px;
  margin: 0 auto;
  display: inline-block;
  text-shadow: 2px 2px 1px #ba1e32;
}

   </style>
   <!-- cards css -->
   <style>
    #container {
        height: 100vh;
        width: 100%;
        margin: 0;
        padding: 0;
        display: grid;
        place-items: center
    }

    #slider-container {
        height: 250px;
        width: 85vw;
        max-width: 1400px;
        position: relative;
        overflow: hidden;
        padding: 20px;
    }

    #slider-container .btn {
        position: absolute;
        top: calc(50% - 30px);
        height: 20px;
        width: 20px;
        border-left: 3px solid yellow;
        border-top: 3px solid yellow;
    }

    #slider-container .btn:hover {
        transform: scale(1.2);
    }

    #slider-container .btn.inactive {
        border-color: rgb(153, 121, 126)
    }

    #slider-container .btn:first-of-type {
        transform: rotate(-45deg);
        left: 10px
    }

    #slider-container .btn:last-of-type {
        transform: rotate(135deg);
        right: 10px;
    }

    #slider-container #slider {
        display: flex;
        width: 1000%;
        height: 100%;
        transition: all .5s;
    }

    #slider-container #slider .slide {
        height: 100%;
        margin: auto 10px;
        background-color:white;
        color: white;
        display: grid;
        place-items: center;
    }

    #slider-container #slider .slide span {
        color: white;
        font-size: 150px;
    }

    .image {
        width: 100%;
        height: 100%;

    }
    .image-slider
    {
      width: 100%;
      height: 160px;
    }
    .title-heading
    {
        width: 100%;
        height: 100%;
        text-align: center;
        align-items: center;
        color: black;
        justify-content: center;
        font-size: 25px;
        font-weight: bold;
       font-family: 'popines',sans-serif;
    }
    .title-heading-div
    {
        
        width: 100%;
        
    }

    @media only screen and (min-width: 1100px) {

        #slider-container #slider .slide {
            width: calc(2.5% - 20px);
        }

    }

    @media only screen and (max-width: 1100px) {

        #slider-container #slider .slide {
            width: calc(3.3333333% - 20px);
        }

    }

    @media only screen and (max-width: 900px) {

        #slider-container #slider .slide {
            width: calc(5% - 20px);
        }

    }

    @media only screen and (max-width: 550px) {

        #slider-container #slider .slide {
            width: calc(10% - 20px);
           

        }

    }
</style>
   <section>
<div class="banner">
  
</div>
<div class="offset-wrap">
  <div class="content-card">
    <h2>Trans Arabians Technical Institute</h2>
    <p>Trans arabian travel and technical institute most prominent  and leading institute for oil and gas ,construction shipping and hospitality insdustry.</p>
    <p>we have design comprehensive standalized quality quality asshored and result oriented training and certification cources to educate the undeprilized youth of pakistan.</p>
    <p> Trans arabian training and technical institute is a non profit organisation contributy toward modernizing the labour fource of pakstan .</p>
    <p>Our training programs walk our students through a number of excercise that prepare them for seal life ,exposere of walking condition in thier respective field of industry.</p>
   <p>pakistan has millions of youth people who do not ha ve oppertunities to build thier skills . our aim is to develop the skills here in lies the goal bridging that gap. in addition to helping the society and country,we want to enable our people to be able to go and beek the oppertunities that are avialible in the middle east. </p>
  </div>
  <div class="pricing">
    <h1>Trainings Programs</h1>
    <div class="pricing-items">
      <!-- cards start -->
      
        <div id="slider-container">
            <span onclick="slideRight()" class="btn"></span>
            <div id="slider">
                <div class="slide">
                    <div class="image-slider"><img class="image" src="servise1/10.jpg"></div>
                    <div class="title-heading-div">
                        <p  class="title-heading">WELLDING</p>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="image-slider" ><img class="image" src="servise1/14.jpg"></div>
                    <div class="title-heading-div">
                        <p  class="title-heading">ELECTRICAL</p>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="image-slider" ><img class="image" src="servise1/13.jpg"></div>
                    <div class="title-heading-div">
                        <p  class="title-heading">QHSE</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="image-slider" ><img class="image" src="servise1/11.jpg"></div>
                    <div class="title-heading-div">
                        <p  class="title-heading">AUTOMATION</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="image-slider" ><img class="image" src="servise1/15.jpg"></div>
                    <div class="title-heading-div">
                        <p  class="title-heading">FABRICATION</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="image-slider" ><img class="image" src="servise1/13.jpg"></div>
                    <div class="title-heading-div">
                        <p  class="title-heading" style="font-size: 20px;">CIVIL CONSTRUCTION</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="image-slider" ><img class="image" src="servise1/12.jpg"></div>
                    <div class="title-heading-div">
                        <p  class="title-heading">CARPENTRY</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="image-slider" ><img class="image" src="servise1/16.jpg"></div>
                    <div class="title-heading-div">
                        <p  class="title-heading">STEEL FIXING</p>
                    </div>
                </div>
            </div>
            <span onclick="slideLeft()" class="btn"></span>
        </div>
    
    </div>
  </div>
</div>
   </section>
   <script>
  var container = document.getElementById('slider-container');
  var slider = document.getElementById('slider');
  var slides = document.getElementsByClassName('slide').length;
  var buttons = document.getElementsByClassName('btn');

  var currentPosition = 0;
  var currentMargin = 0;
  var slidesPerPage = 0;
  var slidesCount = slides - slidesPerPage;
  var containerWidth = container.offsetWidth;
  var prevKeyActive = false;
  var nextKeyActive = true;

  window.addEventListener("resize", checkWidth);

  function checkWidth() {
    containerWidth = container.offsetWidth;
    setParams(containerWidth);
  }

  function setParams(w) {
    if (w < 551) {
      slidesPerPage = 1;
    } else if (w < 901) {
      slidesPerPage = 2;
    } else if (w < 1101) {
      slidesPerPage = 3;
    } else {
      slidesPerPage = 4;
    }
    slidesCount = slides - slidesPerPage;
    if (currentPosition > slidesCount) {
      currentPosition -= slidesPerPage;
    }
    currentMargin = -currentPosition * (100 / slidesPerPage);
    slider.style.marginLeft = currentMargin + '%';
    if (currentPosition > 0) {
      buttons[0].classList.remove('inactive');
    }
    if (currentPosition < slidesCount) {
      buttons[1].classList.remove('inactive');
    }
    if (currentPosition >= slidesCount) {
      buttons[1].classList.add('inactive');
    }
  }

  function slideRight() {
    if (currentPosition != 0) {
      slider.style.marginLeft = currentMargin + (100 / slidesPerPage) + '%';
      currentMargin += 100 / slidesPerPage;
      currentPosition--;
    }
    if (currentPosition === 0) {
      buttons[0].classList.add('inactive');
    }
    if (currentPosition < slidesCount) {
      buttons[1].classList.remove('inactive');
    }
  }

  function slideLeft() {
    if (currentPosition != slidesCount) {
      slider.style.marginLeft = currentMargin - (100 / slidesPerPage) + '%';
      currentMargin -= 100 / slidesPerPage;
      currentPosition++;
    }
    if (currentPosition == slidesCount) {
      buttons[1].classList.add('inactive');
    }
    if (currentPosition > 0) {
      buttons[0].classList.remove('inactive');
    }
  }

  setParams();

  // Add event listeners to buttons or other elements that trigger slideLeft() and slideRight() functions
</script>
   @include('layouts.footer')