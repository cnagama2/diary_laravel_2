@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="panel panel-default">
     <div class="panel-heading">一覧</div>
      <table class="table">
        <tbody>
            @foreach($listings as $listing)
              <tr>
                <td>{{ $listing->created_at }}</td>
                <td>{{ $listing->title }}</td>
                <td><a onclick="return confirm('{{ $listing->title }}を削除して大丈夫ですか？')" href="{{ url('/listingsdelete', $listing->id) }}"><i class="fas fa-trash"></i></a>
                </td>
                <td><a href="{{ url('/listingsedit', $listing->id) }}"><i class="fas fa-pen"></i>編集</a>
            　　　 </td> 
              </tr>
            @endforeach
        </tbody>
      </table>
    <div class="panel-footer">
      <a href="{{ route('new') }}" class="btn btn-default btn-block">
                日記を追加する
      </a>
    </div>
   </div>
  </div>
</div>

@endsection