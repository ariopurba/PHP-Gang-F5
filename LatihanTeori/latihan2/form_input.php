<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Jadwal Kuliah</title>
</head>

<body>
    <div class="Container">
        <div class="judul">
            <h1>Input Jadwal Kuliah</h1>
        </div>
        <div class="form">
            <form action="" method="POST">
                <div class="lihat">
                    <table>
                        <tr>
                            <a href="tampil.php">|Lihat Jadwal Kuliah|</a>
                            <!-- <td>Lihat Jadwal Kuliah</td> -->
                            <td>
                                <!-- <select name="jadwal" id="jadwal">
                                <option value="senin">senin</option>
                                <option value="selasa">selasa</option>
                                <option value="rabu">rabu</option>
                                <option value="kamis">kamis</option>
                                <option value="jumat">jumat</option>
                                <option value="sabtu">sabtu</option>
                                </select> -->
                            </td>
                        </tr>
                    </table>
                </div>

                <table>
                    <tr>
                        <td>Kode Mata Kuliah</td>
                        <td><input type="text" name="kode" id="kode"></td>
                    </tr>
                    <tr>
                        <td>Nama Mata Kuliah</td>
                        <td><input type="text" name="nama" id="nama"></td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td><select name="kelas" id="kelas">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
                                <option value="G">G</option>
                                <option value="H">H</option>
                                <option value="I">I</option>
                                <option value="J">J</option>
                                <option value="k">k</option>
                                <option value="l">l</option>
                                <option value="M">M</option>
                                <option value="N">N</option>
                                <option value="O">O</option>
                                <option value="P">P</option>
                                <option value="Q">Q</option>
                                <option value="R">R</option>
                                <option value="S">S</option>
                                <option value="T">T</option>
                                <option value="U">U</option>
                                <option value="V">V</option>
                                <option value="W">W</option>
                                <option value="X">X</option>
                                <option value="Y">Y</option>
                                <option value="Z">Z</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Dosen Pengampu</td>
                        <td><input type="text" name="pengampu" id="pengampu"></td>
                    </tr>
                    <tr>
                        <td>Hari</td>
                        <td>
                            <select name="hari" id="hari">
                                <option value="senin">senin</option>
                                <option value="selasa">selasa</option>
                                <option value="rabu">rabu</option>
                                <option value="kamis">kamis</option>
                                <option value="jumat">jumat</option>
                                <option value="sabtu">sabtu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jam Mulai</td>
                        <td><input type="time" id="jam" name="jam" min="06:00" max="18:00" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Jam Selesai</td>
                        <td><input type="time" id="jam" name="jam" min="06:00" max="18:00" required>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>

                        <td><input type="submit" formaction="insert.php" name="tambah" value="Tambah"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>