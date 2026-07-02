<div class="our-right-menu">
  <?php
  $permission = DB::table('permission')->where('user_id', auth()->user()->id)->first();
  ?>
  @php
  use App\Models\Story;
  use App\Models\Notification;
  use Carbon\Carbon;

  // Check if there are any stories created in the last 24 hours that haven't expired
  $recentStories = Story::where('created_at', '>', Carbon::now()->subDay())
  ->where('expires_at', '>', now())
  ->get();
  $hasStories = $recentStories->isNotEmpty();

  // Check if there are any notifications created in the last 24 hours
  $recentNotifications = Notification::where('created_at', '>', Carbon::now()->subDay())->get();
  $hasRecentNotifications = $recentNotifications->isNotEmpty();
  @endphp

  <ul class="batch">

    {{-- DASHBOARD --}}
    
    <li class="normal-link">
      <a class="{{ request()->is('admin/dashboard*') ? 'active' : '' }}"
        href="{{ url('/admin/dashboard') }}">
        <div class="lnk-ttl">
          Dashboard
        </div>
      </a>
    </li>

    {{-- USERS --}}
    @if(isset($permission) && ($permission->is_usersListing == 1))
    <li class="normal-link">
      <a class="{{ request()->is('admin/user-listing*') ? 'active' : '' }}"
        href="{{ url('/admin/user-listing') }}">
        <div class="lnk-ttl">
          Users
        </div>
      </a>
    </li>
    @endif

    {{-- ADMINS --}}
    @if(isset($permission) && ($permission->is_adminUserListing == 1))
    <li class="normal-link">
      <a class="{{ request()->is('admin/admin-listing*') ? 'active' : '' }}"
        href="{{ url('/admin/admin-listing') }}">
        <div class="lnk-ttl">
          Admins
        </div>
      </a>
    </li>
    @endif

    {{-- PACKAGES --}}
    @if(isset($permission) && ($permission->is_packages == 1))
    <li class="normal-link">
      <a class="{{ request()->is('admin/packages*') ? 'active' : '' }}"
        href="{{ url('/admin/packages') }}">
        <div class="lnk-ttl">
          Bundles
        </div>
      </a>
    </li>
    @endif

    {{-- COURSES --}}
    @if(isset($permission) && ($permission->is_course == 1))
    <li class="normal-link">
      <a class="{{ request()->is('admin/all-courses*') ? 'active' : '' }}"
        href="{{ url('/admin/all-courses') }}">
        <div class="lnk-ttl">
          Courses
        </div>
      </a>
    </li>
    @endif

    {{-- PAYOUTS (🔥 FIXED) --}}
    @if(isset($permission) && ($permission->is_payouts == 1))
    <li class="normal-link">
      <a class="{{ request()->is('admin/payouts*') ? 'active' : '' }}"
        href="{{ url('/admin/payouts/1') }}">
        <div class="lnk-ttl">
          Payouts
        </div>
      </a>
    </li>
    @endif

    {{-- LEADERBOARD --}}
    <li class="normal-link">
      <button class="docker-trigger" onclick="openDocker()">
        <div class="lnk-ttl">
          <span class="material-symbols-outlined">apps</span>
        </div>
      </button>
    </li>
  </ul>

  <div class="batch">
    <div class="normal-link rounded {{ $hasStories ? 'noti' : '' }}">
      <a class="{{ request()->is('admin/stories*') ? 'active' : '' }}" href="{{ url('/admin/stories') }}">
        <div class="lnk-ttl">
          <span class="material-symbols-outlined">screen_record</span>
        </div>
      </a>
    </div>

  </div>
  <div class="batch">
    <div class="normal-link rounded {{ $hasRecentNotifications ? 'noti' : '' }}">
      <a class="{{ request()->is('admin/notifications*') ? 'active' : '' }}" href="{{url('/admin/notifications')}}">
        <div class="lnk-ttl">
          <span class="material-symbols-outlined">
            notifications
          </span>
        </div>
      </a>
    </div>

  </div>
  <div class="batch">
    <div class="normal-link rounded wp">
      <a class="{{ request()->is('admin/setting*') ? 'active' : '' }}" href="{{ url('/admin/setting') }}">
        <div class="lnk-ttl">
          <img src="{{url('public/profile_pic/'.auth()->user()->profile_pic)}}" alt="avatar">
        </div>
      </a>
    </div>

  </div>

</div>

