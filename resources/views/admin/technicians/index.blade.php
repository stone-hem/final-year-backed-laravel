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
                <div class="title">{{ $best_technician->tech_name }}</div>
                <div class="subtitle">This technician has been able to accumulate a total of --- bids.. </div>
                <div class="activity-links">
                    <div class="activity-link active">Most bidded technician</div>
                </div>
                <div class="destination">
                    <div class="destination-card">
                        <div class="destination-profile">
                            <img class="profile-img"
                                src="{{ asset('storage/'.$best_technician->org_pic) }}"
                                alt="" />
                            <div class="destination-length">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                {{ $best_technician->location }}
                            </div>
                        </div>
                        <div class="destination-points">
                            <div class="point">{{ $best_technician->name }}</div>
                            <div class="sub-point">{{ $best_technician->email }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="discount card" style="--delay: .4s">
                <div class="title">Best Earning technician</div>
                <div class="discount-wrapper">
                    <div class="discount-info">
                        <div class="subtitle">Earnings</div>
                        <div class="subtitle-count">$5</div>
                        <div class="subtitle">Clients Handled:</div>
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
                    src="{{ asset('storage/'.$best_technician->org_pic) }}"
                        alt="">
                    <div class="discount-detail">
                        <div class="discount-name">{{ $best_technician->name }}</div>
                        <div class="discount-type">{{ $best_technician->description }}</div>
                    </div>
                </div>
                <div class="button offer-button">View more..</div>
            </div>

          
        </div>
        <div class="user-box second-box">
            <div class="cards-wrapper" style="--delay: 1s">
                <div class="cards-header">
                    <div class="cards-header-date">
                        <div class="title">Technicians</div>
                    </div>
                    <div class="cards-button button">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                            <path d="M12 5v14M5 12h14" />
                        </svg>
                        View Pdf
                    </div>
                </div>
                <div class="cards card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Description</th>
                                <th>Phone number</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($technician as $item)
                            <tr>
                                <td>{{ $item->tech_name }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->description }}</td>
                                <th>{{ $item->phone_number }}</th>
                                <td>
                                    <div class="status is-green"><svg viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 6L9 17l-5-5" />
                                        </svg>
                                        Active
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                          
                           
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card transection" style="--delay: 1.2s">
                <div class="transection-header">
                    <div class="head">Transactions</div>
                    <div class="head is-wait">Amount</div>
                </div>
                <div class="credit-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 291.764 291.764"
                        style="background-color:#292c6d">
                        <g xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M119.259 100.23l-14.643 91.122h23.405l14.634-91.122h-23.396zm70.598 37.118c-8.179-4.039-13.193-6.765-13.193-10.896.1-3.756 4.24-7.604 13.485-7.604 7.604-.191 13.193 1.596 17.433 3.374l2.124.948 3.182-19.065c-4.623-1.787-11.953-3.756-21.007-3.756-23.113 0-39.388 12.017-39.489 29.204-.191 12.683 11.652 19.721 20.515 23.943 9.054 4.331 12.136 7.139 12.136 10.987-.1 5.908-7.321 8.634-14.059 8.634-9.336 0-14.351-1.404-21.964-4.696l-3.082-1.404-3.273 19.813c5.498 2.444 15.609 4.595 26.104 4.705 24.563 0 40.546-11.835 40.747-30.152.08-10.048-6.165-17.744-19.659-24.035zm83.034-36.836h-18.108c-5.58 0-9.82 1.605-12.236 7.331l-34.766 83.509h24.563l6.765-18.08h27.481l3.51 18.153h21.664l-18.873-90.913zm-26.97 54.514c.474.046 9.428-29.514 9.428-29.514l7.13 29.514h-16.558zM85.059 100.23l-22.931 61.909-2.498-12.209c-4.24-14.087-17.533-29.395-32.368-36.999l20.998 78.33h24.764l36.799-91.021H85.059v-.01z"
                                fill="#fff" data-original="#2394bc" />
                            <path
                                d="M51.916 111.982c-1.787-6.948-7.486-11.634-15.226-11.734H.374L0 101.934c28.329 6.984 52.107 28.474 59.821 48.688l-7.905-38.64z"
                                fill="#fffffe" data-original="#efc75e" />
                        </g>
                    </svg>
                    <div class="credit-name">
                        <div class="credit-type">Visa</div>
                        <div class="credit-status">Payment Received</div>
                    </div>
                    <div class="credit-money is-active">+$3.945</div>
                </div>
                <div class="credit-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        style="background-color:#1f2755">
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M488.727 66.494H23.273C10.42 66.494 0 76.914 0 89.767v332.466c0 12.853 10.42 23.273 23.273 23.273h465.454c12.853 0 23.273-10.42 23.273-23.273V89.767c0-12.853-10.42-23.273-23.273-23.273z"
                            fill="#1f2755" data-original="#5286f9" />
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M273.776 189.773c5.115 5.86 9.57 12.31 13.236 19.242 7.427 14.041 11.655 30.026 11.655 46.986s-4.228 32.943-11.655 46.986c-3.666 6.932-8.121 13.38-13.236 19.24-5.264 6.031-11.23 11.427-17.776 16.069 16.454 11.664 36.523 18.553 58.182 18.553 55.608 0 100.849-45.241 100.849-100.848S369.79 155.152 314.182 155.152c-21.659 0-41.728 6.886-58.182 18.553 6.544 4.642 12.51 10.039 17.776 16.068z"
                            fill="#f0425c" data-original="#ffb655" />
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M287.012 209.016c-3.666-6.934-8.121-13.382-13.236-19.242-5.267-6.031-11.231-11.425-17.776-16.066-16.452-11.667-36.523-18.553-58.182-18.553-55.608 0-100.848 45.241-100.848 100.848s45.241 100.848 100.848 100.848c21.659 0 41.73-6.887 58.182-18.553 6.546-4.641 12.51-10.038 17.776-16.067 5.115-5.86 9.57-12.31 13.236-19.24 7.427-14.043 11.655-30.028 11.655-46.986 0-16.964-4.228-32.948-11.655-46.989z"
                            fill="#ef8641" data-original="#d8143a" />
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M197.818 356.851c-55.608 0-100.848-45.241-100.848-100.848s45.241-100.848 100.848-100.848c21.659 0 41.728 6.886 58.182 18.553V66.494H23.273C10.42 66.494 0 76.914 0 89.767v332.466c0 12.853 10.42 23.273 23.273 23.273H256v-107.21c-16.454 11.666-36.523 18.555-58.182 18.555z"
                            fill="#1f2755" data-original="#3d6deb" />
                    </svg>
                    <div class="credit-name">
                        <div class="credit-type">MasterCard</div>
                        <div class="credit-status">Account Deposit</div>
                    </div>
                    <div class="credit-money is-active">+$3.00</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/live-time.js') }}"></script>
</body>
</html>