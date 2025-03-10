@extends('layouts.layout')

@section('content')
    {{-- locomotive scroll --}}
    <div data-scroll-container>

        {{-- section 1 --}}
        <section class="pembayaran-section">

            <div class="container">
                <!-- Content here -->
                <div class="pembayaran-banner">
                    <div class="pembayaran-header">
                        <h1>Informasi Biaya dan Daftar Ulang
                            Mahasiswa Baru</h1>
                        <h5>NB : Dipermaklumkan kepada segenap calon mahasiswa/i baru Universitas Darussalam Gontor (UNIDA)
                            agar memperhatikan hal-hal berikut:</h5>
                    </div>
                    {{-- pilihan --}}
                    <div class="btn-group">
                        <button type="button" class="btn btn-transparent active" onclick="showTable('maklumat')"
                            id="btn-maklumat">Maklumat</button>
                        <button type="button" class="btn btn-transparent" onclick="showTable('mahasiswa')"
                            id="btn-mahasiswa">Mahasiswa</button>
                        <button type="button" class="btn btn-transparent" onclick="showTable('mahasiswi')"
                            id="btn-mahasiswi">Mahasiswi</button>
                    </div>

                    <div id="maklumat">
                        <div class="maklumat-card">
                            <img src="{{ asset('assets/pembayaran/maklumat-w.png') }}" alt="">
                        </div>
                    </div>

                    {{-- tabel --}}
                    <div id="tabel-mahasiswa">
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Item Pembayaran</th>
                                    <th>PAI</th>
                                    <th>PBA</th>
                                    <th>TBI</th>
                                    <th>SAA</th>
                                    <th>AFI</th>
                                    <th>IQT</th>
                                    <th>PM</th>
                                    <th>HES</th>
                                    <th>HI</th>
                                    <th>ILKOM</th>
                                    <th>EI</th>
                                    <th>MNJ</th>
                                    <th>TI</th>
                                    <th>TIP</th>
                                    <th>AGRO</th>
                                    <th>K3</th>
                                    <th>EI INTER</th>
                                    <th>HI INTER</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Sumbangan Gedung</td>
                                    <td colspan="18">Rp 850,000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sumbangan Peringatan 100 Tahun Gontor</td>
                                    <td colspan="18">Rp 300,000</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Majalah Gontor</td>
                                    <td colspan="18">Rp 280,000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Biaya SPP</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,600,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,700,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,700,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,600,000</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Praktikum</td>
                                    <td>Rp 600,000</td>
                                    <td>Rp 600,000</td>
                                    <td>Rp 600,000</td>
                                    <td>Rp 300,000</td>
                                    <td>Rp 300,000</td>
                                    <td>Rp 300,000</td>
                                    <td>Rp 350,000</td>
                                    <td>Rp 350,000</td>
                                    <td>Rp 300,000</td>
                                    <td>Rp 500,000</td>
                                    <td>Rp 500,000</td>
                                    <td>Rp 350,000</td>
                                    <td>Rp 750,000</td>
                                    <td>Rp 800,000</td>
                                    <td>Rp 800,000</td>
                                    <td>Rp 800,000</td>
                                    <td>Rp 500,000</td>
                                    <td>Rp 300,000</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Pengembangan Institusi</td>
                                    <td colspan="18">Rp 1,150,000</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Kepanitiaan</td>
                                    <td colspan="18">Rp 375,000</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Asrama dan Kegiatan Mahasiswa (Setiap Bulan)</td>
                                    <td colspan="18">Rp 500,000</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Uang Makan (Setiap Bulan)</td>
                                    <td colspan="18">Rp 370,000</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Uang Kesehatan</td>
                                    <td colspan="18">Rp 150,000</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Sewa Lemari</td>
                                    <td colspan="18">Rp 150,000</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Pembelian Kasur</td>
                                    <td colspan="18">Rp 250,000</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Jas dan Kaos Almamater</td>
                                    <td colspan="18">Rp 250,000</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Buku IELTS & Kelas Bahasa</td>
                                    <td colspan="18">Rp 300,000</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Kepanitiaan OSPEK</td>
                                    <td colspan="18">Rp 500,000</td>
                                </tr>
                                <tr class="total">
                                    <td colspan="2">TOTAL</td>
                                    <td>Rp 8,525,000</td>
                                    <td>Rp 8,525,000</td>
                                    <td>Rp 8,525,000</td>
                                    <td>Rp 8,225,000</td>
                                    <td>Rp 8,225,000</td>
                                    <td>Rp 8,225,000</td>
                                    <td>Rp 8,275,000</td>
                                    <td>Rp 8,275,000</td>
                                    <td>Rp 8,325,000</td>
                                    <td>Rp 8,425,000</td>
                                    <td>Rp 8,425,000</td>
                                    <td>Rp 8,275,000</td>
                                    <td>Rp 8,875,000</td>
                                    <td>Rp 8,725,000</td>
                                    <td>Rp 8,725,000</td>
                                    <td>Rp 8,925,000</td>
                                    <td>Rp 8,425,000</td>
                                    <td>Rp 8,325,000</td>
                                </tr>
                            </tbody>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="tabel-mahasiswi">
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Item Pembayaran</th>
                                    <th>PAI</th>
                                    <th>PBA</th>
                                    <th>TBI</th>
                                    <th>SAA</th>
                                    <th>AFI</th>
                                    <th>IQT</th>
                                    <th>PM</th>
                                    <th>HES</th>
                                    <th>HI</th>
                                    <th>ILKOM</th>
                                    <th>EI</th>
                                    <th>MNJ</th>
                                    <th>TI</th>
                                    <th>TIP</th>
                                    <th>AGRO</th>
                                    <th>GIZI</th>
                                    <TH>FARMASI</TH>
                                    <th>K3</th>
                                    <th>EI INTER</th>
                                    <th>HI INTER</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Sumbangan Gedung</td>
                                    <td colspan="20">Rp 850,000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sumbangan Peringatan 100 Tahun Gontor</td>
                                    <td colspan="20">Rp 300,000</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Majalah Gontor</td>
                                    <td colspan="20">Rp 280,000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Biaya SPP</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,600,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,700,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 2,700,000</td>
                                    <td>Rp 2,700,000</td>
                                    <td>Rp 2,700,000</td>
                                    <td>Rp 2,600,000</td>
                                    <td>Rp 2,500,000</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Praktikum</td>
                                    <td>Rp 600,000</td>
                                    <td>Rp 600,000</td>
                                    <td>Rp 600,000</td>
                                    <td>Rp 300,000</td>
                                    <td>Rp 300,000</td>
                                    <td>Rp 300,000</td>
                                    <td>Rp 350,000</td>
                                    <td>Rp 350,000</td>
                                    <td>Rp 300,000</td>
                                    <td>Rp 500,000</td>
                                    <td>Rp 500,000</td>
                                    <td>Rp 350,000</td>
                                    <td>Rp 750,000</td>
                                    <td>Rp 800,000</td>
                                    <td>Rp 800,000</td>
                                    <td>Rp 1,780,000</td>
                                    <td>Rp 2,500,000</td>
                                    <td>Rp 800,000</td>
                                    <td>Rp 500,000</td>
                                    <td>Rp 300,000</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Pengembangan Institusi</td>
                                    <td colspan="20">Rp 1,150,000</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Kepanitiaan</td>
                                    <td colspan="20">Rp 375,000</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Asrama dan Kegiatan Mahasiswa (Setiap Bulan)</td>
                                    <td colspan="20">Rp 500,000</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Uang Makan (Setiap Bulan)</td>
                                    <td colspan="20">Rp 370,000</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Uang Kesehatan</td>
                                    <td colspan="20">Rp 150,000</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Sewa Lemari</td>
                                    <td colspan="20">Rp 150,000</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Pembelian Kasur</td>
                                    <td colspan="20">Rp 250,000</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Jas Almamater</td>
                                    <td colspan="20">Rp 160,000</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Buku IELTS & Kelas Bahasa</td>
                                    <td colspan="20">Rp 300,000</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Kepanitiaan OSPEK</td>
                                    <td colspan="20">Rp 500,000</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Seragam UNIDA Tosca</td>
                                    <td colspan="20">Rp 265,000</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Seragam UNIDA Krem</td>
                                    <td colspan="20">Rp 255,000</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Kerudung Krem</td>
                                    <td colspan="20">Rp 80,000</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Seragam Olahraga</td>
                                    <td colspan="20">Rp 189,000</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Tas Sandal</td>
                                    <td colspan="20">Rp 25,000</td>
                                </tr>
                                <tr class="total">
                                    <td colspan="2">TOTAL</td>
                                    <td>Rp 9,249,000</td>
                                    <td>Rp 9,249,000</td>
                                    <td>Rp 9,249,000</td>
                                    <td>Rp 8,949,000</td>
                                    <td>Rp 8,949,000</td>
                                    <td>Rp 8,949,000</td>
                                    <td>Rp 8,999,000</td>
                                    <td>Rp 8,999,000</td>
                                    <td>Rp 9,049,000</td>
                                    <td>Rp 9,149,000</td>
                                    <td>Rp 9,149,000</td>
                                    <td>Rp 8,999,000</td>
                                    <td>Rp 9,599,000</td>
                                    <td>Rp 9,449,000</td>
                                    <td>Rp 9,449,000</td>
                                    <td>Rp 10,629,000</td>
                                    <td>Rp 11,349,000</td>
                                    <td>Rp 9,649,000</td>
                                    <td>Rp 9,249,000</td>
                                    <td>Rp 8,949,000</td>
                                </tr>
                            </tbody>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>
        {{-- end section 2 --}}
    </div>
@endsection
