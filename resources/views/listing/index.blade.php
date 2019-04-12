@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="panel panel-default">
     <div class="panel-heading" >
      <button type="submit" class="btn btn-default">
      <a href="{{ route('new') }}" >
            <i class="glyphicon glyphicon-plus"></i> 新規作成</button>
      </a>
     </div>
    </div>
      <table class="table">
        <tbody>
            @foreach($listings as $listing)
              <tr>
                <td>{{ $listing->due_date }}</td>
                <td>{{ $listing->title }}</td>
                <td><a href="{{ url('/listingsedit', $listing->id) }}"><i class="fas fa-pen"></i> 編集</a>
            　　</td>
                <td><a onclick="return confirm('{{ $listing->title }}を削除して大丈夫ですか？')" href="{{ url('/listingsdelete', $listing->id) }}"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
    
   </div>
  </div>
</div>

@endsection