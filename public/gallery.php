<?php
   include('header.php');
?>
   <section class="gallery">
      <div class="gl-row">
         <!-- gallery 380x250 -->

         <div class="column">
            <img src="imagesgallery/1-img_380x250.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
         </div>

         <div class="column">
            <img src="imagesgallery/14-img_380x250.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
         </div>

         <div class="column">
            <img src="imagesgallery/13-img_380x250.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
         </div>

         <div class="column">
            <img src="imagesgallery/4-img_380x250.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
         </div>

         <div class="column">
            <img src="imagesgallery/5-img_380x250.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
         </div>

         <div class="column">
            <img src="imagesgallery/6-img_380x250.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
         </div>

         <div class="column">
            <img src="imagesgallery/7-img_380x250.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
         </div>

         <div class="column">
            <img src="imagesgallery/8-img_380x250.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
         </div>

         <div class="column">
            <img src="imagesgallery/16-img_380x250.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
         </div>

         <div class="column">
            <img src="imagesgallery/10-img_380x250.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
         </div>

         <div class="column">
            <img src="imagesgallery/17-img_380x250.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
         </div>

         <div class="column">
            <img src="imagesgallery/12-img_380x250.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
         </div>
      </div>

      <!-- gallery 640x400 -->

      <div id="myModal" class="modal">
         <span class="close cursor" onclick="closeModal()">&times;</span>
         <div class="modal-content">

            <div class="mySlides">
               <div class="numbertext">1 / 12</div>
               <img src="imagesgallery/1-img_640x480.jpg" style="width:100%">
            </div>

            <div class="mySlides">
               <div class="numbertext">2 / 12</div>
               <img src="imagesgallery/14-img_640x480.jpg" style="width:100%">
            </div>

            <div class="mySlides">
               <div class="numbertext">3 / 12</div>
               <img src="imagesgallery/13-img_640x480.jpg" style="width:100%">
            </div>

            <div class="mySlides">
               <div class="numbertext">4 / 12</div>
               <img src="imagesgallery/4-img_640x480.jpg" style="width:100%">
            </div>

            <div class="mySlides">
               <div class="numbertext">5 / 12</div>
               <img src="imagesgallery/5-img_640x480.jpg" style="width:100%">
            </div>

            <div class="mySlides">
               <div class="numbertext">6 / 12</div>
               <img src="imagesgallery/6-img_640x480.jpg" style="width:100%">
            </div>

            <div class="mySlides">
               <div class="numbertext">7 / 12</div>
               <img src="imagesgallery/7-img_640x480.jpg" style="width:100%">
            </div>

            <div class="mySlides">
               <div class="numbertext">8 / 12</div>
               <img src="imagesgallery/8-img_640x480.jpg" style="width:100%">
            </div>

            <div class="mySlides">
               <div class="numbertext">9 / 12</div>
               <img src="imagesgallery/16-img_640x480.jpg" style="width:100%">
            </div>

            <div class="mySlides">
               <div class="numbertext">10 / 12</div>
               <img src="imagesgallery/10-img_640x480.jpg" style="width:100%">
            </div>

            <div class="mySlides">
               <div class="numbertext">11 / 12</div>
               <img src="imagesgallery/17-img_640x480.jpg" style="width:100%">
            </div>

            <div class="mySlides">
               <div class="numbertext">12 / 12</div>
               <img src="imagesgallery/12-img_640x480.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
               <p id="caption"></p>
            </div>

            <!-- repeat gallery 640x400 -->

            <div class="column">
               <img class="demo cursor" src="imagesgallery/1-img_640x480.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
            </div>
            <div class="column">
               <img class="demo cursor" src="imagesgallery/14-img_640x480.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
            </div>
            <div class="column">
               <img class="demo cursor" src="imagesgallery/13-img_640x480.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
            </div>
            <div class="column">
               <img class="demo cursor" src="imagesgallery/4-img_640x480.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
            </div>
            <div class="column">
               <img class="demo cursor" src="imagesgallery/5-img_640x480.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
            </div>
            <div class="column">
               <img class="demo cursor" src="imagesgallery/6-img_640x480.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
            </div>
            <div class="column">
               <img class="demo cursor" src="imagesgallery/7-img_640x480.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
            </div>
            <div class="column">
               <img class="demo cursor" src="imagesgallery/8-img_640x480.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
            </div>
            <div class="column">
               <img class="demo cursor" src="imagesgallery/16-img_640x480.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
            </div>
            <div class="column">
               <img class="demo cursor" src="imagesgallery/10-img_640x480.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
            </div>
            <div class="column">
               <img class="demo cursor" src="imagesgallery/17-img_640x480.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
            </div>
            <div class="column">
               <img class="demo cursor" src="imagesgallery/12-img_640x480.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
            </div>
         </div>
      </div>
   </section>
<?php
   include('footer.php');
?>
