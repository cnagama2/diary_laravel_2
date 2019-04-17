@extends('layouts.app')
@section('content')

<div class="container_login">
  <div class="row">
    <div class="panel panel-default">
     <div class="panel-heading" >
      <button type="submit" class="btn btn-default">
      <a href="{{ route('new') }}" >
            <i class="glyphicon glyphicon-plus"></i> 新規作成</button></a>
        {{ $listings->links() }}
        
        <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
     </div>
    </div>
      <table class="table">
        <tbody>
            @foreach($listings as $listing)
              <tr>
                <td>{{ $listing->due_date->format('y年n月j日( D )') }}
                </td>
                <td>{{ $listing->title }}</td>
                <td><a href="{{ url('/listingsedit', $listing->id) }}"><i class="fas fa-pen"></i> 編集</a>
            　　</td>
                <td><a onclick="return confirm('{{ $listing->title }}を削除して大丈夫ですか？')" href="{{ url('/listingsdelete', $listing->id) }}"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
          </tbody>
          </table>
          <table class="table">
          <tr><td></td>
          <td>{{ $listings->links() }}</td></tr>
          </table>
    
   </div>
  </div>
  
</div>



@endsection