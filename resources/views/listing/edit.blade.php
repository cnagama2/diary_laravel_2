@extends('layouts.app')
@section('content')
<div style="background-color:#ffffff;">
<div class="panel-body">
 <!-- バリデーションエラーの場合に表示 -->
 @include('common.errors')
 <form action="{{ url('/listing/edit')}}" method="POST" class="form-horizontal">
   {{csrf_field()}}
     <div class="form-group">
      <div class="row">
      <div class="panel">
      <div class="panel-heading">編集</div>
       <textarea rows="10" name="list_name" class="form-control">
         {{ old('list_name', $listing->title) }}</textarea>
       </div>
       <input type="hidden" name="id" value="{{ old('id', $listing->id) }}">
     </div>
     <div class="form-group">
       <div class="col-sm-offset-3 col-sm-6">
         <button type="submit" class="btn btn-default">
           <i class="glyphicon glyphicon-saved"></i> 更新
         </button>
       </div>
     </div></div>
   </form>
</div>
</div>
@endsection