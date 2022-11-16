<style>
    .card{
        height: 204px; 
    width: 323px; 
    background-image: url('/assets/AdminLTE/dist/img/bg.png');
    }
</style>

<body>
    <div class="card">
        <img style="position: absolute; width: 27px; height: 34px; left: 25px; top: 17px;" src="/assets/AdminLTE/dist/img/himakom.png">
        <img style="position: absolute; width: 31px; height: 34px; left: 251px; top: 17px;" src="/assets/AdminLTE/dist/img/unila.png">
        <span style="position: absolute; width: 105px; height: 14px; left: 99px; top: 22px; font-family: 'Inter'; font-style: normal; font-weight: 700; font-size: 12px; line-height: 15px; text-align: center; color: #FFFFFF;"><b>KARTU ALUMNI</b></span>
        <span style="position: absolute; width: 185px; height: 9px; left: 58px; top: 36px; font-family: 'Inter'; font-style: normal; font-weight: 600; font-size: 10px; line-height: 12px; text-align: center; color: #FFFFFF;"><b>Jurusan Ilmu Komputer FMIPA UNILA</b></span>
        <table cellspacing="0em" style="position: absolute; width: 236px; height: 11px; left: 39px; top: 71px; font-family: 'Inter'; font-style: normal; font-weight: 500; font-size: 10px; line-height: 12px; color: #FFFFFF;">
            <div class="row">
                <tr>
                    <td scope="col">Nama</td>
                    <td>: <?= $alumni['nama'] ?></td>
                </tr>
                <tr>
                    <td scope="col">Angkatan</td>
                    <td>: <?= $alumni['angkatan'] ?></td>
                </tr>
                <tr>
                    <td scope="col">Tahun Lulus</td>
                    <td>: <?= $alumni['tahunlulus'] ?></td>
                </tr>
            </div>
        </table>
    </div>  
</body> 
<script>
		window.print();
	</script>