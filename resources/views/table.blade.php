@extends('layout.navbar')

@section('title','table')


@section('content')


<div class="table-responsive">
    <table class="table table-striped table-hover table-info border-light">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Lorem</th>
          <th scope="col">Ipsum</th>
          <th scope="col">Dolor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Sit</td>
          <td>Amet</td>
          <td>Consectetur</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Adipisicing</td>
          <td>Elit</td>
          <td>Sint</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Hic</td>
          <td>Fugiat</td>
          <td>Temporibus</td>
        </tr>
      </tbody>
  
      <caption>
        Captions of the table
      </caption>
  
    </table>
  </div>

@endsection