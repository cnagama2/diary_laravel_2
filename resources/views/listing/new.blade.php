@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">今日は
      <?php 
      $dt = new DateTime('now');
      echo $dt -> format('n月j日( D )'); 
      ?>
      です。</div>
    </div>
        <div class="panel-body">
          <!-- バリデーションエラーの場合に表示 -->
          @include('common.errors')
          <form action="{{ url('listings') }}" method="POST" class="form-horizontal" >
              {{csrf_field()}}
              <div class="form-group">
               <div class="text-center">
                <button type="submit" class="btn btn-default" >
                  <i class="glyphicon glyphicon-plus"></i> 作成</button>
              </div>
                <label for="due_date">日時変更</label>
                <input type="text" class="form-control" name="due_date" id="due_date" value="<?php echo date('Y-m-j');?>"
                 />
             </div>
              <div class="form-group">
                <textarea rows="20" class="form-control" name="list_name" value="{{ old('title') }}" ></textarea>
              </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
  <script>
    /* global flatpickr */
      flatpickr(document.getElementById('due_date'), {
         locale:"ja",
         dateFormat: "Y-m-d",
    });
  </script>
@endsection
