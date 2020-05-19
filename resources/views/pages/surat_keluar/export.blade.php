<h3 class="text-center">
    Data Surat Keluar UKM Polytechnic Computer Club Periode {{ $periode->periode }}
</h3>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Tahun</th>
            <th>Bulan</th>
            <th>Penerima</th>
            <th>Perihal</th>
            <th>Nomor Surat</th>
            <th>Tanggal Surat</th>
            <th>Nama Kegiatan</th>
            <th>Tanggal Pelaksanaan</th>
            <th>Isi Surat</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($surat_keluar as $surat)
        <tr>
            <td>{{ $surat->tahun }}</td>
            <td>{{ $surat->bulan }}</td>
            <td>{{ $surat->penerima }}</td>
            <td>{{ $surat->perihal }}</td>
            <td>{{ $surat->nomor_surat }}</td>
            <td>{{ date('d F Y', strtotime($surat->tanggal_surat)) }}</td>
            <td>{{ $surat->nama_kegiatan }}</td>
            <td>{{ date('d F Y', strtotime($surat->tanggal_pelaksanaan)) }}</td>
            <td>{{ $surat->isi_surat }}</td>
            <td>{{ $surat->keterangan }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="10" class="text-center">Data Surat Keluar Kosong</td>
        </tr>
        @endforelse
    </tbody>
</table>