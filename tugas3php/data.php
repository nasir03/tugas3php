<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Nilai</th>
            <th>Keterangan</th>
            <th>Grade</th>
            <th>Predikat</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $mahasiswa = [
            ["Muhamad Nasir", "12344", 85, "lulus", "A", "Memuaskan"],
            ["Ahmad Ali", "12345", 70, "lulus", "B", "Baik"],
            ["Budi Pekerti", "12346", 60, "lulus", "C", "Cukup"],
            ["Dian Sujaya", "12347", 55, "lulus", "D", "Kurang"],
            ["Erika Susanty", "12348", 40, "tidak lulus", "E", "Gagal"],
            ["Fani Gunawan", "12349", 90, "lulus", "A", "Memuaskan"],
            ["Gita Sugiarto", "12350", 75, "lulus", "B", "Baik"],
            ["Hadi Samsury", "12351", 65, "lulus", "C", "Cukup"],
            ["Indra Jeggel", "12352", 50, "tidak lulus", "D", "Kurang"],
            ["Jokowi Dodol", "12353", 95, "lulus", "A", "Memuaskan"]
        ];

        $totalNilai = 0;
        $nilaiTertinggi = $mahasiswa[0][2]; 
        $nilaiTerendah = $mahasiswa[0][2];

        foreach ($mahasiswa as $key => $data) {
            echo "<tr>";
            echo "<td>".($key+1)."</td>";
            foreach ($data as $item) {
                echo "<td>$item</td>";
            }
            echo "</tr>";
           
            $totalNilai += $data[2];
            
            
            if ($data[2] > $nilaiTertinggi) {
                $nilaiTertinggi = $data[2];
            }
            
            
            if ($data[2] < $nilaiTerendah) {
                $nilaiTerendah = $data[2];
            }
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4">Nilai Tertinggi</td>
            <td colspan="3"><?php echo $nilaiTertinggi; ?></td>
        </tr>
        <tr>
            <td colspan="4">Nilai Terendah</td>
            <td colspan="3"><?php echo $nilaiTerendah; ?></td>
        </tr>
        <tr>
            <td colspan="4">Nilai Rata-rata</td>
            <td colspan="3"><?php echo $totalNilai / count($mahasiswa); ?></td>
        </tr>
        <tr>
            <td colspan="4">Jumlah Mahasiswa</td>
            <td colspan="3"><?php echo count($mahasiswa); ?></td>
        </tr>
        <tr>
            <td colspan="4">Jumlah Keseluruhan Nilai</td>
            <td colspan="3"><?php echo $totalNilai; ?></td>
        </tr>
    </tfoot>
</table>
