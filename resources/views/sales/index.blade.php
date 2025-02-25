<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <main>
        <h1>{{ $title }}</h1>
        <p>Selamat datang di halaman penjualan! Di sini Anda bisa melihat berbagai transaksi penjualan, produk terbaru,
            serta informasi terkait lainnya.</p>

        <section>
            <h2>Daftar Transaksi Penjualan</h2>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Kuantitas</th>
                        <th>Harga</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh data transaksi (sesuaikan dengan data nyata) -->
                    <tr>
                        <td>1</td>
                        <td>Produk A</td>
                        <td>2</td>
                        <td>Rp 50.000</td>
                        <td>Rp 100.000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Produk B</td>
                        <td>3</td>
                        <td>Rp 30.000</td>
                        <td>Rp 90.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Produk C</td>
                        <td>1</td>
                        <td>Rp 70.000</td>
                        <td>Rp 70.000</td>
                    </tr>
                    <!-- Tambahkan data lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>
