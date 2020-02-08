@extends('layouts.app')

@section('content')
  <div class="">
    <form class="" action="/twitter" method="post">
      <label for="">Que hashtag quiere buscar?</label>
      <input type="text" name="" value="" placeholder="#hashtag">
      <button type="submit" name="button">Buscar</button>
    </form>
  </div>
  <div class="tweets">
    <table class="table table-striped">
      <tbody>
        <tr>
          <thead>
            <tr>
              {{-- <th scope="col">#</th> --}}
              <th scope="col">User</th>
              <th scope="col">Tweet</th>
              <th scope="col">Followers</th>
              <th scope="col">Likes</th>
              <th scope="col">Favorite</th>
            </tr>
          </thead>
          {{-- <th scope="row">1</th> --}}
          {{-- @foreach ($iterable as $key => $value)

          @endforeach --}}
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <form class="" action="/guardarFavorito" method="post">
              @csrf
              <input type="hidden" name="" value="">
              <button type="submit" name="button">
                <a href="#">
                  <i class="far fa-heart"></i>
                </a>
              </button>
            </form>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
