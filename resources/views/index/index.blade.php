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
    @include('common.header', ['page'=>'首页'])
    <div class="content">
      <p class="line_2">
        index内容
      </p>
    </div>
    @include('common.footer')
  </body>
</html>
