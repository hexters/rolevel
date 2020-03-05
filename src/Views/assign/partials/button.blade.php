@if(isset($menu['permissions']) && count($menu['permissions']) > 0)
<a href="#" class="float-right" data-toggle="modal" data-target="#{{ Str::slug($menu['gate']) }}">
  Assign Permission
</a>
@endif

  <div class="modal fade" id="{{ Str::slug($menu['gate']) }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              {{ $menu['display'] }}
            </h5>

            <div>
                {!! in_array($menu['gate'], $permissions) ? '&#10003;' : '&times;' !!}
            </div>
        </div>
        <div class="modal-body">
          
          @if(isset($menu['permissions']))
            <ul>
              @forelse($menu['permissions'] as $item)
                <li>

                  @if(in_array($menu['gate'], $permissions))
                    <div class="float-right">
                      <input type="checkbox" id="permission-{{ Str::slug($item['gate']) }}" name="gates[]" {{ in_array($item['gate'], $permissions) ? 'checked' : '' }} value="{{ $item['gate'] }}">
                    </div>
                  @endif

                  <label style="cursor:pointer;" for="permission-{{ Str::slug($item['gate']) }}">
                    <div>
                      <strong>{{ $item['name'] }}</strong>
                    </div>
                  </label>
                  <p class="text-muted">
                    {{ $item['description'] }}
                    @if(config('rolevel.show_gate'))
                    <div class="bg-dark text-light p-2">
                        <small>{{ $item['gate'] }}</small>
                    </div>
                    @endif
                  </p>
                </li>
              @empty
              No have permissions
              @endforelse
            </ul>
          @else
            No have permissions
          @endif

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>