<div>
    <a class="nav-link {{ (Request::is($link) ? 'active' : '') }}" wire:click="afterClick">
        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          
        </div>
        <span class="nav-link-text ms-1">{{$label}}</span>
      </a>
</div>
