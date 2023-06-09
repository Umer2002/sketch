<div class="sidebar" style="background-color: #000; border:1px solid #fff;">
     
    <div class="sidebar-wrapper">
      <div class="logo">
        <a href="javascript:void(0)" class="simple-text logo-mini">
         DB
        </a>
        <a href="javascript:void(0)" class="simple-text logo-normal">
          {{ Auth::user()->name }}
        </a>
      </div>
      <ul class="nav">
        <li class="active ">
          <a href="{{ route('user.Dashboard') }}">
            <i class="tim-icons icon-chart-pie-36"></i>
            <p>Company</p>
          </a>
        </li>

      </ul>
    </div>
  </div>