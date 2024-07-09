<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      @php
        $PermissionUsers = App\Models\RoleHasPermissionModel::getPermission('Users', Auth::user()->role_id);
        $PermissionRoles = App\Models\RoleHasPermissionModel::getPermission('Roles', Auth::user()->role_id);
        $PermissionSurat = App\Models\RoleHasPermissionModel::getPermission('Surat', Auth::user()->role_id);
        $PermissionSettings = App\Models\RoleHasPermissionModel::getPermission('Settings', Auth::user()->role_id);
        $PermissionSuratEksternal = App\Models\RoleHasPermissionModel::getPermission('Surat Eksternal', Auth::user()->role_id);
        $PermissionDisposisiSurat = App\Models\RoleHasPermissionModel::getPermission('Disposisi', Auth::user()->role_id);
        $PermissionValidasiOperator = App\Models\RoleHasPermissionModel::getPermission('Validasi Operator', Auth::user()->role_id);
        $PermissionValidasiSekdes = App\Models\RoleHasPermissionModel::getPermission('Validasi Sekdes', Auth::user()->role_id);
        $PermissionValidasiKades = App\Models\RoleHasPermissionModel::getPermission('Validasi Kades', Auth::user()->role_id);
        $PermissionPelaporan = App\Models\RoleHasPermissionModel::getPermission('Pelaporan Statistik', Auth::user()->role_id);
      @endphp

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'dashboard') collapsed @endif" href="{{ url('panel/dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      @if(!empty($PermissionUsers))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'users') collapsed @endif" href="{{ url('panel/users') }}">
          <i class="bi bi-person"></i>
          <span>Users</span>
        </a>
      </li>
      @endif
      
      @if(!empty($PermissionRoles))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'roles') collapsed @endif" href="{{ url('panel/roles') }}">
          <i class="bi bi-person"></i>
          <span>Roles</span>
        </a>
      </li>
      @endif
      
      @if(!empty($PermissionSurat))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'surat') collapsed @endif" href="{{ url('panel/surat') }}">
          <i class="bi bi-envelope"></i>
          <span>Surat</span>
        </a>
      </li>
      @endif

      @if(!empty($PermissionPelaporan))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'pelaporan') collapsed @endif" href="{{ url('panel/pelaporan') }}">
          <i class="bi bi-envelope"></i>
          <span>Pelaporan Statistik</span>
        </a>
      </li>
      @endif

 
      @if(!empty($PermissionValidasiOperator))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'suratValidasiOperator') collapsed @endif" href="{{ url('panel/suratAll') }}">
          <i class="bi bi-check"></i>
          <span>Surat Validasi Operator</span>
        </a>
      </li>
      @endif

      
      @if(!empty($PermissionValidasiOperator))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'historySurat') collapsed @endif" href="{{ url('panel/history-surat/') }}">
          <i class="bi bi-clock-history"></i>
          <span>Hisory Surat</span>
        </a>
      </li>
      @endif

      @if(!empty($PermissionValidasiSekdes))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'validasiSekdes') collapsed @endif" href="{{ url('panel/validasi-sekdes') }}">
          <i class="bi bi-check"></i>
          <span>Validasi Sekdes</span>
        </a>
      </li>
      @endif
      
      @if(!empty($PermissionValidasiKades))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'validasiKades') collapsed @endif" href="{{ url('panel/validasi-kades') }}">
          <i class="bi bi-check"></i>
          <span>Validasi Kades</span>
        </a>
      </li>
      @endif

      @if(!empty($PermissionSuratEksternal))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'suratEksternal') collapsed @endif" href="{{ url('panel/suratEksternal') }}">
          <i class="bi bi-envelope"></i>
          <span>Surat Eksternal</span>
        </a>
      </li>
      @endif

      @if(!empty($PermissionDisposisiSurat))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'disposisiSurat') collapsed @endif" href="{{ url('panel/disposisiSurat') }}">
          <i class="bi bi-envelope"></i>
          <span>Disposisi Surat</span>
        </a>
      </li>
      @endif

      @if(!empty($PermissionSettings))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'settings') collapsed @endif" href="{{ url('panel/settings') }}">
          <i class="bi bi-gear"></i>
          <span>Settings</span>
        </a>
      </li>
      @endif
    </ul>

  </aside>