<script src="../scripts/text_carousel.js"></script>
<link rel="stylesheet" href="../assets/styles/components/text_carousel.css" />

<div class="carousel__container">

    <!-- Full-width slides/quotes -->
    <div class="carousel__item">
        <p>C-Heart</p>
        <br>
        <p>Pour le bien être de l'enfance</p>
    </div>
    <div class="carousel__item">
        <p>Notre rôle est d'informer le professeur et les parents sur la santé et le bien être des enfants dans
            le cadre scolaire.</p>
    </div>
    <div class="carousel__item">
        <p>Pour cela, on vous donne accès à la température et la fréquence cardiaque de l'enfant mais aussi à
            des informations générales sur la salle comme la température ou le taux de Co2 dans celle-ci.</p>
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
