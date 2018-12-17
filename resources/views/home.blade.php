@extends('main')

@section('title')
HomePage
@endsection

@section('content')
  <div class = "album py-5 bg-light" id = "aboutme">

        <div class="container">
          <hr class="featurette-divider">
        <h2 class="jumbotron-heading text-dark text-center" >О себе</h2>
        <hr class="featurette-divider">
        <div class="row featurette justify-content-around"> <!--Элементы равномерно распределяются по всей строке, пустое пространство между первым и после последнего флекс элемента равно половине между соседними элементами в контейнере:-->
          <div class="col-md-7">
            <p class="my-text-size">Приветствую! Меня зовут Анастасия и я - художница. С ранних лет рисование стало моей жизнью, моим увлечением, а теперь - и моей работой. </p> 
            <p class="my-text-size">Я окончила профессиональную художественную школу, но не диплом красит художника, главное - страсть и постоянный труд. Я рисую так часто, как только могу, ищу новые интересные стили, решения, идеи.
            Рисую я в основном стилизованные работы: портреты, персонажей, фантастических существ. Очень люблю мангу и комиксы и работаю над созданием своего!</p>
            <p class="my-text-size">На этом сайте вы сможете узнать немного обо мне, познакомиться с моими работами и персонажами, окунуться в увлекательный мир фантазии и творчества, а также заказать работу или замечательный портрет в подарок. Интересно? Тогда продолжим знакомство!</p>
            <button class="jsonclass btn btn-outline-secondary my-2 my-sm-0">Немножко цифр</button>
            <div class = "jsoncontent my-text-size"></div>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/Photo_Anastasiia.jpg" alt="Generic placeholder image">
          </div>
        </div>

        </div>
      </div>
@endsection
