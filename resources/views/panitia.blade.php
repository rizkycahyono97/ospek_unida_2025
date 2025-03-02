@extends('layouts.layout')

@section('content')
    {{-- locomotive scroll --}}
    <div data-scroll-container>

        {{-- section 1 --}}
        <section class="panitia-section">

            <div class="container">
                <!-- Content here -->
                <div class="panitia-banner">
                    <div class="panitia-header">
                        <h1>Struktur Panitia Ospek Syaaheen</h1>
                    </div>

                    {{-- pilihan --}}
                    <div class="btn-group">
                        <button type="button" class="btn btn-transparent active" onclick="showTable('mahasiswa')"
                            id="btn-mahasiswa">Kampus Siman</button>
                        <button type="button" class="btn btn-transparent" onclick="showTable('mahasiswi')"
                            id="btn-mahasiswi">Kampus Mantingan</button>
                    </div>
                    {{-- tabel --}}
                    <table id="tabel-mahasiswa">
                        <tr>
                            <th>Bagian</th>
                            <th>Nama</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td rowspan="5" class="sections">Steering Committee</td>
                            <td>Prof. Dr. KH. Hamid Fahmy Zarkasyi, M.A.Ed., M.Phil. </td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Assoc. Prof. Dr. Abdul Hafidz Zaid, M.A. </td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Assoc. Prof. Dr. Setiawan bin Lahuri, M.A. </td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Assoc. Prof. Dr. Khoirul Umam, M.Ec. Royyan </td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Royyan Ramdhani Djayusman, Ph.D. </td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td rowspan="3" class="sections">Ketua</td>
                            <td>Mochamad Renov Dwi Adityas Putra Wahid</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Fadhil Rahman</td>
                            <td>HI</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Kiki Muhammad Fauzan</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td rowspan="2" class="sections">Koordinator Umum</td>
                            <td>Husni Mubarak</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Husni Mubarak</td>
                            <td>Ilkom</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td rowspan="7" class="sections">Sekertaris</td>
                            <td>Satriawan</td>
                            <td>MNJ</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Roudhoh Hannaaris</td>
                            <td>HI</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Rizki Ari Purnama</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Muhammad Galang Fachrezy </td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Dimas Abdillah </td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Muhammad Kafil Al-Fathin</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Muhammad Izzatullah Dhiya'an Gumay</td>
                            <td>HI</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td rowspan="5" class="sections">Bendahara</td>
                            <td>Muhammad Nabil Hanif</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Ulil Absor Al-Fakih</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Naufal Sesa Ramadhan </td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Ammar Priyanda</td>
                            <td>ILKOM</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Reza Aditya</td>
                            <td> MNJ</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td rowspan="18" class="sections">Keamanan & Ketertiban</td>
                            <td>Muhammad RIfki Hidayat</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Novan Al-Ghifari </td>
                            <td>PM</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Aufar Abdillah Amri </td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Nazhif Insani Amri</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Akmal Mizan Al-Khoiri</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Ahmad Muzakkir</td>
                            <td>HI</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Ahmad Hufaezi Surya Putra</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Ahmad Aldifa Abkar</td>
                            <td>AFI</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Jiddy Mujahidi</td>
                            <td>MNJ</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Zein Malana</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Amrullah Ghalib</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Afriyandi Pamungkas</td>
                            <td>PBA</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Sofyan Sauri</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Ikbar Muzakki</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Fadhil Nawwaf Habibie Yulma</td>
                            <td>MNJ</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Ibadurrahman Al-Muhtadi Billah</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Zainul Muttaqin</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>Ikram Sayid Al-fath</td>
                            <td>PM</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td rowspan="5" class="sections">Fotografi</td>
                            <td>Naufal Fitrah</td>
                            <td>MNJ</td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>Dana Harjono</td>
                            <td>ILKOM</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>Ahmad Najamudin Al-Farobi</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>Rhiyardmizard Rifki Al-Khadafi</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>Rama Pratama</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td rowspan="5" class="sections">Videografi</td>
                            <td>Muhammad Musa Hidayatullah</td>
                            <td>ILKOM</td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td>Ahmad Fajri Rahmadi</td>
                            <td>ILKOM</td>
                        </tr>
                        <tr>
                            <td>43</td>
                            <td>Awaluddin Rabbany</td>
                            <td>PBA</td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td>Adam Toyyib</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>45</td>
                            <td>Khalid Brahma</td>
                            <td>SAA</td>
                        </tr>
                        <tr>
                            <td>46</td>
                            <td rowspan="3" class="sections">Publikasi</td>
                            <td>Khalid Brahma</td>
                            <td>SAA</td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td>Farhat Rabbani</td>
                            <td>ILKOM</td>
                        </tr>
                        <tr>
                            <td>48</td>
                            <td>Faiz Rully</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>49</td>
                            <td rowspan="2" class="sections">Publikasi Web</td>
                            <td>Iqbal Maulana</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td>Rizki Cahyono</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>51</td>
                            <td rowspan="7" class="sections">Designer</td>
                            <td>Rafki Fauzan</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>52</td>
                            <td>Abbas Al Badawi</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>53</td>
                            <td>Firdis Firnadi</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>54</td>
                            <td>Nur Ridho</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>55</td>
                            <td>Fauzi Fadillah Nugraha</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>56</td>
                            <td>Mauludha Fiozaki</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>57</td>
                            <td>Musyafa Addin</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>58</td>
                            <td rowspan="11" class="sections">Keilmuan</td>
                            <td>Adam Saipurrohman</td>
                            <td>HI</td>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td>Muhammad Kintan Alfarabi</td>
                            <td>HI</td>
                        </tr>
                        <tr>
                            <td>60</td>
                            <td>Ayusman Prawara</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>61</td>
                            <td>Muhammad Alfaruqi</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>62</td>
                            <td>Muhammad Hizqil Waffa</td>
                            <td>PBA</td>
                        </tr>
                        <tr>
                            <td>63</td>
                            <td>Muslih Hadi</td>
                            <td>PBA</td>
                        </tr>
                        <tr>
                            <td>64</td>
                            <td>Muhammad Fikri Hakim</td>
                            <td>TBI</td>
                        </tr>
                        <tr>
                            <td>65</td>
                            <td>Ishmaelasta Ghafrilla Al Azhmi</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>66</td>
                            <td>Diaz Adhwa Fawwaz</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>67</td>
                            <td>Ferianto Wibowo</td>
                            <td>AGRO</td>
                        </tr>
                        <tr>
                            <td>68</td>
                            <td>Ziyad Fida Rahim</td>
                            <td>HI</td>
                        </tr>
                        <tr>
                            <td>69</td>
                            <td rowspan="13" class="sections">Kerohanian</td>
                            <td>Halim Tohari</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>70</td>
                            <td>Abdan Khairi</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>71</td>
                            <td>Habibi Al-Bana</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>72</td>
                            <td>Abdullah Harits Hermawan</td>
                            <td>PM</td>
                        </tr>
                        <tr>
                            <td>73</td>
                            <td>Muhamad Reza</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>74</td>
                            <td>Gani Erlangga</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>75</td>
                            <td>Jundullah Faruq</td>
                            <td>AGRO</td>
                        </tr>
                        <tr>
                            <td>76</td>
                            <td>Faid Ghafatan</td>
                            <td>AGRO</td>
                        </tr>
                        <tr>
                            <td>77</td>
                            <td>Fahim Izzul Haq</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>78</td>
                            <td>Agus Cahyono</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>79</td>
                            <td>Bili Syahputra</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>80</td>
                            <td>Muhammad Sholahuddin</td>
                            <td>MNJ</td>
                        </tr>
                        <tr>
                            <td>81</td>
                            <td>Faheem Abdussalam</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>82</td>
                            <td rowspan="9" class="sections">Olahraga</td>
                            <td>Rizki Mulya Jaya</td>
                            <td>HI</td>
                        </tr>
                        <tr>
                            <td>83</td>
                            <td>Nabil Mubarak</td>
                            <td>HES</td>
                        </tr>
                        <tr>
                            <td>84</td>
                            <td>Hedda Barirta</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>85</td>
                            <td>Qolbun Salim</td>
                            <td>AFI</td>
                        </tr>
                        <tr>
                            <td>86</td>
                            <td>Muhammad Al Farisi Kholiu Robby</td>
                            <td>PBA</td>
                        </tr>
                        <tr>
                            <td>87</td>
                            <td>Agus Widodo</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>88</td>
                            <td>Khaza Nadhdhaghattan Ikhram</td>
                            <td>PBA</td>
                        </tr>
                        <tr>
                            <td>89</td>
                            <td>Abror</td>
                            <td>AFI</td>
                        </tr>
                        <tr>
                            <td>90</td>
                            <td>Fadhel Wirdiyan Prayudi</td>
                            <td>PM</td>
                        </tr>
                        <tr>
                            <td>91</td>
                            <td rowspan="10" class="sections">Kemahasiswaan</td>
                            <td>Faris Kalya Syafei</td>
                            <td>ILKOM</td>
                        </tr>
                        <tr>
                            <td>92</td>
                            <td>Adli Prafda Ridho</td>
                            <td>HES</td>
                        </tr>
                        <tr>
                            <td>93</td>
                            <td>Habib Al Fikri</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>94</td>
                            <td>Rafif Amin Yasykur</td>
                            <td>AGRO</td>
                        </tr>
                        <tr>
                            <td>95</td>
                            <td>Maulana Abdul Basith</td>
                            <td>HI</td>
                        </tr>
                        <tr>
                            <td>96</td>
                            <td>Azhar Nafi' Yahya</td>
                            <td>HI</td>
                        </tr>
                        <tr>
                            <td>97</td>
                            <td>Lu'lu Galih Martajaya</td>
                            <td>PM</td>
                        </tr>
                        <tr>
                            <td>98</td>
                            <td>Muh. Hari Bagus Zahra</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>99</td>
                            <td>Rizky Fadillah</td>
                            <td>HES</td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>Arrayan Fikri</td>
                            <td>ILKOM</td>
                        </tr>
                        <tr>
                            <td>101</td>
                            <td rowspan="16" class="sections">Perlengkapan & Logistik</td>
                            <td>Syafiq Nur Umam</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>Alfito Bryan Maulana</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>103</td>
                            <td>Zulfikri Fauzi</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>104</td>
                            <td>Dzukfahmi Zaid</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>105</td>
                            <td>Ilham Nur Habibi</td>
                            <td>HI</td>
                        </tr>
                        <tr>
                            <td>106</td>
                            <td>M. A. Al Buchori Ramadhana</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>107</td>
                            <td>Asffar Galih Ramadhan</td>
                            <td>HES</td>
                        </tr>
                        <tr>
                            <td>108</td>
                            <td>Muhammad Ersananda Ferdianto</td>
                            <td>PBA</td>
                        </tr>
                        <tr>
                            <td>109</td>
                            <td>Misbahul Muflihin</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>110</td>
                            <td>Wafa Bila Syaefurokhman</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>111</td>
                            <td>Abdurrahman Al-Fauzi</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>112</td>
                            <td>Muhammad Miftah Faiz</td>
                            <td>AFI</td>
                        </tr>
                        <tr>
                            <td>113</td>
                            <td>Faton Mulyana Haris</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>114</td>
                            <td>Muhammad Alfan Nashoikhus Surur</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>115</td>
                            <td>Fauzan Syahrul Mukarum</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>116</td>
                            <td>Fauzi Syahrul Mukarum</td>
                            <td>AFI</td>
                        </tr>
                        <tr>
                            <td>117</td>
                            <td rowspan="8" class="sections">Konsumsi</td>
                            <td>Zalfa Nawwaf</td>
                            <td>AFI</td>
                        </tr>
                        <tr>
                            <td>118</td>
                            <td>Irfan Fadhillah</td>
                            <td>PM</td>
                        </tr>
                        <tr>
                            <td>119</td>
                            <td>Muhammad Hafizh</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>120</td>
                            <td>Rifqi Ramadhan</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>121</td>
                            <td>Husni Mubarak</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>122</td>
                            <td>Althaf Asfandi</td>
                            <td>ILKOM</td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td>Nouma Zidan Akbar</td>
                            <td>PM</td>
                        </tr>
                        <tr>
                            <td>124</td>
                            <td>Alif Yusuf</td>
                            <td>HES</td>
                        </tr>
                        <tr>
                            <td>125</td>
                            <td rowspan="6" class="sections">Bazzar</td>
                            <td>Dzakwan Rahmatullah</td>
                            <td>MNJ</td>
                        </tr>
                        <tr>
                            <td>126</td>
                            <td>Ibkar Khotami</td>
                            <td>AGRO</td>
                        </tr>
                        <tr>
                            <td>127</td>
                            <td>Ilham Wahyudi</td>
                            <td>TIP</td>
                        </tr>
                        <tr>
                            <td>128</td>
                            <td>Azam Nur Hasan Albana</td>
                            <td>AGRO</td>
                        </tr>
                        <tr>
                            <td>129</td>
                            <td>Adib Sayid Anam</td>
                            <td>MNJ</td>
                        </tr>
                        <tr>
                            <td>130</td>
                            <td>Sulthan Hafizan</td>
                            <td>PM</td>
                        </tr>
                        <tr>
                            <td>131</td>
                            <td rowspan="9" class="sections">Hubungan Masyarakat</td>
                            <td>Tegar Adi Prasetya</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>132</td>
                            <td>Muhammad Diaz Supandi</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>133</td>
                            <td>Galang Fachrezy</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>134</td>
                            <td>Noor Farizal Aviv</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>135</td>
                            <td>Fadel Aliy Dzulqornain</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>136</td>
                            <td>Ilham Perdana Putra</td>
                            <td>AGRO</td>
                        </tr>
                        <tr>
                            <td>137</td>
                            <td>Erlangga Nur Cahyo</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>138</td>
                            <td>Istaulaf Ahdi</td>
                            <td>AGRO</td>
                        </tr>
                        <tr>
                            <td>139</td>
                            <td>Abhinaya Azhar</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>140</td>
                            <td rowspan="6" class="sections">Pertolongan Pertama Pada Kecelakaan</td>
                            <td>Muhammad Ramadhan</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>141</td>
                            <td>Zimam Amaly</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>142</td>
                            <td>Adam Naufal</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>143</td>
                            <td>Hanan Dzaky Firdaus</td>
                            <td>PBA</td>
                        </tr>
                        <tr>
                            <td>144</td>
                            <td>Kevin Setyadharma</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>145</td>
                            <td>Ma'ruf Amrullah</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>146</td>
                            <td rowspan="14" class="sections">Perimaan Mahasiswa Baru</td>
                            <td>Muhammad Ihsan</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>147</td>
                            <td>Fiqih Aditya</td>
                            <td>MNJ</td>
                        </tr>
                        <tr>
                            <td>148</td>
                            <td>Hero Hadianur</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>149</td>
                            <td>Nero Caesar</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>150</td>
                            <td>Kemal Yudha</td>
                            <td>PM</td>
                        </tr>
                        <tr>
                            <td>151</td>
                            <td>Muhammad 'Aliim Adi Wicaksono</td>
                            <td>PM</td>
                        </tr>
                        <tr>
                            <td>152</td>
                            <td>Faiz Muhammad Hafiz</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>153</td>
                            <td>Hifzhan Manna Maula</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>154</td>
                            <td>Febian Alfarizhi Damara</td>
                            <td>ILKOM</td>
                        </tr>
                        <tr>
                            <td>155</td>
                            <td>Sulthan Haidar Raif</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>156</td>
                            <td>Ahmad Irhan Fauzi</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>157</td>
                            <td>Ksatria Ali Dzul Fiqar</td>
                            <td>HI</td>
                        </tr>
                        <tr>
                            <td>158</td>
                            <td>Muhammad Azrul Amirullah</td>
                            <td>PM</td>
                        </tr>
                        <tr>
                            <td>159</td>
                            <td>Ahmad Dayyan Manaungi</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>160</td>
                            <td rowspan="6" class="sections">Penanggung Jawab Fakultas Tarbiyah</td>
                            <td>Muhammad Thabathaba'i</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>161</td>
                            <td>Muhamad Firdaus</td>
                            <td>PAI</td>
                        </tr>
                        <tr>
                            <td>162</td>
                            <td>Yoza Wirayuda</td>
                            <td>PBA</td>
                        </tr>
                        <tr>
                            <td>163</td>
                            <td>Agus Faisal</td>
                            <td>PBA</td>
                        </tr>
                        <tr>
                            <td>164</td>
                            <td>Heldy Hasfid Hariri</td>
                            <td>TBI</td>
                        </tr>
                        <tr>
                            <td>165</td>
                            <td>Dzil Izzat Kurniawan</td>
                            <td>TBI</td>
                        </tr>
                        <tr>
                            <td>166</td>
                            <td rowspan="6" class="sections">Penanggung Jawab Fakultas Ushuluddin</td>
                            <td>Muhammad Dhiyaul Kasyfi</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>167</td>
                            <td>Muhammad Gaffa akram</td>
                            <td>IQT</td>
                        </tr>
                        <tr>
                            <td>168</td>
                            <td>Zahin Zahid Faza</td>
                            <td>AFI</td>
                        </tr>
                        <tr>
                            <td>169</td>
                            <td>Afkaar Gilang Awantoro</td>
                            <td>AFI</td>
                        </tr>
                        <tr>
                            <td>170</td>
                            <td>Khalid Brahma</td>
                            <td>SAA</td>
                        </tr>
                        <tr>
                            <td>171</td>
                            <td>Muhammad Khalaf Fadhlurrahman</td>
                            <td>SAA</td>
                        </tr>
                        <tr>
                            <td>172</td>
                            <td rowspan="4" class="sections">Penanggung Jawab Fakultas Syariah</td>
                            <td>Muhammad Ihsan Maulana</td>
                            <td>HES</td>
                        </tr>
                        <tr>
                            <td>173</td>
                            <td>Fata Nashrul Hadi</td>
                            <td>HES</td>
                        </tr>
                        <tr>
                            <td>174</td>
                            <td>Muhammad Akbar Hilman</td>
                            <td>PM</td>
                        </tr>
                        <tr>
                            <td>175</td>
                            <td>Anjas Putra Asnur</td>
                            <td>PM</td>
                        </tr>
                        <tr>
                            <td>176</td>
                            <td rowspan="4" class="sections">Penanggung Jawab Fakultas Ekonomi Manajamen</td>
                            <td>Raihan Fahrur Haq</td>
                            <td>MB</td>
                        </tr>
                        <tr>
                            <td>177</td>
                            <td>Muhammad Rizki Ar-Rasyid</td>
                            <td>MB</td>
                        </tr>
                        <tr>
                            <td>178</td>
                            <td>Ahmad Adn Suryadana</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>179</td>
                            <td>Dimitri ulung</td>
                            <td>EI</td>
                        </tr>
                        <tr>
                            <td>180</td>
                            <td rowspan="4" class="sections">Penanggung Jawab Fakultas Humaniora</td>
                            <td>Muhammad Razaq Puaries</td>
                            <td>HI</td>
                        </tr>
                        <tr>
                            <td>181</td>
                            <td>Raja Muda Mubaraq</td>
                            <td>HI</td>
                        </tr>
                        <tr>
                            <td>182</td>
                            <td>Yahya Haqqul Mubin</td>
                            <td>ILKOM</td>
                        </tr>
                        <tr>
                            <td>183</td>
                            <td>Ghifari Arryaman</td>
                            <td>ILKOM</td>
                        </tr>
                        <tr>
                            <td>184</td>
                            <td rowspan="6" class="sections">Penanggung Jawab Fakultas Sains & Teknologi</td>
                            <td>Hasbi Abdullah</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>185</td>
                            <td>Farel ghozy</td>
                            <td>TI</td>
                        </tr>
                        <tr>
                            <td>186</td>
                            <td>Ilham Wahyudi</td>
                            <td>TIP</td>
                        </tr>
                        <tr>
                            <td>187</td>
                            <td>Amirul Al Aziz</td>
                            <td>TIP</td>
                        </tr>
                        <tr>
                            <td>188</td>
                            <td>MUHAMMAD AHDA SABILA</td>
                            <td>AGRO</td>
                        </tr>
                        <tr>
                            <td>189</td>
                            <td>Akhmad Nawfal Azmi</td>
                            <td>AGRO</td>
                        </tr>
                        <tr>
                            <td>190</td>
                            <td rowspan="2" class="sections">Penanggung Jawab Fakultas Ilmu Kesehatan</td>
                            <td>Ahmad Faiq Noerjantoro</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>191</td>
                            <td>Fadil Muta'asimbillah</td>
                            <td>KKK</td>
                        </tr>
                        <tr>
                            <td>192</td>
                            <td rowspan="2" class="sections">Penanggung Jawab Fakultas Kedokteran</td>
                            <td>Achmad Kahlil Gibran</td>
                            <td>Kedokteran</td>
                        </tr>
                        <tr>
                            <td>193</td>
                            <td>Robby Dzikru Azfar Pado</td>
                            <td>Kedokteran</td>
                        </tr>
                    </table>
                    <table id="tabel-mahasiswi">
                        <tr>
                            <th>Bagian</th>
                            <th>Nama</th>
                        </tr>
                        <tr>
                            <td rowspan="3" class="sections">Pembimbing Umum</td>
                            <td>Assoc. Prof. Dr. Nur Hadi Ihsan, MIRKH</td>
                        </tr>
                        <tr>
                            <td>Ahmad Setiyono, M.M</td>
                        </tr>
                        <tr>
                            <td>Cela Petty Susanti, M.Pd</td>
                        </tr>
                        <tr>
                            <td rowspan="5" class="sections">Ketua</td>
                            <td>Dwi Purwati, S.Pd.</td>
                        </tr>
                        <tr>
                            <td>Firda Utami</td>
                        </tr>
                        <tr>
                            <td>Rizka Akzia</td>
                        </tr>
                        <tr>
                            <td>Fairuz Habibah Imtinan</td>
                        </tr>
                        <tr>
                            <td>Ahsanu Nadiyya</td>
                        </tr>
                        <tr>
                            <td rowspan="5" class="sections">Sekretaris</td>
                            <td>Alifah Yasmin, M.Ag.</td>
                        </tr>
                        <tr>
                            <td>Shindidah Lady Aqila</td>
                        </tr>
                        <tr>
                            <td>Sakhiya Mufida</td>
                        </tr>
                        <tr>
                            <td>Kayla Syukrina</td>
                        </tr>
                        <tr>
                            <td>Saskia Najma</td>
                        </tr>
                        <tr>
                            <td rowspan="5" class="sections">Bendahara</td>
                            <td>Mamluatus Sa’diyah, S.E.</td>
                        </tr>
                        <tr>
                            <td>Nafsa Izzaturrahma</td>
                        </tr>
                        <tr>
                            <td>Nabila Nova</td>
                        </tr>
                        <tr>
                            <td>Fatimah Firstly Al-ghina</td>
                        </tr>
                        <tr>
                            <td>Aini Istiqomah</td>
                        </tr>
                        <tr>
                            <td rowspan="17" class="sections">Sie Giat</td>
                            <td>Dzatu Aliviatin Nuha, M.Ag.</td>
                        </tr>
                        <tr>
                            <td>Khaylila Adiya Ramadhani</td>
                        </tr>
                        <tr>
                            <td>Siti Salwa</td>
                        </tr>
                        <tr>
                            <td>Diana Anggraini</td>
                        </tr>
                        <tr>
                            <td>Zahra Syifaul</td>
                        </tr>
                        <tr>
                            <td>Fidela Sabrina</td>
                        </tr>
                        <tr>
                            <td>Afifah Thohiroh</td>
                        </tr>
                        <tr>
                            <td>Fitri Hidayatul</td>
                        </tr>
                        <tr>
                            <td>Aldha Putri</td>
                        </tr>
                        <tr>
                            <td>Nandratul Jariah</td>
                        </tr>
                        <tr>
                            <td>Wafda Faazatul</td>
                        </tr>
                        <tr>
                            <td>Naura Adila</td>
                        </tr>
                        <tr>
                            <td>Bella Putri</td>
                        </tr>
                        <tr>
                            <td>Salsabila Lifdhita</td>
                        </tr>
                        <tr>
                            <td>Nadia Elhaq</td>
                        </tr>
                        <tr>
                            <td>Erlita Widya</td>
                        </tr>
                        <tr>
                            <td>Fatma Azilia</td>
                        </tr>
                        <tr>
                            <td rowspan="17" class="sections">Sie Materi</td>
                            <td>Yulisa Raras Dewi, M.Farm.</td>
                        </tr>
                        <tr>
                            <td>Febrian Nurul Khotimah, S.Gz.</td>
                        </tr>
                        <tr>
                            <td>Desy Auliya Qudsi, S.Gz.</td>
                        </tr>
                        <tr>
                            <td>Arifah Nursalsabila</td>
                        </tr>
                        <tr>
                            <td>Alzena Mahesadewi</td>
                        </tr>
                        <tr>
                            <td>Dalva Sania</td>
                        </tr>
                        <tr>
                            <td>Dini Lu’lu</td>
                        </tr>
                        <tr>
                            <td>Arsya Naya</td>
                        </tr>
                        <tr>
                            <td>Siti Darojatun</td>
                        </tr>
                        <tr>
                            <td>Meutia Anuisa</td>
                        </tr>
                        <tr>
                            <td>Assyifatuzzahro</td>
                        </tr>
                        <tr>
                            <td>Siti Rizki</td>
                        </tr>
                        <tr>
                            <td>Nayla Silfa</td>
                        </tr>
                        <tr>
                            <td>Athifah Awwalisa</td>
                        </tr>
                        <tr>
                            <td>Choirunnisa Ramadhani</td>
                        </tr>
                        <tr>
                            <td>Kayla Nuria</td>
                        </tr>
                        <tr>
                            <td>Sara Syalwa</td>
                        </tr>

                        <tr>
                            <td rowspan="25" class="sections">Perlengkapan</td>
                            <td>Ayu Era Wardhani, M.Pd.</td>
                        </tr>
                        <tr>
                            <td>Hajjar Darisaalamah Firdaus, S.Ag.</td>
                        </tr>
                        <tr>
                            <td>Anuida Antor</td>
                        </tr>
                        <tr>
                            <td>Afzal Nabila</td>
                        </tr>
                        <tr>
                            <td>Ade Alifya</td>
                        </tr>
                        <tr>
                            <td>Fatimah Ilma</td>
                        </tr>
                        <tr>
                            <td>Yasra Oca</td>
                        </tr>
                        <tr>
                            <td>Fatimah Nur Azahro</td>
                        </tr>
                        <tr>
                            <td>Wahidatus Syifa</td>
                        </tr>
                        <tr>
                            <td>Shofiyatun Jannah</td>
                        </tr>
                        <tr>
                            <td>Nafiza Salwa</td>
                        </tr>
                        <tr>
                            <td>Nursitihaya Kaning</td>
                        </tr>
                        <tr>
                            <td>Nadin Dikania</td>
                        </tr>
                        <tr>
                            <td>Nopi Tri Ramadhani</td>
                        </tr>
                        <tr>
                            <td>Siti Nur Hafizatul</td>
                        </tr>
                        <tr>
                            <td>Nisa Aulia</td>
                        </tr>
                        <tr>
                            <td>Syifa Nazwa</td>
                        </tr>
                        <tr>
                            <td>Putri Ainur</td>
                        </tr>
                        <tr>
                            <td>Indah Sefiah</td>
                        </tr>
                        <tr>
                            <td>Widia Tsani</td>
                        </tr>
                        <tr>
                            <td>Intan Junice</td>
                        </tr>
                        <tr>
                            <td>Khoirun Nisa Nurul Hidayah</td>
                        </tr>
                        <tr>
                            <td>Siti Mutia Najwa</td>
                        </tr>
                        <tr>
                            <td>Aura Afifah</td>
                        </tr>
                        <tr>
                            <td>Alya Fazila</td>
                        </tr>

                        <tr>
                            <td rowspan="14" class="sections">Spiritual</td>
                            <td>Haninah Az-Zahra, Lc. M.Pd</td>
                        </tr>
                        <tr>
                            <td>Amelia Ayuningtyas</td>
                        </tr>
                        <tr>
                            <td>Della Natasya</td>
                        </tr>
                        <tr>
                            <td>Lanjar Budiarti</td>
                        </tr>
                        <tr>
                            <td>Isti Komah</td>
                        </tr>
                        <tr>
                            <td>Rizma Salsabila</td>
                        </tr>
                        <tr>
                            <td>Nurul Khoiriyah</td>
                        </tr>
                        <tr>
                            <td>Viona Nur</td>
                        </tr>
                        <tr>
                            <td>Hilwa Syahida</td>
                        </tr>
                        <tr>
                            <td>Erizka Arrofi</td>
                        </tr>
                        <tr>
                            <td>Aisyah Nur Zahra</td>
                        </tr>
                        <tr>
                            <td>Najwa Syifa</td>
                        </tr>
                        <tr>
                            <td>Zaimah Khurriyyah</td>
                        </tr>
                        <tr>
                            <td>Afifah Sholeha</td>
                        </tr>

                        <tr>
                            <td rowspan="13" class="sections">Konsumsi Mahasiswi</td>
                            <td>Dini Rofiatul Khoiriyah, M.Pd.</td>
                        </tr>
                        <tr>
                            <td>Basmah Mujahidah</td>
                        </tr>
                        <tr>
                            <td>Fella Elya</td>
                        </tr>
                        <tr>
                            <td>Nida Kamila</td>
                        </tr>
                        <tr>
                            <td>Qurrota A’yun</td>
                        </tr>
                        <tr>
                            <td>Wetri Pratama</td>
                        </tr>
                        <tr>
                            <td>Aisyah Siti Munawaroh</td>
                        </tr>
                        <tr>
                            <td>Zainab Ahmad</td>
                        </tr>
                        <tr>
                            <td>Suci Ramadhani</td>
                        </tr>
                        <tr>
                            <td>Nasywa Dias Syauqi</td>
                        </tr>
                        <tr>
                            <td>Mega Putri</td>
                        </tr>
                        <tr>
                            <td>Aisyah Dzakirah</td>
                        </tr>
                        <tr>
                            <td>Karina Khoirunisa</td>
                        </tr>

                        <tr>
                            <td rowspan="15" class="sections">Konsumsi Tutor dan Dosen</td>
                            <td>Annisa Silviana Yuniar, S.E., M.H.</td>
                        </tr>
                        <tr>
                            <td>Fauziyah Zahro, S.Pd.</td>
                        </tr>
                        <tr>
                            <td>Siti Salma Zaina Azzahra</td>
                        </tr>
                        <tr>
                            <td>Auliya Fauziyatul</td>
                        </tr>
                        <tr>
                            <td>Avita Yuni</td>
                        </tr>
                        <tr>
                            <td>Reni Andriyana</td>
                        </tr>
                        <tr>
                            <td>Mutiara Nabila</td>
                        </tr>
                        <tr>
                            <td>Nichi Aulia</td>
                        </tr>
                        <tr>
                            <td>Zahwa Zahrotul</td>
                        </tr>
                        <tr>
                            <td>Dewi Ratih</td>
                        </tr>
                        <tr>
                            <td>Shafiyyah Al Khansa</td>
                        </tr>
                        <tr>
                            <td>Nabila</td>
                        </tr>
                        <tr>
                            <td>Najma Maghfira Indringityas</td>
                        </tr>
                        <tr>
                            <td>Iffatussajida</td>
                        </tr>
                        <tr>
                            <td>Desyifa Almahira Herlis</td>
                        </tr>

                        <tr>
                            <td rowspan="19" class="sections">LO Tutor</td>
                            <td>Haila Fardyatullail, M.Ag.</td>
                        </tr>
                        <tr>
                            <td>Warosuatun Khadijah, S.Sos.</td>
                        </tr>
                        <tr>
                            <td>Calya Maharani</td>
                        </tr>
                        <tr>
                            <td>Putri Fadilah</td>
                        </tr>
                        <tr>
                            <td>Fathina Nurul</td>
                        </tr>
                        <tr>
                            <td>Ana Dwi Marlia</td>
                        </tr>
                        <tr>
                            <td>Allifa Khoirol Wafa’</td>
                        </tr>
                        <tr>
                            <td>Miftah Eka</td>
                        </tr>
                        <tr>
                            <td>Silfa Istiqomah</td>
                        </tr>
                        <tr>
                            <td>Putri Pratiwi</td>
                        </tr>
                        <tr>
                            <td>Devina Raihanisa</td>
                        </tr>
                        <tr>
                            <td>Jenny Rismala Putri</td>
                        </tr>
                        <tr>
                            <td>Arina Fatya Manasikana</td>
                        </tr>
                        <tr>
                            <td>Safira Salsabila</td>
                        </tr>
                        <tr>
                            <td>Sultistia Fitri</td>
                        </tr>
                        <tr>
                            <td>Gevira Lia</td>
                        </tr>
                        <tr>
                            <td>Nayla Latifa</td>
                        </tr>
                        <tr>
                            <td>Retno Setyaningsih</td>
                        </tr>
                        <tr>
                            <td>Adinda Kyan</td>
                        </tr>

                        <tr>
                            <td rowspan="10" class="sections">Dekorasi</td>
                            <td>Khoiriyah Kamilatul Huda</td>
                        </tr>
                        <tr>
                            <td>Putri Maghfiroh</td>
                        </tr>
                        <tr>
                            <td>Annisa Rahma Nur F</td>
                        </tr>
                        <tr>
                            <td>Zahra Musthofafi</td>
                        </tr>
                        <tr>
                            <td>Khoirina Ummu</td>
                        </tr>
                        <tr>
                            <td>Azzahra Britania</td>
                        </tr>
                        <tr>
                            <td>Afifah Nur Rahmah</td>
                        </tr>
                        <tr>
                            <td>Khansa Amatullah</td>
                        </tr>
                        <tr>
                            <td>Adillah Ning Restu</td>
                        </tr>
                        <tr>
                            <td>Ashley Larasati</td>
                        </tr>

                        <tr>
                            <td rowspan="20" class="sections">Kesenian</td>
                            <td>Ayu Fitria Fandini</td>
                        </tr>
                        <tr>
                            <td>Celika Idna</td>
                        </tr>
                        <tr>
                            <td>Nabila Nur Mahmudah</td>
                        </tr>
                        <tr>
                            <td>Dhini Rheynata</td>
                        </tr>
                        <tr>
                            <td>Mulia Handayani Indrawati</td>
                        </tr>
                        <tr>
                            <td>Larissa Rahima</td>
                        </tr>
                        <tr>
                            <td>Adelia Putri</td>
                        </tr>
                        <tr>
                            <td>Qorima Aurora</td>
                        </tr>
                        <tr>
                            <td>Zahwa Putri</td>
                        </tr>
                        <tr>
                            <td>Zhafira Inas</td>
                        </tr>
                        <tr>
                            <td>Siti Nabila</td>
                        </tr>
                        <tr>
                            <td>Nahda Arina</td>
                        </tr>
                        <tr>
                            <td>Nida Fatimatuzzahra</td>
                        </tr>
                        <tr>
                            <td>Natasha Ishma</td>
                        </tr>
                        <tr>
                            <td>Devi Aghita</td>
                        </tr>
                        <tr>
                            <td>Fiona Anggilia</td>
                        </tr>
                        <tr>
                            <td>Najwah Safana</td>
                        </tr>
                        <tr>
                            <td>Annisa Selviata</td>
                        </tr>
                        <tr>
                            <td>Amaranta Atulia</td>
                        </tr>
                        <tr>
                            <td>Aulia Azzahra</td>
                        </tr>


                        <tr>
                            <td rowspan="10" class="sections">Penerangan</td>
                            <td>Nada Ayu Septiani</td>
                        </tr>
                        <tr>
                            <td>Nuraeni Rahmawati</td>
                        </tr>
                        <tr>
                            <td>Raissa Hasna</td>
                        </tr>
                        <tr>
                            <td>Ibnaty Nabila</td>
                        </tr>
                        <tr>
                            <td>Laila Puspita</td>
                        </tr>
                        <tr>
                            <td>Nikmatur Rohmah</td>
                        </tr>
                        <tr>
                            <td>Septika Wahyu Nur Aini</td>
                        </tr>
                        <tr>
                            <td>Ardhya Ayu Amalia</td>
                        </tr>
                        <tr>
                            <td>Keyla Fitran</td>
                        </tr>
                        <tr>
                            <td>Alysha Amanda</td>
                        </tr>

                        <tr>
                            <td rowspan="9" class="sections">Publikasi & Dokumentasi</td>
                            <td>Arraminta Al-Hadi</td>
                        </tr>
                        <tr>
                            <td>Gadys Putria</td>
                        </tr>
                        <tr>
                            <td>Luthfiana Nuur</td>
                        </tr>
                        <tr>
                            <td>Aulia Carolina</td>
                        </tr>
                        <tr>
                            <td>Rizka Khaetunisa</td>
                        </tr>
                        <tr>
                            <td>Sri Hany Kusuma</td>
                        </tr>
                        <tr>
                            <td>Hasya Seprti</td>
                        </tr>
                        <tr>
                            <td>Syaina Rahma</td>
                        </tr>
                        <tr>
                            <td>Fadhillah Ramadhani</td>
                        </tr>

                        <tr>
                            <td rowspan="12" class="sections">Desain Grafis</td>
                            <td>Nindhya Ayomi Delahara, S.Ag., M.Pd</td>
                        </tr>
                        <tr>
                            <td>Naily Hayatun Nufus</td>
                        </tr>
                        <tr>
                            <td>Nurul Izzati</td>
                        </tr>
                        <tr>
                            <td>Marwah</td>
                        </tr>
                        <tr>
                            <td>Nur Vadilah</td>
                        </tr>
                        <tr>
                            <td>Hurul Aini</td>
                        </tr>
                        <tr>
                            <td>Kirani Cintya</td>
                        </tr>
                        <tr>
                            <td>Diva Azarine</td>
                        </tr>
                        <tr>
                            <td>Lutlu Indana</td>
                        </tr>
                        <tr>
                            <td>Amira Fathina</td>
                        </tr>
                        <tr>
                            <td>Pynkan Kartika Putri</td>
                        </tr>
                        <tr>
                            <td>Fariha Raihatunnisa</td>
                        </tr>

                        <tr>
                            <td rowspan="14" class="sections">Food Court</td>
                            <td>Annisa Silvi Kusumastuti, M.H.</td>
                        </tr>
                        <tr>
                            <td>Hutlul Azalia Zaen</td>
                        </tr>
                        <tr>
                            <td>Ayskha Dwi Kustantini</td>
                        </tr>
                        <tr>
                            <td>Nurul A’la</td>
                        </tr>
                        <tr>
                            <td>Zahwa Annisa</td>
                        </tr>
                        <tr>
                            <td>Septiani Angelina</td>
                        </tr>
                        <tr>
                            <td>Zalfarani Abdillah</td>
                        </tr>
                        <tr>
                            <td>Calisa Dhea</td>
                        </tr>
                        <tr>
                            <td>Zakiyah Nur Darojah</td>
                        </tr>
                        <tr>
                            <td>Nashwa Aliya</td>
                        </tr>
                        <tr>
                            <td>Fatihariza Atulina Putri Ihsana Azzahra</td>
                        </tr>
                        <tr>
                            <td>Aprillia Putri Rohmadiana</td>
                        </tr>
                        <tr>
                            <td>Tarishah Oktavia</td>
                        </tr>
                        <tr>
                            <td>Arifah Ulya</td>
                        </tr>

                        <tr>
                            <td rowspan="13" class="sections">Kebersihan</td>
                            <td>Zakila Rahmadini Putri</td>
                        </tr>
                        <tr>
                            <td>Kamila Sutanti</td>
                        </tr>
                        <tr>
                            <td>Arum Sari</td>
                        </tr>
                        <tr>
                            <td>Fuji Afriyuni</td>
                        </tr>
                        <tr>
                            <td>Fatan Dhikara</td>
                        </tr>
                        <tr>
                            <td>Azzahra Muharrani</td>
                        </tr>
                        <tr>
                            <td>Salsabila Shofiya</td>
                        </tr>
                        <tr>
                            <td>Annistuzzahro Toha</td>
                        </tr>
                        <tr>
                            <td>Ina Wafa Luthfiana</td>
                        </tr>
                        <tr>
                            <td>Saniyyah Sholeh</td>
                        </tr>
                        <tr>
                            <td>Mutianinsa Puastono</td>
                        </tr>
                        <tr>
                            <td>Hawa Wahyu</td>
                        </tr>
                        <tr>
                            <td>Azlin Muthia</td>
                        </tr>

                        <tr>
                            <td rowspan="12" class="sections">Kesehatan</td>
                            <td>Siti Nur Adila Yuli Saputri</td>
                        </tr>
                        <tr>
                            <td>Ayu Azmi</td>
                        </tr>
                        <tr>
                            <td>Nabihah Anadwi</td>
                        </tr>
                        <tr>
                            <td>Putri Sabrina</td>
                        </tr>
                        <tr>
                            <td>Nur Fadilah S</td>
                        </tr>
                        <tr>
                            <td>Uswatun Hasanah</td>
                        </tr>
                        <tr>
                            <td>Rana Rohadatul</td>
                        </tr>
                        <tr>
                            <td>Hikmah Nurjannah Warsyuwijono</td>
                        </tr>
                        <tr>
                            <td>Nurfitriah</td>
                        </tr>
                        <tr>
                            <td>Taskia Ruzainah Hamidah</td>
                        </tr>
                        <tr>
                            <td>Nadzira Eka</td>
                        </tr>
                        <tr>
                            <td>Siti Aminah</td>
                        </tr>

                        <tr>
                            <td rowspan="25" class="sections">Ummul Maktab</td>
                            <td>Zalfaa' Afaaf Zhoofiroh, M.Ag.</td>
                        </tr>
                        <tr>
                            <td>Nur Aulia Desuito Elok Mumpuni, S.Gz.</td>
                        </tr>
                        <tr>
                            <td>Zemzemiyeh</td>
                        </tr>
                        <tr>
                            <td>Melia Astinasyahfitri</td>
                        </tr>
                        <tr>
                            <td>Raudatul Rahmi</td>
                        </tr>
                        <tr>
                            <td>Ummi Aisyah</td>
                        </tr>
                        <tr>
                            <td>Atira Firdausi</td>
                        </tr>
                        <tr>
                            <td>Novi Fitriyana</td>
                        </tr>
                        <tr>
                            <td>Dini Satu Hari</td>
                        </tr>
                        <tr>
                            <td>Della Ramadhani</td>
                        </tr>
                        <tr>
                            <td>Iva Nurfatimah</td>
                        </tr>
                        <tr>
                            <td>Dwi Isma Inayah</td>
                        </tr>
                        <tr>
                            <td>Echa Berliana</td>
                        </tr>
                        <tr>
                            <td>Nafidzah Ilma</td>
                        </tr>
                        <tr>
                            <td>Hidayhatun Najah</td>
                        </tr>
                        <tr>
                            <td>Luthfi Aliyya</td>
                        </tr>
                        <tr>
                            <td>Jihan Nabilah</td>
                        </tr>
                        <tr>
                            <td>Nida Fauziyyah</td>
                        </tr>
                        <tr>
                            <td>Latifah Dhiahana</td>
                        </tr>
                        <tr>
                            <td>Adya Rusmallilah</td>
                        </tr>
                        <tr>
                            <td>Khairunnisa</td>
                        </tr>
                        <tr>
                            <td>Ummi Salmah</td>
                        </tr>
                        <tr>
                            <td>Nur Rahma Hudaya</td>
                        </tr>
                        <tr>
                            <td>Anisa Siti Aminah</td>
                        </tr>
                        <tr>
                            <td>Violin Ladies</td>
                        </tr>
                        <tr>
                            <td rowspan="5" class="sections">Penanggung Jawab Fakultas Tarbiyah</td>
                            <td>Mutiara Dewi, M.Pd.</td>
                        </tr>
                        <tr>
                            <td>Revi Dwi Anastasia</td>
                        </tr>
                        <tr>
                            <td>Siti Jami’atur</td>
                        </tr>
                        <tr>
                            <td>Fadhillah Ramadhani</td>
                        </tr>
                        <tr>
                            <td>Winda Roini, M.Ag.</td>
                        </tr>

                        <tr>
                            <td rowspan="3" class="sections">Penanggung Jawab Fakultas Ushuluddin</td>
                            <td>Arina Latifatu</td>
                        </tr>
                        <tr>
                            <td>Hanifah Az-zahra</td>
                        </tr>
                        <tr>
                            <td>Nandika Naswya</td>
                        </tr>

                        <tr>
                            <td rowspan="5" class="sections">Penanggung Jawab Fakultas Humaniora</td>
                            <td>Afni Regita Cahyani Muis, S.IP., M.A.</td>
                        </tr>
                        <tr>
                            <td>Kharisma Dira</td>
                        </tr>
                        <tr>
                            <td>Fatma Diyah</td>
                        </tr>
                        <tr>
                            <td>Halimatussa’diyah Salamah</td>
                        </tr>
                        <tr>
                            <td>Galih Asia, M.E.</td>
                        </tr>

                        <tr>
                            <td rowspan="3" class="sections">Penanggung Jawab Fakultas Ekonomi Manajemen</td>
                            <td>Nopi Damayanti</td>
                        </tr>
                        <tr>
                            <td>Mayla Sarah</td>
                        </tr>
                        <tr>
                            <td>Pingky Awalya</td>
                        </tr>

                        <tr>
                            <td rowspan="4" class="sections">Penanggung Jawab Fakultas Syariah</td>
                            <td>Aulia Maulida Musthofah, B.A., M.H.</td>
                        </tr>
                        <tr>
                            <td>Kayla Aulia Mursyid</td>
                        </tr>
                        <tr>
                            <td>Imelia Larasati</td>
                        </tr>
                        <tr>
                            <td>Asyiyoh Azkya</td>
                        </tr>

                        <tr>
                            <td rowspan="4" class="sections">Penanggung Jawab Fakultas Sains & Teknologi</td>
                            <td>Siti Azizah Ardiningtyas, S.P., M.Si.</td>
                        </tr>
                        <tr>
                            <td>Amisha Hersavina</td>
                        </tr>
                        <tr>
                            <td>Mar’ah Rofidah</td>
                        </tr>
                        <tr>
                            <td>Nada Lahfah</td>
                        </tr>

                        <tr>
                            <td rowspan="4" class="sections">Penanggung Jawab Fakultas Ilmu Kesehatan</td>
                            <td>Mahmud Carica Dewi, S.Farm., M.Pharm</td>
                        </tr>
                        <tr>
                            <td>Zakhaffira Mujahidah</td>
                        </tr>
                        <tr>
                            <td>Lintang Auni</td>
                        </tr>
                        <tr>
                            <td>Attala Raniya</td>
                        </tr>
                    </table>
                </div>
            </div>

        </section>
        {{-- end section 2 --}}
    </div>
@endsection
