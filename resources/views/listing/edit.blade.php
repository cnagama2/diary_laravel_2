@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <ul class="indexbar">
      <li class="index_head">編集
      </li>
    </ul>
      <div class="panel-body">
        <!-- バリデーションエラーの場合に表示 -->
          @include('common.errors')
          <form action="{{ url('/listing/edit')}}" method="POST" class="form-horizontal">
               {{csrf_field()}}
           <div class="form-group">
             <ul class="indexbar_edit">
                 <li class="index_item">
              <button type="submit" class="btn btn-default">
                <i class="glyphicon glyphicon-saved"></i> 更新
              </button></li>
             <li class="index_item">
             <a onclick="return confirm('{{ $listing->title }}を削除して大丈夫ですか？')"
                        href="{{ url('/listingsdelete', $listing->id) }}">
                 <button type="submit" class="btn btn-default">
                <i class="glyphicon glyphicon-trash"></i> 削除</button></a>
             </li>
             </ul>
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
