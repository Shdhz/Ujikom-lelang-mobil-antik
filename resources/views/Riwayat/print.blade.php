<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
</head>
<body onload="window.print()">
    <div class="container">
    <div class="card shadow mt-3">
        <h3 class="p-4">Winner Auction Data :</h3>
        <div class="card-body">
            <div class="table-responsive ">
                <table class="table table-striped-row overflow-x-auto " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Auction id</th>
                            <th>Auction item</th>
                            <th>Winner</th>
                            <th>Starting Price</th>
                            <th>Final Price</th>
                            <th>Auction Start date</th>
                            <th>Auction End date</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($lelang as $i)
                      <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $i->id_lelang }}</td>
                            <td>{{ $i->barang->nama }}</td>
                            <td>{{ $i->user->name  }}</td>
                            <td>{{ $i->barang->harga_awal  }}</td>
                            <td>{{ $i->harga_penawar  }}</td>
                            <td>{{ $i->created_at  }}</td>
                            <td>{{ $i->updated_at  }}</td>
                        </tr>      
                      @endforeach
                    </tbody>
                    </tbody>
                </table>
            </div>
        </div>
      </table>
    </div>
</div>
</body>
</html>
