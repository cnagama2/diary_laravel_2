@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">編集
      </div>
      <div class="panel-body">
        <!-- バリデーションエラーの場合に表示 -->
          @include('common.errors')
          <form action="{{ url('/listing/edit')}}" method="POST" class="form-horizontal">
               {{csrf_field()}}
           <div class="form-group">
             <div class="text-center">
              <button type="submit" class="btn btn-default">
                <i class="glyphicon glyphicon-saved"></i> 更新
              </button>
             </div>
             <label for="due_date">日時変更</label>
                <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date', $listing->due_date) }}"
                 />
           </div>
           <div class="form-group">
              <textarea rows="20" name="list_name" class="form-control">{{ old('list_name', $listing->title) }}</textarea>
             </div>
             <input type="hidden" name="id" value="{{ old('id', $listing->id) }}">
             </div>
           </div>
         </form>
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
