<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Surat</title>
    <style>
        table tr td{
            font-size: 13px;
        }
        table tr .text{
            text-align: center ;
            font-size: 17px;
            letter-spacing: 6px ;
            text-decoration: underline;
        }
        table tr .text2{
            text-align: center ;
            font-family: "Arial";
        }
        table tr .NO{
            font-size: 15px;
            text-align: center ;
        }
        table tr .pengantar{
            font-size: 17px;
            text-align: left ;
        }
        table tr .data{
            font-size: 15px;
            font-family: "Arial";
        }
        table tr .coba{
            font-size: 15px;
            font-family: "Arial";
        }

    </style>
</head>
<body>
    <?php 
            foreach($printsurat as $pr):
                $id_surat = $pr->id_surat;
                // $no_surat = $pr->no_surat;
                $nama = $pr->nama;
                $nuptk = $pr->nuptk;
                $jabatan = $pr->jabatan;
                $tanggal = $pr->tanggal;
                $tempat = $pr->tempat;
                $tujuan = $pr->tujuan;
                // $ybt = $pr->kepala_sekolah;
            endforeach;

            date_default_timezone_set('Asia/Jakarta');
            $kode = date('Y');
        
            date_default_timezone_set('Asia/Jakarta');
            $tanggalsurat = date('d-F-Y');
        
    ?>


    <center>
        <table>
            <br>
            <br>
            <br>
            <input type="hidden" name="id_surat" value=<?=$id_surat ?>>
            <br>
            <tr>
                <td><img src="<?php echo base_url()?>template/img/logo jawa barat.png" alt="logo jawa barat" widht="90" height="90"></td>
                <td>
                    <center>
                    <font size="4">LEMBAGA PENDIDIKAN MA'ARIF NU</font><br>
                    <font size="5">SMK NAHDLATUL ULAMA</font><br>
                    <font size="5">SEKOLAH PUSAT KEUNGGULAN 2021 KEMENDIKBUD</font><br>
                    <font size="4">SK Dinas Pendidikan No. 421.5/1628/Dikmen</font><br>
                    <font size="4">Jalan Argasari No.31 Kota Tasikmalya Telp (0265) 313275</font><br>
                    <font size="3">Site:</font> <font size="3" color="blue"><u>smknutasikmalya.sch.id</u></font><br>
                    </center>
                </td>
                <td><img src="<?php echo base_url()?>template/img/smk nu.png" alt="smk nu" width="90" height="90"></td>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
        </table>
        <table width="820" >
            <tr>
                <td class="text "><b>SURAT  TUGAS</b> <br></td>
            </tr>
            <tr>
                <td class="NO">Nomer:<?=$id_surat ?>/SMKNU/VII/<?=$kode?></td>
            </tr>

            <table width="750" >
                <br>
                    <tr>
                        <td class="pengantar">Yang bertandatangan dibawah ini Kepala Sekolah Menengah Kejuruan Nahdlatul Ulama</td>
                    </tr>
                    <tr>
                    <td class="pengantar">(SMKNU) Kota Tasikmalaya, Menugaskan kepada :</td>
                    </tr>
            </table>

            <table>
                <br>
                    <tr>
                        <td><font size="3"> Nama </font></td>
                        <td  class="data" width="600">:   <?=$nama?></td>
                    </tr>
                    <tr>
                        <td><font size="3"> Nuptk </font></td>
                        <td  class="data" width="600">:   <?=$nuptk?></td>
                    </tr>
                    <tr>
                        <td><font size="3"> Jabatan </font></td>
                        <td  class="data" width="600">:   <?=$jabatan?></td>
                    </tr>
                    <tr>
                        <td><font size="3"> Tanggal </font></td>
                        <td  class="data" width="600">:   <?=date('d F Y', strtotime($tanggal));?><td>
                    </tr>
                    <tr>
                        <td><font size="3"> Tempat </font></td>
                        <td  class="data" width="600">:   <?=$tempat?></td>
                    </tr>
                    <tr>
                        <td><font size="3"> Tujuan </font></td>
                        <td  class="data" width="600">:  <?=$tujuan?></td>
                    </tr>
            </table>
            <table width="750">
                <tr><br>
                        <td class="pengantar">Demikian surat tugas ini kami buat , agar diketahui dan dilaksanakan sebagaimana mestinya</td>
                </tr>
            </table>
            <br>
            <table width="750" >
                <tr>
                    <td width="430"></td>
                    <td class="text2">Tasikmalaya, <?=$tanggalsurat ?> <br>Kepala Sekolah <br><br><br><br><br><br><br><br><u>Drs.Aceng Mubarok M,PD</u></td>
                </tr>
            </table>
        </table>
        <br>
    </center>
            <table>
                <tr>
                    <td width="25"></td>
                    <td class="coba">Telah tiba di tempat </td>
                    <td>:</td>
                </tr>
                <tr>
                    <td width="25"></td>
                    <td class="coba">Pada tanggal</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td width="25"></td>
                    <td class="coba">Diketahui,</td>
                </tr>
            </table>
            <br><br><br><br><br>
            <table>
                <hr width="25%" align="left" color="black" size="1"> 
            </table>
</body>
</html>
    <script>
		window.print();
	</script>