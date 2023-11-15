
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пример стилизации с StyleSheet API</title>
</head>
<body>

<!-- Ваш контент здесь -->

<div class="element-animation" id="hidd">
            <span>Mario escribe una reseña <div class="dots"></div></span>
</div>
<ul class="new_comments_list" id="comment-field" style="margin: 0; padding-left: 0; width: 100%;"></ul>


<style>
  .element-animation {
    
    color: var(--black, #1F0B0D);
    font-family: Rowdies;
    /* Скроем элемент в начальном состоянии */
    opacity: 0;
    transform: translateY(20px);

    margin: 2rem 0;
    font-size: 20px;
    border-radius: 20px;
    background-color: #E9E6EB;
    display: flex;
    flex-direction: column;
    align-items: flex-start;;
    justify-content: flex-start;
    padding: var(--padding-base) var(--padding-base) var(--padding-7xl);
    box-sizing: border-box;
    gap: var(--gap-5xs);
    width: 100%;

  }
  .element-animation.element-show {
    opacity: 1;
    transition: all 1.5s;
    transform: translateY(0%);
  }
  
  .dots {
   width: 56px;
   height: 13.4px;
   background: radial-gradient(circle closest-side,#a5a5ab 90%,#0000) 0%   50%,
        radial-gradient(circle closest-side,#a5a5ab 90%,#0000) 50%  50%,
        radial-gradient(circle closest-side,#a5a5ab 90%,#0000) 100% 50%;
   background-size: calc(100%/3) 100%;
   background-repeat: no-repeat;
   animation: dots-zcf63l 1s infinite linear;
  }

  @keyframes dots-zcf63l {
    33% {
        background-size: calc(100%/3) 0%  ,calc(100%/3) 100%,calc(100%/3) 100%;
    }

    50% {
        background-size: calc(100%/3) 100%,calc(100%/3) 0%  ,calc(100%/3) 100%;
    }

    66% {
        background-size: calc(100%/3) 100%,calc(100%/3) 100%,calc(100%/3) 0%;
    }
  }

  .commentAdded {
    background-color: rgba(233, 230, 235, 0.15);
    animation: commentAdded-zcf6 2s linear;
  }

  @keyframes commentAdded-zcf6 {
    0% {
      background-color: rgba(233, 230, 235, 1);
    }
    25% {
      background-color: rgba(233, 230, 235, 0.75);
    }
    50% {
      background-color: rgba(233, 230, 235, 0.50);
    }
    75% {
      background-color: rgba(233, 230, 235, 0.25);
    }
    100% {
      background-color: rgba(233, 230, 235, 0.15);
    }
  }

</style>

<script>

  function onEntry(entry) {
      entry.forEach(change => {
          if (change.isIntersecting) {
              change.target.classList.add('element-show');
          }
      });
  }

  let options = {
    threshold: [0.5] 
  };

  let observer = new IntersectionObserver(onEntry, options);
  let elements = document.querySelectorAll('.element-animation');
  let active = false;

  for (let elm of elements) {
      observer.observe(elm);
  }

  let hidd = document.getElementById("hidd");
  if(hidd) {
      setTimeout(() => {
          active = true;
          if (active == true) {
            hidd.style.display = "none";
            showComments("commentAdded");
            console.log("ok");
            document.getElementById("commentAdded").classList.add("commentAdded");
          }
      }, 6000);
  }


  let comments = [];
  
  function showComments(commentAdded) {
    let commentField = document.getElementById('comment-field');
    let out = '';
    out += `
		<li style="list-style: none;">
      
      <div class="review-template" id="${commentAdded}">
        <div class="frame-group">
          <div class="text-parent6">
            <div class="text18">
              <b class="price c-text-bludark">Mario</b>
            </div>
            <div class="checkmark">
              <img class="vector-icon7" alt="" src="./assets/vector6.svg">
              <div class="text">
                <div class="text-1223">Usuario verificado</div>
              </div>
            </div>
          </div>
          <div class="stars-parent">
            <div class="stars2">
              <img class="star-icon" alt="" src="./assets/star3.svg">
              <img class="star-icon" alt="" src="./assets/star3.svg">
              <img class="star-icon" alt="" src="./assets/star3.svg">
              <img class="star-icon" alt="" src="./assets/star3.svg">
              <img class="star-icon" alt="" src="./assets/star3.svg">
            </div>
            <div class="text57">
              <div class="text-127">07/31/23</div>
            </div>
          </div>
          <!-- <div><p class="c-comment-date"><span>Reviewed on August 14, 2023</span><span><img src="assets/circle.svg" alt="svg"></span><span>Grey</span></p></div> -->
          <div class="info">
            <div class="text-127"> Lo se son muy buenos ❕</div>
          </div>
        </div>
      </div>

		</li>`;
    commentField.innerHTML = out;
  }
</script>

</body>
</html>