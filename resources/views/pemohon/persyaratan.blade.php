@extends('app')
@section('title')
	Persyaratan
@endsection
@section('menu')
    <li><a href="{{ URL::to('izinair/pemohon') }}">home</a></li>
    <li class="active"><a href="{{ URL::to('izinair/pemohon/persyaratan') }}">persyaratan</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/daftarizin') }}">daftar izin</a></li>
    <li><a href="{{ URL::to('izinair/pemohon/tentang') }}">tentang</a></li>
@endsection
@section('navigation')
	<ol class="breadcrumb">
	  <li><a href="{{URL::to('izinair/pemohon')}}">Home</a></li>
	  <li class="active"><a href="{{URL::to('izinair/pemohon/persyaratan')}}">Persyaratan</a></li>
	</ol>
@endsection
@section('content')
	<div class="main">
	<h6>
        <div class= "tabular">
	<div class="container">
	<ol class="breadcrum">
	<input id="tab1" type="radio" name="tabs" checked>
    	<label for="tab1" class="tabular">Air Bawah Tanah</label>
    <input id="tab2" type="radio" name="tabs">
    	<label for="tab2" class="tabular">Air Permukaan</label>
    <input id="tab3" type="radio" name="tabs">
    	<label for="tab3" class="tabular">Air Buangan</label>
    <input id="tab4" type="radio" name="tabs">
    	<label for="tab4" class="tabular">Alur,Bentuk,Dimensi...</label>

  	<section id="content1">
    	<h3>Persyaratan Izin Pengelolaan Air Bawah Tanah</h3>
    	<p>
			<tbody><tr>
		    	<td colspan="2" align="center">&nbsp;</td>
		  	</tr>
		    <tr>
		    	<td width="30">&nbsp;</td>
		    	<td>&nbsp;</td>
		  	</tr>
		  	<tr align="justify" valign="top">
		    	<td><div align="center"></div></td>
		    	<td>A. Objek</td>
		  	</tr>
		  	<tr align="justify" valign="top">
		    	<td>&nbsp;</td>
		    	<br>
		    	<td>Setiap orang atau Badan Hukum yang melakukan kegiatan eksplorasi dan pengeboran termasuk penggalian, penurapan dan pengambilan air bawah tanah untuk berbagai keperluan selain : </td>
		  	</tr>
		  	<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellpadding="0" cellspacing="0">
			    <tbody><tr align="justify">
			        <td width="30" align="justify" valign="top">1.</td>
			        <td>Keperluan air minum rumah tangga dengan jumlah pengambilan kurang dari 100 (seratus) meter kubik per bulan dengan kedalaman Sumur Bor atau Sumur gali 40 - 60m dan tidak digunakan untuk tujuan komersial; </td>
			    </tr>
			    <tr align="justify">
			        <td valign="top">2.</td>
			        <td>Keperluan peribadatan, penanggulangan kebakaran dan keperluan penelitian dengan kedalaman Sumur Bor atau Sumur Gali 40 - 60m; </td>
			    </tr>
			    <tr align="justify">
			        <td valign="top">3.</td>
			        <td>Keperluan pembuatan sumur imbuhan; </td>
			    </tr>
			    <tr align="justify">
			        <td valign="top">4.</td>
			        <td>Keperluan pembuatan sumur pantau. </td>
			    </tr>
				</tbody></table></td>
		  	</tr>
		  	<tr align="justify" valign="top">
		    	<td width="30"><div align="center"> </div></td>
		    	<br>
		    	<td>B. Ruang Lingkup Izin Pengelolaan Air Bawah Tanah :</td>
		  	</tr>
			<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellspacing="0" cellpadding="0">
			        <tbody><tr align="justify">
			            <td width="30" align="justify" valign="top">1.</td>
			            <td>Izin Usaha Perusahaan Pengelolaan Air Bawah Tanah; </td>
				        </tr>
				        <tr align="justify">
				           	<td valign="top">2.</td>
				           	<td>Izin Pengeboran/penggalian/penurapan air bawah tanah; </td>
				        </tr>
				        <tr align="justify">
				           	<td valign="top">3.</td>
				           	<td>Izin Pengambilan Air Bawah Tanah; </td>
				        </tr>
				        <tr align="justify">
				          	<td valign="top">4.</td>
				           	<td>Izin Eksplorasi Air Bawah Tanah; </td>
				        </tr>
				        <tr align="justify">
				           	<td valign="top">5.</td>
				           	<td>Izin Juru Bor. </td>
				        </tr>
			    	</tbody>
			    </table></td>
			</tr>
			<tr align="justify" valign="top">
				<td><div align="center"></div></td>
				<br>
			    <td>C. Masa Berlaku </td>
			</tr>
			<tr valign="top" align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellpadding="0" cellspacing="0">
			    <tbody><tr align="justify">
			        <td width="30" align="justify" valign="top">a.</td>
			        <td>Izin Usaha Perusahaan Pengeboran ABT berlaku 3 tahun dan dapat diperpanjang; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">b.</td>
			        	<td>Izin Pengeboran/Penggalian/Penurapan ABT berlaku 6 bulan dan dapat diperpanjang 1 x 3 bulan; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">c.</td>
			        	<td>Izin Pengambilan ABT berlaku 1 tahun dan dapat diperpanjang; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">d.</td>
			        	<td>Izin Eksplorasi ABT berlaku 1 tahun dan dapat diperpanjang; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">e.</td>
			        	<td>Izin Juru Bor berlaku 3 tahun dan dapat diperpanjang. </td>
			      	</tr>
				</tbody></table></td>
			</tr>
			<tr align="justify">
			    <td><div align="center"></div></td>
			    <br>
			    <td>D. Persyaratan</td>
			</tr>
			<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellpadding="0" cellspacing="0">
			    <tbody>
			    	<tr align="justify">
			        	<td width="30" align="justify" valign="top">1.</td>
			        	<td>Mengisi formulir permohonan izin pada website perizinan air Kota Bandung; </td>
			      	</tr>
			    	<tr align="justify">
			        	<td width="30" align="justify" valign="top">2.</td>
			        	<td>Photo Copy KTP Pemohon; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">3.</td>
			        	<td>Rekomendasi dan saran teknik dari Dinas Pertambangan &amp; Energi Propinsi Jabar; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">4.</td>
			        	<td>Sertifikat dari Asosiasi dan Herregistrasi LPJK; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">5.</td>
			        	<td>Bukti kepemilikan Instalasi Bor; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">6.</td>
			        	<td>IMB, Site Plan, Gambar/Peta lokasi dan situasi; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">7.</td>
			        	<td>Sertifikat tanah/Keterangan Kepemilikan Tanah dan PBB terakhir; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">8.</td>
			        	<td>Akta pendirian Perusahaan (bagi Badan Hukum) dan HO; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">9.</td>
			        	<td>Pernyataan Tidak Keberatan dari masyarakat sekitar proyek; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">10.</td>
			        	<td>Pernyataan Konservasi dan Kelestarian Alam. </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">&nbsp;</td>
				        <td><table border="0" cellspacing="0" cellpadding="0">
					        <tbody><tr align="justify">
					            <td width="30" align="justify" valign="top">-</td>
					            <td>Surat Izin lama; </td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">-</td>
					            <td>Kartu Herregistrasi; </td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">-</td>
					            <td>KTP dan PBB terakhir. </td>
					        </tr>
				        </tbody></table></td>
			      	</tr>
			    </tbody></table></td>
			</tr>
			<tr align="justify">
			    <td><div align="center"></div></td>
			    <br>
			    <td>E. Mekanisme Permohonan Izin Baru</td>
			</tr>
			<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellpadding="0" cellspacing="0">
			    <tbody>
			    	<tr align="justify">
			        	<td width="30" align="justify" valign="top">1.</td>
			        	<td>Mengisi formulir permohonan izin pada website perizinan air Kota Bandung;</td>
			      	</tr><tr align="justify">
			        	<td width="30" align="justify" valign="top">2.</td>
			        	<td>Menunggu konfirmasi penolakan/penerimaan permohonan izin melalui website perizinan air Kota Bandung;</td>
			      	</tr><tr align="justify">
			        	<td width="30" align="justify" valign="top">3.</td>
			        	<td>Melakukan pembayaran dan melampirkan bukti pembayaran;</td>
			      	</tr>
			      	<tr align="justify">
			        	<td width="30" align="justify" valign="top">4.</td>
			        	<td>Melampirkan dokumen-dokumen asli ke loket Unit Pelayanan Satu Atap;</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">5.</td>
			        	<td>Pemohon dapat memperoleh surat izin asli melalui loket Unit Yantap.</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">&nbsp;</td>
			      </tr>
			    </tbody></table></td>
			</tr>
			<tr align="justify">
			    <td><div align="center"></div></td>
			    <br>
			    <td>F. Jangka Waktu Proses Izin </td>
			</tr>
			<tr align="justify">
			    <td>&nbsp;</td>
			    <br>
			    <td>14 hari terhitung setelah persyaratan dipenuhi. </td>
			</tr>
			<tr align="justify">
			    <td><div align="center"></div></td>
			    <br>
			    <td>G. Biaya</td>
			</tr>
			<tr align="justify">
			    <td>&nbsp;</td>
			    <br>
			    <td>Sesuai dengan ketentuan yang berlaku. </td>
			</tr>
			<tr align="justify">
			    <td colspan="2">&nbsp;</td>
			</tr>
			</tbody>
    	</p>
    </section>

    <section id="content2">
    	<h3>Persyaratan Izin Pengambilan Air Permukaan</h3>
    	<p>
    		<tbody><tr>
		    	<td colspan="2" align="center">&nbsp;</td>
		  	</tr>
		    <tr>
		    	<td width="30">&nbsp;</td>
		    	<td>&nbsp;</td>
		  	</tr>
		  	<tr align="justify" valign="top">
		    	<td><div align="center"></div></td>
		    	<td>A. Objek</td>
		  	</tr>
		  	<tr align="justify" valign="top">
		    	<td>&nbsp;</td>
		    	<br>
		    	<td>Setiap orang atau badan hukum yang melakukan kegiatan pengambilan air permukaan</td>
		  	</tr>
		  	<tr align="justify" valign="top">
		    	<td width="30"><div align="center"> </div></td>
		    	<br>
		    	<td>B. Masa Berlaku</td>
		  	</tr>
			<tr align="justify" valign="top">
		    	<td>&nbsp;</td>
		    	<br>
		    	<td>Izin berlaku selama 1 (satu) tahun selama kondisi fisik air dan tanah sekitar masih dimungkinkan ditinjau dari segi teknis pengairan dan geologi.</td>
		  	</tr>
			<tr align="justify" valign="top">
				<td><div align="center"></div></td>
				<br>
			    <td>C. Persyaratan </td>
			</tr>
			<tr valign="top" align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellpadding="0" cellspacing="0">
			    <tbody><tr align="justify">
			        	<td width="30" align="justify" valign="top">1.</td>
			        	<td>Izin Baru</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">&nbsp;</td>
				        <td><table border="0" cellspacing="0" cellpadding="0">
					        <tbody><tr align="justify">
					            <td width="30" align="justify" valign="top">a.</td>
					            <td>Mengisi formulir permohonan izin pada website perizinan air Kota Bandung; </td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">b.</td>
					            <td>Photo Copy KTP Pemohon;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">c.</td>
					            <td>Photo Copy Akta Pendirian Perusahaan dan/atau Perubahannya;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">d.</td>
					            <td>Photo Copy IMB, Site Plan berikut lampiran Gambar Denah atau Situasi;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">e.</td>
					            <td>Photo Copy Surat Kepemilikan Tanah/keterangan kepemilikan / pemakaian tanah;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">f.</td>
					            <td>Keterangan Domisili Perusahaan Dari Lurah/Camat setempat;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">g.</td>
					            <td>	Pernyataan tidak keberatan dari tetangga yang bersebelahan dengan lokasi Penyelenggaraan Pengairan tanah;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">h.</td>
					            <td>Pernyataan pemohon tentang kesanggupan memenuhi/mentaati ketentuan pelestarian lingkungan;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">i.</td>
					            <td>Photo Copy Bukti Pelunasan PBB tahun akhir;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">j.</td>
					            <td>Peta Lokasi pengambilan air permukaan skala 1 : 100 dan Peta Situasi Skala 1: 1000/1 : 10.000;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">k.</td>
					            <td>Photo Copy lokasi dan Izin Usaha;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">l.</td>
					            <td>Proposal teknis rencana kebutuhan dan penggunaan air yang telah mendapatkan persetujuan dari instansi terkait dan masyarakat setempat dengan Input Study Water Balance;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">m.</td>
					            <td>Gambar Konstruksi Bangunan yang telah mendapat persetujuan dari instansi terkait lengkap dengan bangunan ukur (water meter) serta memperhatikan garis sempadan sungai/Saluran;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">n.</td>
					            <td>Rekomendasi dari Dinas Bina Marga dan Pengairan;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">o.</td>
					            <td>Rekomendasi/Serbaguna dari Lurah dan Camat setempat.</td>
					        </tr>
				        </tbody></table></td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">2.</td>
			        	<td>Daftar Ulang/Herregistrasi</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">&nbsp;</td>
				        <td><table border="0" cellspacing="0" cellpadding="0">
					        <tbody><tr align="justify">
					            <td width="30" align="justify" valign="top">a.</td>
					            <td>Mengisi formulir permohonan izin pada website perizinan air Kota Bandung</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">b.</td>
					            <td>Kartu Daftar Ulang;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">c.</td>
					            <td>Photo Copy Surat Izin Penyelenggaraan Pengairan;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">d.</td>
					            <td>Photo Copy KTP Pemegang Izin;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">e.</td>
					            <td>Photo Copy bukti pelunasan Retribusi Pengairan;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">f.</td>
					            <td>Photo Copy bukti pelunasan PBB tahun terakhir.</td>
					        </tr>
				        </tbody></table></td>
			      	</tr>
				</tbody></table></td>
			</tr>
			<tr align="justify">
			    <td><div align="center"></div></td>
			    <br>
			    <td>D. Mekanisme Permohonan Izin Baru</td>
			</tr>
			<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellpadding="0" cellspacing="0">
			    <tbody>
			    	<tr align="justify">
			        	<td width="30" align="justify" valign="top">1.</td>
			        	<td>Mengisi formulir permohonan izin pada website perizinan air Kota Bandung;</td>
			      	</tr><tr align="justify">
			        	<td width="30" align="justify" valign="top">2.</td>
			        	<td>Menunggu konfirmasi penolakan/penerimaan permohonan izin melalui website perizinan air Kota Bandung;</td>
			      	</tr><tr align="justify">
			        	<td width="30" align="justify" valign="top">3.</td>
			        	<td>Melakukan pembayaran dan melampirkan bukti pembayaran;</td>
			      	</tr>
			      	<tr align="justify">
			        	<td width="30" align="justify" valign="top">4.</td>
			        	<td>Melampirkan dokumen-dokumen asli ke loket Unit Pelayanan Satu Atap;</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">5.</td>
			        	<td>Pemohon dapat memperoleh surat izin asli melalui loket Unit Yantap.</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">&nbsp;</td>
			      </tr>
			    </tbody></table></td>
			</tr>
			<tr align="justify">
			    <td><div align="center"></div></td>
			    <br>
			    <td>E. Jangka Waktu Proses Izin</td>
			</tr>
			<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellpadding="0" cellspacing="0">
			    <tbody><tr align="justify">
			        	<td width="30" align="justify" valign="top">1.</td>
			        	<td>Izin Baru Maksimal 10 (sepuluh) hari kerja setelah pemohon memenuhi persyaratan; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">2.</td>
			        	<td>Herregistrasi maksimal 4 (empat) hari kerja.</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">&nbsp;</td>
			      </tr>
			    </tbody></table></td>
			</tr>
			<tr align="justify">
			    <td><div align="center"></div></td>
			    <br>
			    <td>F. Biaya </td>
			</tr>
				<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellpadding="0" cellspacing="0">
			    <tbody><tr align="justify">
			        	<td width="30" align="justify" valign="top">1.</td>
			        	<td>Untuk penerbitan izin tidak diperlukan biaya tetapi untuk pengambilan air permukaan retribusi yang dibebankan kepada pemohon antara lain :
 						Retribusi pemanfaatan lahan untuk bangunan intake pada daerah Sempalan Sungai / saluran dengan ketentuan besarnya adalah = F x Tarif Dasar
 						Dimana F = luas lahan yang dimanfaatkan oleh Bangunan Intake (m²).</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">2.</td>
			        	<td>Retribusi dikenakan selama pemohon memanfaatkan lahan untuk bangunan pengambilan air permukaan.</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">&nbsp;</td>
			      </tr>
			    </tbody></table></td>
			</tr>
			<tr align="justify">
			    <td colspan="2">&nbsp;</td>
			</tr>
			</tbody>		
    	</p>
    </section>

    <section id="content3">
    	<h3>Persyaratan Izin Pembuangan Air Buangan ke Sumber Air</h3>
    	<p>
    		<tbody><tr>
		    	<td colspan="2" align="center">&nbsp;</td>
		  	</tr>
		    <tr>
		    	<td width="30">&nbsp;</td>
		    	<td>&nbsp;</td>
		  	</tr>
		  	<tr align="justify" valign="top">
		    	<td><div align="center"></div></td>
		    	<td>A. Dasar Hukum</td>
		  	</tr>
		  	<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellpadding="0" cellspacing="0">
			    <tbody><tr align="justify">
			        	<td width="30" align="justify" valign="top">1.</td>
			        	<td> Peraturan Daerah Propinsi Daerah Tingkat I Jawa Barat Nomor 10
							Tahun 1995 tentang Pengendalian Pembuangan Limbah Cair; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">2.</td>
			        	<td>Peraturan Daerah Kota Bandung Nomor 06 Tahun 2002 tentang
						Penyelenggaraan Pengairan di Kota Bandung; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">3.</td>
			        	<td>Peraturan Daerah Kota Bandung Nomor 07 Tahun 2002 tentang
						Retribusi Pengairan; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">4.</td>
			        	<td>Keputusan Walikota Bandung Nomor 1023 Tahun 2003 tentang
						Petunjuk Pelaksanaan Penyelenggaraan Pengairan dan Retribusi
						Pengairan. </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">&nbsp;</td>
			      </tr>
			    </tbody></table></td>
			</tr>
			<tr align="justify" valign="top">
				<td><div align="center"></div></td>
				<br>
			    <td>B. Persyaratan </td>
			</tr>
			<tr valign="top" align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellpadding="0" cellspacing="0">
			    <tbody><tr align="justify">
			        	<td width="30" align="justify" valign="top">1.</td>
			        	<td>Izin Baru</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">&nbsp;</td>
			        	<td><table border="0" cellspacing="0" cellpadding="0">
					        <tbody>
					        <tr align="justify">
					            <td valign="top">a.</td>
					            <td>Mengisi formulir permohonan izin pada website perizinan air Kota Bandung ;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">b.</td>
					            <td>Photo Copy KTP Pemohon;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">c.</td>
					            <td>Photo Copy Akta Pendirian Perusahaan dan/atau Perubahannya;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">d.</td>
					            <td>Photo Copy IMB, Site Plan berikut lampiran Gambar Denah atau Situasi;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">e.</td>
					            <td>Photo Copy Surat Kepemilikan Tanah/keterangan kepemilikan / pemakaian tanah;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">f.</td>
					            <td>Keterangan Domisili Perusahaan Dari Lurah/Camat setempat;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">g.</td>
					            <td>Pernyataan tidak keberatan dari tetangga yang bersebelahan dengan lokasi Penyelenggaraan Pengairan tanah;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">h.</td>
					            <td>Pernyataan pemohon tentang kesanggupan memenuhi/mentaati ketentuan pelestarian lingkungan;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">i.</td>
					            <td>Photo Copy Bukti Pelunasan PBB tahun akhir;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">j.</td>
					            <td>Peta Lokasi pengambilan air permukaan skala 1 : 100 dan Peta Situasi Skala 1: 1000/1 : 10.000;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">k.</td>
					            <td>Photo Copy lokasi dan Izin Usaha;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">l.</td>
					            <td>Proposal teknis rencana kebutuhan dan penggunaan air yang telah mendapatkan persetujuan dari instansi terkait dan masyarakat setempat dengan Input Study Water Balance;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">m.</td>
					            <td>Gambar Konstruksi Bangunan yang telah mendapat persetujuan dari instansi terkait lengkap dengan bangunan ukur (water meter) serta memperhatikan garis sempadan sungai/Saluran;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">n.</td>
					            <td>Rekomendasi dari Cabang Dinas Pengairan;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">o.</td>
					            <td>Rekomendasi dari Badan Pengelola Lingkungan Hidup Kota Bandung;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">p.</td>
					            <td>Rekomendasi dari Badan Pengendali Lingkungan Hidup Daerah
								Propinsi Jawa Barat (bila pembuangan ke Sungai Lintas Kota/Kabupaten); </td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">q.</td>
					            <td>Rekomendasi/Serbaguna dari Lurah dan Camat setempat.</td>
					        </tr>
				        </tbody></table></td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">2.</td>
			        	<td>Daftar Ulang/Herregistrasi</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">&nbsp;</td>
				        <td><table border="0" cellspacing="0" cellpadding="0">
					        <tbody>
					        <tr align="justify">
					            <td valign="top">a.</td>
					            <td>Mengisi formulir permohonan izin pada website perizinan air Kota Bandung ;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">b.</td>
					            <td>Kartu Daftar Ulang Asli;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">c.</td>
					            <td>Photo Copy Surat Izin Penyelenggaraan Pengairan;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">d.</td>
					            <td>Photo Copy KTP Pemegang Izin;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">e.</td>
					            <td>Photo Copy bukti pelunasan Retribusi Pengairan;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">f.</td>
					            <td>Photo Copy bukti pelunasan PBB tahun terakhir.</td>
					        </tr>
				        </tbody></table></td>
			      	</tr>
				</tbody></table></td>
			</tr>
			<tr align="justify">
			    <td><div align="center"></div></td>
			    <br>
			    <td>C. Mekanisme Permohonan Izin Baru</td>
			</tr>
			<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellpadding="0" cellspacing="0">
			    <tbody>
			    	<tr align="justify">
			        	<td width="30" align="justify" valign="top">1.</td>
			        	<td>Mengisi formulir permohonan izin pada website perizinan air Kota Bandung;</td>
			      	</tr><tr align="justify">
			        	<td width="30" align="justify" valign="top">2.</td>
			        	<td>Menunggu konfirmasi penolakan/penerimaan permohonan izin melalui website perizinan air Kota Bandung;</td>
			      	</tr><tr align="justify">
			        	<td width="30" align="justify" valign="top">3.</td>
			        	<td>Melakukan pembayaran dan melampirkan bukti pembayaran;</td>
			      	</tr>
			      	<tr align="justify">
			        	<td width="30" align="justify" valign="top">4.</td>
			        	<td>Melampirkan dokumen-dokumen asli ke loket Unit Pelayanan Satu Atap;</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">5.</td>
			        	<td>Pemohon dapat memperoleh surat izin asli melalui loket Unit Yantap.</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">&nbsp;</td>
			      </tr>
			    </tbody></table></td>
			</tr>
			<tr align="justify" valign="top">
		    	<td width="30"><div align="center"> </div></td>
		    	<br>
		    	<td>D. Jangka Waktu Penyelesaian</td>
		  	</tr>
			<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellspacing="0" cellpadding="0">
			        <tbody><tr align="justify">
			            	<td width="30" align="justify" valign="top">1.</td>
			            	<td>Izin Baru Maksimal 6 ( enam ) hari kerja setelah pemohon memenuhi persyaratan </td>
				        </tr>
				        <tr align="justify">
				           	<td valign="top">2.</td>
				           	<td>Herregistrasi maksimal 3 tiga) hari kerja.</td>
				        </tr>
			    	</tbody>
			    </table></td>
			</tr>
			<tr align="justify" valign="top">
		    	<td width="30"><div align="center"> </div></td>
		    	<br>
		    	<td>E. Biaya yang Diperlukan</td>
		    	<br>
		    	<td>Untuk penerbitan izin tidak dikenakan biaya, tetapi untuk pembuangan, air
				buangan ada 2 (dua) pengenaan retribusi kepada pemnohon yaitu : </td>
		  	</tr>
			<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellspacing="0" cellpadding="0">
			        <tbody><tr align="justify">
			            	<td width="30" align="justify" valign="top">1.</td>
			            	<td>Sebesar Rp. 25,-/M3 air buangan dibayar sesuai volume yang dibuang ke sumber air dengan dibayar tiap bulan ke Kas Daerah.</td>
				        </tr>
				        <tr align="justify">
				           	<td valign="top">2.</td>
				           	<td> Retribusi pemanfaatan lahan sempadan Sungai/Saluran dengan ketentuan besarnya adalah = F x Tarif Dasar.
							Dimana F = Luas lahan yang dimanfaatkan oleh Bangunan pembuangan (M2).
				        	Tarif Dasar = 1 % x NJOP terakhir.
				        	Retribusi dikenakan selama pemohon membuang air buangan ke Sumber Air. </td>
				        </tr>
			    	</tbody>
			    </table></td>
			</tr>
			<tr align="justify">
			    <td colspan="2">&nbsp;</td>
			</tr>
			</tbody>
    	</p>
    </section>

  	<section id="content4">
    	<h3>Persyaratan Izin Perubahan Alur,Bentuk,Dimensi, dan Kemiringan Dasar Saluran/Sungai</h3>
    	<p>
    		
    		<tbody><tr>
		    	<td colspan="2" align="center">&nbsp;</td>
		  	</tr>
		    <tr>
		    	<td width="30">&nbsp;</td>
		    	<td>&nbsp;</td>
		  	</tr>
		  	<tr align="justify" valign="top">
		    	<td><div align="center"></div></td>
		    	<td>A. Dasar Hukum</td>
		  	</tr>
		  	<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellpadding="0" cellspacing="0">
			    <tbody><tr align="justify">
			        	<td width="30" align="justify" valign="top">1.</td>
			        	<td> Peraturan Daerah Kota Bandung Nomor 06 Tahun 2002 tentang
						Penyelenggaraan Pengairan di Kota Bandung;  </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">2.</td>
			        	<td>Peraturan Daerah Kota Bandung Nomor 07 Tahun 2002 tentang
						Retribusi Pengairan; </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">3.</td>
			        	<td>Keputusan Walikota Bandung Nomor 1023 Tahun 2003 tentang
						Petunjuk Pelaksanaan Penyelenggaraan Pengairan dan Retribusi Pengairan. </td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">&nbsp;</td>
			      </tr>
			    </tbody></table></td>
			</tr>
			<tr align="justify" valign="top">
				<td><div align="center"></div></td>
				<br>
			    <td>B. Persyaratan </td>
			</tr>
			      	<tr align="justify">
			        	<td valign="top">&nbsp;</td>
			        	<td><table border="0" cellspacing="0" cellpadding="0">
					        <tbody>
					        <tr align="justify">
					            <td valign="top">a.</td>
					            <td>Mengisi formulir permohonan izin pada website perizinan air Kota Bandung ;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">b.</td>
					            <td>Photo Copy KTP Pemohon;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">c.</td>
					            <td>Photo Copy Akta Pendirian Perusahaan dan/atau Perubahannya;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">d.</td>
					            <td>Photo Copy IMB, Site Plan berikut lampiran Gambar Denah atau Situasi;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">e.</td>
					            <td>Photo Copy Surat Kepemilikan Tanah/keterangan kepemilikan / pemakaian tanah;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">f.</td>
					            <td>Keterangan Domisili Perusahaan Dari Lurah/Camat setempat;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">g.</td>
					            <td>Pernyataan tidak keberatan dari tetangga yang bersebelahan dengan lokasi Penyelenggaraan Pengairan tanah;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">h.</td>
					            <td>Pernyataan pemohon tentang kesanggupan memenuhi/mentaati ketentuan pelestarian lingkungan;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">i.</td>
					            <td>Photo Copy Bukti Pelunasan PBB tahun akhir;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">j.</td>
					            <td> Peta Lokasi Saluran yang ada pada lokasi yang dimohon dengan
								skala 1 : 500 atau Skala 1 : 1000 dan perencanaan propil
								memanjang dan melintang dari Saluran Baru; </td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">k.</td>
					            <td> Photo Copy Izin lokasi;</td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">l.</td>
					            <td>Berita Acara Serah Terima lahan Saluran Lama dan Baru; </td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">m.</td>
					            <td>Rekomendasi/Serbaguna dari Lurah dan Camat setempat; </td>
					        </tr>
					        <tr align="justify">
					            <td valign="top">n.</td>
					            <td>Rekomendasi dari Cabang Dinas Pengairan. </td>
					        </tr>
				        </tbody></table></td>
			      	</tr>
			<tr align="justify">
			    <td><div align="center"></div></td>
			    <br>
			    <td>C. Mekanisme Permohonan Izin Baru</td>
			</tr>
			<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellpadding="0" cellspacing="0">
			    <tbody>
			    	<tr align="justify">
			        	<td width="30" align="justify" valign="top">1.</td>
			        	<td>Mengisi formulir permohonan izin pada website perizinan air Kota Bandung;</td>
			      	</tr><tr align="justify">
			        	<td width="30" align="justify" valign="top">2.</td>
			        	<td>Menunggu konfirmasi penolakan/penerimaan permohonan izin melalui website perizinan air Kota Bandung;</td>
			      	</tr><tr align="justify">
			        	<td width="30" align="justify" valign="top">3.</td>
			        	<td>Melakukan pembayaran dan melampirkan bukti pembayaran;</td>
			      	</tr>
			      	<tr align="justify">
			        	<td width="30" align="justify" valign="top">4.</td>
			        	<td>Melampirkan dokumen-dokumen asli ke loket Unit Pelayanan Satu Atap;</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">5.</td>
			        	<td>Pemohon dapat memperoleh surat izin asli melalui loket Unit Yantap.</td>
			      	</tr>
			      	<tr align="justify">
			        	<td valign="top">&nbsp;</td>
			      </tr>
			    </tbody></table></td>
			</tr>
			<tr align="justify" valign="top">
		    	<td width="30"><div align="center"> </div></td>
		    	<br>
		    	<td>D. Jangka Waktu Penyelesaian</td>
		  	</tr>
			<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellspacing="0" cellpadding="0">
			        <tbody><tr align="justify">
			            	<td width="30" align="justify" valign="top">1.</td>
			            	<td>Maksimal 6 (enam) hari kerja setelah pemohon memenuhi persyarat</td>
				        </tr>
			    	</tbody>
			    </table></td>
			</tr>
			<tr align="justify" valign="top">
		    	<td width="30"><div align="center"> </div></td>
		    	<br>
		    	<td>E. Biaya yang Diperlukan</td>
		    	<br>
		    	<td>Untuk penerbitan izin tidak dikenakan biaya, tetapi untuk pembuangan, air
				buangan ada 2 (dua) pengenaan retribusi kepada pemnohon yaitu : </td>
		  	</tr>
			<tr align="justify">
			    <td>&nbsp;</td>
			    <td><table border="0" cellspacing="0" cellpadding="0">
			        <tbody><tr align="justify">
			            	<td width="30" align="justify" valign="top">1.</td>
			            	<td>Biaya ini dikenakan hanya satu kali saat adanya pelaksanaan perubahan </td>
				        </tr>
				        <tr align="justify">
				           	<td valign="top">2.</td>
				           	<td> Retribusi Izin Perubahan Alur Bentuk, Dimensi dan Kemiringan
							Dasar Saluran/Sungai ditetapkan berdasarkan = F x Tarip Dasar.
							Dimana F = Luas Perubahan Saluran.
				        	Tarif Dasar = 1 % x NJOP terakhir </td>
				        </tr>
			    	</tbody>
			    </table></td>
			</tr>
			<tr align="justify">
			    <td colspan="2">&nbsp;</td>
			</tr>
			</tbody>
    	</p>
  	</section>
  	</ol>
  	</div>
  	</h6>
	</div>

@stop