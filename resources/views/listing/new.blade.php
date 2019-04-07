@extends('layouts.app')
@section('content')
<div style="background-color:#ffffff;">

<div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">新規作成</div>
        <div class="panel-body">
<!-- バリデーションエラーの場合に表示 -->
　　　　　@include('common.errors')           
          <form action="{{ url('listings') }}" method="POST" class="form-horizontal" >
              {{csrf_field()}}
            <div class="form-group">
                <label for="due_date">日時</label>
                <input type="text" class="form-control" name="due_date" id="due_date" value="日時を選択してください"
                 />
              </div>
              <div class="form-group">
                <label for="listing">本文</label>
                <textarea row="100" class="form-control" name="list_name" value="{{ old('title') }}" ></textarea>
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">送信</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
<script>
flatpickr(documemt.getElementById("#due_date"), {
 locale:"ja",
 dateFormat: "Y/m/d",
});
</script>
@endsection