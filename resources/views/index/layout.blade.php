@extends('layouts.home')
<!-- 用section 中的内容 替换 layouts.home 中对应 section () 中的key 标示的内容  -->
@section('content')
  @parent
  <div class="content">
    <p class="line_2">
      index内容
    </p>
  </div>
@endsection
