@extends('layouts.app')
@section('content')
<div class="panel-body">
 <!-- バリデーションエラーの場合に表示 -->
 @include('common.errors')
 <form action="{{ url('/listing/edit')}}" method="POST" class="form-horizontal">
   {{csrf_field()}}
     <div class="form-group">
       <label for="listing" class="col-sm-3 control-label">日記編集</label>
       <div class="col-md-6">
         <!-- リスト名 -->
         <textarea cols="300" rows="10" name="list_name" value="{{ old('list_name', $listing->title) }}" class="form-control">
         </textarea>
       </div>
       <input type="hidden" name="id" value="{{ old('id', $listing->id) }}">
     </div>
     <div class="form-group">
       <div class="col-sm-offset-3 col-sm-6">
         <button type="submit" class="btn btn-default">
           <i class="glyphicon glyphicon-saved"></i> 更新
         </button>
       </div>
     </div>
   </form>
</div>
@endsection