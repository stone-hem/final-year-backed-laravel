<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

.rwd-table {
    margin: auto;
    min-width: 300px;
    max-width: 100%;
    border-collapse: collapse;
    font-size: smaller;
  }
  
  .rwd-table tr:first-child {
    border-top: none;
    background: #252954;
    color: wheat;
 
  }
  
  .rwd-table tr {
    background-color: grey;
  }
  
  .rwd-table th {
    display: none;
  }
  
  .rwd-table td {
    display: block;
  }
  
  .rwd-table td:first-child {
    margin-top: .5em;
  }
  
  .rwd-table td:last-child {
    margin-bottom: .5em;
  }
  
  .rwd-table td:before {
    content: attr(data-th) ": ";
    width: 120px;
    display: inline-block;
    color: #000;
  }
  
  .rwd-table th,
  .rwd-table td {
    text-align: left;
  }
  
  .rwd-table {
    color: white;
    border-radius: .4em;
    overflow: hidden;
  }
  
  .rwd-table tr {
    border-color: #bfbfbf;
  }
  
  .rwd-table th,
  .rwd-table td {
    padding: .5em 1em;
  }
  @media screen and (max-width: 601px) {
    .rwd-table tr:nth-child(2) {
      border-top: none;
    }
  }
  @media screen and (min-width: 600px) {
    .rwd-table tr:hover:not(:first-child) {
      background-color: #0e0e23;
    }
    .rwd-table td:before {
      display: none;
    }
    .rwd-table th,
    .rwd-table td {
      display: table-cell;
      padding: .25em .5em;
    }
    .rwd-table th:first-child,
    .rwd-table td:first-child {
      padding-left: 0;
    }
    .rwd-table th:last-child,
    .rwd-table td:last-child {
      padding-right: 0;
    }
    .rwd-table th,
    .rwd-table td {
      padding: 1em !important;
    }
  }
  
  
  /* THE END OF THE IMPORTANT STUFF */
  
  /* Basic Styling */

  .container {
    display: block;
    text-align: center;
  }
  h4 {
    display: inline-block;
    position: relative;
    text-align: center;
    font-size: 0.8em;
  }
  h4:before {
    content: "\25C0";
    position: absolute;
    left: -50px;
    
  }
 
 
  
  
    </style>
</head>
<body>
  <div class="container">
    <h2>Services</h2>
    <table class="rwd-table">
      <tbody>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>date created</th>
         
        </tr>
        @foreach ($service as $item)
        <tr>
           
          <td data-th="Name">
           {{$item->name}}
          </td>
          <td data-th="email">
            {{$item->description}}
          </td>
          <td data-th="date">
              {{$item->created_at}}
            </td>
                    
        </tr>
        @endforeach       
      </tbody>
    </table>
    <h4>developed by Hem</h4>
  </div>
</body>
</html>