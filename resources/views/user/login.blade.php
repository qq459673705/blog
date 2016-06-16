<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <style media="screen">
      body {
          margin: 0;
          padding: 0;
          width: 100%;
          display: table;
          font-weight: 100;
          font-family: 'Lato';
      }

      .container {
          text-align: center;
          display: table-cell;
          vertical-align: middle;
      }

      .content {
          text-align: center;
          display: inline-block;
      }

      .title {
          font-size: 96px;
          background-color:#67d;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="content">
        <div class="title">
          {{$data['user'] or 'xxxx'}}
        </div>
        <h2>
          {{$data['passwd'] or 'ddd'}}
        </h2>

        <h3>
          {{$title}}
        </h3>
        @if($data['age'] > 40)
          {!! $script; !!}
        @else
          {{$data['age']}}
        @endif
        <br/>
        @unless($data['age'] > 50)
          {{'young'}}
        @endunless

        <br/>

        @for($i = 1;$i < $data['age']; $i++)
          {{$i}}
        @endfor

        <br/>
        @foreach($data['list'] as $key=>$value)
          @if($key!='uid')
            {{$key}}:
            {{$value}}<br/>
          @else
            uid cant show!<br/>
          @endif
        @endforeach

        @forelse($data['news'] as $key=>$value)
            {{$key}}:
            {{$value}}<br/>
          @empty
            没有news
        @endforelse
      </div>
    </div>
  </body>
</html>
