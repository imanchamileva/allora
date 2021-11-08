hey how u doin
<div id="section1">
    <div class="slider">
      <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">

        <div class="slide first">
          <img src="public/images/girls-ecriture.png" alt="">
        </div>
        <div class="slide" id=men>
          <img src="public/images/men2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="public/images/children.jpg" alt="">
        </div>


        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
        </div>
      </div>
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
      </div>
    </div>

    <script type="text/javascript">
      var counter = 1;
      setInterval(function () {
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if (counter > 3) {
          counter = 1;
        }
      }, 5000);
    </script>
  </div>

  <div class="section2">
    <p>
    <h2> La mode éco-responsable</h2>
    </p>
    <img src="public/images/girls2.jpg" alt="">
  </div>
<br>
<br>
<br>
<br>

  <div class="section3">
    <p>
    <h2>LOOKBOOK</h2>
    </p>
    <img src="public/images/look1.jfif" alt="">
    <img src="public/images/look2.jfif" alt="">
    <img src="public/images/look3.jfif" alt="">
  </div>
