@extends('layouts.app')
@section('content')
 <div class="container">
  <div class="row">
    <ul class="indexbar">
        <li class="index_item"><button type="submit" class="btn btn-default">
      <a href="{{ route('new') }}" ><i class="glyphicon glyphicon-plus"></i> 新規作成</button></a>
        </li>
        <li class="index_item">{{ $listings->links() }}</li>
      </ul>
   <table class="table table-hover return-table-responsive">  
      <tbody>
            @foreach($listings as $listing)
              <tr>
                <th>
                  {{ $listing->due_date->format('y年n月j日( D )') }}
                </th>
                <td>
                  {{ $listing->title }}
                </td>
                <td>
                  <a href="{{ url('/listingsedit', $listing->id) }}"><i class="fas fa-pen"></i> 編集</a>
            　　</td>
                <td>
                  <a onclick="return confirm('{{ $listing->title }}を削除して大丈夫ですか？')"
                        href="{{ url('/listingsdelete', $listing->id) }}"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
      </tbody>
    </table>
    </div>
      <div class="index">{{ $listings->links() }}</div>
 </div>
@endsection
