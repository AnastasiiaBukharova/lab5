@extends('main')

@section('title')
Portraits
@endsection

@section('content')
 <div class = "album py-5 bg-dark-my">
        <div class="container">
        <hr class="featurette-divider text-gray hr-my">
        <h2 class="jumbotron-heading text-light text-center" id = "portraits">Портреты</h2>
        <hr class="featurette-divider text-gray hr-my">
        <div class="row featurette">
         <p class="lead my-text-size text-gray"> Порадуйте себя и близких замечательным подарком - закажите стилизованный портрет! Примерьте на себя любое амплуа: сказочные персонажи, любимые актеры и герои сериалов - все это может стать вашим образом!</p> 
       </div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/Harem_1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block carousel-dark">
    <h5>Великолепный век</h5>
    <p>Почувствуйте себя героями любимого сериала и завоюйте сердца людей</p>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"  src="img/Fantasy.jpg" alt="Second slide">
       <div class="carousel-caption d-none d-md-block carousel-dark">
        <h5>Феи, эльфы и волшебный мир</h5>
        <p>Любите сказки и волшебство? Почувствуйте себя героем своей мечты и окунитесь в удивительный мир фентези</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"  src="img/Bike_portrait.jpg" alt="Third slide">
       <div class="carousel-caption d-none d-md-block carousel-dark">
        <h5>Ветер перемен</h5>
        <p>Что может быть лучше, чем изображение своего любимого дела? А может быть вы давно хотели увидеть себя в стиле какого-то нового увлечения? Не ждите и получите замечательный наглядный пример!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"  src="img/Portrait_Fanning.jpg" alt="Fourth slide">
      <div class="carousel-caption d-none d-md-block carousel-dark">
        <h5>Голливудcкая звезда</h5>
        <p>Порадуйте близких портретом с изображением любимых актеров и персонажей</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

            <p class = "text-center">
              <button type="button" class="btn btn-primary my-2 my-btn btn-primary-my" data-toggle="modal" data-target="#exampleModalLive">Заказать работу</button>
            </p>

</div> </div>
@endsection
