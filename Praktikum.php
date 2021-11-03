<!DOCTYPE html>
<html style="background-color:#378724">
<head>
<style>
table {
  width: 100%;
  border: 2px solid black;
  background-color: #378375;
  border-collapse: collapse;
}

th, td {
  text-align: left;
  padding: 16px;
  border: 1px solid ;
  border-collapse: collapse;
}
</style>
</head>
<body>
<?php
     abstract class pegawai {
        public $nama;
        public $tempat_tanggal;
        public $jenis_kelamin;
        public $level;
        public $status;
        public $gaji;
    

    abstract public function get_name();
    abstract public function set_name($nama);

    }

    class parttime extends pegawai{
        public $status = "parttime";

        public function get_name(){
            return $this->nama;
        }

        public function set_name($nama){
            $this->nama = $nama;
        }

        function __construct($nama, $tempat_tanggal, $jenis_kelamin, $level){
            $this->nama = $nama;
            $this->tempat_tanggal = $tempat_tanggal;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->level = $level;

            if($this->level == "Junior"){
                $this->gaji = 2000000/2;
            }
            elseif($this->level == "Amature"){
                $this->gaji =  3500000/2;
            }
            else{
                $this->gaji = 5000000/2;
            }
        }
    }

    class fulltime extends pegawai{
        public $status = "fulltime";

        public function get_name(){
            return $this->nama;
        }

        public function set_name($nama){
            $this->nama = $nama;
        }

        function __construct($nama, $tempat_tanggal, $jenis_kelamin, $level){
            $this->nama = $nama;
            $this->tempat_tanggal = $tempat_tanggal;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->level = $level;

        if($this->level == "Junior"){
            $this->gaji = 2000000;
        }
        elseif($this->level == "Amature"){
            $this->gaji =  3500000;
        }
        else{
            $this->gaji = 5000000;
        }
        }

        


    }
    
    $arr = array();
    $arr[0] = $pegawai1 = new fulltime("Manok", "Aceh 3, Juni 2001", "Laki-Laki", "Senior");
    $arr[1] = $pegawai2 = new fulltime("tapid", "Banjar Baru 17, September 2001", "Laki-Laki", "Junior");
    $arr[2] = $pegawai3 = new parttime("Kabuki", "Bontang 12, Februari 1998", "Laki-Laki", "Senior");
    $arr[3] = $pegawai4 = new parttime("Ewing", "Bogor 26, Oktober 2001", "Laki-Laki", "Junior");
    $arr[4] = $pegawai5 = new fulltime("Sagishi", "Bali 22, Agustus 2001", "Laki-Laki", "Amature");
    $arr[5] = $pegawai6 = new fulltime("Ilham GOD", "Lubang Buaya 29, February 1999", "Laki-Laki", "Amature");   

?>

<h1 style="text-align:center; margin-top : 80px;">Daftar Pegawai</h1>

    <br>
    <table>
      <tr>
        <td style="text-align:center; ">No</td>
        <td style="text-align:center; ">Nama</td>
        <td style="text-align:center;">Tempat Tanggal Lahir</td>
        <td style="text-align:center; ">Jenis Kelamin</td>
        <td style="text-align:center; ">Level</td>
        <td style="text-align:center; ">Status</td>
        <td style="text-align:center; ">Gaji</td>
    </tr> 

      <?php $nomor = 1; for ($i=0; $i < 6; $i++) { ?> 
        <tr>
        <td> <?php echo $nomor; ?> </td>
        <td> <?php echo $arr[$i]->nama; ?> </td>
        <td> <?php echo $arr[$i]->tempat_tanggal; ?> </td>
        <td> <?php echo $arr[$i]->jenis_kelamin; ?> </td>
        <td> <?php echo $arr[$i]->level ?> </td>
        <td> <?php echo $arr[$i]->status; ?> </td>
        <td> <?php echo $arr[$i]->gaji; ?> </td>
      </tr> 
      <?php $nomor = $nomor + 1; } ?>
    </table>

    <h3>Nama: Hafizh Fuqaha <br>NIM: 105219028 </h3>

</body>
</html>