@extends('layouts.default')
@section('content')

@if (Auth::check())
<div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared.status_form')
        </section>
        <h3>微博列表</h3>
        @include('shared.feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared.user_info', ['user' => Auth::user()])
        </section>
      </aside>
    </div>
  @else
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
 @endif
@stop
