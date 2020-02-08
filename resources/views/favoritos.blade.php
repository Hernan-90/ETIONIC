@extends('layouts.app')

@section('content')
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
          <tbody>
          @foreach ($TweetFavorito as $value)
            {{-- <th scope="row">1</th> --}}
            <td>{{$value->user}}</td>
            <td>{{$value->tweet}}</td>
            <td>{{$value->followers}}</td>
            <td>{{$value->likes}}</td>
            <td>
              <form class="" action="/borrarFavorito" method="post">
                @csrf
                <input type="hidden" name="" value="{{$value->id}}">
                <button type="submit" name="button">
                  <a href="#">
                    <i class="far fa-heart"></i>
                  </a>  
                </button>
              </form>
            </td>
          @endforeach
        </tbody>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
