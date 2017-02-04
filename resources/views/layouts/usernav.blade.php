<div class="dashboard-nav">
    <center>
        <img src="{{ asset('assets/images/profile-blank-image.png') }}">
        <h2>{{ Auth::user()->first_name.'  '.Auth::user()->last_name }}</h2>
        <h5>Member since January 2017</h5>
    </center>

    <div class="row follow-section">
        <div class="col-sm-6 followers">
        Followers <span>1121</span>
        </div>
        <div class="col-sm-6 following">
            Following <span>1118</span>
        </div>
    </div>

    <div class="user-navigation">
        <ul>
            <li>
                <a href="{{ url('/dashboard') }}" {{{ ( Request::is('dashboard') ? 'class=active' : '') }}}><p><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</p></a>
            </li>
            <li>
                <a href="{{ url('/profile') }}" {{{ ( Request::is('profile') ? 'class=active' : '') }}}><p><i class="fa fa-user" aria-hidden="true"></i>Profile</p></a>
            </li>
            <!-- <li>
                <a href="#"><p><i class="fa fa-users" aria-hidden="true"></i>Followers</p></a>
            </li>
            <li>
                <a href="#"><p><i class="fa fa-user-plus" aria-hidden="true"></i>Following</p></a>
            </li>
            <li>
                <a href="#"><p><i class="fa fa-cog" aria-hidden="true"></i>Setting</p></a>
            </li> -->
            <li>
                <a href="{{ url('/downloads') }}" {{{ ( Request::is('products') ? 'class=active' : '') }}}><p><i class="fa fa-download" aria-hidden="true"></i>Downloads</p></a>
            </li>
            <!-- <li>
                <a href="#"><p><i class="fa fa-star" aria-hidden="true"></i>Reviews</p></a>
            </li>
            <li>
                <a href="#"><p><i class="fa fa-money" aria-hidden="true"></i>Earnings</p></a>
            </li> -->
        </ul>
    </div>
</div>




