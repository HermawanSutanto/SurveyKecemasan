<table>
    <thead>
        <tr>
            <th>Hasil Tes</th>
            <th>Interpretasi</th>
            <th>Tanggal Tes</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($riwayatTes as $riwayat)
            <tr>
                <td>{{ $riwayat->nama_lengkap }}</td>
                <td>{{ $riwayat->hasil_tes }}</td>
                <td>{{ $riwayat->interpretasi }}</td>
                <td>{{ \Carbon\Carbon::parse($riwayat->created_at)->format('d M Y') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
