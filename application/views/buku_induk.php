<<<<<<< HEAD
<html>
    <head>
        <style>
            body {
                font-size: 10px;
            }
            
            .title {
                font-weight: bold;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <h3 style="text-align: center; font-weight: bold;">I. LEMBAR BUKU INDUK PESERTA DIDIK</h3>
        





        <table border="0" style="width: 100%">
           

            <tr>
                <td style="width: 40%;">
                    <ol type="A">
                        <li>
                            <span class="title">KETERANGAN TENTANG DIRI PESERTA DIDIK</span> <br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">1.</td>
                                    <td style="width: 40%;">Nama Lengkap Peserta Didik</td>
                                    <td style="width: 53%;">: <?php echo $row->nama_lengkap; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">2.</td>
                                    <td style="width: 40%;">Jenis Kelamin</td>
                                    <td style="width: 53%;">: <?php echo $row->jeniskelamin; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">3.</td>
                                    <td style="width: 40%;">Tempat / Tanggal lahir</td>
                                    <td style="width: 53%;">: <?php echo $row->tempatlahir." , ".$row->tanggallahir; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">4.</td>
                                    <td style="width: 40%;">Agama</td>
                                    <td style="width: 53%;">: <?php echo $row->agama; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">5.</td>
                                    <td style="width: 40%;">Kewarganegaraan</td>
                                    <td style="width: 53%;">: <?php echo $row->kewarganegaraan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">6.</td>
                                    <td style="width: 40%;">Anak Ke</td>
                                    <td style="width: 53%;">: <?php echo $row->anakke; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">7.</td>
                                    <td style="width: 40%;">Jumlah Saudara</td>
                                    <td style="width: 53%;">: <?php echo $row->jumlahsaudara; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">8.</td>
                                    <td style="width: 40%;">Yatim/Piatu/Yatim Piatu</td>
                                    <td style="width: 53%;">: <?php echo $row->status_anakyatim; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">9.</td>
                                    <td style="width: 40%;">Bahasa Sehari-Hari</td>
                                    <td style="width: 53%;">:  <?php echo $row->bahasa; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">10.</td>
                                    <td style="width: 40%;">Hobi</td>
                                    <td style="width: 53%;">:  <?php echo $row->hobi; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">11.</td>
                                    <td style="width: 40%;">Cita - Cita</td>
                                    <td style="width: 53%;">:  <?php echo $row->citacita; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">12.</td>
                                    <td style="width: 40%;">No Telepon / No HP</td>
                                    <td style="width: 53%;">: <?php echo $row->siswa_nohp; ?></td>
                                </tr>
                            </table>
                        </li>
                        
                        <li>
                            <span class="title">KETERANGAN TEMPAT TINGGAL</span><br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">13.</td>
                                    <td style="width: 40%;">Alamat</td>
                                    <td style="width: 3%;">:</td>
                                    <td style="width: 58%;"><?php echo $row->siswa_alamat; ?>, <?php echo $row->siswa_desakel; ?>, <?php echo $row->siswa_kecamatan; ?> <?php echo $row->siswa_kabupaten; ?>, <?php echo $row->siswa_provinsi; ?>,<?php echo $row->siswa_kodepos; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;"></td>
                                    <td style="width: 53%;"></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">14.</td>
                                    <td style="width: 40%;">Jarak Tempat Tinggal ke Sekolah</td>
                                    <td style="width: 53%;">: <?php echo $row->jarakkesekolah; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">15.</td>
                                    <td style="width: 40%;">Transportasi</td>
                                    <td style="width: 53%;">: <?php echo $row->transportasi; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">16.</td>
                                    <td style="width: 40%;">Tinggal Di</td>
                                    <td style="width: 53%;">: <?php echo $row->siswa_tinggal; ?></td>
                                </tr>
                            </table>
                        </li>
                        
                        <li>
                            <span class="title">KETERANGAN KESEHATAN</span><br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">17.</td>
                                    <td style="width: 40%;">Golongan Darah</td>
                                    <td style="width: 53%;">: <?php echo $row->pendukung_golongandarah; ?></td>
                                </tr>  
                                <tr>
                                    <td style="width: 6%;">18.</td>
                                    <td style="width: 40%;">Penyakit yang pernah diderita</td>
                                    <td style="width: 53%;">: <?php echo $row->pendukung_penyakit; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">19.</td>
                                    <td style="width: 40%;">Kelainan Jasmani</td>
                                    <td style="width: 53%;">: <?php echo $row->pendukung_kelainanjasmani; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">20.</td>
                                    <td style="width: 40%;">Tinggi dan berat badan</td>
                                    <td style="width: 53%;">: <?php echo $row->pendukung_tinggibadan; ?> Cm , <?php echo $row->pendukung_beratbadan; ?> Kg</td>
                                </tr>
                            </table>
                         </li>
                         <li>
                            <span class="title">PENDIDIKAN SEBELUMNYA</span><br>
                                <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">21.</td>
                                    <td style="width: 40%;">Pendidikan Sebelumnya</td>
                                    <td style="width: 53%;"></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">a. Tamatan dari</td>
                                    <td style="width: 53%;">: <?php echo $row->asal_sekolah; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">b. Nomor Ijazah</td>
                                    <td style="width: 53%;">: <?php echo $row->asal_noijazah; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">c. Nomor STL/SKHUN</td>
                                    <td style="width: 53%;">: <?php echo $row->asal_noskhu; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">d. Tanggal Lulus</td>
                                    <td style="width: 53%;">: <?php echo $row->asal_tanggal; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">e. Lama Belajar</td>
                                    <td style="width: 53%;">: <?php echo $row->asal_lamapendidikan; ?> Tahun</td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">22.</td>
                                    <td style="width: 40%;">Pindahan</td>
                                    <td style="width: 53%;">: </td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">a. Dari Sekolah</td>
                                    <td style="width: 53%;">: <?php echo $row->pindahan_asalsekolah; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">b. Alasan</td>
                                    <td style="width: 53%;">: <?php echo $row->pindahan_alasan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">c. Tanggal</td>
                                    <td style="width: 53%;">: <?php echo $row->pindahan_tanggal; ?></td>
                                </tr>

                            </table>
                        </li>
                        
                        <li>
                            <span class="title">KETERANGAN TENTANG AYAH KANDUNG</span><br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">23.</td>
                                    <td style="width: 40%;">Nama</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_nama; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">24.</td>
                                    <td style="width: 40%;">Tempat dan Tanggal Lahir</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_tempatlahir; ?>, <?php echo $row->ayah_tanggallahir; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">25.</td>
                                    <td style="width: 40%;">Agama</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_agama; ?></td>
                                </tr>
                                 <tr>
                                    <td style="width: 6%;">26.</td>
                                    <td style="width: 40%;">Kewarganegaraan</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_kewarganegaraan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">27.</td>
                                    <td style="width: 40%;">Pendidikan</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_pendidikan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">28.</td>
                                    <td style="width: 40%;">Pekerjaan</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_pekerjaan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">29.</td>
                                    <td style="width: 40%;">Pendapatan Perbulan</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_penghasilan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">30.</td>
                                    <td style="width: 40%;">Alamat Rumah/No Telp/Hp</td>
                                    <td style="width: 2%;">:</td>
                                    <td style="width: 53%;"><?php echo $row->ayah_alamat; ?>, <?php echo $row->ayah_desakel; ?>, <?php echo $row->ayah_kecamatan; ?>, <?php echo $row->ayah_kabupaten; ?>, <?php echo $row->ayah_provinsi; ?> - <?php echo $row->ayah_kodepos; ?> / <?php echo $row->ayah_nohp; ?></td>
                                </tr>                
                                <tr>
                                    <td style="width: 6%;">31.</td>
                                    <td style="width: 40%;">Masih Hidup/Meninggal Dunia</td>
                                    <td style="width: 53%;">: <?php echo $row->ayah_status; ?></td>
                                </tr>


                
                                
                            </table>
                        </li>
                    </ol>
                </td>












                
                <td style="width: 50%;">

                    
                    <ol type="A" start="6">
                   
                        <li>
                            <span class="title">KETERANGAN TENTANG IBU KANDUNG</span><br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">32.</td>
                                    <td style="width: 40%;">NIK</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_nik; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">33.</td>
                                    <td style="width: 40%;">Nama</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_nama; ?></td>
                                </tr>

                                <tr>
                                    <td style="width: 6%;">34.</td>
                                    <td style="width: 40%;">Tempat dan Tanggal Lahir</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_tempatlahir; ?>, <?php echo $row->ibu_tanggallahir; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">35.</td>
                                    <td style="width: 40%;">Agama</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_agama; ?></td>
                                </tr>
                                 <tr>
                                    <td style="width: 6%;">36.</td>
                                    <td style="width: 40%;">Kewarganegaraan</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_kewarganegaraan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">37.</td>
                                    <td style="width: 40%;">Pendidikan</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_pendidikan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">38.</td>
                                    <td style="width: 40%;">Pekerjaan</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_pekerjaan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">39.</td>
                                    <td style="width: 40%;">Pendapatan Perbulan</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_penghasilan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">40.</td>
                                    <td style="width: 40%;">Alamat Rumah / No Hp</td>
                                    <td style="width: 2%;">:</td>
                                    <td style="width: 53%;"><?php echo $row->ibu_alamat; ?>, <?php echo $row->ibu_desakel; ?>, <?php echo $row->ibu_kecamatan; ?>, <?php echo $row->ibu_kabupaten; ?>, <?php echo $row->ibu_provinsi; ?> - <?php echo $row->ibu_kodepos; ?> / <?php echo $row->ibu_nohp; ?></td>
                                </tr>                
                                <tr>
                                    <td style="width: 6%;">41.</td>
                                    <td style="width: 40%;">Masih Hidup/Meninggal Dunia</td>
                                    <td style="width: 53%;">: <?php echo $row->ibu_status; ?></td>
                                </tr>
            
                            </table>
                        </li>


                        <li>
                            <span class="title">KETERANGAN TENTANG WALI</span><br>
                            <table border="0" style="width: 100%;">
                            <tr>
                                    <td style="width: 6%;">42.</td>
                                    <td style="width: 40%;">Nik</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_nik; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">43.</td>
                                    <td style="width: 40%;">Nama</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_nama; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">44.</td>
                                    <td style="width: 40%;">Tempat dan Tanggal Lahir</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_tempatlahir; ?>, <?php echo $row->wali_tanggallahir; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">45.</td>
                                    <td style="width: 40%;">Agama</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_agama; ?></td>
                                </tr>
                                 <tr>
                                    <td style="width: 6%;">46.</td>
                                    <td style="width: 40%;">Kewarganegaraan</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_kewarganegaraan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">47.</td>
                                    <td style="width: 40%;">Pendidikan</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_pendidikan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">48.</td>
                                    <td style="width: 40%;">Pekerjaan</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_pekerjaan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">49.</td>
                                    <td style="width: 40%;">Pendapatan Perbulan</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_penghasilan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">50.</td>
                                    <td style="width: 40%;">Alamat Rumah / No HP</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_alamat; ?>, <?php echo $row->wali_nohp; ?></td>
                                </tr>       
                                <tr>
                                    <td style="width: 6%;">51.</td>
                                    <td style="width: 40%;">Masih Hidup/Meninggal Dunia</td>
                                    <td style="width: 53%;">: <?php echo $row->wali_status; ?></td>
                                </tr>         
                            </table>
                        </li>
                        <li>
                            <span class="title">KEGEMARAN PESERTA DIDIK</span><br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">52.</td>
                                    <td style="width: 40%;">Kesenian</td>
                                    <td style="width: 53%;">: <?php echo $row->kegemaran_kesenian; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">53.</td>
                                    <td style="width: 40%;">Olah Raga</td>
                                    <td style="width: 53%;">: <?php echo $row->kegemaran_olahraga; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">54.</td>
                                    <td style="width: 40%;">Kemasyarakatan/Organisasi</td>
                                    <td style="width: 53%;">: <?php echo $row->kegemaran_organisasi; ?></td>
                                </tr>
                                 <tr>
                                    <td style="width: 6%;">55.</td>
                                    <td style="width: 40%;">Lain-lain</td>
                                    <td style="width: 53%;">: <?php echo $row->kegemaran_lainlain; ?></td>
                                </tr>
                            </table>
                        </li>
                        <li>
                            <span class="title">KETERANGAN PERKEMBANGAN PESERTA DIDIK</span><br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">56.</td>
                                    <td style="width: 40%;">Menerima Beasiswa</td>
                                    <td style="width: 53%;">: <?php echo $row->beasiswa_nama; ?> </td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;"></td>
                                    <td style="width: 53%;">  Tahun <?php echo $row->beasiswa_tahun; ?> / Nominal <?php echo $row->beasiswa_nominal; ?></td>
                                </tr>
                              
                                <tr>
                                    <td style="width: 6%;">57.</td>
                                    <td style="width: 40%;">Meninggalkan Sekolah ini</td>
                                    <td style="width: 53%;"></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">a. Tanggal meninggalkan sekolah</td>
                                    <td style="width: 53%;">: </td>
                                </tr>
                                 <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">b. Alasan</td>
                                    <td style="width: 53%;">: </td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">58.</td>
                                    <td style="width: 40%;">Akhir Pendidikan</td>
                                    <td style="width: 53%;"></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">a. Lulus</td>
                                    <td style="width: 53%;">: <?php echo $row->lulus_tahun; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">b. Nomor/Tanggal Ijazah</td>
                                    <td style="width: 53%;">: <?php echo $row->lulus_noijazah; ?> / <?php echo $row->lulus_tanggalijazah; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">c. Nomor/Tanggal SKHU</td>
                                    <td style="width: 53%;">: <?php echo $row->lulus_noskhu; ?> / <?php echo $row->lulus_tanggalskhu; ?></td>
                                </tr>
                            </table>
                        </li>
                        <li>
                            <span class="title">KETERANGAN SETELAH SELESAI PENDIDIKAN</span><br>
                            <table border="0" style="width: 100%;">
                                <tr>
                                    <td style="width: 6%;">59.</td>
                                    <td style="width: 40%;">Melanjutkan ke</td>
                                    <td style="width: 53%;">: <?php echo $row->lanjut_nama; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;">60.</td>
                                    <td style="width: 40%;">Bekerja di</td>
                                    <td style="width: 53%;">: <?php echo $row->lanjut_bekerja; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">a. Tanggal mulai bekerja</td>
                                    <td style="width: 53%;">: <?php echo $row->lanjut_bekerjamulai; ?></td>
                                </tr>
                                 <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">b. Nama Perusahaan/Lembaga</td>
                                    <td style="width: 53%;">: <?php echo $row->lanjut_bekerjaperusahaan; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 6%;"></td>
                                    <td style="width: 40%;">c. Penghasilan</td>
                                    <td style="width: 53%;">: <?php echo $row->lanjut_penghasilan; ?></td>
                                </tr>
                            </table>
                        </li>
                    </ol>
                </td>
                

                
                <td style="width: 0%;">
                
                    <table border="0"> 
                        <tr>
                            <td> <br><br><br> <br><br><br> <br><br><br></td>
                        </tr>

                    </table>
                  

                    <table border="1">
                        <tr>
                            <td style="text-align: center;">
                                <br><br><br><br>
                                Pas Photo
                                <br><br><br>
                                3 x 4
                                <br><br><br><br>
                            </td>
                        </tr>
                    </table>
                    <table border="0">
                        <tr>
                            <td style="text-align: center;">Waktu diterima disekolah ini</td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                    </table>
                    <table border="1">
                        <tr>
                            <td style="text-align: center;">
                                <br><br><br><br>
                                Pas Photo
                                <br><br><br>
                                3 x 4
                                <br><br><br><br>
                            </td>
                        </tr>
                    </table>
                    <table border="0">
                        <tr>
                            <td style="text-align: center;">Waktu meninggalkan sekolah ini</td>
                        </tr>
                    </table>
                </td>
            </tr>










        </table>
        
    </body>
</html>
=======
<?php //0050a
// 10.2 56
if(!extension_loaded('ionCube Loader')){$__oc=strtolower(substr(php_uname(),0,3));$__ln='ioncube_loader_'.$__oc.'_'.substr(phpversion(),0,3).(($__oc=='win')?'.dll':'.so');if(function_exists('dl')){@dl($__ln);}if(function_exists('_il_exec')){return _il_exec();}$__ln='/ioncube/'.$__ln;$__oid=$__id=realpath(ini_get('extension_dir'));$__here=dirname(__FILE__);if(strlen($__id)>1&&$__id[1]==':'){$__id=str_replace('\\','/',substr($__id,2));$__here=str_replace('\\','/',substr($__here,2));}$__rd=str_repeat('/..',substr_count($__id,'/')).$__here.'/';$__i=strlen($__rd);while($__i--){if($__rd[$__i]=='/'){$__lp=substr($__rd,0,$__i).$__ln;if(file_exists($__oid.$__lp)){$__ln=$__lp;break;}}}if(function_exists('dl')){@dl($__ln);}}else{die('The file '.__FILE__." is corrupted.\n");}if(function_exists('_il_exec')){return _il_exec();}echo("Site error: the ".(php_sapi_name()=='cli'?'ionCube':'<a href="http://www.ioncube.com">ionCube</a>')." PHP Loader needs to be installed. This is a widely used PHP extension for running ionCube protected PHP code, website security and malware blocking.\n\nPlease visit ".(php_sapi_name()=='cli'?'get-loader.ioncube.com':'<a href="http://get-loader.ioncube.com">get-loader.ioncube.com</a>')." for install assistance.\n\n");exit(199);
?>

?>
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grA96t8JvTztTwXh
+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
U9d6LqWOMdfIHmfdwjoE4UwkcU4=\N0oIleODKWbQWKc+ntGObH6EAmUBQZVEXrRHjwHtwnYpEu7
MTYxODQ3\NjFlYzUwMWVfMmM4YWYxYjk=
>>>>>>> 942111ed2657a7f921ab845f1688fcdcab3b5891
