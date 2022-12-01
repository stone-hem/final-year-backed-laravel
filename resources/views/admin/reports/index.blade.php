<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanic Autos</title>
    <link rel="stylesheet" href="{{ asset('stylings/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('stylings/responsive-table.css') }}">
</head>
<body>
  <div class="wrapper">
    <div class="main-container">
      @include('layouts.inc.header')
      @section('admin-header')
      @endsection
        <div class="user-box first-box">
            <div class="activity card" style="--delay: .5s">
              <div style="display: flex; justify-content:space-between;">
                <div class="title">Technicians</div>
                <div class="title"><a href="{{ url('pdf/technicians') }}" target="blank">View Pdf</a> </div>
              </div>
                <div class="container">
                      <table class="rwd-table">
                        <tbody>
                          <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>location</th>
                            <th>Contact</th>
                          </tr>
                          @foreach ($technician as $item)
                          <tr>
                            <td data-th="Image">
                                <img class="discount-img"
                                src="{{ asset('storage/'.$item->org_pic) }}"
                                    alt="">
                               </td>
                            <td data-th="Name">
                             {{$item->name}}
                            </td>
                            <td data-th="Description">
                              {{$item->description}}
                            </td>
                            <td data-th="location">
                                {{$item->location}}
                              </td>
                              <td data-th="contact">
                                {{$item->phone_number}}
                              </td>
                          </tr>
                          @endforeach
                         
                        </tbody>
                      </table>
                      <h4>developed by Hem</h4>
                    </div>
            </div>
            <div class="discount card" style="--delay: .4s">
              <div style="display: flex; justify-content:space-between;">
                <div class="title">firms</div>
                <div class="title"><a href="{{ url('pdf/firms') }}" target="blank">View Pdf</a> </div>
              </div>
                <div class="container">
                    <table class="rwd-table">
                      <tbody>
                        <tr>
                          <th>Name</th>
                          <th>Description</th>
                          <th>location</th>
                          <th>Image</th>
                        </tr>
                        @foreach ($firm as $item)
                        <tr>
                          <td data-th="Name">
                           {{$item->name}}
                          </td>
                          <td data-th="Description">
                            {{$item->description}}
                          </td>
                          <td data-th="location">
                              {{$item->location}}
                            </td>
                            <td data-th="Image">
                                <img class="discount-img"
                                src="{{ asset('storage/'.$item->org_pic) }}"
                                    alt="">
                               </td>
                        </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                    <h4>developed by Hem</h4>
                  </div>
            </div>
        </div>
        <div class="user-box first-box">
            <div class="activity card" style="--delay: .3s">
              <div style="display: flex; justify-content:space-between;">
                <div class="title">Services</div>
                <div class="title"><a href="{{ url('pdf/services') }}" target="blank">View Pdf</a> </div>
              </div>
                
                <div class="container">
                    <table class="rwd-table">
                      <tbody>
                        <tr>
                            <th>Image</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>date created</th>
                          <th>Action</th>
                        </tr>
                        @foreach ($service as $item)
                        <tr>
                            <td data-th="Image">
                                <img class="discount-img"
                                src="{{ asset('storage/'.$item->picture) }}"
                                    alt="">
                               </td>
                          <td data-th="Name">
                           {{$item->name}}
                          </td>
                          <td data-th="email">
                            {{$item->description}}
                          </td>
                          <td data-th="date">
                              {{$item->created_at}}
                            </td>
                            <th>Action</th>           
                        </tr>
                        @endforeach       
                      </tbody>
                    </table>
                    <h4>developed by Hem</h4>
                  </div>
                  {{ $service->onEachSide(2)->links() }}
            </div>
            <div class="discount card" style="--delay: .2s">
              <div style="display: flex; justify-content:space-between;">
                <div class="title">Users</div>
                <div class="title"><a href="{{ url('pdf/users') }}" target="blank">View Pdf</a> </div>
              </div>
                <div class="container">
                    <table class="rwd-table">
                      <tbody>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>date created</th>
                          <th>Action</th>
                        </tr>
                        @foreach ($user as $item)
                        <tr>
                          <td data-th="Name">
                           {{$item->name}}
                          </td>
                          <td data-th="email">
                            {{$item->email}}
                          </td>
                          <td data-th="date">
                              {{$item->created_at}}
                            </td>
                            <th>Action</th>           
                        </tr>
                        @endforeach       
                      </tbody>
                    </table>
                    <h4>developed by Hem</h4>
                  </div>
                  {{ $user->onEachSide(2)->links() }}
            </div>
        </div>

    </div>
</div>
<script src="{{ asset('js/live-time.js') }}"></script>
</body>
</html>