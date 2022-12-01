<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanic Autos</title>
    <link rel="stylesheet" href="{{ asset('stylings/admin.css') }}">
</head>
<body>
  <div class="wrapper">
    <div class="main-container">
      @include('layouts.inc.header')
      @section('admin-header')
      @endsection
        <div class="user-box first-box">
            <div class="activity card" style="--delay: .2s">
                <div class="title">Home Page</div>
                <div class="subtitle">A summary report of all transaction in the system.</div>
                <div class="activity-links">
                    <div class="activity-link active">Current User</div>
                    <div class="activity-link notify">User Request</div>
                </div>
                <div class="destination">
                    <div class="destination-card">
                        <div class="destination-profile">
                            <img class="profile-img"
                                src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80"
                                alt="" />
                            <div class="destination-length">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                45.4m
                            </div>
                        </div>
                        <div class="destination-points">
                            <div class="point">Traffic Point</div>
                            <div class="sub-point">Brooklyn St, NY</div>
                        </div>
                    </div>
                    <div class="destination-card">
                        <div class="destination-profile">
                            <img class="profile-img"
                                src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80"
                                alt="" />
                            <div class="destination-length">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                42.8m
                            </div>
                        </div>
                        <div class="destination-points">
                            <div class="point">Pickup Point</div>
                            <div class="sub-point">Maryland 17, NY</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="discount card" style="--delay: .4s">
                <div class="title">Most Active user</div>
                <div class="discount-wrapper">
                    <div class="discount-info">
                        <div class="subtitle">Spendings:</div>
                        <div class="subtitle-count">$5</div>
                        <div class="subtitle">Biddings:</div>
                        <div class="subtitle-count dist">4</div>
                    </div>
                    <div class="discount-chart">
                        <div class="circle">
                            <div class="pie">
                                <svg>
                                    <circle cx="60" cy="60" r="50"></circle>
                                </svg>
                            </div>
                            <div class="counter">0</div>
                        </div>
                    </div>
                </div>
                <div class="discount-profile">
                    <span class="by">Profile:</span>
                    <img class="discount-img"
                        src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80"
                        alt="">
                    <div class="discount-detail">
                        <div class="discount-name">Johnny Cauld</div>
                        <div class="discount-type">Average per month</div>
                    </div>
                </div>
                <div class="button offer-button">More</div>
            </div>

            <div class="account-wrapper" style="--delay: .8s">
                <div class="account-profile">
                    <img src="https://images.unsplash.com/photo-1550314124-301ca0b773ae?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2215&q=80"
                        alt="">
                    <div class="blob-wrap">
                        <div class="blob"></div>
                        <div class="blob"></div>
                        <div class="blob"></div>
                    </div>
                </div>
                <div class="account card">
                    <div class="account-cash">Daily average 637.04</div>
                    <div class="account-income">Total Income</div>
                    <div class="account-iban">Kshs. 563060</div>
                </div>
            </div>
        </div>
       
    </div>
</div>
<script src="{{ asset('js/live-time.js') }}"></script>
</body>
</html>