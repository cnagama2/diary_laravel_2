@extends('layouts.app')
@section('content')
<div style="background-color:#ffffff;">
 
 <div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">編集</div>
        <div class="panel-body">
          <!-- バリデーションエラーの場合に表示 -->
          @include('common.errors')
          <form action="{{ url('/listing/edit')}}" method="POST" class="form-horizontal">
               {{csrf_field()}}
             <div class="form-group">
                <label for="made_date">日時</label>
                <input type="text" class="form-control" name="made_date" id="made_date" value="日時を変更する場合は選択してください"
                 />
             </div>
             <div class="form-group">
               <div class="panel-heading">編集</div>
                 <textarea rows="100" name="list_name" class="form-control">{{ old('list_name', $listing->title) }}</textarea>
               </div>
                 <input type="hidden" name="id" value="{{ old('id', $listing->id) }}">
               </div>
               <div class="panel-footer">
                 <button type="submit" class="btn btn-default">
                   <i class="glyphicon glyphicon-saved"></i> 更新
                 </button>
               </div>
           </div>
         </form>
        </div>
      </div>
      
<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
  <script>
    /* global flatpickr */
      flatpickr(document.getElementById('made_date'), {
         locale:"ja",
         dateFormat: "Y/m/d",
    });
  </script>
@endsection