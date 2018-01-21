@php
    switch ( auth()->user()->employee()->first()->departments()->first()->code ) {
        case 'CSE' :
        case 'IT' :
            $icon_class = "fa-laptop"; break;
        case 'MECH' : $icon_class = "fa-cog"; break;
        case 'EEE' : $icon_class = "fa-bolt"; break;
        case 'ECE' : $icon_class = "fa-comments-o"; break;
        case 'CHEM' : $icon_class = "fa-flask"; break;
        case 'BIOTECH' : $icon_class = "fa-pagelines"; break;
        case 'CIVIL' : $icon_class = "fa-building-o"; break;
        default: $icon_class = '';
    }

    if( auth()->user()->isBelongsToMultipleDeps() ){
        $logoText = "Lab & Mid marks";
    } else {
        $logoText = auth()->user()->employee()->first()->departments()->first()->code . ' Lab';
    }

@endphp
<div id="site-navbar">
    <div class="header">
        <div class="logo font-1">
            @if( ! empty( $icon_class ) && ! auth()->user()->isBelongsToMultipleDeps() )
                <span class="logo-icon"><i class="fa {{ $icon_class }}" aria-hidden="true"></i></span>
            @endif
            <span class="logo-text">{{ $logoText }}</span>
        </div><!-- .logo -->
    </div><!-- .header -->
    <div class="navbar-container container-fluid clearfix">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="#" id="menu-btn"><i class="fa fa-bars"></i></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right account-settings">
            <li class="welcome-text"><span>Welcome, {{ auth()->user()->employee()->first()->name }}</span></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-caret-down"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><span class="fa fa-user-circle-o"></span> Profile Settings</a></li>
                    <li><a href="#"><span class="fa fa-cog"></span> Reset Password</a></li>
                    <li class="divider" role="separator"></li>
                    <li><a href="{{ URL::to('logout') }}" id="logout"><span class="fa fa-power-off"></span>Logout</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- .nabar-container -->
</div><!-- #site-navbar -->