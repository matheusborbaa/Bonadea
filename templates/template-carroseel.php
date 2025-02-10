<?php

/**
 * Template Name: Carrossel
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>*,
::before,
::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  background: #222;
}

#cCarousel {
  position: relative;
  max-width: 1020px;
  margin: auto;
}

#cCarousel .arrow {
  position: absolute;
  top: 50%;
  display: flex;
  width: 45px;
  height: 45px;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  z-index: 1;
  font-size: 26px;
  color: white;
  background: #dea194;
  cursor: pointer;
}

#cCarousel #prev {
  left: 0px;
}

#cCarousel #next {
  right: 0px;
}

#carousel-vp {
  width: 770px;
  height: 400px;
  display: flex;
  align-items: center;
  position: relative;
  overflow: hidden;
  margin: auto;
}

@media (max-width: 770px) {
  #carousel-vp {
    width: 510px;
  }
}

@media (max-width: 510px) {
  #carousel-vp {
    width: 250px;
  }
}

#cCarousel #cCarousel-inner {
  display: flex;
  position: absolute;
  transition: 0.3s ease-in-out;
  gap: 10px;
  left: 0px;
}

.cCarousel-item {
  width: 250px;
  height: 365px;
  border: 2px solid white;
  border-radius: 15px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

.cCarousel-item img {
  width: 100%;
  object-fit: cover;
  min-height: 246px;
  color: white;
}

.cCarousel-item .infos {
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-around;
  background: white;
  color: black;
}

.cCarousel-item .infos button {
  background: #dea194;
  padding: 10px 30px;
  border-radius: 15px;
  color: white;
  font-size: 1rem;
  font-weight: bold;
  cursor: pointer;
}

    </style>
</head>
<body>
<section>
  <div id="cCarousel">
    <div class="arrow" id="prev"><i class="fa-solid fa-chevron-left"></i></div>
    <div class="arrow" id="next"><i class="fa-solid fa-chevron-right"></i></div>

    <div id="carousel-vp">
      <div id="cCarousel-inner">

        <article class="cCarousel-item">
          <img src="https://images.unsplash.com/photo-1564292284209-60cce69f08ed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ0MTA1MTJ8&ixlib=rb-4.0.3&q=80&w=400" alt="Moon">
          <div class="infos">
            <h3>Title 1 / 6</h3>
            <button type="button">See</button>
          </div>
        </article>

        <article class="cCarousel-item">
          <img src="https://images.unsplash.com/photo-1564292284209-60cce69f08ed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ0MTA1MTJ8&ixlib=rb-4.0.3&q=80&w=400" alt="Moon">
          <div class="infos">
            <h3>Title 2 / 6</h3>
            <button type="button">See</button>
          </div>
        </article>

        <article class="cCarousel-item">
          <img src="https://images.unsplash.com/photo-1564292284209-60cce69f08ed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ0MTA1MTJ8&ixlib=rb-4.0.3&q=80&w=400" alt="Moon">
          <div class="infos">
            <h3>Title 3 / 6</h3>
            <button type="button">See</button>
          </div>
        </article>

        <article class="cCarousel-item">
          <img src="https://images.unsplash.com/photo-1564292284209-60cce69f08ed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ0MTA1MTJ8&ixlib=rb-4.0.3&q=80&w=400" alt="Moon">
          <div class="infos">
            <h3>Title 4 / 6</h3>
            <button type="button">See</button>
          </div>
        </article>

        <article class="cCarousel-item">
          <img src="https://images.unsplash.com/photo-1564292284209-60cce69f08ed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ0MTA1MTJ8&ixlib=rb-4.0.3&q=80&w=400" alt="Moon">
          <div class="infos">
            <h3>Title 5 / 6</h3>
            <button type="button">See</button>
          </div>
        </article>

        <article class="cCarousel-item">
          <img src="https://images.unsplash.com/photo-1564292284209-60cce69f08ed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2ODQ0MTA1MTJ8&ixlib=rb-4.0.3&q=80&w=400" alt="Moon">
          <div class="infos">
            <h3>Title 6 / 6</h3>
            <button type="button">See</button>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

</body>
</html>