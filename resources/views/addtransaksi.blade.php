<html>
	<a href="/transaksi/gettransaksi"> back</a>
	
	<br/>
	<br/>

    <table border = "0">
        <form action="/transaksi/posttransaksi" method="post">
		    {{ csrf_field() }}
            <tr> <td>Absen</td><td><input type="Number" name="absen" required="required"></td></tr> 
            <tr> <td>Jumlah Transaksi</td><td><input type="Number" name="jumlah" required="required"></td></tr> 
            <tr> <td>Minggu</td><td><select name="minggu" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="all">all</option>
            </select></td></tr> 
            <tr> <td>Bulan</td><td><select name="bulan" id="">
                <option value="januari">januari</option>
                <option value="februari">februari</option>
                <option value="maret">maret</option>
                <option value="april">april</option>
                <option value="mei">mei</option>
                <option value="juni">juni</option>
                <option value="juli">juli</option>
                <option value="agustus">agustus</option>
                <option value="september">september</option>
                <option value="oktober">oktober</option>
                <option value="november">november</option>
                <option value="desember">desember</option>
            </select></td></tr>
            <tr> <td>Keterangan</td><td><select name="keterangan" id="">
                <option value="masuk">masuk</option>
                <option value="keluar">keluar</option>
            </select></td></tr>
		    <tr> <td>Catatan</td><td><textarea name="catatan" required="required"></textarea></td></tr> 
		    <tr><td><input type="submit" value="Save"><td></tr> 
	    </form>
 </table>
	
 
</body>
</html>