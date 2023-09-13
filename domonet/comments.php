<style>
  .subs {
    border: 6px solid #f7f7f7;
    padding: 20px;
  }

  .subs-wrap {
    text-align: center !important;
  }

  input,
  textarea,
  select {
    border: 1px solid var(--c-contrast-150);
    padding: 7px 12px;
    outline: 0;
    height: auto;
    font-size: 14px;
    color: var(--c-contrast-500);
    max-width: 100%;
    border-radius: 2px;
    box-shadow: 0 2px 7px -4px rgba(0, 0, 0, .1);
    background: var(--c-input-bg, var(--c-contrast-0));

    font-family: 'Open Sans';
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 32px;

  }

  .subs-form .subs-inputs {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .subs-inputs button {
    background-color: #e62c53;
    color: #fff;
    border: none;
    cursor: pointer;
    height: 44px;
    padding: 7px 12px;
    box-sizing: border-box;
    font-size: 14px;
    color: #777;
    outline: none;
    text-align: center;
  }

  .subs-form label {
    font-size: 12px;
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 32px;
    color: rgba(0, 0, 0, 0.8);
  }
</style>
<div id="custom_html-2" class="widget_text widget widget_custom_html">
  <div class="textwidget custom-html-widget">
    <main>
      <div class="subs">
        <div class="subs-wrap">
          <div class="subs-before">
            <h3 class="subs-title">Leave a comment</h3>
            <p class="subs-subtitle">Leave us your comment on this website</p>
            <form action="" class="subs-form" method="post" id="form">
              <div class="subs-inputs">
                <input required="" type="text" class="subs-input" placeholder="Name" name="Name" id="NameUser">
                <textarea name="message" placeholder="Message" id="MessageUser"></textarea>
                <button type="submit" class="ekit-mail-submit subs-btn" name="ekit_mail_chimp"> COMMENT </button>
              </div>
            </form>
          </div>
          <div class="subs-after subs-hide">
            <h3 class="subs-title">Thank you for leaving your comment in our newsletter</h3>
            <p>Stay up to date every day</p>
          </div>
        </div>
      </div>
    </main>
    <style>
      .subs {
        border: 6px solid #f7f7f7;
        padding: 20px;
      }

      .subs-wrap {
        text-align: center !important;
      }

      .subs-title {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: bold;
        font-size: 26px;
        line-height: 35px;
        text-align: center;
        text-transform: uppercase;
        margin: 60px auto 30px;
        color: var(--black-color);
        line-height: 1.3;
        letter-spacing: -.01em;
        margin-bottom: 18px;
        margin-top: 8px;
        max-width: 95%;
      }

      .subs-subtitle {
        font-family: Open Sans;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 26px;
        /* margin-bottom: 22px; */
      }

      .subs-form .subs-inputs {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }

      .subs-inputs input[type="text"],
      .subs-inputs button {
        height: 44px;
        padding: 7px 12px;
        box-sizing: border-box;
        font-size: 14px;
        color: #000;
        /* color: #777; */
        outline: none;
        /* text-align: center; */
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 32px;
      }

      .subs-inputs button {
        background-color: #e62c53;
        color: #fff;
        border: none;
        cursor: pointer;
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: bold;
        font-size: 22px;
        line-height: 22px;
      }

      .subs-inputs button:hover {
        background-color: #e62c53;
      }

      .subs-form label {
        font-size: 12px;
        /* font-family: 'PT Serif', Georgia, 'Times New Roman', Times, serif; */
        /* font-family: var(--body-font); */
        color: rgba(0, 0, 0, 0.8);
        
      }

      .subs-after > p {
        font-family: Open Sans;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 26px;
        /* margin-bottom: 22px;*/
      }

      .subs-hide {
        display: none !important;
      }

      @media (max-width: 860px) and (orientation: landscape) {
        /* .btn_link_box {
          margin: 1.5rem auto;
        } */

        .btn_link {
          margin: 0;
        }
      }

      @media (max-width: 650px) {
        /* .btn_link_box {
          margin: 1.5rem auto;
        } */

        .btn_link {
          margin: 0;
        }
      }

      @media (max-width: 480px) {
        .btn_link_box {
          padding: 1.5rem 0.5rem;
        }
      }
    </style>
  </div>
</div>
<style>
  #UserComment {
    display: none;
  }

  .comments {
    display: block;
    /* margin: 20px 0px; */
    font-size: 0px;
  }

  .comments .comments-inner {
    padding: 0px 0px;
  }

  /* .comments .comments-inner h1 {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: bold;
    font-size: 26px;
    display: block;
    margin: 10px 0px;
    padding: 0px 0px 5px;
    border-bottom: 2px solid #006598;
    color: #006598 !important;
    text-transform: uppercase !important;
  } */

  .comments .comments-inner .comment-box {
    margin: 20px 0px;
    display: block;
    padding: 0px 0px 20px;
    border-bottom: 1px solid #d9d9d9;
  }

  .inl {
    display: inline-block;
    vertical-align: top;
    /* * display: inline; */
    zoom: 1;
  }

  .comments .comments-inner .comment-box .comment-pic {
    width: 55px;
  }

  .comments .comments-inner .comment-box .comment-pic img {
    display: block;
    width: 55px;
    margin: 0px 0px;
  }

  .comments .comments-inner .comment-box .comment-text {
    width: 100%;
  }

  .comments .comments-inner .comment-box .comment-text .comment-text-inner {
    padding: 0px 20px;
    padding-left: 0.2rem;
  }

  .comments .comments-inner .comment-box .comment-text .comment-text-inner h1 {
    font-family: Tahoma;
    font-size: 13px;
    color: #3B5998;
    margin: 0 0 5px 0;
    line-height: 14px;
    font-weight: bold;
  }

  .comments .comments-inner .comment-box .comment-text .comment-text-inner p {
    font-family: Tahoma;
    font-size: 12px;
    color: #1A1A1A;
    line-height: 15px;
    margin: 0 0 5px 0;
  }

  .comments .comments-inner .comment-box .comment-text .comment-text-inner h2 {
    display: block;
    margin: 10px 0px 0px !important;
    font-size: 12px !important;
    line-height: 13px !important;
    text-align: left;
    text-transform: none;
    color: #57585a;
    font-style: normal !important;
    /* font-family: var(--body-font); */
    font-family: Open Sans;
  }

  .comments .comments-inner .comment-box .comment-text .comment-text-inner h2 span {
    font-family: Tahoma;
    font-size: 12px;
    color: #3B5998;
    line-height: 15px;
    margin: 0 0 5px 0;
  }

  .likes {
    cursor: pointer;
  }


  .comments .comments-inner .c-replay-comment-box {
    display: none;
    border-bottom: none;
    /* margin-left: 3rem; */
    padding-bottom: 0;
  }

  .comments .comments-inner .comment-box .comment-text .comment-text-inner a {
    font: inherit;
    /* font-family: var(--body-font); */
    color: var(--red);
    font-weight: 700;
    text-decoration: none;
  }

  /* .replyForm {
    display: none;
  } */

  @media (max-width: 480px) {
    .comments .comments-inner .comment-box .comment-text .comment-text-inner p {
      line-height: 27px;
      font-size: 14px !important;
    }
  }

</style>
<div class="comments">
  <div class="comments-inner">
    <!-- <h1>COMMENTe</h1> -->
    <h1>Add a comment</h1>

    <?php
      echo <<<EOT
      <div class="comment-box" id="UserComment">
        <div class="comment-text inl">
          <div class="comment-text-inner">
            <h1 id="UserName"></h1>
            <p id="UserMessage"></p>
            <h2>
              <span id="UserReply" data-form-target="0"></span> <span class="numLikes" data-counter="0">0</span> <span class="likes" data-target="0">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>
      EOT;

    ?>


    <?php
      $demo = '<form action="" class="subs-form" method="post" id="form"><div class="subs-inputs"><input required="" type="text" class="subs-input NameUser" placeholder="Name" name="Name" id="NameUser"><textarea class="MessageUser" name="message" placeholder="Message" id="MessageUser"></textarea><button type="submit" class="ekit-mail-submit subs-btn" name="ekit_mail_chimp"> COMMENT </button></div></form>';
    ?>

    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof1.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Kendall Murray</h1>
          <p>I was watching the news live and saw the moment when the Fox Business show ended abruptly. Stinky bankers don't want regular people to make money.</p>
          <h2>
            <span class="replys" data-form-target="1">Reply .</span> <span class="numLikes" data-counter="1">13</span> <span class="likes" data-target="1">. Like .</span> 12 minutes ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="1"></div>
      <div class="comment-box c-replay-comment-box" data-show="1">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="1">
            <h1 class="username" data-name="1"></h1>
            <p class="usermessage" data-message="1"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>
    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof2.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Pattie Russel</h1>
          <p>I have already signed up for Quantum AI. My manager contacted me almost immediately and explained how to make a deposit. In a couple of hours I made 365 bucks, that's fantastic</p>
          <h2>
            <span class="replys" data-form-target="2">Reply .</span> <span class="numLikes" data-counter="2">14</span> <span class="likes" data-target="2">. Like .</span> 13 minutes ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="2"></div>
      <div class="comment-box c-replay-comment-box" data-show="2">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="2">
            <h1 class="username" data-name="2"></h1>
            <p class="usermessage" data-message="2"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>
    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof3.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Josiah Walter</h1>
          <p> It is so easy to use, you just deposit money and the robot does all the work for you</p>
          <h2>
            <span class="replys" data-form-target="3">Reply .</span> <span class="numLikes" data-counter="3">2</span> <span class="likes" data-target="3">. Like .</span> 1 hour ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="3"></div>
      <div class="comment-box c-replay-comment-box" data-show="3">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="3">
            <h1 class="username" data-name="3"></h1>
            <p class="usermessage" data-message="3"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>
    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof4.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Aida Mueller</h1>
          <p>I saw this on the news. Thank you for sharing this article!</p>
          <h2>
            <span class="replys" data-form-target="4">Reply .</span> <span class="numLikes" data-counter="4">12</span> <span class="likes" data-target="4">. Like .</span> 12 minutes ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="4"></div>
      <div class="comment-box c-replay-comment-box" data-show="4">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="4">
            <h1 class="username" data-name="4"></h1>
            <p class="usermessage" data-message="4"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>
    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Jeramie Rodriguez</h1>
          <p>I've made over $2,133 after just a week, I'm so close to leaving my job and doing this full time.</p>
          <h2>
            <span class="replys" data-form-target="5">Reply .</span> <span class="numLikes" data-counter="5">24</span> <span class="likes" data-target="5">. Like .</span> 12 minutes ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="5"></div>
      <div class="comment-box c-replay-comment-box" data-show="5">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="5">
            <h1 class="username" data-name="5"></h1>
            <p class="usermessage" data-message="5"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>


    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Alysa Mosciski</h1>
          <p>Thanks for the info, just started using the platform</p>
          <h2>
            <span class="replys" data-form-target="6">Reply .</span> <span class="numLikes" data-counter="6">12</span> <span class="likes" data-target="6">. Like .</span>  2 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="6"></div>
      <div class="comment-box c-replay-comment-box" data-show="6">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="6">
            <h1 class="username" data-name="6"></h1>
            <p class="usermessage" data-message="6"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>


    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Vicky Predovic</h1>
          <p>I was so impressed that I decided to deposit $500 at once and have already increased my deposit fourfold. Thank you very much!</p>
          <h2>
            <span class="replys" data-form-target="7">Reply .</span> <span class="numLikes" data-counter="7">9</span> <span class="likes" data-target="7">. Like .</span> 2 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="7"></div>
      <div class="comment-box c-replay-comment-box" data-show="7">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="7">
            <h1 class="username" data-name="7"></h1>
            <p class="usermessage" data-message="7"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>



    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Barrett Douglas</h1>
          <p>Gosh, how fast the seats are running out, just a couple of days ago it was 87, today it's 21. I'm thankful to be among the lucky ones. I'm just shocked that I'm just investing and making a profit automatically. I recommend all people reading this to sign up, even if you don't plan on investing. Places will run out very soon and you will regret it for the rest of your life</p>
          <h2>
            <span class="replys" data-form-target="8">Reply .</span> <span class="numLikes" data-counter="8">14</span> <span class="likes" data-target="8">. Like .</span> 2 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="8"></div>
      <div class="comment-box c-replay-comment-box" data-show="8">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="8">
            <h1 class="username" data-name="8"></h1>
            <p class="usermessage" data-message="8"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>



    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Margaretta Wunsch</h1>
          <p>Elon Musk is damn genius! I got more in a week than a month's pay at the office, this is the fastest and easiest money I've ever made</p>
          <h2>
            <span class="replys" data-form-target="9">Reply .</span> <span class="numLikes" data-counter="9">21</span> <span class="likes" data-target="9">. Like .</span> 2 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="9"></div>
      <div class="comment-box c-replay-comment-box" data-show="9">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="5">
            <h1 class="username" data-name="9"></h1>
            <p class="usermessage" data-message="9"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>


    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Gregory Schumm</h1>
          <p>I know Gayle personally, and she advised me to register as soon as possible while I could. And it was the best decision, I have already doubled my deposit. Thanks Gayle and thanks Elon Musk!</p>
          <h2>
            <span class="replys" data-form-target="10">Reply .</span> <span class="numLikes" data-counter="10">6</span> <span class="likes" data-target="10">. Like .</span> 2 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="10"></div>
      <div class="comment-box c-replay-comment-box" data-show="10">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="10">
            <h1 class="username" data-name="10"></h1>
            <p class="usermessage" data-message="10"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>


    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Emilia Bednar</h1>
          <p>Too bad there are so few places. I don't think my friend will have time to register. She's skeptical about it. Even when I was updating my account and the money was getting more and more</p>
          <h2>
            <span class="replys" data-form-target="11">Reply .</span> <span class="numLikes" data-counter="11">26</span> <span class="likes" data-target="11">. Like .</span> 2 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="11"></div>
      <div class="comment-box c-replay-comment-box" data-show="11">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="11">
            <h1 class="username" data-name="11"></h1>
            <p class="usermessage" data-message="11"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>

    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Mable Anderson</h1>
          <p>I thought that at my age it would be difficult to understand cryptocurrency investing. But here everything is very clear and I started investing in Quantum AI without any problems. Thank you, now I live a carefree life and can live a happy old age</p>
          <h2>
            <span class="replys" data-form-target="12">Reply .</span> <span class="numLikes" data-counter="12">24</span> <span class="likes" data-target="12">. Like .</span> 2 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="12"></div>
      <div class="comment-box c-replay-comment-box" data-show="12">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="12">
            <h1 class="username" data-name="12"></h1>
            <p class="usermessage" data-message="12"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>

    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Alison Carter</h1>
          <p>Is this a joke? I registered in the morning and already in the evening, I had earned money in my account. I sent this article to my mom, I hope she has time to register and take such a lucrative place</p>
          <h2>
            <span class="replys" data-form-target="13">Reply .</span> <span class="numLikes" data-counter="13">20</span> <span class="likes" data-target="13">. Like .</span> 2 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="13"></div>
      <div class="comment-box c-replay-comment-box" data-show="13">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="13">
            <h1 class="username" data-name="13"></h1>
            <p class="usermessage" data-message="13"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>

    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Itzel Paucek</h1>
          <p>Dear Elon Musk, thank you very much. I have so many credits, I didn't know what to do anymore. When I saw this article, I decided to take a risk and deposited the last $250. Oh miracle, one week later I earned $4,500. God bless you</p>
          <h2>
            <span class="replys" data-form-target="14">Reply .</span> <span class="numLikes" data-counter="14">18</span> <span class="likes" data-target="14">. Like .</span> 3 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="14"></div>
      <div class="comment-box c-replay-comment-box" data-show="14">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="14">
            <h1 class="username" data-name="14"></h1>
            <p class="usermessage" data-message="14"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>

    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Rogers Aufderhar</h1>
          <p>Cool! I already registered and am waiting for a call from the manager</p>
          <h2>
            <span class="replys" data-form-target="15">Reply .</span> <span class="numLikes" data-counter="15">18</span> <span class="likes" data-target="15">. Like .</span> 3 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="15"></div>
      <div class="comment-box c-replay-comment-box" data-show="15">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="15">
            <h1 class="username" data-name="15"></h1>
            <p class="usermessage" data-message="15"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>

    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Verlie Smitham</h1>
          <p>God, this platform really works. I've already sent everyone the link to this article, I hope they have time to register.</p>
          <h2>
            <span class="replys" data-form-target="16">Reply .</span> <span class="numLikes" data-counter="16">12</span> <span class="likes" data-target="16">. Like .</span> 3 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="16"></div>
      <div class="comment-box c-replay-comment-box" data-show="16">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="16">
            <h1 class="username" data-name="16"></h1>
            <p class="usermessage" data-message="16"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>

    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Mike Veum</h1>
          <p>My $250 turned into $1,200. I'm ready to cry tears of happiness</p>
          <h2>
            <span class="replys" data-form-target="17">Reply .</span> <span class="numLikes" data-counter="17">4</span> <span class="likes" data-target="17">. Like .</span> 4 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="17"></div>
      <div class="comment-box c-replay-comment-box" data-show="17">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="17">
            <h1 class="username" data-name="17"></h1>
            <p class="usermessage" data-message="17"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>

    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Kelton Mante</h1>
          <p>I never thought it was possible in my life. Has the future really arrived? Thank you, this is the easiest money I've ever made in my life!</p>
          <h2>
            <span class="replys" data-form-target="18">Reply .</span> <span class="numLikes" data-counter="18">15</span> <span class="likes" data-target="18">. Like .</span> 6 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="18"></div>
      <div class="comment-box c-replay-comment-box" data-show="18">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="18">
            <h1 class="username" data-name="18"></h1>
            <p class="usermessage" data-message="18"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>


    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Carrie DuBuque</h1>
          <p>This is the easiest way to make a profitable investment. How glad I am that I had time to register.</p>
          <h2>
            <span class="replys" data-form-target="19">Reply .</span> <span class="numLikes" data-counter="19">12</span> <span class="likes" data-target="19">. Like .</span> 8 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="19"></div>
      <div class="comment-box c-replay-comment-box" data-show="19">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="19">
            <h1 class="username" data-name="19"></h1>
            <p class="usermessage" data-message="19"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>

    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Kyle Miranda</h1>
          <p>I have tried so much of this kind of stuff, in one sense I want to try it but in the back of my mind I am thinking, yeah right!! Someone please reassure me it works.</p>
          <h2>
            <span class="replys" data-form-target="20">Reply .</span> <span class="numLikes" data-counter="20">13</span> <span class="likes" data-target="20">. Like .</span> 8 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="20"></div>
      <div class="comment-box c-replay-comment-box" data-show="20">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="20">
            <h1 class="username" data-name="20"></h1>
            <p class="usermessage" data-message="20"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>

    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Tom Bergheger</h1>
          <p>I tried the platform thing a while ago and it worked pretty good for me.</p>
          <h2>
            <span class="replys" data-form-target="21">Reply .</span> <span class="numLikes" data-counter="21">24</span> <span class="likes" data-target="21">. Like .</span> 8 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="21"></div>
      <div class="comment-box c-replay-comment-box" data-show="21">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="21">
            <h1 class="username" data-name="21"></h1>
            <p class="usermessage" data-message="21"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>

    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Eitan Silver</h1>
          <p>A few of my friends had invested in bitcoin and made an absolute killing do it, I'm going to be joining them soon.</p>
          <h2>
            <span class="replys" data-form-target="22">Reply .</span> <span class="numLikes" data-counter="22">16</span> <span class="likes" data-target="22">. Like .</span> 8 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="22"></div>
      <div class="comment-box c-replay-comment-box" data-show="22">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="22">
            <h1 class="username" data-name="22"></h1>
            <p class="usermessage" data-message="22"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>

    <div class="comment-box">
      <!-- <div class="comment-pic inl"><img src="images/prof5.jpg"></div> -->
      <div class="comment-text inl">
        <div class="comment-text-inner">
          <h1>Gotmy Mindframe Right</h1>
          <p>Had no idea you could get results like this, does anybody know if you can invest in other crypto currencies.</p>
          <h2>
            <span class="replys" data-form-target="23">Reply .</span> <span class="numLikes" data-counter="23">8</span> <span class="likes" data-target="23">. Like .</span> 9 hours ago
          </h2>
        </div>
      </div>

      <div class="replyForm" data-form-index="23"></div>
      <div class="comment-box c-replay-comment-box" data-show="23">
        <div class="comment-text inl">
          <div class="comment-text-inner replyResul" data-form-child="23">
            <h1 class="username" data-name="23"></h1>
            <p class="usermessage" data-message="23"></p>
            <h2>
              <span>Reply .</span> <span class="numLikes" >0</span> <span class="likes">. Like .</span> just now
            </h2>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<script>

  const UserComment = document.getElementById("UserComment");

  //  form datas
  const form = document.getElementById("form");
  const NameUser = document.getElementById("NameUser");
  const MessageUser = document.getElementById("MessageUser");

  // user datas
  const UserName = document.getElementById("UserName");
  const UserMessage = document.getElementById("UserMessage");
  const UserReply = document.getElementById("UserReply");

  // Data block
  const before = document.querySelector('.subs-before');
  const after = document.querySelector('.subs-after');

  // Data likes
  const numLikes = document.querySelectorAll(".numLikes");
  const likes = document.querySelectorAll(".likes");


  // Data localstorage
  let name = localStorage.getItem("name") ? localStorage.getItem("name") : "";
  name = addName(localStorage.getItem("name"));

  let message = localStorage.getItem("message") ? localStorage.getItem("message") : "";
  message = addMessage(localStorage.getItem("message"));

  let reply = localStorage.getItem("reply") ? localStorage.getItem("reply") : "";
  reply = addReply(localStorage.getItem("reply"));

  let sho = localStorage.getItem("sho") ? localStorage.getItem("sho") : "";
  sho = showing(localStorage.getItem("sho"));

  // Functions to write data in the browser
  function addName(text) {
    UserName.innerHTML = text;
  }
  function addMessage(text) {
    UserMessage.innerHTML = text;
  }
  function addReply(text) {
    UserReply.innerHTML = text;
  }
  function showing(text) {
    UserComment.style.display = text;
  }

  numLikes.forEach(counter => {
    const key = `counter-${counter.dataset.counter}`;
    const value = parseInt(localStorage.getItem(key)) || parseInt(counter.textContent);

    counter.textContent = value;
  });

  likes.forEach((button, index) => {
      button.addEventListener('click', () => {
        const counter = numLikes[index];
        const key = `counter-${counter.dataset.counter}`;

        let value = parseInt(localStorage.getItem(key)) || parseInt(counter.textContent);
        if (!localStorage.getItem(key)) {
            value += 1;
            localStorage.setItem(key, value);
            counter.textContent = value;
        }
      });
  });

  
  //  Event form
  window.addEventListener('DOMContentLoaded', () => {
      if (!localStorage.getItem('subss')) {
        before.classList.remove('subs-hide')
      } else if (localStorage.getItem('subss')) {
        after.classList.remove('subs-hide')
      }
  })
  form.addEventListener('submit', e => {
      e.preventDefault()
      before.classList.add('subs-hide');
      after.classList.remove('subs-hide');
      localStorage.setItem('subss', true);
      name = NameUser.value;
      message = MessageUser.value;
      reply = "Reply .";
      localStorage.setItem("name", name);
      localStorage.setItem("message", message);
      localStorage.setItem("reply", reply);
      addName(NameUser.value);
      addMessage(MessageUser.value);
      addReply("Reply .");
      NameUser.value = "";
      MessageUser.value = "";

      //  Show the block-comment
      sho = "block"
      localStorage.setItem("sho", sho)
      showing("block");
  });


  // Add ReplyComment
  const replys = document.querySelectorAll(".replys");
  const replyForm = document.querySelectorAll(".replyForm");

  const replyResul = document.querySelectorAll(".replyResul");

  const username = document.querySelectorAll(".username");
  const usermessage = document.querySelectorAll(".usermessage");

  //Show Block-replay-comment
  const creplaycommentbox = document.querySelectorAll(".c-replay-comment-box");
  

  let text = '<?=$demo?>';

  function showForm(index) {
    let element = document.querySelector('.replyForm[data-form-index="' + index + '"]');
    element.innerHTML = text;
    let subsForm = element.querySelector(".subs-form");
    subsForm.setAttribute("data-form-element", index);
    let form = document.querySelector(`form[data-form-element="${index}"]`);

    let NameUserReply = form.querySelector('input[name="Name"]');
    let MessageUserReply = form.querySelector('textarea[name="message"]');

    form.addEventListener("submit", function(e){
      e.preventDefault();
      nameReply = NameUserReply.value;
      messageReply = MessageUserReply.value;
      localStorage.setItem("name-" + index , nameReply);
      localStorage.setItem("message-" + index, messageReply);
      addReplyComment(NameUserReply.value, MessageUserReply.value, index);
      NameUserReply.value = "";
      MessageUserReply.value = "";
      element.innerHTML = "";

      //Showing Replay-Block
      block = "block";
      localStorage.setItem("block-"+index, block);
      ShowReplay("block", index);
    });
  };


  function addReplyComment(name, message, index) {
    let element = document.querySelector('.replyResul[data-form-child="' + index + '"]');
      
    username.forEach(function(ele) {
      let nam = localStorage.getItem("name-" + ele.dataset.name) || ele.textContent;
      ele.innerHTML = nam;
    })

    usermessage.forEach(function(ele) {
        let messa = localStorage.getItem("message-" + ele.dataset.message) || ele.textContent;
        ele.innerHTML = messa;
    })
  };

  function ShowReplay(text ,index) {
    let block = document.querySelector('.c-replay-comment-box[data-show="' + index +'"]');
    block.style.display = text;
  }

  replys.forEach(function(element) {
    element.addEventListener("click", function() {
      let target = element.getAttribute("data-form-target");
      showForm(target);
    })
  });


  username.forEach(function(ele) {
    let nam = localStorage.getItem("name-" + ele.dataset.name) || ele.textContent;
    ele.innerHTML = nam;
  });

  usermessage.forEach(function(ele) {
    let messa = localStorage.getItem("message-" + ele.dataset.message) || ele.textContent;
    ele.innerHTML = messa;
  });

  creplaycommentbox.forEach(function(ele) {
    let blockReplay = localStorage.getItem("block-" + ele.dataset.show) || ele.inneHTML;
    ele.style.display = blockReplay;
  });

  // Clear datas localStorage
  setTimeout(() => {
    localStorage.clear();
  }, 17280000);

</script>

