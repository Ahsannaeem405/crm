@if (Auth::user()->role != 'user')
    <div class="br-logo"><a href=""><span>[</span>{{ Auth::user()->firstname }}<span>]</span></a></div>

@else
    <div class="br-logo"><a href=""><span>[</span>{{ Auth::user()->firstname }}<span>]</span></a></div>

@endif

<div class="br-sideleft overflow-y-auto">

    @if (Auth::user()->role != 'user')
        <div class="br-sideleft-menu" style="    margin-top: 15px;">
            <a href="{{ url('/admin') }}" class="br-menu-link active">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <a href="{{ url('/admin/AddAdmin') }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                    <span class="menu-item-label">Add Admin</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="{{ url('/admin/viewAdmin') }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                    <span class="menu-item-label">View Admin</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->


            <a href="{{ url('/admin/userDocument') }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                    <span class="menu-item-label">Submitted Documents</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <a href="{{ url('/admin/reporting') }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                    <span class="menu-item-label">Reporting</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <br>
        </div><!-- br-sideleft -->
        <br>

    @else

        <a href="{{ url('/user/viewDocument') }}" class="br-menu-link active">
            <div class="br-menu-item" style="margin-top: 5px;">
                <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
                <span class="menu-item-label">View Document </span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->


    @endif
</div><!-- br-sideleft -->
