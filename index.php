  <!-- IMPORTING HEADER.PHP -->
    <?php
  include_once "./includes/header.php";
  ?>

    <!-- CAROUSEL OF PHOTOS -->
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <ol class="carousel-indicators">
        <li
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
        ></li>
        <li
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
        ></li>
        <li
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
        ></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="./images/pexels-eberhard-grossgasteiger-443446.jpg"
            class="d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            src="./images/pexels-denafi-sy-786220.jpg"
            class="d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            src="./images/pexels-emma-bauso-2253870.jpg"
            class="d-block w-100"
            alt="..."
          />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
    <br />
    <br />
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img
            src="./images/pexels-matt-hardy-2179205.jpg"
            alt=""
            width="505.14px"
            height="378.85px"
          />
        </div>
        <div class="col-sm-6">
        <h1>Meet the Photographer</h1>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia quod
            nihil sequi illo architecto cum fugit porro veritatis at nobis, fugiat
            dicta perspiciatis maiores voluptates ipsa vero repellat? Accusamus,
            fugiat modi, quo repellendus distinctio soluta eligendi quasi aliquam
            amet nobis quisquam minima blanditiis molestiae consectetur quae ab
            ipsam quas, sed atque! Autem quidem suscipit aliquid amet soluta
            placeat alias, illum numquam sed nam molestias quo sunt dolorem, est
            earum labore pariatur. Dolorem rerum minima adipisci, illum placeat
            enim deserunt quos quasi voluptates quidem iusto magni dolores, eaque
            aperiam? Veniam porro quos ullam blanditiis beatae magnam debitis
            consequuntur quas quibusdam enim!
          </p>
        </div>
      </div>
      <br />
      <br />
      <div class="row">
        <div class="col-sm-6">
        <h1>Our mission</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur
            quas quae rerum amet quia saepe, magnam cumque doloribus a incidunt
            autem adipisci, quod reiciendis! Hic labore consectetur architecto
            fugit sit saepe! Deserunt soluta sapiente, distinctio, praesentium
            provident veritatis reprehenderit dolorem atque commodi mollitia
            dolorum, cum autem officia tenetur? Doloribus reiciendis alias soluta
            ab voluptates non accusantium animi, consequuntur dicta possimus,
            nulla incidunt tempore expedita enim ipsum optio minima quae fugit
            impedit a minus doloremque? Soluta animi, quasi atque tenetur quos at
            eius alias temporibus. Ab enim, culpa corrupti animi officiis
            consectetur aliquam sint eligendi obcaecati. Dolorum doloremque
            veritatis eum praesentium?
          </p>
        </div>
        <div class="col-sm-6">
          <img
            src="./images/pexels-daria-shevtsova-1257110.jpg"
            alt=""
            width="576px"
            height="384px"
          />
        </div>
      </div>
    </div>
    <?php
      include_once "./includes/footer.php";
    ?>
  </body>
</html>
