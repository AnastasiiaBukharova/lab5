<header>
      <div class="navbar navbar-dark bg-dark-my box-shadow">

        <div class="container d-flex justify-content-between">
         <form class="form-inline">
                <select class="form-control mr-sm-2 select_color">
                <option id="color_grey">Серый</option>
                <option id="color_violet">Цветной</option>
              </select>
             <button class="btn btn-outline-secondary my-2 my-sm-0 change">Установить</button>
        </form>

          <nav class="navbar navbar-expand-lg">
  
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      @if($page=="home")
      <li class="nav-item active">
        @else
          <li class="nav-item">
      @endif

        <a class="nav-link" href="home">Главная <span class="sr-only">(current)</span></a>
      </li>
      @if($page=="portraits")
      <li class="nav-item active">
        @else
          <li class="nav-item">
      @endif
        <a class="nav-link" href="portraits">Портреты</a>
      </li>
      @if($page=="gallery")
      <li class="nav-item active">
        @else
          <li class="nav-item">
      @endif
        <a class="nav-link" href="/gallery">Галерея</a>
      </li>
      @if($page=="contacts")
      <li class="nav-item active">
        @else
          <li class="nav-item">
      @endif
        <a class="nav-link" href="/contacts">Контакты</a>
      </li>
    </ul>
  </div>
</nav>
        </div>
      </div>
    </header>