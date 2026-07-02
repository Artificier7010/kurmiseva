<!-- <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
  <div class="brand-sidebar">
    <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="{{url('/')}}" style="padding: 0px; margin: -24px 0px 0px 0px"><img style="height: 100px !important" class="hide-on-med-and-down" src="{{url('public/Final Logo.png/')}}" alt="materialize logo" /><img class="show-on-medium-and-down hide-on-med-and-up" src="{{url('public/admin/')}}/app-assets/images/logo/materialize-logo.png" alt="materialize logo" /></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
  </div>
  <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
    <?php
    $permission = DB::table('permission')->where('user_id', auth()->user()->id)->first();
    ?>
    @if(isset($permission) && ($permission->is_dashboard == 1))
    <li class="bold">
      <a class="{{(url()->current() == url('/admin/dashboard')) ? 'active' : '' }}" href="{{url('/admin/dashboard')}}"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span>
      </a>
    </li>
    @endif


    @if(isset($permission) && ($permission->is_profile == 1))
    <li class="bold"><a class="{{(url()->current() == url('/admin/profile')) ? 'active' : '' }}" href="{{url('/admin/profile')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Profile</span></a>
    </li>
    @endif

    @if(isset($permission) && ($permission->is_usersListing == 1))
    <li class="bold">
      <a class="{{(url()->current() == url('/admin/user-listing')) ? 'active' : '' }}" href="{{url('/admin/user-listing')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Users</span></a>
    </li>
    @endif

    @if(isset($permission) && ($permission->is_adminUserListing == 1))

    <li class="bold">
      <a class="{{(url()->current() == url('/admin/admin-listing')) ? 'active' : '' }}" href="{{url('/admin/admin-listing')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Admin Users</span></a>
    </li>
    @endif

    @if(isset($permission) && ($permission->is_packages == 1))
    <li class="bold">
      <a class="{{(url()->current() == url('/admin/packages')) ? 'active' : '' }}" href="{{url('/admin/packages')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Packages</span></a>
    </li>
    @endif

    @if(isset($permission) && ($permission->is_course == 1))
    <li class="bold">
      <a class="{{(url()->current() == url('/admin/all-courses')) ? 'active' : '' }}" href="{{url('/admin/all-courses')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Courses</span></a>
    </li>
    @endif

    @if(isset($permission) && ($permission->is_traffic == 1))
    <li class="bold open"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)" tabindex="0"><i class="material-icons dp48">settings_applications</i><span class="menu-title" data-i18n="Invoice">Traffic </span></a>
      <div class="collapsible-body" style="">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">

          <li class="bold">
            <a class="{{(url()->current() == url('/admin/affiliate-traffic')) ? 'active' : '' }}" href="{{url('/admin/affiliate-traffic')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Paid</span></a>
          </li>

          <li class="bold">
            <a class="{{(url()->current() == url('/admin/unpaid-traffic')) ? 'active' : '' }}" href="{{url('/admin/unpaid-traffic')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">UnPaid</span></a>
          </li>

        </ul>
      </div>
    </li>
    @endif

    @if(isset($permission) && ($permission->is_search == 1))
    <li class="bold">
      <a class="{{(url()->current() == url('/admin/search-order')) ? 'active' : '' }}" href="{{url('/admin/search-order')}}"><i class="material-icons">search</i><span class="menu-title" data-i18n="Chat">Search</span></a>
    </li>
    @endif

    <li class="bold">
      <a class="{{(url()->current() == url('/admin/payouts/1')) ? 'active' : '' }}" href="{{url('/admin/payouts/1')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Payout</span></a>
    </li>

    @if(isset($permission) && ($permission->is_leaderboard == 1))
    <li class="bold">
      <a class="{{(url()->current() == url('/admin/leaderboards')) ? 'active' : '' }}" href="{{url('/admin/leaderboards')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Leaderboard</span></a>
    </li>
    @endif

    @if(isset($permission) && ($permission->is_offers == 1))
    <li class="bold">
      <a class="{{(url()->current() == url('/admin/all-offers')) ? 'active' : '' }}" href="{{url('/admin/all-offers')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Offers</span></a>
    </li>
    @endif

    @if(isset($permission) && ($permission->is_setting == 1))
    <li class="bold open"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)" tabindex="0"><i class="material-icons dp48">settings_applications</i><span class="menu-title" data-i18n="Invoice">Setting </span></a>
      <div class="collapsible-body" style="">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">

          <li class="bold">
            <a href="{{url('/admin/packages-price')}}" class="{{(url()->current() == url('/admin/packages-price')) ? 'active' : '' }}">
              <i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Package Price</span>
            </a>
          </li>

          <li class="bold">
            <a href="{{url('/admin/upgrade-price')}}" class="{{(url()->current() == url('/admin/upgrade-price')) ? 'active' : '' }}">
              <i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Upgrade Price</span>
            </a>
          </li>

          <li class="bold">
            <a href="{{url('/admin/payment-setting')}}" class="{{(url()->current() == url('/admin/payment-setting')) ? 'active' : '' }}">
              <i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Payment</span>
            </a>
          </li>

        </ul>
      </div>
    </li>
    @endif

    @if(isset($permission) && ($permission->is_social_media == 1))
    <li class="bold">
      <a class="{{(url()->current() == url('/admin/setting')) ? 'active' : '' }}" href="{{url('/admin/setting')}}"><i class="material-icons dp48">settings_applications</i><span class="menu-title" data-i18n="Chat">Setting</span></a>
    </li>
    @endif

    @if(isset($permission) && ($permission->is_training == 1))
    <li class="bold open"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)" tabindex="0"><i class="material-icons">receipt</i><span class="menu-title" data-i18n="Invoice">Training Section </span></a>
      <div class="collapsible-body" style="">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
          <li class="bold">
            <a href="{{url('/admin/training-listing')}}" class="{{(url()->current() == url('/admin/training-listing')) ? 'active' : '' }}">
              <i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Training</span>
            </a>
          </li>

          <li class="bold">
            <a href="{{url('/admin/webinar-listing')}}" class="{{(url()->current() == url('/admin/webinar-listing')) ? 'active' : '' }}">
              <i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Webinar</span>
            </a>
          </li>

          <li class="bold">
            <a href="{{url('/admin/session-listing')}}" class="{{(url()->current() == url('/admin/session-listing')) ? 'active' : '' }}">
              <i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Q & A SESSIONS</span>
            </a>
          </li>

          <li class="bold">
            <a class="{{(url()->current() == url('/admin/all-marketing-material')) ? 'active' : '' }}" href="{{url('/admin/all-marketing-material')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="Chat">Marketing Material</span></a>
          </li>

        </ul>
      </div>
    </li>
    @endif

    @if(isset($permission) && ($permission->is_emailTemplate == 1))
    <li class="bold open"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)" tabindex="0"><i class="material-icons">email</i><span class="menu-title" data-i18n="Invoice">Email Template </span></a>
      <div class="collapsible-body" style="">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
          <li class="bold">
            <a href="{{url('/admin/email-template-list')}}" class="{{(url()->current() == url('/admin/email-template-list')) ? 'active' : '' }}">
              <i class="material-icons">email</i><span class="menu-title" data-i18n="Chat">Templates</span>
            </a>
          </li>

          <li class="bold">
            <a href="{{url('/admin/email-template')}}" class="{{(url()->current() == url('/admin/email-template')) ? 'active' : '' }}">
              <i class="material-icons">email</i><span class="menu-title" data-i18n="Chat">Add Template</span>
            </a>
          </li>

          <li class="bold">
            <a href="{{url('/admin/send-email-users')}}" class="{{(url()->current() == url('/admin/send-email-users')) ? 'active' : '' }}">
              <i class="material-icons">email</i><span class="menu-title" data-i18n="Chat">Send Email</span>
            </a>
          </li>
        </ul>
      </div>
    </li>
    @endif
  </ul>
  <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside> -->





<div class="our-custom-sidebar">
  <div class="our-sidebar-wrap">
    <button title="Collapse Sidebar" id="cllps-side-btn" class="collapse-sidebar-btn">
      <span class="material-symbols-outlined">
        more_vert
      </span>
    </button>
    <div class="logo">
      <a href="#" class="no-loader">GA DASH</a>
    </div>
    <div class="side-mid-cont">
      <ul class="our-side-menu" id="or-sd-menu">
        <!-- <li class="logo-cum-btn">
          <div class="logo-collpse"><a href="#"><img width="100" src="{{url('public/admin/')}}/app-assets/images/logo/Logo2.png" alt="logo"></a><button title="Collapse Sidebar" id="cllps-side-btn" class="collapse-sidebar-btn">
              <div class="line">|</div>
            </button></div>
        </li> -->
        <?php
        $permission = DB::table('permission')->where('user_id', auth()->user()->id)->first();
        ?>

        @if(isset($permission) && ($permission->is_dashboard == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/dashboard')) ? 'active' : '' }}" href="{{url('/admin/dashboard')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">dashboard</span>
              Dashboard
            </div>
          </a>
        </li>
        @endif
        @if(isset($permission) && ($permission->is_regrecords == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/regrecords')) ? 'active' : '' }}" href="{{url('/admin/regrecords')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">monitoring</span>
              User Analytics
            </div>
          </a>
        </li>
        @endif
        @if(isset($permission) && ($permission->is_userearnings == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/user-earnings-report')) ? 'active' : '' }}" href="{{url('/admin/user-earnings-report')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">lab_profile</span>
              Earnings Report
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_usersListing == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/user-listing')) ? 'active' : '' }}" href="{{url('/admin/user-listing')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">group</span>
              Users
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_adminUserListing == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/admin-listing')) ? 'active' : '' }}" href="{{url('/admin/admin-listing')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">shield_person</span>
              Admins
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_packages == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/packages')) ? 'active' : '' }}" href="{{url('/admin/packages')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">package_2</span>
              Bundles
            </div>
          </a>
        </li>
        @endif
        @if(isset($permission) && ($permission->is_new_updates == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/new_updates')) ? 'active' : '' }}" href="{{url('/admin/new_updates')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">overview</span>
              New Updates
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_course == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/all-courses')) ? 'active' : '' }}" href="{{url('/admin/all-courses')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">library_books</span>
              Courses
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_coupon_offers == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/coupons')) ? 'active' : '' }}" href="{{url('/admin/coupons')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">confirmation_number</span>
              Coupons Offer
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_targets == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/targets')) ? 'active' : '' }}" href="{{url('/admin/targets')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">target</span>
              Targets
            </div>
          </a>
        </li>
        @endif
        @if(isset($permission) && ($permission->is_certificate == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/tests')) ? 'active' : '' }}" href="{{url('/admin/tests')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">auto_stories</span>
              Tests
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_commission_structures == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/commission_structures')) ? 'active' : '' }}" href="{{url('/admin/commission_structures')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">account_tree</span>
              Commission Structures
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_skills_development == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/skills_development*') ? 'active' : '' }}" href="{{url('/admin/skills_development')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">network_intelligence_history</span>
              Skills Development
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_opportunities == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/opportunities*') ? 'active' : '' }}" href="{{url('/admin/opportunities')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">work_history</span>
              Oppurtunities
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_search == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/order-search')) ? 'active' : '' }}" href="{{url('/admin/order-search')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">search</span>
              Search
            </div>
          </a>
        </li>
        @endif
        @if(isset($permission) && ($permission->is_bank_req == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/bank-request')) ? 'active' : '' }}" href="{{url('/admin/bank-request')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">assured_workload</span>
              Bank Request
            </div>
          </a>
        </li>
        @endif
        @if(isset($permission) && ($permission->is_payouts == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/payouts/1')) ? 'active' : '' }}" href="{{url('/admin/payouts/1')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">account_balance_wallet</span>
              Payouts
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_leaderboard == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/leaderboards')) ? 'active' : '' }}" href="{{url('/admin/leaderboards')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">leaderboard</span>
              Leaderboards
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_offers == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/all-offers')) ? 'active' : '' }}" href="{{url('/admin/all-offers')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">local_activity</span>
              Offers
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_social_media == 1))
        <li class="normal-link">
          <a class="{{(url()->current() == url('/admin/setting')) ? 'active' : '' }}" href="{{url('/admin/setting')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">settings</span>
              Settings
            </div>
          </a>
        </li>
        @endif



        @if(isset($permission) && ($permission->is_setting == 1))

        @php
        $openPackagePaths = [
        'admin/packages-price',
        'admin/upgrade-price',
        'admin/payment-setting',
        ];

        $isPackagedropOpen = false;

        foreach ($openPackagePaths as $path) {
        if (Request::is($path)) {
        $isPackagedropOpen = true;
        break;
        }
        }
        @endphp
        <li class="drop-dwn-link {{ $isPackagedropOpen ? 'dropped' : '' }}">
          <a href="JavaScript:void(0)" class="no-loader">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">inventory</span>
              Package Edits
            </div>
            <div class="arrow">
              <span class="material-symbols-outlined">
                keyboard_arrow_right
              </span>
            </div>
          </a>
          <div class="drop-menu">
            <div class="drop-menu-item">
              <a href="{{url('/admin/packages-price')}}" class="{{(url()->current() == url('/admin/packages-price')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">price_change</span>
                  Package Price
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a href="{{url('/admin/upgrade-price')}}" class="{{(url()->current() == url('/admin/upgrade-price')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">price_change</span>
                  Upgrade Price
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a href="{{url('/admin/payment-setting')}}" class="{{(url()->current() == url('/admin/payment-setting')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">payments</span>
                  Payment Settings
                </div>
              </a>
            </div>
          </div>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_traffic == 1))

        @php
        $openTrafficPaths = [
        'admin/affiliate-traffic',
        'admin/unpaid-traffic',
        ];

        $isTrafficdropOpen = false;

        foreach ($openTrafficPaths as $path) {
        if (Request::is($path)) {
        $isTrafficdropOpen = true;
        break;
        }
        }
        @endphp
        <li class="drop-dwn-link {{ $isTrafficdropOpen ? 'dropped' : '' }}">
          <a href="JavaScript:void(0)" class="no-loader">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">web_traffic</span>
              Traffic
            </div>
            <div class="arrow">
              <span class="material-symbols-outlined">
                keyboard_arrow_right
              </span>
            </div>
          </a>
          <div class="drop-menu">
            <div class="drop-menu-item">
              <a class="{{(url()->current() == url('/admin/affiliate-traffic')) ? 'active' : '' }}" href="{{url('/admin/affiliate-traffic')}}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">check_circle</span>
                  Paid
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a class="{{(url()->current() == url('/admin/unpaid-traffic')) ? 'active' : '' }}" href="{{url('/admin/unpaid-traffic')}}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">cancel</span>
                  Un Paid
                </div>
              </a>
            </div>
          </div>
        </li>
        @endif



        @if(isset($permission) && ($permission->is_training == 1))

        @php
        $openTrainingsPaths = [
        'admin/training-listing',
        'admin/webinar-listing',
        'admin/session-listing',
        'admin/all-marketing-material',
        ];

        $isTrainingdropOpen = false;

        foreach ($openTrainingsPaths as $path) {
        if (Request::is($path)) {
        $isTrainingdropOpen = true;
        break;
        }
        }
        @endphp
        <li class="drop-dwn-link {{ $isTrainingdropOpen ? 'dropped' : '' }}">
          <a href="JavaScript:void(0)" class="no-loader">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">stacks</span>
              Trainings Section
            </div>
            <div class="arrow">
              <span class="material-symbols-outlined">
                keyboard_arrow_right
              </span>
            </div>
          </a>
          <div class="drop-menu">
            <div class="drop-menu-item">
              <a href="{{url('/admin/training-category')}}" class="{{(url()->current() == url('/admin/training-category')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">browse_activity</span>
                  Trainings
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a href="{{url('/admin/webinar-listing')}}" class="{{(url()->current() == url('/admin/webinar-listing')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">live_tv</span>
                  Webinars
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a href="{{url('/admin/session-listing')}}" class="{{(url()->current() == url('/admin/session-listing')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">help_center</span>
                  QNA Sessions
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a class="{{(url()->current() == url('/admin/all-marketing-material')) ? 'active' : '' }}" href="{{url('/admin/all-marketing-material')}}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">category</span>
                  Marketing Materials
                </div>
              </a>
            </div>
          </div>
        </li>
        @endif



        @if(isset($permission) && ($permission->is_emailTemplate == 1))

        @php
        $openEmailPaths = [
        'admin/email-template-list',
        'admin/email-template',
        'admin/send-email-users',
        ];

        $isEmaildropOpen = false;

        foreach ($openEmailPaths as $path) {
        if (Request::is($path)) {
        $isEmaildropOpen = true;
        break;
        }
        }
        @endphp

        <li class="drop-dwn-link {{ $isEmaildropOpen ? 'dropped' : '' }}">
          <a href="JavaScript:void(0)" class="no-loader">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">mark_email_read</span>
              Email Template
            </div>
            <div class="arrow">
              <span class="material-symbols-outlined">
                keyboard_arrow_right
              </span>
            </div>
          </a>
          <div class="drop-menu">
            <div class="drop-menu-item">
              <a href="{{url('/admin/email-template-list')}}" class="{{(url()->current() == url('/admin/email-template-list')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">text_ad</span>
                  Templates
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a href="{{url('/admin/email-template')}}" class="{{(url()->current() == url('/admin/email-template')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">add_notes</span>
                  Add Template
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a href="{{url('/admin/send-email-users')}}" class="{{(url()->current() == url('/admin/send-email-users')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">outgoing_mail</span>
                  Send Email
                </div>
              </a>
            </div>
          </div>
        </li>
        @endif
      </ul>
      <ul class="our-side-collapsed-menu" id="or-sd-cl-menu">
        <li class="logo-cum-btn">
          <div class="logo-collpse"><a href="#" class="no-loader"><img width="50" src="{{url('public/admin/')}}/app-assets/images/logo/favicon.png" alt="logo"></a><button title="Expand Sidebar" id="opn-side-btn" class="opn-sidebar-btn">
              <div class="line">|</div>
            </button></div>
        </li>

        <li class="normal-link">
          <a title="Dashboard" href="{{url('/user/dashboard')}}" class="{{(url()->current() == url('/user/dashboard')) ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">dashboard</span>
            </div>
            <!-- <div class="arrow">
              <span class="material-symbols-outlined">
                keyboard_arrow_right
              </span>
            </div> -->
          </a>
        </li>

        @if(auth()->user()->order_status == 1)

        @if(auth()->user()->id != 231)
        <li class="normal-link">
          <a title="Startup Video" href="{{url('/user/startup-video')}}" class="{{(url()->current() == url('/user/startup-video')) ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">smart_display</span>
            </div>
          </a>
        </li>
        @endif


        @if(auth()->user()->id != 231)
        @php
        $openPaths = [
        'user/affiliate',
        'user/traffic',
        'user/funds',
        'user/offers',
        'user/marketing-material',
        'user/leaderboard',
        'user/change-password'
        ];

        $isAffiliatedropOpen = false;

        foreach ($openPaths as $path) {
        if (Request::is($path)) {
        $isAffiliatedropOpen = true;
        break;
        }
        }
        @endphp
        <li class="drop-dwn-link {{ $isAffiliatedropOpen ? 'dropped' : '' }}">
          <a title="Affiliate" href="JavaScript:void(0)" class="no-loader">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">linked_services</span>
            </div>
            <div class="arrow">
              <span class="material-symbols-outlined">
                keyboard_arrow_up
              </span>
            </div>
          </a>
          <div class="drop-menu">
            <div class="drop-menu-item">
              <a title="Affiliate Link" href="{{url('/user/affiliate')}}" class="{{(url()->current() == url('/user/affiliate')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">link</span>
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a title="Traffic" href="{{url('/user/traffic')}}" class="{{(url()->current() == url('/user/traffic')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">web_traffic</span>
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a title="Funds" href="{{url('/user/funds')}}" class="{{(url()->current() == url('/user/funds')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">currency_exchange</span>
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a title="Offers" href="{{url('/user/offers')}}" class="{{(url()->current() == url('/user/offers')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">local_activity</span>
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a href="{{url('/user/marketing-material')}}" class="{{(url()->current() == url('/user/marketing-material')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">grade</span>
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a href="{{url('/user/leaderboard')}}" class="{{(url()->current() == url('/user/leaderboard')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">leaderboard</span>
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a href="{{url('/user/change-password')}}" class="{{(url()->current() == url('/user/change-password')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">lock_reset</span>
                </div>
              </a>
            </div>
          </div>
        </li>
        @endif
        @php
        $openbankPaths = [
        'user/bank-details',
        'user/payouts'
        ];

        $ispaymentsdropOpen = false;

        foreach ($openbankPaths as $path) {
        if (Request::is($path)) {
        $ispaymentsdropOpen = true;
        break;
        }
        }
        @endphp
        <li class="drop-dwn-link {{ $ispaymentsdropOpen ? 'dropped' : '' }}">
          <a href="JavaScript:void(0)" class="no-loader">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">payments</span>
            </div>
            <div class="arrow">
              <span class="material-symbols-outlined">
                keyboard_arrow_up
              </span>
            </div>
          </a>
          <div class="drop-menu">
            <div class="drop-menu-item">
              <a href="{{url('/user/bank-details')}}" class="{{(url()->current() == url('/user/bank-details')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">assured_workload</span>
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a href="{{url('/user/payouts')}}" class="{{(url()->current() == url('/user/payouts')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">receipt_long</span>
                </div>
              </a>
            </div>
          </div>
        </li>

        <!-- Trainings Section  -->
        @php
        $opentrainingPaths = [
        'user/webinar',
        'user/training',
        'user/session'
        ];

        $istrainingsdropOpen = false;

        foreach ($opentrainingPaths as $path) {
        if (Request::is($path)) {
        $istrainingsdropOpen = true;
        break;
        }
        }
        @endphp
        <li class="drop-dwn-link {{ $istrainingsdropOpen ? 'dropped' : '' }}">
          <a href="JavaScript:void(0)" class="no-loader">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">model_training</span>
            </div>
            <div class="arrow">
              <span class="material-symbols-outlined">
                keyboard_arrow_up
              </span>
            </div>
          </a>
          <div class="drop-menu">
            <div class="drop-menu-item">
              <a href="{{url('/user/webinar')}}" class="{{(url()->current() == url('/user/webinar')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">live_tv</span>
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a href="{{url('/user/training')}}" class="{{(url()->current() == url('/user/training')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">browse_activity</span>
                </div>
              </a>
            </div>
            <div class="drop-menu-item">
              <a href="{{url('/user/session')}}" class="{{(url()->current() == url('/user/session')) ? 'active' : '' }}">
                <div class="lnk-ttl">
                  <span class="material-symbols-outlined">help_center</span>
                </div>
              </a>
            </div>
          </div>
        </li>

        <li class="normal-link">
          <a href="{{url('/user/support')}}" class="{{(url()->current() == url('/user/support')) ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">call_quality</span>
            </div>
          </a>
        </li>
        <li class="normal-link">
          <a href="{{url('/user/targets')}}" class="{{(url()->current() == url('/user/targets')) ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">target</span>
            </div>
          </a>
        </li>
        @endif

      </ul>
    </div>
    <div class="side-bar-footer">
      @if(auth()->user()->order_status == 1)
      <h4>{{ ucfirst(auth()->user()->name)}}</h4>
      <a class="grey-text text-darken-1" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <span class="material-symbols-outlined">logout</span> {{ __('Logout') }}</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
      @endif

    </div>


  </div>
</div>




<div class="our-custom-bottombar" id="our-custom-bottombar">
  <div class="our-bottombar-wrap">
    <ul class="our-bottom-menu">
      <?php
      $permission = DB::table('permission')->where('user_id', auth()->user()->id)->first();
      ?>

      @if(isset($permission) && ($permission->is_dashboard == 1))
      <li class="normal-link">
        <a class="{{ request()->is('admin/dashboard*') ? 'active' : '' }}" href="{{url('/admin/dashboard')}}">
          <div class="lnk-ttl">
            <span class="material-symbols-outlined">dashboard</span>
            DASH
          </div>
        </a>
      </li>
      @endif

      @if(isset($permission) && ($permission->is_usersListing == 1))
      <li class="normal-link">
        <a class="{{ request()->is('admin/user-listing*') ? 'active' : '' }}" href="{{url('/admin/user-listing')}}">
          <div class="lnk-ttl">
            <span class="material-symbols-outlined">group</span>
            USERS
          </div>
        </a>
      </li>
      @endif

      @if(isset($permission) && ($permission->is_adminUserListing == 1))
      <li class="normal-link">
        <a class="{{ request()->is('admin/admin-listing*') ? 'active' : '' }}" href="{{url('/admin/admin-listing')}}">
          <div class="lnk-ttl">
            <span class="material-symbols-outlined">shield_person</span>
            Admins
          </div>
        </a>
      </li>
      @endif

      <li class="normal-link" id="bottmbar-draw-btn">
        <a href="#" class="no-loader">
          <div class="lnk-ttl">
            <span class="material-symbols-outlined">keyboard_arrow_up</span>
            EXPAND
          </div>
        </a>
      </li>
    </ul>

    <fieldset>
      <legend>LINKS</legend>
      <ul class="our-bottom-menu make-grid">
        @if(isset($permission) && ($permission->is_packages == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/packages*') ? 'active' : '' }}" href="{{url('/admin/packages')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">package_2</span>
              Bundles
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_regrecords == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/regrecords*') ? 'active' : '' }}" href="{{url('/admin/regrecords')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">monitoring</span>
              User Analytics
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_course == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/all-courses*') ? 'active' : '' }}" href="{{url('/admin/all-courses')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">library_books</span>
              Courses
            </div>
          </a>
        </li>
        @endif
        @if(isset($permission) && ($permission->is_certificate == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/tests*') ? 'active' : '' }}" href="{{url('/admin/tests')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">auto_stories</span>
              Tests
            </div>
          </a>
        </li>
        @endif
        @if(isset($permission) && ($permission->is_coupon_offers == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/coupons*') ? 'active' : '' }}" href="{{url('/admin/coupons')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">confirmation_number</span>
              Coupons Offer
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_targets == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/targets*') ? 'active' : '' }}" href="{{url('/admin/targets')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">target</span>
              Targets
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_commission_structures == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/commission_structures*') ? 'active' : '' }}" href="{{url('/admin/commission_structures')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">account_tree</span>
              Commission Structures
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_skills_development == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/skills_development*') ? 'active' : '' }}" href="{{url('/admin/skills_development')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">network_intelligence_history</span>
              Skills Development
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_opportunities == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/opportunities*') ? 'active' : '' }}" href="{{url('/admin/opportunities')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">work_history</span>
              Opportunities
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_search == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/search-order*') ? 'active' : '' }}" href="{{url('/admin/search-order')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">search</span>
              Search
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_bank_req == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/bank-request*') ? 'active' : '' }}" href="{{url('/admin/bank-request')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">assured_workload</span>
              Bank Request
            </div>
          </a>
        </li>
        @endif


        @if(isset($permission) && ($permission->is_payouts == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/payouts/1*') ? 'active' : '' }}" href="{{url('/admin/payouts/1')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">account_balance_wallet</span>
              Payouts
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_leaderboard == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/leaderboards*') ? 'active' : '' }}" href="{{url('/admin/leaderboards')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">leaderboard</span>
              Leaderboards
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_offers == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/all-offers*') ? 'active' : '' }}" href="{{url('/admin/all-offers')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">local_activity</span>
              Offers
            </div>
          </a>
        </li>
        @endif

        @if(isset($permission) && ($permission->is_social_media == 1))
        <li class="normal-link">
          <a class="{{ request()->is('admin/setting*') ? 'active' : '' }}" href="{{url('/admin/setting')}}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">settings</span>
              Settings
            </div>
          </a>
        </li>
        @endif
      </ul>
    </fieldset>


    @if(isset($permission) && ($permission->is_traffic == 1))

    <fieldset>
      <legend>TRAFFIC</legend>
      <ul class="our-bottom-menu make-grid">
        <li class="normal-link">
          <a href="{{url('/admin/affiliate-traffic')}}" class="{{ request()->is('admin/affiliate-traffic*') ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">check_circle</span>
              Paid
            </div>
          </a>
        </li>
        <li class="normal-link">
          <a href="{{url('/admin/unpaid-traffic')}}" class="{{ request()->is('admin/unpaid-traffic*') ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">cancel</span>
              Un Paid
            </div>
          </a>
        </li>
      </ul>
    </fieldset>
    @endif
    @if(isset($permission) && ($permission->is_setting == 1))
    <fieldset>
      <legend>PACKAGE EDITS</legend>
      <ul class="our-bottom-menu make-grid">
        <li class="normal-link">
          <a href="{{url('/admin/packages-price')}}" class="{{ request()->is('admin/packages-price*') ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">price_change</span>
              Package Price
            </div>
          </a>
        </li>
        <li class="normal-link">
          <a href="{{url('/admin/upgrade-price')}}" class="{{ request()->is('admin/upgrade-price*') ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">price_change</span>
              Upgrade Price
            </div>
          </a>
        </li>
        <li class="normal-link">
          <a href="{{url('/admin/payment-setting')}}" class="{{ request()->is('admin/payment-setting*') ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">payments</span>
              Payment Settings
            </div>
          </a>
        </li>
      </ul>
    </fieldset>
    @endif

    @if(isset($permission) && ($permission->is_training == 1))
    <fieldset>
      <legend>TRAININGS</legend>
      <ul class="our-bottom-menu make-grid">

        <li class="normal-link">
          <a href="{{url('/admin/webinar-listing')}}" class="{{ request()->is('admin/webinar-listing*') ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">live_tv</span>
              Webinars
            </div>
          </a>
        </li>
        <li class="normal-link">
          <a href="{{url('/admin/training-category')}}" class="{{ request()->is('admin/training-category*') ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">browse_activity</span>
              Trainings
            </div>
          </a>
        </li>
        <li class="normal-link">
          <a href="{{url('/admin/session-listing')}}" class="{{ request()->is('admin/session-listing*') ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">help_center</span>
              QnA
            </div>
          </a>
        </li>
        <li class="normal-link">
          <a href="{{url('/admin/all-marketing-material')}}" class="{{ request()->is('admin/all-marketing-material*') ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">category</span>
              Marketing Materials
            </div>
          </a>
        </li>
      </ul>
    </fieldset>
    @endif

    @if(isset($permission) && ($permission->is_emailTemplate == 1))
    <fieldset>
      <legend>EMAIL TEMPLATE</legend>
      <ul class="our-bottom-menu make-grid">
        <li class="normal-link">
          <a href="{{url('/admin/email-template-list')}}" class="{{ request()->is('admin/email-template-list*') ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">text_ad</span>
              Templates
            </div>
          </a>
        </li>
        <li class="normal-link">
          <a href="{{url('/admin/email-template')}}" class="{{ request()->is('admin/email-template*') ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">add_notes</span>
              Add Template
            </div>
          </a>
        </li>
        <li class="normal-link">
          <a href="{{url('/admin/send-email-users')}}" class="{{ request()->is('admin/send-email-users*') ? 'active' : '' }}">
            <div class="lnk-ttl">
              <span class="material-symbols-outlined">outgoing_mail</span>
              Send Email
            </div>
          </a>
        </li>
      </ul>
    </fieldset>
    @endif
  </div>
</div>