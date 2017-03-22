@extends('layouts.default')
@section('content')
<div class="jumbotron">
  <h1>Hello TETRAD-V0.1</h1>
  <p class="lead">
    本次更新测试功能：
  </p>
  <p>
    1.用户注册邮箱验证激活
  </p>

  <p>
    2.密码找回
  </p>

  <p>
    <a class="btn btn-lg btn-success" href="{{route ('signup')}}" role="button">现在注册</a>
  </p>
</div>
@stop
