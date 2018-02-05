@extends('admin.layouts.app_admin ')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Catigories 0</span></p>
            </div>
          </div>
      <div class="col-sm-3">
          <div class="jumbotron">
              <p><span class="label label-primary">Материалов 0</span></p>
          </div>
      </div>
          <div class="col-sm-3">
              <div class="jumbotron">
                  <p><span class="label label-primary">Последний 0</span></p>
              </div>
          </div>
              <div class="col-sm-3">
                  <div class="jumbotron">
                      <p><span class="label label-primary">Сегодня 0</span></p>
                  </div>
              </div>
       </div>
        <div class="row">
            <div class="col-lg-6">
                <a class="btn btn-block btn-default" href="#">Создать котегорию</a>
                <a class="list-group-item" href="#">
                    <h4 class="lost-group-item-heading">Категория первая</h4>
                    <p class="list-group-item-text">
                        Кол-во материалов
                    </p>
                </a>
            </div>

             <div class="col-lg-6">
                 <a class="btn btn-block btn-default" href="#">Создать котегорию</a>
               <a class="list-group-item" href="#">
                 <h4 class="lost-group-item-heading">Материал первая</h4>
                 <p class="list-group-item-text">
                  Котегорияв
                </p>
              </a>
          </div>
        </div>
     </div>

@endsection