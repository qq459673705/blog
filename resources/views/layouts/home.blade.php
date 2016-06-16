<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>index</title>
    <style media="screen">
      .header {
        background-color: #3da;
        height: 50px;
        text-align: center;
      }

      .content{
        background-color: #a1c;
        height: 400px;
        text-align: center;
      }

      .footer{
        background-color: #5f1;
        height: 40px;
        text-align: center;
      }

      .line_1{
        line-height: 50px;
        font-family: 'Lato';
      }

      .line_2{
        line-height: 400px;
        font-family: 'Lato';
      }

      .line_3{
        line-height: 40px;
        font-family: 'Lato';
      }


    </style>
  </head>
  <body>
    <!-- <div class="header">
      <p class="line_1">
        顶部栏
      </p>
    </div> -->
    @include('common.header')
    <!-- @yield('content') -->

    @section('content')
        <p class="line_3 footer"> 模板内容 </p>
      @show
    <div class="footer">
      <p class="line_3">
        引脚
      </p>
    </div>
  </body>
</html>
