<?php
   include('header.php');
?>
   <section>
      <div class="wrap">
         <div class="row">
            <h2>Susisiekime</h2>
         </div>
         <div class="row line">
            <P>Turite klausimų, susisiekite su mumis užpildę šią formą. Mes tikimės, kad jums busime naudingi!</P>
         </div>
         <form action="contacts.php" method="post">
            <div class="row">
               <input type="text" name="fname" class="fname" placeholder="Vardas*" required autofocus>
               <input type="text" name="lname" class="lname" placeholder="Pavardė*" required>
            </div>
            <div class="row">
               <input type="email" name="email" class="email" placeholder="El.paštas*" required>
               <input type="tel" name="phone" class="phone" placeholder="Tel. numeris*" required>
            </div>
            <div class="row">
               <input type="text" name="title" class="title" placeholder="Tema*" required>
            </div>
            <div class="row">
               <textarea type="text" name="comments" placeholder="Komentaras*" required></textarea>
            </div>
            <div class="row">
               <input type="submit" name="submit" class="button" value="PATEIKTI">
            </div>
         </form>
      </div>
      <div class="wrap">
         <div class="row">
            <h2>Kontaktai</h2>
         </div>
         <div class="row line">
            <a href="tel:+370.610.18445">+370 610 18445</a><br>
            <a href="mailto:namokarkasas@gmail.com">
               namokarkasas@gmail.com</a>
         </div>
         <div class="row line">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
         </div>
         <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d920.0638591847718!2d25.390699!3d54.702359!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96405eb986c1%3A0x8883d7e98609b93a!2sUosi%C5%B3+g.+41%2C+Vilnius+11127!5e1!3m2!1slt!2slt!4v1565442961466!5m2!1slt!2slt" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>
      </div>
   </section>
<?php
   require __DIR__ . '/../app/inc/request.inc.php';
   include('footer.php');
?>
