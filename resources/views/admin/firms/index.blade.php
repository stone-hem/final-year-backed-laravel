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
                <div class="title">Firms</div>
                <div class="subtitle">Hoo - is an adaptive Online Courses Application with a wide range of course
                    directions. The students will have a great possibility to study.</div>
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
                <div class="title">Discount Offers</div>
                <div class="discount-wrapper">
                    <div class="discount-info">
                        <div class="subtitle">The Best Offer is:</div>
                        <div class="subtitle-count">$5</div>
                        <div class="subtitle">Distance:</div>
                        <div class="subtitle-count dist">4.5 Km</div>
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
                    <span class="by">By:</span>
                    <img class="discount-img"
                        src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80"
                        alt="">
                    <div class="discount-detail">
                        <div class="discount-name">Johnny Cauld</div>
                        <div class="discount-type">Micro bus & Travel Bus</div>
                    </div>
                </div>
                <div class="button offer-button">Get Offer</div>
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
                    <div class="account-name">Mike J Morgan</div>
                    <div class="account-title">Taxi Driver</div>
                </div>
                <div class="account card">
                    <div class="account-cash">$ 5637.04</div>
                    <div class="account-income">Total Income</div>
                    <div class="account-iban">**** **** **** 3060</div>
                </div>
            </div>
        </div>
        <div class="user-box second-box">
            <div class="cards-wrapper" style="--delay: 1s">
                <div class="cards-header">
                    <div class="cards-header-date">
                        <div class="title">My Current Units</div>  
                    </div>
                    <div class="cards-button button">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                            <path d="M12 5v14M5 12h14" />
                        </svg>
                        Create
                    </div>
                </div>
                <div class="cards card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Unit</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John D</td>
                                <td>Sudbury Station</td>
                                <td>Center Plaza</td>
                               
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
                           
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card transection" style="--delay: 1.2s">
                <div class="transection-header">
                    <div class="head">Transactions</div>
                    <div class="head is-wait">View All</div>
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
                <div class="credit-wrapper">
                    <svg viewBox="0 0 504 504" style="background-color: #046fcf">
                        <path xmlns="http://www.w3.org/2000/svg" fill="#fff" data-original="#2fabf7"
                            d="M43.2 207.6h17.6L52 185.2z" />
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M261.6 188.4c-1.6-.8-4-.8-6.4-.8h-16v12.8h16c2.4 0 4.8 0 6.4-.8s2.4-3.2 2.4-5.6c.8-3.2-.8-4.8-2.4-5.6z"
                            fill="#fff" data-original="#228fe0" />
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M432.8 164.4v9.6l-4.8-9.6h-37.6v9.6l-4.8-9.6h-51.2c-8.8 0-16 1.6-22.4 4.8v-4.8h-36v4.8c-4-3.2-8.8-4.8-15.2-4.8H132l-8.8 20-8.8-20H73.6v9.6l-4.8-9.6H34.4l-16 37.6L0 243.6h40.8l4.8-12.8h11.2l4.8 12.8H108V234l4 9.6h23.2l4-9.6v9.6h111.2v-20.8h1.6c1.6 0 1.6 0 1.6 2.4v17.6h57.6V238c4.8 2.4 12 4.8 21.6 4.8h24l4.8-12.8h11.2l4.8 12.8H424v-12l7.2 12h37.6v-78.4h-36zm-270.4 67.2h-13.6v-44l-19.2 44h-12l-19.2-44v44H71.2l-5.6-12H38.4l-4.8 12.8H18.4l24-56.8h20l22.4 53.6v-53.6h21.6L124 214l16-38.4h22.4v56zm54.4-44h-31.2V198H216v11.2h-30.4v11.2h31.2v12H172v-56.8h44.8v12zm60 23.2c1.6 3.2 2.4 5.6 2.4 10.4v11.2h-13.6v-7.2c0-3.2 0-8-2.4-11.2-2.4-2.4-4.8-2.4-9.6-2.4h-14.4v20.8h-13.6v-56.8H256c7.2 0 12 0 16 2.4s6.4 6.4 6.4 12.8c0 8.8-5.6 13.6-9.6 15.2 4 .8 6.4 3.2 8 4.8zm24 20.8h-13.6v-56.8h13.6v56.8zm157.6 0h-19.2l-25.6-42.4v42.4h-27.2l-4.8-12h-28l-4.8 12.8h-15.2c-6.4 0-14.4-1.6-19.2-6.4-4.8-4.8-7.2-11.2-7.2-21.6 0-8 1.6-16 7.2-22.4 4-4.8 11.2-6.4 20-6.4h12.8v12h-12.8c-4.8 0-7.2.8-10.4 3.2-2.4 2.4-4 7.2-4 12.8 0 6.4.8 10.4 4 13.6 2.4 2.4 5.6 3.2 9.6 3.2h5.6l18.4-44h20L400 230v-53.6h20l23.2 39.2v-39.2h13.6v55.2h1.6z"
                            fill="#fbfbfb" data-original="#0571c1" />
                        <g xmlns="http://www.w3.org/2000/svg">
                            <path fill="#fff" data-original="#228fe0"
                                d="M358.4 207.6h18.4l-8.8-22.4zM222.4 322.8v-45.6l-20.8 22.4z" />
                        </g>
                        <path xmlns="http://www.w3.org/2000/svg" fill="#fff" data-original="#2fabf7"
                            d="M136.8 282.8v10.4h29.6v11.2h-29.6v12h32.8l15.2-16.8-14.4-16.8z" />
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M252.8 282.8H236v14.4h17.6c4.8 0 8-2.4 8-7.2-.8-4.8-4-7.2-8.8-7.2z" fill="#fff"
                            data-original="#228fe0" />
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M500 296.4v-36h-33.6c-7.2 0-12.8 1.6-16.8 4.8v-4.8h-36.8c-5.6 0-12.8 1.6-16 4.8v-4.8H332v4.8c-4.8-4-13.6-4.8-17.6-4.8h-43.2v4.8c-4-4-13.6-4.8-18.4-4.8h-48l-11.2 12-10.4-12h-72v78.4h70.4l11.2-12 10.4 12h43.2v-18.4h5.6c5.6 0 12.8 0 18.4-2.4v21.6h36v-20.8h1.6c2.4 0 2.4 0 2.4 2.4v18.4h108.8c7.2 0 14.4-1.6 18.4-4.8v4.8H472c7.2 0 14.4-.8 19.2-4 8-4.8 12.8-13.6 12.8-24 0-5.6-1.6-11.2-4-15.2zm-248 12.8h-16v19.2h-25.6l-16-18.4-16.8 18.4h-52.8v-56.8h53.6l16 18.4 16.8-18.4h42.4c10.4 0 22.4 3.2 22.4 18.4-.8 16-12 19.2-24 19.2zm80-3.2c1.6 2.4 2.4 5.6 2.4 10.4v11.2h-13.6v-7.2c0-3.2 0-8.8-2.4-11.2-1.6-2.4-4.8-2.4-9.6-2.4h-14.4v20.8h-13.6v-56.8h30.4c6.4 0 12 0 16 2.4s7.2 6.4 7.2 12.8c0 8.8-5.6 13.6-9.6 15.2 4 1.6 6.4 3.2 7.2 4.8zm55.2-23.2H356v10.4h30.4v11.2H356v11.2h31.2v12h-44.8v-56.8h44.8v12zm33.6 44.8h-25.6v-12h25.6c2.4 0 4 0 5.6-1.6.8-.8 1.6-2.4 1.6-4s-.8-3.2-1.6-4c-.8-.8-2.4-1.6-4.8-1.6-12.8-.8-28 0-28-17.6 0-8 4.8-16.8 19.2-16.8h26.4v13.6h-24.8c-2.4 0-4 0-5.6.8s-1.6 2.4-1.6 4c0 2.4 1.6 3.2 3.2 4s3.2.8 4.8.8h7.2c7.2 0 12 1.6 15.2 4.8 2.4 2.4 4 6.4 4 12 0 12-7.2 17.6-20.8 17.6zm68.8-5.6c-3.2 3.2-8.8 5.6-16.8 5.6h-25.6v-12h25.6c2.4 0 4 0 5.6-1.6.8-.8 1.6-2.4 1.6-4s-.8-3.2-1.6-4c-.8-.8-2.4-1.6-4.8-1.6-12.8-.8-28 0-28-17.6 0-8 4.8-16.8 19.2-16.8h26.4v13.6h-24c-2.4 0-4 0-5.6.8s-1.6 2.4-1.6 4c0 2.4.8 3.2 3.2 4 1.6.8 3.2.8 4.8.8h7.2c7.2 0 12 1.6 15.2 4.8.8 0 .8.8.8.8 2.4 3.2 3.2 7.2 3.2 11.2 0 4.8-1.6 8.8-4.8 12z"
                            fill="#fbfbfb" data-original="#0571c1" />
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M317.6 284.4c-1.6-.8-4-.8-6.4-.8h-16v12.8h16c2.4 0 4.8 0 6.4-.8s2.4-3.2 2.4-5.6c.8-3.2-.8-4.8-2.4-5.6z"
                            fill="#fff" data-original="#228fe0" />
                        <g xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M261.6 188.4c-1.6-.8-4-.8-6.4-.8h-16v12.8h16c2.4 0 4.8 0 6.4-.8s2.4-3.2 2.4-5.6c.8-3.2-.8-4.8-2.4-5.6zM358.4 207.6h18.4l-8.8-22.4zM222.4 322.8v-45.6l-20.8 22.4z"
                                fill="#fff" data-original="#228fe0" />
                        </g>
                        <path
                            d="M252.8 282.8H236v14.4h17.6c4.8 0 8-2.4 8-7.2-.8-4.8-4-7.2-8.8-7.2zM317.6 284.4c-1.6-.8-4-.8-6.4-.8h-16v12.8h16c2.4 0 4.8 0 6.4-.8s2.4-3.2 2.4-5.6c.8-3.2-.8-4.8-2.4-5.6z"
                            fill="#fff" data-original="#228fe0" xmlns="http://www.w3.org/2000/svg" />
                        <g xmlns="http://www.w3.org/2000/svg">
                            <path fill="#fff" data-original="#2fabf7"
                                d="M247.2 326L236 314v13.6h-26.4l-16-18.4-17.6 18.4h-52.8v-56h53.6l16.8 18.4 8-9.6-20-20h-70.4v78.4h70.4l12-12 10.4 12h43.2zM164 242.8l-10.4-11.2h-4.8v-4.8l-12-12-8 16.8h-11.2l-19.2-44v44H71.2l-5.6-12H38.4l-5.6 12H18.4l24-56h20l22.4 53.6v-53.6h12l-11.2-11.2h-12v9.6l-4-9.6H34.4l-16 37.6L0 242.8H41.6l4.8-12h11.2l5.6 12H108v-9.6l4 9.6h23.2l4-9.6v9.6z" />
                            <path fill="#fff" data-original="#2fabf7" d="M127.2 206l-12.8-12.8L124 214z" />
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M491.2 334.8c7.2-4.8 12-12.8 12.8-21.6L492.8 302c.8 2.4 1.6 4.8 1.6 8 0 4.8-1.6 8.8-4.8 12-3.2 3.2-8.8 5.6-16.8 5.6h-25.6v-12h25.6c2.4 0 4 0 5.6-1.6.8-.8 1.6-2.4 1.6-4s-.8-3.2-1.6-4c-.8-.8-2.4-1.6-4.8-1.6-12.8-.8-28 0-28-17.6 0-8 4.8-15.2 16.8-16.8l-8.8-8.8c-1.6.8-2.4 1.6-3.2 1.6V258h-36.8c-5.6 0-12.8 1.6-16 4.8V258H332v4.8c-4.8-4-13.6-4.8-17.6-4.8h-43.2v4.8c-4-4-13.6-4.8-18.4-4.8h-48l-11.2 12-10.4-12h-8.8l24 24 12-12.8h42.4c10.4 0 22.4 3.2 22.4 18.4 0 16-11.2 19.2-23.2 19.2h-16v12l12 12v-12h4c5.6 0 12.8 0 18.4-2.4V338h36v-20.8h1.6c2.4 0 2.4 0 2.4 2.4V338h108.8c7.2 0 14.4-1.6 18.4-4.8v4.8H472c6.4.8 13.6 0 19.2-3.2zM332 306c1.6 2.4 2.4 5.6 2.4 10.4v11.2h-13.6v-7.2c0-3.2 0-8.8-2.4-11.2-1.6-2.4-4.8-2.4-9.6-2.4h-14.4v20.8h-13.6v-56.8h30.4c6.4 0 12 0 16 2.4s7.2 6.4 7.2 12.8c0 8.8-5.6 13.6-9.6 15.2 4 1.6 6.4 3.2 7.2 4.8zm55.2-23.2H356v10.4h30.4v11.2H356v11.2h31.2v12h-44.8v-56.8h44.8v12zm33.6 44.8h-25.6v-12h25.6c2.4 0 4 0 5.6-1.6.8-.8 1.6-2.4 1.6-4s-.8-3.2-1.6-4c-.8-.8-2.4-1.6-4.8-1.6-12.8-.8-28 0-28-17.6 0-8 4.8-16.8 19.2-16.8h26.4v13.6h-24.8c-2.4 0-4 0-5.6.8s-1.6 2.4-1.6 4c0 2.4 1.6 3.2 3.2 4s3.2.8 4.8.8h7.2c7.2 0 12 1.6 15.2 4.8 2.4 2.4 4 6.4 4 12 0 12-7.2 17.6-20.8 17.6z"
                                fill="#fff" data-original="#228fe0" />
                            <path
                                d="M459.2 288.4c0 2.4.8 3.2 3.2 4 1.6.8 3.2.8 4.8.8h7.2c4.8 0 8 .8 11.2 2.4l-12-12h-7.2c-2.4 0-4 0-5.6.8-.8.8-1.6 2.4-1.6 4zM431.2 240.4l1.6 2.4h.8zM387.2 196.4l13.6 32.8V210z"
                                fill="#fff" data-original="#228fe0" />
                            <path
                                d="M250.4 222.8h1.6c1.6 0 1.6 0 1.6 2.4v17.6h57.6V238c4.8 2.4 12 4.8 21.6 4.8h24l4.8-12.8h11.2l4.8 12.8H424v-8l-11.2-11.2v8.8h-27.2l-4-12.8h-28l-4.8 12.8h-15.2c-6.4 0-14.4-1.6-19.2-6.4-4.8-4.8-7.2-11.2-7.2-21.6 0-8 1.6-16 7.2-22.4 4-4.8 11.2-6.4 20-6.4h12.8v12h-12.8c-4.8 0-7.2.8-10.4 3.2-2.4 2.4-4 7.2-4 12.8 0 6.4.8 10.4 4 13.6 2.4 2.4 5.6 3.2 9.6 3.2h5.6l18.4-44h8l-11.2-11.2h-20.8c-8.8 0-16 1.6-22.4 4.8v-4.8H276v4.8c-4-3.2-8.8-4.8-15.2-4.8H132l-8.8 20-8.8-20H79.2l11.2 11.2h16L120 206l4.8 4.8 14.4-35.2h22.4v56.8H148v-44l-13.6 32 23.2 23.2h92l.8-20.8zm36.8-47.2h13.6v56.8h-13.6v-56.8zm-70.4 12h-31.2V198H216v11.2h-30.4v11.2h31.2v12H172v-56.8h44.8v12zm22.4 44h-13.6v-56.8H256c7.2 0 12 0 16 2.4s6.4 6.4 6.4 12.8c0 8.8-5.6 13.6-9.6 15.2 3.2.8 5.6 3.2 6.4 4.8 1.6 3.2 2.4 5.6 2.4 10.4v11.2H264v-7.2c0-3.2 0-8-2.4-11.2-.8-1.6-3.2-1.6-8-1.6h-14.4v20z"
                                fill="#fff" data-original="#228fe0" />
                        </g>
                    </svg>
                    <div class="credit-name">
                        <div class="credit-type">American Express</div>
                        <div class="credit-status">Payment Waiting</div>
                    </div>
                    <div class="credit-money is-wait">+$53.25</div>
                </div>
                <div class="credit-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 469.351 469.351"
                        style="background-color: #0365b3">
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M356.626 85.086a37.887 37.887 0 00-38.763-8.277 10.668 10.668 0 00-7.168 8.533l-2.987 20.523c-4.529 30.998-31.052 54.019-62.379 54.144h-42.667a10.666 10.666 0 00-10.347 8.085l-32 128a10.667 10.667 0 0010.346 13.248h53.333a10.666 10.666 0 0010.347-8.085l19.307-77.248h41.6c31.934.106 59.792-21.66 67.413-52.672l7.872-31.552a56.099 56.099 0 00-13.907-54.699z"
                            fill="#e6f0f9" data-original="#03a9f4" />
                        <g xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.664 437.342C4.773 437.341-.002 432.564 0 426.673c0-.869.107-1.735.317-2.578l10.667-42.453v-.448l10.667-42.432a10.666 10.666 0 0110.347-8.085h27.136c14.728-.003 26.669 11.933 26.673 26.661 0 2.181-.267 4.354-.795 6.47l-2.667 10.667c-2.967 11.875-13.637 20.205-25.877 20.203H29.672l-8.64 34.581a10.667 10.667 0 01-10.368 8.083zm24.341-64h21.461a5.335 5.335 0 005.163-4.053l2.667-10.667a5.311 5.311 0 00-5.163-6.634H40.338l-5.333 21.354zM124.733 437.342h-15.189c-16.33.004-29.571-13.231-29.575-29.561a29.56 29.56 0 01.882-7.175l1.408-5.675c3.157-12.736 14.612-21.662 27.733-21.611h15.189c16.33.028 29.545 13.289 29.517 29.619a29.561 29.561 0 01-.887 7.138l-1.408 5.675c-3.16 12.705-14.579 21.614-27.67 21.59zm-23.168-31.552a8.234 8.234 0 007.979 10.219h15.189a7.147 7.147 0 006.955-5.419l1.408-5.675a8.234 8.234 0 00-7.979-10.219h-15.189a7.147 7.147 0 00-6.955 5.419l-1.408 5.675z"
                                fill="#fff" data-original="#283593" />
                            <path
                                d="M138.664 437.342a10.667 10.667 0 01-10.347-13.248l10.667-42.667c1.426-5.72 7.218-9.202 12.939-7.776 5.72 1.426 9.202 7.218 7.776 12.939l-10.667 42.667a10.666 10.666 0 01-10.368 8.085z"
                                fill="#fff" data-original="#283593" />
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M266.664 437.342a10.667 10.667 0 01-10.347-13.248l10.667-42.453v-.448l10.667-42.432a10.666 10.666 0 0110.347-8.085h27.136c14.728-.003 26.669 11.933 26.673 26.661 0 2.181-.267 4.354-.795 6.47l-2.667 10.667c-2.967 11.875-13.637 20.205-25.877 20.203h-26.795l-8.64 34.581a10.669 10.669 0 01-10.369 8.084zm24.341-64h21.483a5.335 5.335 0 005.163-4.053l2.667-10.667a5.312 5.312 0 00-5.163-6.634h-18.816l-5.334 21.354zM380.733 437.342h-15.189c-16.33.004-29.571-13.231-29.575-29.561a29.56 29.56 0 01.882-7.175l1.408-5.675c3.157-12.736 14.612-21.662 27.733-21.611h15.189c16.33-.004 29.571 13.231 29.575 29.561a29.56 29.56 0 01-.882 7.175l-1.408 5.675c-3.157 12.736-14.612 21.662-27.733 21.611zm-23.168-31.552a8.234 8.234 0 007.979 10.219h15.189a7.147 7.147 0 006.955-5.419l1.408-5.675a8.234 8.234 0 00-7.979-10.219h-15.189a7.147 7.147 0 00-6.955 5.419l-1.408 5.675z"
                                fill="#e6f0f9" data-original="#03a9f4" />
                            <path
                                d="M394.664 437.342a10.667 10.667 0 01-10.347-13.248l10.667-42.667c1.426-5.72 7.218-9.202 12.939-7.776 5.72 1.426 9.202 7.218 7.776 12.939l-10.667 42.667a10.666 10.666 0 01-10.368 8.085z"
                                fill="#e6f0f9" data-original="#03a9f4" />
                        </g>
                        <g xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M202.664 426.676a10.668 10.668 0 01-8.875-4.757l-21.333-32c-3.27-4.901-1.947-11.525 2.955-14.795s11.525-1.947 14.795 2.955l21.333 32c3.275 4.897 1.961 11.521-2.935 14.797a10.681 10.681 0 01-5.94 1.8z"
                                fill="#fff" data-original="#283593" />
                            <path
                                d="M181.33 458.676c-5.891-.002-10.665-4.78-10.663-10.671a10.667 10.667 0 012.471-6.823l53.333-64c3.776-4.524 10.505-5.131 15.029-1.355 4.524 3.776 5.131 10.505 1.355 15.029l-53.333 64a10.663 10.663 0 01-8.192 3.82z"
                                fill="#fff" data-original="#283593" />
                        </g>
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M437.33 437.342a10.667 10.667 0 01-10.347-13.248l21.333-85.333c1.426-5.72 7.218-9.202 12.939-7.776 5.72 1.426 9.202 7.218 7.776 12.939l-21.333 85.333a10.665 10.665 0 01-10.368 8.085z"
                            fill="#e6f0f9" data-original="#03a9f4" />
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="M321.405 29.129a53.908 53.908 0 00-40.661-18.453H159.997a10.666 10.666 0 00-10.496 8.768L106.834 254.11c-1.049 5.797 2.801 11.346 8.598 12.395.626.113 1.262.17 1.898.17h64a10.666 10.666 0 0010.347-8.085l19.328-77.248h34.325c41.958-.165 77.478-31.012 83.52-72.533l5.333-36.459a54.332 54.332 0 00-12.778-43.221z"
                            fill="#fff" data-original="#283593" />
                    </svg>
                    <div class="credit-name">
                        <div class="credit-type">Paypal</div>
                        <div class="credit-status">Payment Cancelled</div>
                    </div>
                    <div class="credit-money is-cancel">+$3.945</div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>