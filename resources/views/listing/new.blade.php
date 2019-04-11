@extends('layouts.app')
@section('content')
<div style="background-color:#ffffff;">

<div class="container">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">今日の日記</div>
        <div class="panel-body">
          <!-- バリデーションエラーの場合に表示 -->
          @include('common.errors')           
          <form action="{{ url('listings') }}" method="POST" class="form-horizontal" >
              {{csrf_field()}}
              <div class="form-group">
                <textarea rows="40" class="form-control" name="list_name" value="{{ old('title') }}" ></textarea>
              </div>
            <div class="panel-footer">
              <div class="text-center">
                <button type="submit" class="btn btn-default" >
                  <i class="glyphicon glyphicon-plus"></i> 作成</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection