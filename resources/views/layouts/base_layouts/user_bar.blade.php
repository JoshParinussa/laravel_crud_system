<div class="kt-header__topbar-item kt-header__topbar-item--user">
    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
        <div class="kt-header__topbar-user">
            <span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
            <span class="kt-header__topbar-username kt-hidden-mobile">{{ Auth::user()->name }}</span>
            <img class="kt-hidden" alt="Pic" src="{{ asset('metronic/media/users/300_25.jpg') }}" />

            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">S</span>
        </div>
    </div>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

        <!--[html-partial:include:{"file":"partials/_topbar/dropdown/user.html"}]/-->

        <!--begin: Head -->
        <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url({{ asset('metronic/media/misc/bg-1.jpg') }})">
            <div class="kt-user-card__avatar">
                <img class="kt-hidden" alt="Pic" src="{{ asset('metronic/media/users/300_25.jpg') }}" />

                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
            </div>
            <div class="kt-user-card__name">
                {{ Auth::user()->email }}
            </div>
        </div>

        <!--end: Head -->

        <!--begin: Navigation -->
        <div class="kt-notification">
            <div class="kt-notification__custom kt-space-between">
                <a class="btn btn-label btn-label-brand btn-sm btn-bold" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                
            </div>
        </div>
    </div>
</div>