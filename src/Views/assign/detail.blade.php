@extends(config('rolevel.template.extends'))

@section(config('rolevel.template.content'))

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-lg-6">
      {{ rolevel() }}
    </div>
  </div>
</div>

@endsection