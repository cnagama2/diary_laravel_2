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
      
            @foreach($listings as $listing)
              <tr>
                <th>
                  {{ $listing->due_date->format('y年n月j日( D )') }}
                </th>
              </tr>
      
        <tr>
                <td>
                  <a href="{{ url('/listingsedit', $listing->id) }}">{{ $listing->title }}</a>
            　　</td>
                
              </tr>
            @endforeach
      
    </table>
    </div>
      <div class="index">{{ $listings->links() }}</div>
 </div>
@endsection
