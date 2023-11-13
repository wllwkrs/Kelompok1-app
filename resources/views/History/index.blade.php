<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.2">
    <title>UPK Poliwangi</title>
    <style>
       
        table {
            border-collapse: collapse;
            width: 55%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #219EBC;
            color: #fff;
        }

        form {
            margin-bottom: 20px;
        }
    </style>
    <//link rel="stylesheet" href="{{asset('fontawesome/all.min.css')}}">
</head>
<body>
<!-- Header -->
    <header style="background-color: #219EBC; padding: 10px; color: #fff; text-align: left;">
    <img src="https://s3-alpha-sig.figma.com/img/fec1/ede2/1075ddce049087a9c1928f591319ba88?Expires=1700438400&Signature=al-CBcRIeBEJm4tmyJSpyfeyJN-qllWaSGpL8V-tefehj3T-kKGx5JSfxDx87zlqFdgYsvbZySY~azVGcB~NNSrjklywtL47eA8VNIk~CN-1l8282ymxEvx~UUE0q2w-WAEbbZcsUIpGIOVEEcRutfqq4ZrkLvjN5pOx~59CEg3HGJIjAuXfxZSa-6Z9mb5fzlKsUtlcGRxL3MP5aTRdA9BqG59H4hrjSEqBRBWDSRJVT1j7DzouZ7U054Dhr9PGLTn1~CIVG~zAcFUlt75Zn1tU4TgxU1FgRLltgsNad9ruGE1pywZG0~VokejMKhJ5MUnD0TyZAw2eicrA-HjNXQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="User Icon" style="width: 10vh; height: 10vh; float: left; margin: 20px;">

        <h4 style="margin-bottom: 1px;">UPK Poliwangi</h4>
        <h4 style="margin-bottom: 1px;">Administrator</h4>
        <center>
        <img src="https://static.vecteezy.com/system/resources/previews/005/005/788/original/user-icon-in-trendy-flat-style-isolated-on-grey-background-user-symbol-for-your-web-site-design-logo-app-ui-illustration-eps10-free-vector.jpg" alt="User Icon" style="width: 7vh; height: 7vh; float: center;">
        <center>
        
    </header>

<!-- Sidebar -->
<aside style="width: 300px; background-color: #219EBC; color: #fff; padding: 3px; position: fixed; height: 100%;">
    <ul style="list-style-type: none; padding: 0;">
        <li style="margin-bottom: 10px;">
        <img src="https://cdn-icons-png.flaticon.com/128/3917/3917014.png" alt="User Icon" style="width: 4vh; height: 4vh; float: Left; margin-right: 10px; > </img> 
        <a href="/dashboard" style="text-decoration: none; color: #fff;">Dashboard</a></li>

        <li style="margin-bottom: 10px;">
        <img src="https://cdn-icons-png.flaticon.com/128/4862/4862473.png" alt="User Icon" style="width: 4vh; height: 4vh; float: Left; margin-right: 10px;">
        <a href="/inventaris" style="text-decoration: none; color: #fff;">Inventaris</a></li>

        <li style="margin-bottom: 10px;">
        <img src="https://cdn-icons-png.flaticon.com/128/9217/9217313.png" alt="User Icon" style="width: 4vh; height: 4vh; float: Left; margin-right: 10px;">
        <a href="/laporan" style="text-decoration: none; color: #fff;">Laporan</a></li>

        <li style="margin-bottom: 10px;">
        <img src="https://cdn-icons-png.flaticon.com/128/3524/3524659.png" alt="User Icon" style="width: 4vh; height: 4vh; float: Left; margin-right: 10px;"> 
        <a href="/pengaturan" style="text-decoration: none; color: #fff;">Pengaturan</a></li>

    </ul>
</aside>





<!-- Main Content Area -->
<main style="margin-left: 325px; padding: 20px;">
<h1>Laporan</h1>

    <form action="">
        <input type="text" placeholder="" style="width: 675px;">
        <button type="submit" style="margin-left: 15px; width: 60px;">Filter</button>
        <button type="submit" style="margin-left: 20px; width: 60px;">Cetak</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kelas</th>
                <th>Mata Kuliah</th>
                <th>Ruang</th>
            </tr>
        </thead>
        <tbody>
                @php
                    $data = [
                        ['1', 'A', 'Matematika', '101'],
                        ['2', 'B', 'Bahasa Indonesia', '102'],
                        ['3', 'C', 'Fisika', '103'],
                        // Tambahkan data lainnya sesuai kebutuhan
                    ];
                @endphp

                @foreach ($data as $row)
                    <tr>
                        @foreach ($row as $column)
                            <td>{{ $column }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
    </table>
    @yield('content')
</main>



</body>
</html>