<script src="../scripts/text_carousel.js"></script>
<link rel="stylesheet" href="../assets/styles/components/text_carousel.css" />

<div class="carousel__container">

    <!-- Full-width slides/quotes -->
    <div class="carousel__item">
        <p>C-Heart</p>
        <br>
        <p>Pour une enfance sereine</p>
    </div>
    <div class="carousel__item">
        <p>Notre rôle est d'informer le professeur et les parents sur la santé et le bien-être des enfants.</p>
    </div>
    <div class="carousel__item">
        <p>Pour cela, on vous donne accès à une technologie qui capte les conditions de vie dans leurs établissements scolaires</p>
    </div>

    <!-- Next/prev buttons -->
    <a class="carousel__prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="carousel__next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Dots/bullets/indicators -->
<div class="carousel__dot__container">
    <span class="carousel__dot__item" onclick="currentSlide(1)"></span>
    <span class="carousel__dot__item" onclick="currentSlide(2)"></span>
    <span class="carousel__dot__item" onclick="currentSlide(3)"></span>
</div>
