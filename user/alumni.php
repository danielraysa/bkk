<h2 class="art-postheader">FORM PENDATAAN ALUMNI</h2><br><br>


<?php

if( isset($_POST['submit'])) {

$nama  = $_POST['nama'];
$tinggi  = $_POST['tinggi'];
$berat  = $_POST['berat'];
$ortu  = $_POST['ortu'];
$penyakit  = $_POST['penyakit'];
$jurusan  = $_POST['jurusan'];
$tahun  = $_POST['tahun'];
$hp  = $_POST['hp'];
$cita  = $_POST['cita'];
$status  = $_POST['status'];


	if($nama!='' and $tinggi!='' and $berat!='' and $ortu!='' and $penyakit!='' and $jurusan!='' and $tahun!='' and $cita!='' and $status!='' and $hp!='') {
		$q = "INSERT INTO alumni VALUES (null, '$nama', '$tinggi', '$berat', '$ortu', '$penyakit', '$jurusan', '$tahun', '$hp', '$cita', '$status')";
		$r = mysql_query($q) or die ('HARAP DIULANGI');
			if($r) {
				$konfirmasi = 'PENDATAAN SUKSES !';
				unset($_POST['submit']);
			}
			else {
				$konfirmasi = 'PENDAFTARAN GAGAL !';
			}
	} else $konfirmasi = "MOHON DIISI LENGKAP !";
	
echo '<center><h2><b>'.$konfirmasi.'</b></h2></center><br>';

} else {
?>
<form method='POST' name='myform' onSubmit="return submitForm('<?=$_SERVER['PHP_SELF'];?>')">
	<table>
		<tr><td>NAMA</td><td><input type='text' name='nama'></td></tr>
		<tr>
			<td>TINGGI BADAN</td>
			<td><select name="tinggi">
				<option selected='selected' value=''>SILAHKAN PILIH</option>
				
				<option value="199">199</option>
						<option value="198">198</option>
						<option value="197">197</option>
						<option value="196">196</option>
						<option value="195">195</option>
						<option value="194">194</option>
						<option value="193">193</option>
						<option value="192">192</option>
						<option value="191">191</option>
						<option value="190">190</option>
						<option value="189">189</option>
						<option value="188">188</option>
						<option value="187">187</option>
						<option value="186">186</option>
						<option value="185">185</option>
						<option value="184">184</option>
						<option value="183">183</option>
						<option value="182">182</option>
						<option value="181">181</option>
						<option value="180">180</option>
						<option value="179">179</option>
						<option value="178">178</option>
						<option value="177">177</option>
						<option value="176">176</option>
						<option value="175">175</option>
						<option value="174">174</option>
						<option value="173">173</option>
						<option value="172">172</option>
						<option value="171">171</option>
						<option value="170">170</option>
						<option value="169">169</option>
						<option value="168">168</option>
						<option value="167">167</option>
						<option value="166">166</option>
						<option value="165">165</option>
						<option value="164">164</option>
						<option value="163">163</option>
						<option value="162">162</option>
						<option value="161">161</option>
						<option value="160">160</option>
						<option value="159">159</option>
						<option value="158">158</option>
						<option value="157">157</option>
						<option value="156">156</option>
						<option value="155">155</option>
						<option value="154">154</option>
						<option value="153">153</option>
						<option value="152">152</option>
						<option value="151">151</option>
						<option value="150">150</option>
						<option value="149">149</option>
						<option value="148">148</option>
						<option value="147">147</option>
						<option value="146">146</option>
						<option value="145">145</option>
						<option value="144">144</option>
						<option value="143">143</option>
						<option value="142">142</option>
						<option value="141">141</option>
						<option value="140">140</option>
						<option value="139">139</option>
						<option value="138">138</option>
						<option value="137">137</option>
						<option value="136">136</option>
						<option value="135">135</option>
						<option value="134">134</option>
						<option value="133">133</option>
						<option value="132">132</option>
						<option value="131">131</option>
						<option value="130">130</option>
						<option value="129">129</option>
						<option value="128">128</option>
						<option value="127">127</option>
						<option value="126">126</option>
						<option value="125">125</option>
						<option value="124">124</option>
						<option value="123">123</option>
						<option value="122">122</option>
						<option value="121">121</option>
						<option value="120">120</option>
				
			</select></td>
		</tr>
			<td>BERAT BADAN</td>
			<td><select name="berat">
				<option selected='selected' value=''>SILAHKAN PILIH</option>
				<option value="99">99</option>
						<option value="98">98</option>
						<option value="97">97</option>
						<option value="96">96</option>
						<option value="95">95</option>
						<option value="94">94</option>
						<option value="93">93</option>
						<option value="92">92</option>
						<option value="91">91</option>
						<option value="90">90</option>
						<option value="89">89</option>
						<option value="88">88</option>
						<option value="87">87</option>
						<option value="86">86</option>
						<option value="85">85</option>
						<option value="84">84</option>
						<option value="83">83</option>
						<option value="82">82</option>
						<option value="81">81</option>
						<option value="80">80</option>
						<option value="79">79</option>
						<option value="78">78</option>
						<option value="77">77</option>
						<option value="76">76</option>
						<option value="75">75</option>
						<option value="74">74</option>
						<option value="73">73</option>
						<option value="72">72</option>
						<option value="71">71</option>
						<option value="70">70</option>
						<option value="69">69</option>
						<option value="68">68</option>
						<option value="67">67</option>
						<option value="66">66</option>
						<option value="65">65</option>
						<option value="64">64</option>
						<option value="63">63</option>
						<option value="62">62</option>
						<option value="61">61</option>
						<option value="60">60</option>
						<option value="59">59</option>
						<option value="58">58</option>
						<option value="57">57</option>
						<option value="56">56</option>
						<option value="55">55</option>
						<option value="54">54</option>
						<option value="53">53</option>
						<option value="52">52</option>
						<option value="51">51</option>
						<option value="50">50</option>
						<option value="49">49</option>
						<option value="48">48</option>
						<option value="47">47</option>
						<option value="46">46</option>
						<option value="45">45</option>
						<option value="44">44</option>
						<option value="43">43</option>
						<option value="42">42</option>
						<option value="41">41</option>
						<option value="40">40</option>
						<option value="39">39</option>
						<option value="38">38</option>
						<option value="37">37</option>
						<option value="36">36</option>
						<option value="35">35</option>
						<option value="34">34</option>
						<option value="33">33</option>
						<option value="32">32</option>
						<option value="31">31</option>
						<option value="30">30</option>
						<option value="29">29</option>
						<option value="28">28</option>
						<option value="27">27</option>
						<option value="26">26</option>
						<option value="25">25</option>
						<option value="24">24</option>
						<option value="23">23</option>
						<option value="22">22</option>
						<option value="21">21</option>
						<option value="20">20</option>
							</select></td>
		</tr>
						
		<tr><td>PEKERJAAN ORANG TUA</td><td><input type='text' name='ortu'></td></tr>
		<tr><td>RIWAYAT PENYAKIT</td><td><input type='text' name='penyakit' size=50></td></tr>
		<tr><td>JURUSAN</td><td><input type='text' name='jurusan'></td></tr>
		<tr>
			<td>LULUS TAHUN</td>
			<td><select name="tahun">
				<option selected='selected' value=''>SILAHKAN PILIH</option>
					<option value='2015'>2015</option>
					<option value='2014'>2014</option>	
					<option value='2013'>2013</option>
						<option value='2012'>2012</option>
						<option value='2011'>2011</option>
						<option value="2010">2010</option>
						<option value="2009">2009</option>
						<option value="2008">2008</option>
						<option value="2007">2007</option>
						<option value="2006">2006</option>
						<option value="2005">2005</option>
						<option value="2004">2004</option>
						<option value="2003">2003</option>
						<option value="2002">2002</option>
						<option value="2001">2001</option>
						<option value="2000">2000</option>
						<option value="1999">1999</option>
						<option value="1998">1998</option>
						<option value="1997">1997</option>
						<option value="1996">1996</option>
						<option value="1995">1995</option>
						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
						<option value="1989">1989</option>
						<option value="1988">1988</option>
						<option value="1987">1987</option>
						<option value="1986">1986</option>
						<option value="1985">1985</option>
						<option value="1984">1984</option>
						<option value="1983">1983</option>
						<option value="1982">1982</option>
						<option value="1981">1981</option>
						<option value="1980">1980</option>
						<option value="1979">1979</option>
						<option value="1978">1978</option>
						<option value="1977">1977</option>
						<option value="1976">1976</option>
						<option value="1975">1975</option>
						<option value="1974">1974</option>
						<option value="1973">1973</option>
						<option value="1972">1972</option>
						<option value="1971">1971</option>
						<option value="1970">1970</option>
						<option value="1969">1969</option>
						<option value="1968">1968</option>
						<option value="1967">1967</option>
						<option value="1966">1966</option>
						<option value="1965">1965</option>
						<option value="1964">1964</option>
						<option value="1963">1963</option>
						<option value="1962">1962</option>
						<option value="1961">1961</option>
						<option value="1960">1960</option>
						<option value="1959">1959</option>
						<option value="1958">1958</option>
						<option value="1957">1957</option>
						<option value="1956">1956</option>
						<option value="1955">1955</option>
						<option value="1954">1954</option>
						<option value="1953">1953</option>
						<option value="1952">1952</option>
						<option value="1951">1951</option>
						<option value="1950">1950</option>
						<option value="1949">1949</option>
						<option value="1948">1948</option>
						<option value="1947">1947</option>
						<option value="1946">1946</option>
						<option value="1945">1945</option>
						<option value="1944">1944</option>
						<option value="1943">1943</option>
						<option value="1942">1942</option>
						<option value="1941">1941</option>
						<option value="1940">1940</option>
						<option value="1939">1939</option>
						<option value="1938">1938</option>
						<option value="1937">1937</option>
						<option value="1936">1936</option>
						<option value="1935">1935</option>
						<option value="1934">1934</option>
						<option value="1933">1933</option>
						<option value="1932">1932</option>
						<option value="1931">1931</option>
						<option value="1930">1930</option>
						<option value="1929">1929</option>
						<option value="1928">1928</option>
						<option value="1927">1927</option>
						<option value="1926">1926</option>
						<option value="1925">1925</option>
						<option value="1924">1924</option>
						<option value="1923">1923</option>
						<option value="1922">1922</option>
						<option value="1921">1921</option>
						<option value="1920">1920</option>
						<option value="1919">1919</option>
						<option value="1918">1918</option>
						<option value="1917">1917</option>
						<option value="1916">1916</option>
						<option value="1915">1915</option>
						<option value="1914">1914</option>
						<option value="1913">1913</option>
						<option value="1912">1912</option>
						<option value="1911">1911</option>
						<option value="1910">1910</option>
						<option value="1909">1909</option>
						<option value="1908">1908</option>
						<option value="1907">1907</option>
						<option value="1906">1906</option>
						<option value="1905">1905</option>
						<option value="1904">1904</option>
						<option value="1903">1903</option>
						<option value="1902">1902</option>
						<option value="1901">1901</option>
						<option value="1900">1900</option> 
				
			</select></td>
		</tr>
		<tr><td>No HP/Telp</td><td><input type='text' name='hp' size=12></td></tr>
		<tr>
			<td>CITA - CITA</td>
			<td><select name="cita">
				<option selected='selected' value=''>SILAHKAN PILIH</option>
				
				<option value='Kuliah'>KULIAH</option>
				<option value='Wirausaha'>WIRAUSAHA</option>
				<option value='Bekerja'>BEKERJA</option>

				
			</select></td>
		</tr>
		<tr>
			<td>STATUS SETELAH LULUS</td>
			<td><select name="status">
				<option selected='selected' value=''>SILAHKAN PILIH</option>
				
				<option value='Kuliah'>KULIAH</option>
				<option value='Wirausaha'>WIRAUSAHA</option>
				<option value='Bekerja'>BEKERJA</option>
				<option value='Belum bekerja'>BELUM BEKERJA</option>
			</select></td>
		</tr>
		 <tr> 
            <td colspan="2"> <div align="center"> 
                <p> 
                  <input type=submit value=DAFTAR name='submit'>
                </p>
              </div></td>
         </tr>
	</table>
</form>
<?php } ?>