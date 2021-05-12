

<?php include 'header.php' ?>

<style>
h5{
  padding-top: 7%;
  border-radius: 7px;
  height: 40%;
  background-color:rgba(255,255,255,0.5);
   text-align: center;
   color: #000000;
   font-size:1.5em;
}
.imatge{
  object-fit: cover;
   width: 100%;
   height: 100vh;
}
@media (min-width: 768px) {
  .text {
    font-size: 1.5rem;
  }
}


</style>



<body>





      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <img class="imatge" src="img/im1.jpg" class="d-block w-100"  alt="...">
            <div class="carousel-caption d-none d-md-block d-flex h-50 align-items-center justify-content-center background-size-cover   ">
              <h5 h5 class="text">Tenim ofertes en gràfiques i processador AMD, RÀPID que s'esgoten </h5>
            </div>
          </div>
          <div class="carousel-item">
            <img class="imatge" src="img/im2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block d-flex h-50 align-items-center justify-content-center  ">
              <h5>Segueix-nos a Instagram, Twitter i Facebook per saber mes de nosaltres</h5>


            </div>
          </div>
          <div class="carousel-item">
            <img class="imatge" src="img/im3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block d-flex h-50 align-items-center justify-content-center  ">

              <h5>Si tens algun problema amb algun dispositiu informàtic porta'l a la botiga nosaltres sabrem que fer.</h5>

            </div>

          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </body>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


      </div>
    </div>
  </div>
</body>

<?php include 'footer.php' ?>


















  </body>
</html>
