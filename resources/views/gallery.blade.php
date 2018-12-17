@extends('main')

@section('title')
 Gallery
@endsection


@section('content')
<div class="album py-5 bg-light">
        <div class="container">
          <hr class="featurette-divider">
        <h2 class="jumbotron-heading text-dark text-center" id = "gallery">Галерея</h2>
        <hr class="featurette-divider">
          <div class="row align-items-start"> <!--Вертикальное выравнивание по началу-->
            <div class="col-md-6">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/Games.jpg" alt="Anime-girl">
                <div class="card-body">
                  <strong>Games</strong>
                  <p class="card-text">Герои и персонажи для компьютерных игр и приложений</p>
                  <div class="d-flex justify-content-between align-items-center"> <!-- Элементы равномерно распределяются по всей строке, при этом первый флекс элемент позиционируются в начале контейнера, а последний флекс элемент позиционируется в конце контейнера + Вертикальное выравнивание по середине-->
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Просмотр</button>
                    </div>
                    <small class="text-muted">11.10.2018</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/Concept-art.jpg" alt="Anime-girl">
                <div class="card-body">
                  <strong>Concept-art</strong>
                  <p class="card-text">Концепт-арт персонажей для игр, комиксов и мультфильмов</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Просмотр</button>
                    </div>
                    <small class="text-muted">11.10.2018</small>
                  </div>
                </div>
              </div>
            </div>
            </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/Comics.jpg" alt="Anime-girl">
                <div class="card-body">
                  <strong>Comics</strong>
                  <p class="card-text">Комиксы и графические истории</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Просмотр</button>
                    </div>
                    <small class="text-muted">11.10.2018</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/Illustration-2.jpg" alt="Anime-girl">
                <div class="card-body">
                  <strong>Illustration</strong>
                  <p class="card-text">Иллюстрации и обложки к книгам и детским сказкам</p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Просмотр</button>
                    </div>
                    <small class="text-muted">11.10.2018</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/Logo-2.jpg" alt="Anime-girl">
                <div class="card-body">
                  <strong>Logo&Tatoo</strong>
                  <p class="card-text">Создание логотипов и эмблем, разработка эскизов тату</p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Просмотр</button>
                    </div>
                    <small class="text-muted">11.10.2018</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/Fan-art-2.jpg" alt="Anime-girl">
                <div class="card-body">
                  <strong>Fan-art</strong>
                  <p class="card-text">Фан-арты по известным произведениям, а также создание собственных ОС</p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Просмотр</button>
                    </div>
                    <small class="text-muted">11.10.2018</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
