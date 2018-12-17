@extends('main')

@section('title')
Contacts
@endsection


@section('content')
  <div class = "album py-5 bg-dark-my" id = "contacts">
    <div class="container">
      <hr class="featurette-divider text-gray hr-my">
      <h2 class="jumbotron-heading text-light text-center">Контакты</h2>
      <hr class="featurette-divider text-gray hr-my">
        <div class="row featurette ">
          <div class="col-md-12">
            <p class="lead my-text-size text-gray">Есть вопросы? Свяжитесь со мной по почте, через соц-сети или через контактный телефон. Хотите сделать заказ? Жми на кнопку "Заказать работу"</p> 
            <p class="lead my-text-size text-gray">E-mail: anbukharova@gmail.com
            <br>Телефон: +38068*******
            <br>ВК: https://vk.com/anbukharova</p>
            <p class = "text-center">
              <button type="button" class="btn btn-primary my-2  my-btn btn-primary-my" data-toggle="modal" data-target="#exampleModalLive">Заказать работу</button>
            </p>
          </div>
        </div>
    </div>
  </div>
  
@endsection
